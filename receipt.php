<?php
session_start();
include 'tools.php';
receiptInit();
?>
<?php include("top.inc") ?>
        <title>Receipt</title>
<?php include("middle.inc") ?>
        <section>
            <div class="contactContainer">
                <div id="contactDetails">
                    <h1>Contact Details</h1>
                    <div>The Eternal Flame</div>
                    <div>Phone: 04 5060 0496</div>
                    <div>Address: 23 Sproat Street Portarlington Vic 3223</div>
                    <div>Email: s3672747@student.rmit.edu.au</div>
                    <hr/>
                    <h1>Booking Information</h1>
                    <div>Accomodation Type: <?php
                        if (isset($_SESSION['booking']["aid"])) {
                            echo $aid[$_SESSION['booking']["aid"]]["type"];
                        }
                        ?>
                    </div>
                    <div>Arrival Date: <?php
                        if (isset($_SESSION['booking']["date"])) {
                            echo $_SESSION['booking']["date"];
                        }
                        ?>
                    </div>
                    <div>Number of Days: <?php
                        if (isset($_SESSION['booking']["days"])) {
                            echo $_SESSION['booking']["days"];
                        }
                        ?>
                    </div>
                    <div>Number of Adults: <?php
                        if (isset($_SESSION['booking']["adults"])) {
                            echo $_SESSION['booking']["adults"];
                        }
                        ?>
                    </div>
                    <div>Number of Children: <?php
                        if (isset($_SESSION['booking']["children"])) {
                            echo $_SESSION['booking']["children"];
                        }
                        ?>
                    </div>
                    <div>Total Price: <?php
                        if (isset($_SESSION['booking']["aid"])) {
                            echo bookingTotal();}?>
                    </div>
                    <div>Includes GST: <?php
                        if (isset($_SESSION['booking']["aid"])) {
                            echo bookingGST();}
                        ?>
                    </div>
                </div>
                <hr/>

            </div>
        </section>
        <section>
            <div class="contactContainer">
                <div id="contactDetails">
                    <h1>Customer Information</h1>
                    Name:
                    <?php
                    echo $_POST["name"]
                    ?>
                </div>
                <div >
                    Email: 
                    <?php
                    echo $_POST["email"]
                    ?>
                </div>
                <div >
                    Phone: 
                    <?php
                    echo $_POST["phone"]
                    ?>
                </div>
                <br/>
                <br/>
                <br/>

            </div>

        </section>

<?php include("bottom.inc") ?>