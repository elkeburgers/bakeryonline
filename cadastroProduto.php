<?php  

function cadastrarProduto($nomeProduto, $descProduto, $precoProduto, $imgProduto){
    $nomeArquivo = "produto.json";
    if (file_exists($nomeArquivo)){
        // passos: abrir arquivo, pegar informações, transformar em array
        $arquivo = file_get_contents($nomeArquivo);
        // a variavel $produtos de if não interfere na de else, "o que acontece em Vegas fica em Vegas". Coloca o true para o json_decode transformar as informações em um array, senao transforma em um objeto (padrao do json_decode).
        $produtos = json_decode($arquivo, true);
        // passos: adicionar novo produto na array de dentro do arquivo, transformar em json, coloca no arquivo json
        $produtos[] = ["nome"=>$nomeProduto, "desc"=>$descProduto, "preco"=>$precoProduto, "img"=>$imgProduto];
        $json = json_encode($produtos);
        $deuCerto = file_put_contents($nomeArquivo, $json);
        if($deuCerto){
            return "Deu certo brother!";
        } else{
            return "Deu ruim";
        }   
        var_dump($produtos);
    }else{
        // se o arquivo não existe (vazio), eu crio o arquivo (variaveis informadas na segunda linha de código)
        $produtos = [];
        //  array_push(); (opção a linha de baixo, sendo o de baixo mais fácil de enxergar a função, e para p PHP é mais dificil executar deste jeito, este gera sobrecarga)
        // IMPORTANTE: colocar a array abaixo na mesma sequencia da function acima
        $produtos[] = ["nome"=>$nomeProduto, "desc"=>$descProduto, "preco"=>$precoProduto, "img"=>$imgProduto];
        // breakpoint para validar se tem algum erro na forma que colocamos os produtos na array acima
        // var_dump($produtos); - validação se o código está funcionando até este ponto
        // transforma array em json para carregar no arquivo json
        $json = json_encode($produtos);
        // var_dump($json); - apenas validação se o código está funcionando até este ponto
        // salvando json ($json) dentro do arquivo ($nomeArquivo)
        $deuCerto = file_put_contents($nomeArquivo, $json);
        // erros possiveis: não encontrar a variavel, nao ter permissao para salvar, entao precisa sempre validar com alguns if's
        if($deuCerto){
            return "Deu certo brother!";
        } else{
            return "Deu ruim";
        }   
    }
}

// no teste abaixo, precisa colocar os parametros  na mesma ordem que estão na array acima
// coloca vazia porque essa variavel sempre vai existir
if($_POST){
    // valida para verificar configuração de imagem e exit para parar a execução do PHP
    // var_dump($_FILES);
    // exit;

    // salvando arquivo
    // "imgProduto" igual está no form de cadastro 
    // "name", "tmp_name" vem de dentro da array que o teste acima criou (array associativo), elas sempre vem, usar sempre igual
    $nomeImg = $_FILES["imgProduto"]["name"];
    $localTmp = $_FILES["imgProduto"]["tmp_name"];
    // "$nomeImg" para manter o nome original do arquivo. POde concatenar com data, horário, nome do usuário, ou outras informações (uso para o seaze). $caminhoSalvo é o link onde está de fato a imagem, e devo informar ele para o json.
    $dataAtual = date("d-m-y");
    $caminhoSalvo = "img/".$dataAtual.$nomeImg;

    $deucerto = move_uploaded_file($localTmp, $caminhoSalvo);
    // exit;
    // echo cadastrarProduto($_POST["nomeProduto"], $_POST["descProduto"], $_POST["precoProduto"], $_POST["imgProduto"]);
    // substitui $_POST de img por caminhoSalvo
    echo cadastrarProduto($_POST["nomeProduto"], $_POST["descProduto"], $_POST["precoProduto"], $caminhoSalvo);
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="./css/style.css" rel=stylesheet>
    <title>Cadastro Produto</title>
</head>
<body>
    <?php include_once("header.php"); ?>
    <main class="container">
        <div class="row">
            <div  class="col-12">
                <h1>Cadastro de Produto</h1>
            </div>
            <div class="col-12">
            <!-- action vazio para ir para a mesma página -->
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                    <!-- linha padrão do meu formulario para repiclar varias vezes, uma para cada campo existente  -->
                       <!-- <input type="text" class="from-control"  name="" placeholder=""/>  -->
                        <input type="text" class="form-control"  name="nomeProduto" placeholder="Nome do Produto"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control"  name="descProduto" placeholder="Descrição"/>
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control"  name="imgProduto" placeholder="Imagem do Produto"/>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control"  name="precoProduto" placeholder="Preço do Produto"/>
                    </div>
                    <button class="btn btn-success">Cadastrar Produto</button>
                </form>
            </div>
        </div>
    </main>

</body>
</html>