<?php

// precisa chamar a sessão para ele saber o que destruir:
session_start();
// encerrando sessão:
session_destroy ();
// definir o caminho que ele segue após ser deslogado:
header('Location:index.php');

?>