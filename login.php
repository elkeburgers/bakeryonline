<!-- código apra dar login no sistema -->

<?php 
// a senha foi criada no phpteste.net usando password_hash e var_dump para copiar a codificação abaixo. Senha original 123, e precisa sempre estar com aspas simples porque o PHP pode entender as aspas duplas como parte da codificação dele.
$usuario = ["login"=>"elke.burgers@hotmail.com", "senha"=>'$2y$10$P.oFdVvoZvS5LRx/8CQibuYYDh3hbYvJpKhWvDg.b0071NoyJ/666'];

if($_POST){
    $email = $_POST["login"];
    $senha = $_POST["senha"];
    // validando email
    if($email == $usuario["login"]){
        // validando a senha
        if(password_verify($senha, $usuario["senha"])){
            // para iniciar a sessão de login e colocar o nome dele (depois trocamos o nome para puxar direto do banco de dados)
            session_start();
            $_SESSION["usuario"] = ["nome"=>"Elke"];
            // função header para redirecionar o usuario para outro arquivo ou link, precisa sempre do Location para saber para onde.
            header("Location: index.php");
        }else{
            echo "E-mail ou senha inválidos.";
        }
    }else{
        //por segurança sempre dizemos que um dos dois estão errados, não qual, para dificultar a vida do invasor que usa força-bruta.
        echo "E-mail ou senha inválidos.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="./css/style.css" rel=stylesheet>
    <title>Bakery Online Login</title>
</head>
<body>
    <?php include_once "header.php"; ?>
    <main class="d-flex justify-content-center align-items-center p-5">
        <form action="" method="post" class="card p-2">
            <div class="form-group">
                <label for="login">E-mail:</label>
                <input type="email" name="login" id="login" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha" class="form-control" required>
            </div>
            <div class="form-group text-center">
            <!-- text-center para centralizar o botão de logar -->
                <button class="btn btn-success" type="submit">Logar</button>
            </div>
        </form>
    </main>
</body>
</html>