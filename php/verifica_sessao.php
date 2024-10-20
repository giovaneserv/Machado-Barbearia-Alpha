<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$usuario_log = false;
$nome;

if (isset($_SESSION['usuario']) && is_array($_SESSION['usuario'])) {
    $usuario_log = true;
    /* chave `usuario` do BD e 'nome' segunda coluna de tabela usuario no  DB */
    $nome = $_SESSION['usuario']['nome'];
}
