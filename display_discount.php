<?php
    //lay du lieu
    $product_description = $_POST['product_description'];
    $list_price = $_POST['list_price'];
    $discount_percent = $_POST['discount_percent'];

    //tinh toan
    $discount = $list_price*$discount_percent* .01;
    $discount_price = $list_price - $discount;

    //dinh dang tien te do la và phan tram
    $list_price_formatted = "$".$list_price;
    $discount_percent_formatted = $discount_percent."%";
    

    //escape the unformatted input
    $product_description_escaped = htmlspecialchars($product_description);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>This page is under construction</h1>

        <label>Product Description:</label>
        <span><?php echo $product_description_escaped; ?></span><br>

        <label>List Price:</label>
        <span><?php echo $list_price_formatted; ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo $discount_percent_formatted; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $discount; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $discount_price; ?></span><br>
    </main>
</body>
</html>