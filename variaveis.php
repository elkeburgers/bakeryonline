<?php
    $nomeSistema = "Cursos Bakery";
    $usuario = ["nome"=>"Stephania"];

    // original do php, substituido com arquivo json
    // $produtos = [
    //     ["nome"=>"Pão de Forma", "preco"=>"R$120,00", "duracao"=>"4 horas", "img"=>"./img/pao3.jpg"],
    //     ["nome"=>"Pão Sourdough", "preco"=>"R$500,00", "duracao"=>"16 horas", "img"=>"./img/pao2.jpg"],
    //     ["nome"=>"Pão Italiano", "preco"=>"R$450,00", "duracao"=>"16 horas", "img"=>"./img/pao1.jpg"],
    // ];

    $nomeArquivo = "produto.json";
    // colocar o "abrir o arquivo" dentro da criação da array, igual programação real, reduzindo a quantidade de linhas e de variaveis a serem criadas
    $produtos = json_decode(file_get_contents($nomeArquivo), true);
    // para fazer o correto upload de fotos:


    $categorias = ["Pães","Equipamentos", "Cursos"];
?>
