<?php
// Start the session
session_start();
include 'tools.php';
contactInit();
?>

<?php include("top.inc") ?>
        <title>Contact</title>
        <link rel ="icon" href="funny.png"/>
<?php include("middle.inc") ?>

        <section>
            <div class="contactContainer">
                <div id="contactDetails">
                    <h1>Contact Details</h1>
                    <p>
                        Contact The Eternal Flame Management with any of your holiday or foreshore enquiries.<br/>
                        Eternal Flame<br/>
                        PO Box 43<br/>
                        23 Sproat Street<br/>
                        Portarlington Vic 3223<br/>
                        RECEPTION HOURS: 9am to 5pm every day<br/>
                        ADMIN OFFICE HOURS: 9am to 5pm Monday to Friday
                    </p>
                </div>

                <div id="contactImg">
                    <img src="images/call.jpg"><p style="float: left;"><br>0450600496<br><br> or <br><br>0416811386</p>
                    <br><br><br><br><br><br><br><br><br>
                    <img src="images/letter.png"><p style="float: left;">s3672747@student.rmit.edu.au<br><br> OR<br> <br> s3641991@student.rmit.edu</p>
                </div>

                <div id="contactForm">
                    <!--<form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=contact" method="post">-->
                    <form action="contact.php" method="post">
                        <br><br><br><br><br><br><br><br><br>
                        <label>Fullname</label>
                        <input id="name" name="name" onchange="contactOnDetaiChange()" type="text" pattern="^[a-z,A-Z, ,\-,',.]+$" required placeholder="Your name.."/>
                        <?php
                        if (!contactCheckName()) {
                            echo '<label class="err-message">Illegal characters detected!</label>';
                        }
                        ?>
                        <label>Email</label>
                        <input id="email" name="email" onchange="contactOnDetaiChange()" type="email" required placeholder="your email ..."/>
                        <?php
                        if (!contactCheckEmail()) {
                            echo '<label class="err-message">Illegal characters detected!</label>';
                        }
                        ?>
                        <label>Phone Number</label>
                        <input id="phone" name="phone" onchange="contactOnDetaiChange()" pattern="04 [0-9]{4} [0-9]{4}" type="text" required placeholder="Your phone number"/>
                        <?php
                        if (!contactCheckPhone()) {
                            echo '<label class="err-message">Illegal characters detected!</label>';
                        }
                        ?>

                        <label>Message</label>
                        <textarea type="text" id="message" name="message" onchange="contactOnDetaiChange()" placeholder="Leave your message here.." required></textarea>
                        <br>
                        <input type="checkbox" id="mailing" name="mailing" value="true" onchange="contactOnDetaiChange()"><span> Do you want to get notification from us about special discounts</span>
                        <br>
                        <input type="checkbox" id="remember" name="remember" value="true"  onclick="contactRememberMe()"><span> Remember me</span>
                        <br>
                        <br>
                        <input type="submit" value="Submit">
                    </form>
                </div>

            </div>
        </section>
        <script> contactOnload();</script>
<?php include("bottom.inc")?>