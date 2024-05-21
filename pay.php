<?php
$name = $_GET['name'];
$price = $_GET['price'];

if (isset($_POST['pay'])) {
    $money = $_POST['money'];
    if ($money >= $price) {
        $change = $money - $price;
        echo "<h1>Terimakasih telah membeli $name!</h1>";
        echo "<p>Your change is $change.</p>";
    } else {
        echo "<h1>Maaf, uang anda kurang.</h1>";
        echo "<p>Silakan masukkan uang yang lebih.</p>";
    }
} else {
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Pay</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <h1>Pembayaran untuk<?php echo $name; ?></h1>
        <h2>Silahkan masukkan uang anda:</h2>
        <form method="post" action="">
            <input type="number" name="money" required>
            <input type="submit" name="pay" value="Pay">
        </form>
    </body>
    <style>
        h1 {
            text-align: center;
            margin-top: 5p;
        }
    </style>

    </html>

<?php
}
?>