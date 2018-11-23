<?php
    session_start();
?>

<?php include("top.inc") ?>
        <title>Rate</title>
<?php include("middle.inc") ?>

        <section class="rate">
            <div id="page-wrap">

                <h1>Price Table</h1>


                <table>
                    <thead>
                        <tr>
                            <th>Type</th>
                            <th style="display: none">AID</th>
                            <th>Per night</th>
                            <th>Extra Adult</th>
                            <th>Extra Child</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Unpowered Small Camping Sites</td>
                            <td>US</td>
                            <td>$35.25</td>
                            <td>$10.00</td>
                            <td>$5.00</td>

                        </tr>

                        <tr>
                            <td>Unpowered Medium Camping Sites</td>
                            <td>UM</td>
                            <td>$40.50</td>
                            <td>$10.00</td>
                            <td>$5.00</td>

                        </tr>

                        <tr>
                            <td>Powered Small Camping Sites</td>
                            <td>PS</td>
                            <td>$50.25</td>
                            <td>$10.00</td>
                            <td>$5.00</td>

                        </tr>

                        <tr>
                            <td>Powered Medium Camping Sites</td>
                            <td>PM</td>
                            <td>$60.50</td>
                            <td>$10.00</td>
                            <td>$5.00</td>

                        </tr>

                        <tr>
                            <td>Caravan Sites</td>
                            <td>C</td>
                            <td>$100</td>
                            <td>Free</td>
                            <td>Free</td>

                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
        <p class="note"> <strong>Note</strong>:The per night rate includes 2 adults or 1 adult + 1 child and the final price exclude GST
        </p>
    </section>

<?php include("bottom.inc") ?>