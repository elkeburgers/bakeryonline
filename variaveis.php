<?php
session_start();
    $nomeSistema = "Cursos Bakery";
   // $usuario = ["nome"=>"Stephania"];
   // abaixo, if ternario: se usuario existe, se não existir, retorna vazio. Entre isset e o resto tem que ser igual abaixo, sem espaços.
   // cuidado com o array no final, agora igual ao header na comparação do $usuario, mas antes com aspas para indicar vazio conflitava com o header
    $usuario = isset($_SESSION["usuario"]) ? $_SESSION["usuario"]: [];


        $nomeArquivo = "produto.json";
        // colocar o "abrir o arquivo" dentro da criação da array, igual programação real, reduzindo a quantidade de linhas e de variaveis a serem criadas
        $produtos = json_decode(file_get_contents($nomeArquivo), true);
        // para fazer o correto upload de fotos.


    // original do php, substituido com arquivo json
    // $produtos = [
    //     ["nome"=>"Pão de Forma", "preco"=>"R$120,00", "duracao"=>"4 horas", "img"=>"./img/pao3.jpg"],
    //     ["nome"=>"Pão Sourdough", "preco"=>"R$500,00", "duracao"=>"16 horas", "img"=>"./img/pao2.jpg"],
    //     ["nome"=>"Pão Italiano", "preco"=>"R$450,00", "duracao"=>"16 horas", "img"=>"./img/pao1.jpg"],
    // ]; 

    $categorias = ["Pães","Equipamentos", "Cursos"];
?>
