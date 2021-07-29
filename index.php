<?php

$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';
$categorias[] = 'Idoso';
$categorias[] = 'Nao pode competir';


$nome = 'Derick';
$idade = 71;

//var_dump($nome);
//var_dump($idade);
//print_r($categorias);

if($idade >= 6 && $idade <= 12){

}else if($idade >= 6 && $idade <= 12){
    echo $categorias[0];
}else if($idade >= 13 && $idade <= 18){
    echo $categorias[1];
}else if($idade >= 19 && $idade <= 59){
    echo $categorias[2];
}else if($idade >= 60 && $idade <= 70){
    echo $categorias[3];
}else{
    echo $categorias[4];
}
?>