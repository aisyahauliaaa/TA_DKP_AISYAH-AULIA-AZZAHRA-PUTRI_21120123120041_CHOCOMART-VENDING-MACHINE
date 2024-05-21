<?php
class Product
{
    public $name;
    public $price;
    public $image;

    function __construct($name, $price, $image)
    {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }
}

$product = [
    new Product('Tebs', 8000, 'tebss.png'),
    new Product('Ichitan', 9000, 'ichitann.png'),
    new Product('Le Minerale', 4000, 'leminerale.png'),
    new Product('Pocari Sweat', 6000, 'pocari sweat.png'),
    new Product('Teh Pucuk', 3000, 'teh pucuk.png'),
    new Product('Ultramilk', 5500, 'ultramilk.png'),
];

foreach ($product as $p) {
    echo "<div class='product'>";
    echo "<img src='image/" . $p->image . "' alt='" . $p->name . "'>";
    echo "<h2>" . $p->name . "</h2>";
    echo "<p>Rp " . number_format($p->price, 0, ',', '.') . "</p>";
    echo "<form action='pay.php' method='get'>";
    echo "<input type='hidden' name='name' value='" . $p->name . "'>";
    echo "<input type='hidden' name='price' value='" . $p->price . "'>";
    echo "<button type='submit'>Buy</button>";
    echo "</form>";
    echo "</div>";
}
