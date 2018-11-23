<?php
// Start the session
session_start();
unset($_SESSION['booking']);
?>
<?php include("top.inc") ?>
        <title>Accommodation</title>
<?php include("middle.inc") ?>

        <section class="listview">
            <div id="boxes">
                <h1>The Eternal Flame</h1>
                <div class="containerlistview">
                    <ul >
                        <li class="box"  >
                            <button id = "US" onClick="reply_click(this)" class="box">
                                <img src="images/camping%20icon.png">
                                <p>Unpowered Small Camping Sites 35.25$/night </p>
                            </button>
                        </li>
                        <li class="box" >
                            <button id="UM" onClick="reply_click(this)" class="box">
                                <img src="images/camping-outdoor-camp-travel-tent-fire-3bc97b541a13ef40-512x512.png">
                                <p>Unpowered  Medium Camping Sites 40.50$/night </p>
                            </button>
                        </li>
                        <li class="box" >
                            <button id="PS" onClick="reply_click(this)" class="box">
                                <img src="images/sleep.png">
                                <p>Powered Small Camping Sites 50.25$/night </p>
                            </button>
                        </li>
                        <li class="box" >
                            <button class="box" id="PM" onClick="reply_click(this)">
                                <img src="images/woodenhouse.jpg">
                                <p>Powered Medium Camping Sites 60.50$/night </p>
                            </button>
                        </li>
                        <li class="box">
                            <button id = "C" onClick="reply_click(this)" class="box">
                                <img src="images/caravan.png">
                                <p>Caravan Sites 100$/night </p>
                            </button>
                        </li>
                        <li>
                            <div id="calculation">
                                <h2> Estimate Fee Calculator</h2>
                                <!--<form action='https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=accommodation' method="post" onchange="calculator()">-->
                                <form action="booking.php" method="post" onchange="calculator()">
                                    <!--<form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=accommodation" method="post" onchange="calculator()">-->
                                    <input style="display:none" type="hidden" name="aid" id="aid" >
                                    <label for="date">Arrival Date</label>
                                    <input type="date" name="date" id="date" value="" required >
                                    <label for="days">How long are you going to stay?</label>
                                    <input type="number" value="1" name="days" id="days"  required max="14" min="1" placeholder="At least 1 day and at much 14 days" r>
                                    <label for="adults">How many adults are there on your trip?</label>
                                    <input type="number" value="1" name="adults" id="adults"  min="1" max="10" required>
                                    <label for="children">How many children are going there with you?</label>
                                    <input value="0" type="number" name="children" id="children" max="10" min ="0"  required>

                                    <p for ="totals">Total Price (USD): <span id="totals"></span>$</p>

                                    <p for ="gst">Include GST (USD): <span id="gst"></span>$</p>

                                    <br>
                                    <br>
                                    <button type="button" style="float:right" id="fake-submit" onclick="submitBooking()">Submit</button>
                                    <div style="display: none">
                                        <input id="real-submit" type="submit" value ="Submit">
                                    </div>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
            <p class="note"> <strong>Note</strong>:The per night rate includes 2 adults or 1 adult + 1 child and the final price includes GST already
            </p>
        </section>



<?php include("bottom.inc") ?>