<?php
class Food extends Products{
    public $weight;
    public $ingredients;

    function __construct($image, $name, $target, $price, $weight, $ingredients){
        parent::__construct($image, $name, $target, $price);
        $this->weight = $weight;
        $this->ingredients = $ingredients;
    }
}

$royalCanin = new Food('https://m.media-amazon.com/images/I/71fwkZg9m6L._AC_UF894,1000_QL80_.jpg', 'Royal Canin Mini Adult','<i class="fa-solid fa-dog" style="color: #000000;"></i> Cane','43.99€','54Kg','prosciutto, riso' );
$almoNature = new Food('https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', 'Almo Nature Holistic Maintenance Medium Large Tonno e Riso', '<i class="fa-solid fa-dog" style="color: #000000;"></i> Cane','44.99€','600g', 'manzo, cereali');
$almoNatureCat = new Food('https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', 'Almo Nature Cat Daily Lattina', '<i class="fa-solid fa-cat" style="color: #000000;"></i> Gatto', '34.99€','400g','tonno, pollo, prosciutto');

$FishGuppy = new Food ('https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', 'Mangime per Pesci Guppy in Fiocchi', '<i class="fa-solid fa-fish-fins" style="color: #000000;"></i> Pesce', '2,95€', '30g','Pesci e sottoprodotti dei pesci, Cereali, Lieviti, Alghe');

?>