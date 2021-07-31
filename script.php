<?php

$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';
$categorias[] = 'Idoso';
$categorias[] = 'não pode competir';


$nome = $_POST["nome"];
$idade = $_POST["idade"];

if(empty($nome)){
    echo "O nome não pode ser vazio";
    return;
}

if(strlen($nome) < 3){
    echo "O nome deve conter pelo menos 3 caracteres";
    return;
}

if(strlen($nome) > 40){
    echo "O nome muito extenso";
    return;
}

if(!is_numeric($idade)){
    echo "Idade não se trata de um número";
    return;
}

//$nome = $_GET["nome"];
//$idade = $_GET["idade"];

//var_dump($nome);
//var_dump($idade);
//print_r($categorias);

if($idade >= 6 && $idade <= 12){
    echo "O competidor ".$nome." compete na categoria ".$categorias[0];
}else if($idade >= 13 && $idade <= 18){
    echo "O competidor ".$nome." compete na categoria ".$categorias[1];
}else if($idade >= 19 && $idade <= 59){
    echo "O competidor ".$nome." compete na categoria ".$categorias[2];
}else if($idade >= 60 && $idade <= 70){
    echo "O competidor ".$nome." compete na categoria ".$categorias[3];
}else{
    echo "O candidato ".$nome." ".$categorias[4];
}
?>