<?php
function menuInit($dir = "./"){
    $nm = 'Login/Registrar';
    if(isset($_COOKIE['name'])){
        $nm = 'Olá '.$_COOKIE['name'].'!';
    }
    echo '
    <div class="menu">
        <div class="logo-menu-container">
            <img src="'.$dir.'res/shopCar-icon.png">
            <a href="/" class="inv-link"><h1>Shop</h1></a>
        </div>
        <form method="get">
            <input type="search" spellcheck="false" name="search" placeholder="Pesquisar por produtos" class="searchBar-menu">
        </form>
        <div class="shp">
            <img src="'.$dir.'res/sell.png" style="width: 35px">
            <a href="https://github.com/lucasamantino" target="_blank" class="inv-link"><h3>Github</h3></a>
        </div>
        <div class="account-menu">
            <a href="/login/?req=true" class="inv-link">
                <img src="'.$dir.'res/account.png" style="margin-left: 15%;">
                <h4>'. $nm .'</h4>
            </a>
        </div>
</div>';
}