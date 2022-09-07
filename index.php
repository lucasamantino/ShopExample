<?php require("./database.php")?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./lib/style.css">
    <link rel="icon" href="./res/shopCar-icon.png">
    <title>Shop</title>
</head>
<body>
    <?php 
        require("./menu.php");
        menuInit();
    ?>
    <?php
    if(!$_GET['search']){
        for($i =0;$i<50;$i++){
            $j = rand(0,1000);
            echo '<a href="/product"><div class="box">
                <div class="box-img">
                    <img src="product/rwfdfrwsd/image.png" style="width:100%;height:75%;margin-top:7%"/>
                </div>
                <p class="mon">R$ '.strval($j).',00</p>
                <p class="parc">até 10x de R$ '.strval($j/10).'</p>
                <p class="description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam minus accusantium quaerat deserunt animi fugit ad eaque voluptatum saepe
                </p>
            </div></a>';
        }
    }else{
    ?>

    <h1 class="results">Produtos com "<?php echo $_GET['search']?>"</h1>

    <?php 
        for($i =0;$i<50;$i++){
            $j = rand(0,1000);
            echo '<a href="/product"><div class="box">
                <div class="box-img">
                    <img src="product/rwfdfrwsd/image.png" style="width:100%;height:75%;margin-top:7%"/>
                </div>
                <p class="mon">R$ '.strval($j).',00</p>
                <p class="parc">até 10x de R$ '.strval($j/10).'</p>
                <p class="description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam minus accusantium quaerat deserunt animi fugit ad eaque voluptatum saepe
                </p>
            </div></a>';
        }
}?>
</body>
</html>
