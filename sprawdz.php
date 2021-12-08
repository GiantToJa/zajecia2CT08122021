<?php
$zmienna = $_GET['stan'];

if($zmienna==1){
    echo("Zmienna: ".$zmienna);
}else if($zmienna==2){
    echo("Zmienna Inna: ".$zmienna);
}else{
    echo("Brak Danych do pobrania");
}
?>