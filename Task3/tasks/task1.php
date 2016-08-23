<!doctype html>
<html lang="en">
<?php
$title = 'Задание #1';
require_once '../../Task1/tasks/common/_head.php'
?>
<style>
    b{
        margin-right: 10px;
    }
    p{
        margin-bottom: 5px;
    }
</style>
<body>
<div class="container">
    <div class="row">
        <h1>Задание 1</h1>
    </div>

    <?php
    $xml = simplexml_load_file('files/xml/data.xml');
    order($xml);

    function order($xml){
        echo "<h4> Order number: " . $xml[PurchaseOrderNumber] . "</h4>";
        echo "<h4>  Order date: " . $xml[OrderDate] . "</h4>";
        echo "<hr>";

        foreach ($xml->Address as $adress) {
            echo "<p><b>Name:</b>" . $adress->Name . "</p>";
            echo "<p><b>Street:</b>" . $adress->Street . "</p>";
            echo "<p><b>City:</b>" . $adress->City . "</p>";
            echo "<p><b>State:</b>" . $adress->State . "</p>";
            echo "<p><b>Zip:</b>" . $adress->Zip . "</p>";
            echo "<p><b>Country:</b>" . $adress->Country . "</p>";
            echo "<hr>";
        }

        foreach ($xml->Items->Item as $item) {
            echo "<p><b>Part Number:</b>" . $item[PartNumber] . "</p>";
            echo "<p><b>Product name:</b>" . $item->ProductName . "</p>";
            echo "<p><b>Quantity:</b>" . $item->Quantity . "</p>";
            echo "<p><b>Price:</b>" . $item->USPrice . "USD</p>";
            echo "<p><b>Ship date:</b>" . $item->ShipDate . "</p>";
            echo "<hr>";
        }
    }

    ?>

</div>
</body>
</html>