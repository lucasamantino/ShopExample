<?php require("../database.php")?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../res/shopCar-icon.png">
    <link rel="stylesheet" href="../lib/login.css">
    <title>Shop</title>
</head>
<body>
    <?php 
        $login = false;
        if(isset($_GET['req'])){
            $login = $_GET['req'];
        }

        if(isset($_POST['go']) and $login){
            $msg = [];
            if(($_POST['name']) == ''){
                $msg[0][0] = 'error';
                $msg[0][1] = 'errorp';
            }else{
                $msg[0][2] = $_POST['name']; 
            }
            if($_POST['surname'] == ''){
                $msg[1][0] = 'error';
                $msg[1][1] = 'errorp';
            }else{
                $msg[1][2] = $_POST['surname']; 
            }
            if($_POST['cep'] == ''){
                $msg[2][0] = 'error';
                $msg[2][1] = 'errorp';
            }else{
                $msg[2][2] = $_POST['cep']; 
            }
            if($_POST['email'] == ''){
                $msg[3][0] = 'error';
                $msg[3][1] = 'errorp';
            }else{
                $msg[3][2] = $_POST['email']; 
            }
            if($_POST['pass'] == ''){
                $msg[4][0] = 'error';
                $msg[4][1] = 'errorp';
            }
            if(!$msg[0][0] & !$msg[1][0] & !$msg[2][0] & !$msg[3][0] & !$msg[4][0]){
                $ret = logar($_POST['name'],$_POST['surname'],$_POST['cep'],$_POST['email'],$_POST['pass']);
                if(!$ret){
                    echo '<div class="erro-box"><h3>Email já existente</h3></div>';
                    $msg[3][0] = 'error';
                    $msg[3][1] = 'errorp';
                }else{
                    header('Location: ../index.php');
                }
            }
        }
    ?>
    <div class="container">
        <div class="menu">
            <a href="/">
                <img src="../res/shopCar-icon.png" class="logo">
            </a>
            <?php 
                if($login == 'false'){
                    $login = false;
                }
                if($login == 'true'){
                    $login = true;
                }
                if($login){
                    echo '<h1>Registrar</h1>';
                }else{
                    echo '<h1>Entrar</h1>';
                }
                echo '</div> <form method="post">';

                if($login){
            ?>            
        <div class="box <?php echo $msg[0][0] ?>">
            <input require type="text" value="<?php echo $msg[0][2] ?>" name="name" class="inp">
            <p class="place <?php echo $msg[0][1] ?>">Primeiro Nome</p>
        </div>
        <div class="box <?php echo $msg[1][0] ?>">
            <input require type="text" value="<?php echo $msg[1][2] ?>" name="surname" class="inp">
            <p class="place <?php echo $msg[1][1] ?>">Sobrenome</p>
        </div>
        <div class="box <?php echo $msg[2][0] ?>">
            <input require type="text" value="<?php echo $msg[2][2] ?>" name="cep" class="inp">
            <p class="place <?php echo $msg[2][1] ?>">Cep</p>
        </div>
        <?php } ?>
        <div class="box <?php echo $msg[3][0] ?>">
            <input require type="text" value="<?php echo $msg[3][2] ?>" name="email" class="inp">
            <p class="place <?php echo $msg[3][1] ?>">Email</p>
        </div>
        <div class="box <?php echo $msg[4][0] ?>">
            <input require type="password" name="pass" class="inp">
            <p class="place <?php echo $msg[4][1] ?>">Senha</p>
        </div>
        <?php 
            if($login){
        ?>
        <button type="submit" name="go" class="submit">Registrar</button>
        </form>
        <a href="/login?req=false" class="red">Já tem uma conta?</a>
        <?php }else{ ?>
            <button onclick="alert('Esse site é apenas um exemplo, você não pode fazer login.')" class="submit">Entrar</button>
            </form>
            <a href="/login?req=true" class="red">Não tem uma conta?</a>
        <?php } ?>
    </div>
</body>
</html>