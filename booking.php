<?php
session_start();
include 'tools.php';
bookingInit();
?>

<?php include("top.inc") ?>
        <title>Accommodation</title>
<?php include("middle.inc") ?>
        <form method="post" action="receipt.php">
            <form method="post" action="receipt.php">

                <section class="listview">
                    <div id="boxes">
                        <h1>Your Booking Information</h1>
                        <div class="containerlistview">
                            <ul >
                                <li class="box"  >
                                    Accomodation Type:
                                    <?php
                                        if (isset($_SESSION['booking']["aid"])) {
                                            echo $aid[$_SESSION['booking']["aid"]]["type"];}?>
                                </li>
                                <li class="box" >
                                    Arrival Date: <?php
                                                    if (isset($_SESSION['booking']["date"])) {
                                                        echo $_SESSION['booking']["date"];}?>
                                </li>
                                <li class="box" >
                                    Number of Days: <?php
                                                    if (isset($_SESSION['booking']["days"])) {
                                                        echo $_SESSION['booking']["days"];}?>
                                </li>
                                <li class="box" >
                                    Number of Adults: <?php
                                    if (isset($_SESSION['booking']["adults"])) {
                                        echo $_SESSION['booking']["adults"];} ?>
                                </li>
                                <li class="box">
                                    Number of Children: <?php
                                    if (isset($_SESSION['booking']["children"])) {
                                        echo $_SESSION['booking']["children"];} ?>
                                </li>
                                <li>    Total Price: <?php
                                    if (isset($_SESSION['booking']["aid"])) {
                                        echo bookingTotal();} ?>
                                </li>
                                <li>Includes GST: <?php
                                    if (isset($_SESSION['booking']["aid"])) {
                                        echo bookingGST();} ?>
                                </li>
                            </ul>
                        </div>

                    </div>
                </section>
                <section class="listview">
                    <div id="boxes">
                        <h1 style="display: block; width: 100%; text-align: left">Your Booking Information</h1>
                        <div class="containerlistview">
                            <ul >
                                <li class="box">
                                    <label>Name</label>
                                    <input type="text" name="name" id="name"/>
                                </li>
                                <li class="box">
                                    <label>Email</label>
                                    <input type="text" name="email" id="email"/>
                                </li>
                                <li class="box">
                                    <label>Phone</label>
                                    <input type="text" name="phone" id="phone"/>
                                </li>
                                <li class="box">
                                    <input type="submit" value="Submit">
                                </li>
                            </ul>
                        </div>

                    </div>

                </section>
            </form>
            <script>onBooking();</script>
<?php include("bottom.inc") ?>