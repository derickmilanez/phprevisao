<?php
    function definirCategoriaCompetidor(string $nome, string $idade) : ?string{

        $categorias = [];
        $categorias[] = 'Infantil';
        $categorias[] = 'Adolescente';
        $categorias[] = 'Adulto';
        $categorias[] = 'Idoso';
        $categorias[] = 'não pode competir';

        if(validarNome($nome) && validarIdade($idade)){
            removerMensagemErro();
            if($idade >= 6 && $idade <= 12){
                setMensagemDeSucesso("O competidor ".$nome." compete na categoria ".$categorias[0]);
                return null;
            }else if($idade >= 13 && $idade <= 18){
                setMensagemDeSucesso("O competidor ".$nome." compete na categoria ".$categorias[1]);
                return null;
            }else if($idade >= 19 && $idade <= 59){
                setMensagemDeSucesso("O competidor ".$nome." compete na categoria ".$categorias[2]);
                return null;
            }else if($idade >= 60 && $idade <= 70){
                setMensagemDeSucesso("O competidor ".$nome." compete na categoria ".$categorias[3]);
                return null;
            }else{
                setMensagemDeSucesso("O candidato ".$nome." ".$categorias[4]);
                return null;
            }
        }else{
            removerMensagemSucesso();
            return getMensagemDeErro();
        }
    }
?>