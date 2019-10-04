<?php
    $nomeSistema = "Cursos Bakery";
    $usuario = ["nome"=>"Stephania"];
    $categorias = ["Pães","Equipamentos", "Cursos"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="./css/style.css" rel=stylesheet>
    <title>Bakery Online</title>
</head>
<body>
    <header class="navbar">
        <h1 id=logo>
            <?php echo $nomeSistema; ?>
        </h1>
        <nav>
            <ul class="nav">
                <?php if(isset($usuario) && $usuario != []) {?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Olá <?php echo $usuario["nome"]; ?></a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cadastro</a>
                    </li>
                <?php } ?>   
            </ul>
        </nav>
    </header>
    <nav class="nav-bar bg-dark">
        <ul class="nav">
            <?php foreach($categorias as $categoria){?>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><?php echo $categoria; ?></a>
                </li>
            <?php } ?>
    </nav>    
    <main>
        <section class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>Carrinho de compras</h1>
                    </div>
                    <div class="col-12">
                        <div class="row card">
                        <!-- a classe card foi para deixar com a bordinha -->
                            <div class="col-12">
                                <h3>Você está comprando o curso de <?php echo $_GET["nomeProduto"]; ?></h3>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <form class="d-flex flex-column p-3" method="post" action="sucesso.php">
                                    <input type="text" name="nomeCompleto" placeholder="Digite seu nome completo.">
                                    <!-- Se quiser pode colocar input:number, mas não aceita pontos no CPF -->
                                    <input type="text" name="cpf" placeholder="Digite seu CPF.">
                                    <input type="number" name="cartao" placeholder="Digite o número do cartão.">
                                    <input type="date" name="validadeCartao" placeholder="Digite a data de validade.">
                                    <input type="password" name="codigoCartao" placeholder="Digite o CV">

                                    <button class="btn btn-success">Finalizar a compra</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

    </main>
</body>
</html>