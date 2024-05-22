<?php
$name = $_GET['name'];
$price = $_GET['price'];
#modul 2 pengkondisian
if (isset($_POST['pay'])) {
    $money = $_POST['money'];
    if ($money >= $price) {
        $change = $money - $price;

        echo "<h1 style='text-align: center; font-family: Arial, sans-serif;'>Terimakasih telah membeli $name!</h1>";
        echo "<p style='text-align: center; font-family: Arial, sans-serif;'>Kembalian anda sebesar $change.</p>";
        echo "<a href='index.php' style='background-color: #FAB346;  color: white; display:block; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;  text-align: center;'>Kembali</a>";
    } else {
        echo "<h1 style='text-align: center;font-family: Arial, sans-serif;'>Maaf, uang anda kurang.</h1>";
        echo "<p style='text-align: center;font-family: Arial, sans-serif;'>Silakan masukkan uang yang lebih.</p>";
        echo "<a href='index.php' style='background-color: #FAB346; color: white; display: block; padding: 10px 20px; border: none; border-radius: 5px;cursor: pointer; font-size: 16px;  text-align: center;'>Kembali</a>";
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
        <h1 style='text-align: center; margin-top: 5px; color:black;'>Pembayaran untuk <?php echo $name; ?></h1>
        <h2 style="color: black;">Silahkan masukkan uang anda:</h2>
        <form style="width: 450px; margin: 0 auto; padding: 30px; border: 1px solid #ccc; border-radius: 5px; background-color: #f2f2f2;" method="post" action="">
            <input type="number" name="money" required style="padding: 10px 30px; font-size: 16px;">
            <input type="submit" name="pay" value="Bayar" style="background-color: #FAB346; margin-top: 5px; color: white; padding: 10px 20px;  border: none; border-radius:5px; cursor: pointer; font-size: 16px;">
            <button style="background-color: #FAB346; margin-top: 5px; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; " onclick="history.back()">Kembali</button>

        </form>
    </body>

    </html>

<?php
}
?>