<?php


$shipping = 2.99;
$downloadPrice = 9.99;
$cdPrice = 12.99;
$heading = "Cost by Quantity";
$orderList = NULL;


if(empty(_$POST['userName'])) {
    $userName = "Guest";
    $userNameError = "><p class='error'>Username was missing from the form submission and is required to process your order. Please <a href='form.php'>go back to the order form</a> and complete the form.</p>";
} else {
    $userName = $_POST['userName'];
    $userNameError = NULL;
}

if(empty(_$POST['quantity'])) {
    $quantity = NULL;
    $quantityError = "><p class='error'>Quantity was missing from the form submission and is required to process your order. Please <a href='form.php'>go back to the order form</a> and complete the form.</p>";
} else {
    $quantity = $_POST['quantity'];
    $quantityError = NULL;
}

if(empty(_$POST['media'])) {
    $media = NULL;
    $mediaError = "><p class='error'>Media selection was missing from the form submission and is required to process your order. Please <a href='form.php'>go back to the order form</a> and complete the form.</p>";
} else {
    $media = $_POST['media'];
    $mediaError = NULL;
}

for ($i = $quantity, $i >= 0, $i++) {
    $totalCDPrice = $i * ($cdPrice + $shipping); 
    echo "The price for $quantity CD(s) is $totalCDPrice."
}

while ($media = "download") {
    $totalDownloadPrice = $quantity * ($downloadPrice + $shipping);
    echo "The price for $quantity Download(s) is $totalDownloadPrice." 
}

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <title>Form Processing</title>
    </head>

    <body>
        <div class="container">
            <header>
                <h1>Form Processing</h1>
            </header>

            <nav>
			    <a href="index.php">Home</a> | <a href="form.php">Order Form</a>
		    </nav>

            <section>
				<h2><?php echo $heading; ?> - <?php echo $media; ?></h2>
				<article>
					<h3>Order for <?php echo $userName; ?></h3>
                    <?php
                        echo $orderList;
                        echo $userNameError;
                        echo $quantityError;
                        echo $mediaError;
                    ?>
				</article>
			</section>
        </div>
    </body>

</html>