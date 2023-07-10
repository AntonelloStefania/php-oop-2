<?php
class Utilities extends Products{
    public $dimension;
    public $materials;

    function __construct($image, $name, $target, $price, $materials, $dimension){
        parent::__construct($image, $name, $target, $price);
        $this->dimension = $dimension;
        $this->materials = $materials;
    }
}

$WilmaBird = new Utilities('https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg','Voliera Wilma in Legno', '<i class="fa-solid fa-dove" style="color: #000000;"></i> Uccello', '184.99€', 'Legno','M: L 83 x P 67 x H 153 cm');

$FilterFish = new Utilities('https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg','Cartucce Filtranti per Filtro EasyCrystal', '<i class="fa-solid fa-fish-fins" style="color: #000000;"></i> Pesce', '2,29€','Materiale espanso', 'ND');


?>