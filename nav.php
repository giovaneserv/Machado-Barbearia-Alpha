<?php
require_once('php/verifica_sessao.php');
?>


<div class="img"><a href="quem-somos.php"><img src="imgs/logo.jpeg" alt=""></a></div>
<nav>
    <div id="slogan">
        <h1>MACHADO BARBEARIA</h1>
        <p>NÃO CORTE NA TESOURA, CORTE NO MACHADO</p>

    </div>
    <ul class="menu">
        <li><a href="index.php">Home</a></li>


            <li><a href="quem-somos.php">Quem Somos</a></li>
        <?php if ($usuario_log) : ?>
            <a href="php/logout.php" class="logout-link">Logout</a>
        <?php else : ?>
            <li><a href="contato.php">Cadastre-se</a></li>
        <?php endif; ?>
    </ul>
</nav>