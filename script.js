
var tmpid = "";
var fee = 0;
function reply_click(obj) {
    if (tmpid != "") {
        document.getElementById(tmpid).classList.remove("active");
    }
    if (tmpid != obj.id) {
        obj.classList.add("active");
        tmpid = obj.id;
    } else {
        tmpid = "";
    }
    document.getElementById("aid").value = tmpid;
    calculator();

}

function validDate() {
    var UserDate = document.getElementById("date").value;
    var ToDate = new Date();

    if (new Date(UserDate).getTime() <= ToDate.getTime()) {
        alert("The Date must be Bigger or Equal to today date");
        return false;
    }
    return true;
}

function calculator() {
    var days = parseInt(document.getElementById("days").value);
    var adults = parseInt(document.getElementById("adults").value);
    var price;
    var children = parseInt(document.getElementById("children").value);
    if (tmpid === "C") {
        fee = 100;
        price = days * fee;
    } else {
        if (tmpid === "US") {
            fee = 32.25;
        } else if (tmpid === "UM")
            fee = 40.50;
        else if (tmpid === "PS")
            fee = 50.25;
        else if (tmpid === "PM")
            fee = 60.5;

        if (adults + children <= 2) {
            price = fee * days;
        } else {
            if (adults >= 2)
                price = days * (fee + (adults - 2) * 10 + (children) * 5);
            else
                price = days * (fee + (adults - 1) * 10 + (children - 1) * 5);
        }
    }
    var gst = price * 10/100;
    var total = price + gst;
    document.getElementById('gst').innerHTML = gst.toFixed(2);
    document.getElementById('totals').innerHTML = total.toFixed(2);
    document.getElementById("aid").value = tmpid;
}


function submitBooking() {
    var run = true;
    if (!validDate()) {
        run = false;
    }
    if (fee == 0) {
        run = false;
        alert("Accomodation type must be selected");
    }
    if (run) {
        document.getElementById("real-submit").click();
    }
}

function contactRememberMe() {
    if (document.getElementById('remember').checked) {
        contactWriteLocalStorage();
    } else {
        localStorage.clear();
    }
}
function contactWriteLocalStorage() {
    if (typeof (Storage) !== "undefined") {
        localStorage.setItem("email", document.getElementById("email").value);
        localStorage.setItem("name", document.getElementById("name").value);
        localStorage.setItem("phone", document.getElementById("phone").value);
        localStorage.setItem("rem", true);
        localStorage.setItem("mailing", document.getElementById("mailing").value);
        localStorage.setItem("message", document.getElementById("message").value);
    }
}
function contactOnload() {
    if (typeof (Storage) !== "undefined") {
        if (localStorage.getItem("rem")) {
            document.getElementById("email").value = localStorage.getItem("email");
            document.getElementById("name").value = localStorage.getItem("name");
            document.getElementById("phone").value = localStorage.getItem("phone");
            document.getElementById("message").value = localStorage.getItem("message");
            if (localStorage.getItem("mailing") == "true") {
                document.getElementById("mailing").checked = true;
            }
            if (localStorage.getItem("rem") == "true") {
                document.getElementById("remember").checked = true;
            }
        }
    }
}
function contactOnDetaiChange() {
    console.log("changing");
    if (document.getElementById('remember').checked) {
        contactWriteLocalStorage();
    }
}
 function accomodation() {
                window.location.href = "accomodation.php";
}
function onBooking() {
        if (typeof (Storage) !== "undefined") {
            if (localStorage.getItem("rem")) {
                console.log(document.getElementById("email").value);
                document.getElementById("email").value = localStorage.getItem("email");
                document.getElementById("name").value = localStorage.getItem("name");
                document.getElementById("phone").value = localStorage.getItem("phone");
            }
        }
    }