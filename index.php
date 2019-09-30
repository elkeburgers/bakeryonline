<?php
    $nomeSistema = "Cursos Bakery";
    $usuario = ["nome"=>"Stephania"];
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
    <main>
        <section class="container mt-4">
            <div class="row justify-content-around">
                <div class="col-lg-3 card text-center">
                    <h2>Pão simples</h2>
                    <img src="./img/pao3.jpg" class="card-img-top" alt="pao 1">
                    <div class="card-body">
                        <p class="card-text">R$20,00</p>
                        <a href="#" class="btn btn-primary">Compre</a>
                    </div>
                </div>
                <div class="col-lg-3 card text-center">
                    <h2>Pão pequeno</h2>
                    <img src="./img/pao3.jpg" class="card-img-top" alt="pao 2">
                    <div class="card-body">
                        <p class="card-text">R$15,00</p>
                        <a href="#" class="btn btn-primary">Compre</a>
                    </div>
                </div>
                <div class="col-lg-3 card text-center">    
                    <h2>Pão grande</h2>
                    <img src="./img/pao3.jpg" class="card-img-top" alt="pao 3">
                    <div class="card-body">
                        <p class="card-text">R$25,00</p>
                        <a href="#" class="btn btn-primary">Compre</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>