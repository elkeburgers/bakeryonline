<?php  

function cadastrarProduto($nomeProduto, $descProduto, $imgProduto, $precoProduto){
    $nomeArquivo = "produto.json";
    if (file_exists($nomeArquivo)){

    }else{
        $produtos = [];
        //  array_push(); (opção a linha de baixo)
        $produtos[] = ["nome"=>$nomeProduto, "desc"=>$descProduto, "preco"=>$precoProduto, "img"=>$imgProduto];
        // breakpoint para validar se tem algum erro na forma que colocamos os produtos na array acima
        var_dump($produtos);

    }
}

// no teste abaixo, precisa colocar os parametros  na mesma ordem que estão na array acima
if($_POST){
    cadastrarProduto($_POST["nomeProduto"], $_POST["descProduto"], $_POST["precoProduto"], $_POST["imgProduto"]);
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
                <form action="" method="post">
                    <div class="form-group">
                    <!-- linha padrão para formulario para repiclar varias vezes, uma para cada campo existente  -->
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