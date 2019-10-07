<?php 

// criando array de erros
$erros = [];

// funcao que valida cada campo do cadastro da compra
function validaNome($nome){
    global $erros;
    if(strlen($nome) == 0){
        array_push($erros, "Preencha o campo nome corretamente.");
    }
} 

function validaCPf($cpf){
    global $erros;
    if(strlen($cpf) != 11){
        array_push($erros, "Prencha o campo CPF corretamente.");
    }
}



?>