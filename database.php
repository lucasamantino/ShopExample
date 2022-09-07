<?php

function logar($tname,$tsurname,$tcep,$temail,$tpass){
    setcookie("name",$tname,time() + (86400 * 30),"/");
    setcookie("sur",$tsurname,time() + (86400 * 30),"/");
    setcookie("cep",$tcep,time() + (86400 * 30),"/");
    setcookie("email",$tname,time() + (86400 * 30),"/");
    setcookie("pass",$tpass,time() + (86400 * 30),"/");
    return true;
}