<?php

    function contactCheckName() {
        if (isset($_POST["name"]) && preg_match("/^[a-z,A-Z, ,\-,',.]+$/", $_POST["name"]) || !isset($_POST["name"])) {
            return true;
        }
        return false;
    }

    function contactCheckPhone() {
        if (isset($_POST["phone"]) && preg_match("/^04 [0-9]{4} [0-9]{4}$/", $_POST["phone"]) || !isset($_POST["phone"])) {
            return true;
        }
        return false;
    }

    function contactCheckEmail() {
        if (isset($_POST["email"]) && preg_match("/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/", $_POST["email"]) || !isset($_POST["email"])) {
            return true;
        }
        return false;
    }

    function contactInit() {
        if (contactCheckName() && contactCheckPhone() && contactCheckEmail() && isset($_POST["name"])) {
            $_SESSION['cp-message'] = '<div id="cp-message">Your message has been received.';
            if ($_POST["mailing"] == "true") {
                $msg = $_POST["name"] . "\t" . $_POST["phone"] . "\t" . $_POST["email"] . "\t" . $_POST["message"] . "\t" . $_POST["mailing"] . "\t" . $_POST["remember"];
                file_put_contents('mailing.txt', $msg . PHP_EOL, FILE_APPEND | LOCK_EX);
                $_SESSION['cp-message'] .= "You are now on our mailing list.";
            }
            $_SESSION['cp-message'] .= "</div>";
            header('Location: index.php');
            exit();
        } else {

        }
    }

    function printCPMessage() {
        if (isset($_SESSION['cp-message'])) {
            echo $_SESSION['cp-message'];
            unset($_SESSION['cp-message']);
        }
    }

    function bookingInit() {
        if (isset($_POST) && isset($_POST["aid"]) && isset($_POST["date"]) && isset($_POST["days"]) && isset($_POST["adults"]) && isset($_POST["children"])) {
            $_SESSION['booking'] = array(
                "aid" => $_POST["aid"],
                "date" => $_POST["date"],
                "days" => $_POST["days"],
                "adults" => $_POST["adults"],
                "children" => $_POST["children"],
            );
    //    header('Location: booking.php');
    //    exit();
        } else {
            header('Location: accomodation.php');
            exit();
        }
    }

    function bookingPrice() {
        $aid = [
            "US" => [
                "unit" => 35.25,
                "type" => "Unpowered small camping"
            ],
            "UM" => [
                "unit" => 40.50,
                "type" => "Unpowered medium camping"
            ],
            "PS" => [
                "unit" => 50.25,
                "type" => "Powered small camping"
            ],
            "PM" => [
                "unit" => 60.25,
                "type" => "Powered medium camping"
            ],
            "C" => [
                "unit" => 100,
                "type" => "Caravan camping"
            ],
        ];
        $days = $_SESSION["booking"]["days"];
        $adults = $_SESSION["booking"]["adults"];
        $children = $_SESSION["booking"]["children"];
        $fee = $aid[$_SESSION["booking"]["aid"]]["unit"];
        if ($_SESSION["booking"]["aid"] == "C") {
            $price = $days * $fee;
        } else {


            if ($adults + $children <= 2) {
                $price = $fee * $days;
            } else {
                if ($adults >= 2)
                    $price = $days * ($fee + ($adults - 2) * 10 + ($children) * 5);
                else
                    $price = $days * ($fee + ($adults - 1) * 10 + ($children - 1) * 5);
            }
        }
        return round($price, 2);
    }

    function bookingTotal(){
        return round(bookingPrice()+bookingGST());

    }
    function bookingGST() {
        return round(bookingPrice()*10/100, 2);
    }

    function receiptCheckName() {
        if (isset($_POST["name"]) && preg_match("/^[a-z,A-Z, ,\-,',.]+$/", $_POST["name"])) {
            return true;
        }
        return false;
    }

    function receiptCheckPhone() {
        if (isset($_POST["phone"]) && preg_match("/^04 [0-9]{4} [0-9]{4}$/", $_POST["phone"])) {
            return true;
        }
        return false;
    }

    function receiptCheckMail() {
        if (isset($_POST["email"]) && preg_match("/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/", $_POST["email"])) {
            return true;
        }
        return false;
    }

    function receiptInit() {
        $aid = [
            "US" => [
                "unit" => 35.25,
                "type" => "Unpowered small camping"
            ],
            "UM" => [
                "unit" => 40.50,
                "type" => "Unpowered medium camping"
            ],
            "PS" => [
                "unit" => 50.25,
                "type" => "Powered small camping"
            ],
            "PM" => [
                "unit" => 60.25,
                "type" => "Powered medium camping"
            ],
            "C" => [
                "unit" => 100,
                "type" => "Caravan camping"
            ],
        ];
        if (isset($_SESSION["booking"]) && receiptCheckName() && receiptCheckPhone() && receiptCheckMail()) {
            $msg = $_POST["name"] . "\t" . $_POST["phone"] . "\t" . $_POST["email"] . "\t" . $aid[$_SESSION["booking"]["aid"]]["type"] . "\t" . $_SESSION["booking"]["date"] . "\t" . $_SESSION["booking"]["days"] . "\t" . $_SESSION["booking"]["adults"] . "\t" . $_SESSION["booking"]["children"];
            file_put_contents('bookings.txt', $msg . PHP_EOL, FILE_APPEND | LOCK_EX);
        } else {
            header('Location: booking.php');
            exit();
        }
    }
    ?>