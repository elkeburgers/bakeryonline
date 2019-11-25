<?php include_once("config/variaveis.php") ?>

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
            <li class="nav-item">
                <a class="nav-link" href="sair.php">Sair</a>
            </li>
            <?php } else { ?>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Log In</a>
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
            <?php foreach($links as $link){?>
        <li class="nav-item">
            <a class="nav-link text-white" href="<?php echo $link; ?>"><?php echo $categoria; ?></a>
        </li>
        <?php } ?>
        <?php } ?>
</nav>