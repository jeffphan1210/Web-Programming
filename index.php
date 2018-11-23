<?php
// Start the session
session_start();
include 'tools.php';
?>
<?php include("top.inc") ?>
        <title>The Eternal Flame</title>
<?php include("middle.inc") ?>
        <section class="indexcontainer">
            <div id="show">
                <?php
                printCPMessage();
                ?>
                <div id="photo"><img src="img/a.jpg"></div>
                <div id="content">
                    <h3>Portarlington Eternal Flame</h3>

                    <p>Portalington holiday park is a must visit destination with just about everything anyone would want in a holiday.From everything from beaches with jet skis, original camping grounds or cabins with beds and showersTo the many physical activities, tennis, beach volleyball, golf and wind down with fantastic walking trails.
                    </p>
                </div>
            </div>
            <br>
            <div id="transport">
                <img src="img/transport.png">
            </div>
            <div id="map">
                <div id="mapleft">

                    <a href="https://www.distance.to/Melbourne/Portarlington"><img src="img/car.jpg" alt=""></a>
                    <a href="http://www.portphillipferries.com.au"><img src="img/ferry.jpg" alt=""></a>
                </div>
                <div id="mapright"><img src="images/2810ferrymap.jpg"></div>
            </div>

        </section>

<?php include("bottom.inc") ?>