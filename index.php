<?php
require 'models/Food.php';
require 'models/Games.php';
require 'models/Utilities.php';

class Products{
    public $image;
    public $name;
    public $target;
    public $price;
   

    function __construct($image, $name, $target, $price){
        $this-> image = $image;
        $this->name = $name;
        $this->target = $target;
        $this->price = $price;
        
    }

}

$products=[
    $royalCanin,
    $almoNature,
    $almoNatureCat,
    $FishGuppy,
    $WilmaBird,
    $FilterFish,
    $KongClassic,
    $TrixiePeluche
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style/style.css">
    <title>php-oop-2</title>
</head>
<body>
    <header>
        <h1 class="ms-5 mt-3 mb-5 fw-bolder">Boolshop</h1>
    </header>
    <div class="container d-flex justify-content-center w-100">
        <div class="row justify-content-center">
            <h3 class="fw-bold text-center my-5">I nostri prodotti</h3>
                <div class="d-flex flex-wrap justify-content-center">
                    <?php foreach($products as $product) {?>
                        <div class="col-lg-3 col-md-5 col-12 m-2 card p-2 card-style">
                        <div class="d-flex  justify-content-center">
                            <img src="<?php echo $product->image?>" alt="">
                        </div>
                        <h2><?php echo $product->name?></h2>
                        <span class="my-2">
                           <strong><?php echo $product->target?></strong> 
                        </span>
                        <span class="my-2"><strong>Prezzo:</strong> <?php echo $product->price?></span>
                        <?php if(property_exists($product,'weight')){?>
                            <span class="my-2"><strong>Peso netto:</strong> <?php echo $product->weight?></span>
                        <?php }?>
                        <?php if(property_exists($product,'ingredients')){?>
                            <span class="my-2"><strong>Ingredienti:</strong> <?php echo $product->ingredients?></span>
                        <?php }?>
                        <?php if(property_exists($product, 'materials')) {?>
                            <span class="my-2"><strong>Materiale:</strong> <?php echo $product->materials?></span>
                        <?php }?>
                        <?php if(property_exists($product,'toKnow')){?>
                            <span class="my-2"><strong>Caratteristiche:</strong> <?php echo $product->toKnow?></span>
                        <?php }?>
                        <?php if(property_exists($product,'dimension')){?>
                            <span class="my-2"><strong>Dimensioni: </strong><?php echo $product->dimension?></span>
                        <?php }?>
                    </div>
                    <?php }?>
                </div>
        </div>
    </div>
</body>
</html>