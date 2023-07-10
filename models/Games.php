<?php
class Games extends Products{
    public $toKnow;
    public $dimension;
    
    function __construct($image, $name, $target, $price, $toKnow, $dimension){
        parent::__construct($image, $name, $target, $price);
        $this->toKnow = $toKnow;
        $this->dimension = $dimension;
    }
}

$KongClassic = new Games('https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg','Kong Classic', '<i class="fa-solid fa-dog" style="color: #000000;"></i> Cane', '€13.49', 'Galleggia e rimbalza','8.5 cm x 10cm');

$TrixiePeluche= new Games('https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', 'Topini di peluche Trixie','<i class="fa-solid fa-cat" style="color: #000000;"></i> Gatto', '4.99€','Morbido con codina in corda','8.5 cm x 10 cm');

?>