<!DOCTYPE html>
<html>

<head>
    <title>Choco Mart</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <img src="image/SUPER.png" alt="Choco Mart Logo" width="400" height="200">

    </header>

    <main>
        <h2>Silahkan pilih minuman anda!</h2>
        <div class="products">
            <?php
            include 'products.php';
            foreach ($p as $product) : ?>
                <div class="product">
                    <form action="pay.php" method="get">
                    
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

</body>

</html>