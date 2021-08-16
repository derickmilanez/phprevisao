<?php

function validarNome(string $nome) : bool{
    if(empty($nome)){
        setMensagemDeErro("O nome não pode ser vazio");
        return false;
    }else if(strlen($nome) < 3){
        setMensagemDeErro("O nome deve conter pelo menos 3 caracteres");
        return false;
    }else if(strlen($nome) > 40){
        setMensagemDeErro("O nome muito extenso");
        return false;
    }
    return true;
}

function validarIdade(string $idade) : bool{
    if(!is_numeric($idade)){
        setMensagemDeErro("Idade não se trata de um número");
        return false;
    }
    return true;
}
?>