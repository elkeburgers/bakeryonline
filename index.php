<?php
    $nomeSistema = "Cursos Bakery";
    $usuario = ["nome"=>"Stephania"];

    $produtos = [
        ["nome"=>"Curso pão de forma", "preco"=>"R$120,00", "duracao"=>"4 horas"],
        ["nome"=>"Curso pão sourdough", "preco"=>"R$500,00", "duracao"=>"16 horas"],
        ["nome"=>"Curso pão italiano", "preco"=>"R$450,00", "duracao"=>"16 horas"],
    ];

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
    <nav>
        <ul class="nav">
            <?php foreach($categorias as $categoria){?>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo $categoria; ?></a>
                </li>
            <?php } ?>
    </nav>    
    <main>
        <section class="container mt-4">
            <div class="row justify-content-around">
        <!-- caso não tenha produtos na loja, para dar um feedback para o usuario -->    
            <?php if(isset($produtos) && $produtos != []){ ?>
                <?php foreach($produtos as $produto){  ?>
                    <div class="col-lg-3 card text-center">
                        <h2><?php echo $produto["nome"]; ?></h2>
                        <img src="./img/pao3.jpg" class="card-img-top" alt="pao 1">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $produto["preco"]; ?></h5>
                            <p class="card-text"><?php echo $produto["duracao"]; ?></p>
                            <a href="#" class="btn btn-primary">Compre</a>
                        </div>
                    </div>
                    <!-- Fechando o php que abriu no foreach -->
                <?php } ?>    
            <!-- Fechando o php que abriu no if -->
            <?php } else { ?>
                <h1> Não tem cursos disponíveis no momento. :( </h1>
            <?php } ?>
            </div>
        </section>
    </main>
</body>
</html>