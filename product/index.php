<?php require('../menu.php');menuInit('../') ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../lib/style.css">
    <link rel="stylesheet" href="./lib/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop || Tablet</title>
    <link rel="icon" href="../res/shopCar-icon.png">
</head>
<body>
    <div class="preview">
        <img src="./rwfdfrwsd/image.png" class="pimg">
    </div>
    <div class="desc">
        <h2 class="produ-title">
            Tablet Samsung Galaxy Tab S6 Lite SM-P615 10.4" 64GB oxford gray e 4GB de memória RAM
        </h2>

        <p class="prec">R$ 2.299,99</p>
        <span class="parc">ou até 10x de R$ 230,15</span>
        <br>
        <button class="buy" onclick="alert('Este site é apenas um exemplo, você não pode fazer compras reais nele.')">Comprar</button>

        <p class="pr-desc">Descrição:</p>
        <p class="prod-desc">
            Este tablet da Samsung é o companheiro ideal, com capacidade de sobra para cada uma das suas atividades. O design fino, compacto e portátil, com facilidade para segurar com a mão, o torna uma combinação perfeita de desempenho e versatilidade.

Transferir, sincronizar e acessar aos seus dispositivos quantas vezes quiser agora é possivel. Suas conexões wi-fi, wi-fi direct, bluetooth, usb-c, ant+, 4g permitem que você maximize suas funções.

Graças à sua câmera principal de 8 Mpx e frontal de 5 Mpx, você poderá fazer videochamadas ou tirar fotos em qualquer momento e lugar, com excelente qualidade de imagem. Nitidez, brilho e cores vibrantes farão com que suas experiências sejam refletidas de forma ideal.
        </p>
        <br><br>
        <h2>Produtos parecidos:</h2>
        <?php
            for($i =0;$i<4;$i++){
                $j = rand(0,1000);
                echo '<a href="/product"><div class="box" style="border: solid 2px rgb(216, 216, 216);margin-top: 20px">
                    <div class="box-img">
                        <img src="rwfdfrwsd/image.png" style="width:100%;height:75%;margin-top:7%;margin-left: -10%"/>
                    </div>
                    <p class="mon">R$ '.strval($j).',00</p>
                    <p class="parc">até 10x de R$ '.strval($j/10).'</p>
                    <p class="description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam minus accusantium quaerat deserunt animi fugit ad eaque voluptatum saepe
                    </p>
                </div></a>';
            }
        ?>
    </div>
</body>
</html>