<?php
    $nomeSistema = "Cursos Bakery";
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
    <header class="d-flex justify-content-between align-itens-center p-3">
        <h1 id=logo>
            <?php echo $nomeSistema; ?>
        </h1>
        <nav>
            <ul class="nav">
                <a href="#"><li class"nav-item">Cursos</li></a>
                <a href="#"><li class="nav-item">Login</li></a>
                <a href="#"><li class="nav-item">Cadastro</li></a>
            </ul>
        </nav>
    </header>
    <?php
        $nome = "Elke";
        $sobrenome = "Burgers";
        $idade = 44;
        $usuario = ["Elke", "Burgers", 44, ["musica", "cafe", "skate"]];
        $usuarioDois = ["nome"=>"Elke", "sobrenome"=>"Burgers", "idade"=>44];

        echo $nome;
        
        // echo "<br>";
        // echo $usuario[3][1];

        // echo "<br>";
        // echo $usuarioDois["sobrenome"];

        echo "<br>";
        var_dump($usuario);
        
        $usuario[] = "guitarra";

        echo "<br>";
        var_dump($usuario);

        echo "<br>";
        echo $usuario[0].$usuario[1];

        echo "<br>";
        echo "<h1>".$usuario[0]." ".$usuario[1]."</h1>";

        echo "Meu nome é $nome $sobrenome.";
        echo "<br>";
        echo 5*2;
?>    
</body>
</html>