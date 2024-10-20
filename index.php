
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Machado Barbearia</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/animation.css">
    </head>

    <body>
        <?php include 'nav.php' ?>
        <main class="container1">
            <header>
                <?php
                /* ↓ se usuario estiver logado, aparecerá o h1 abaixo */
                if ($usuario_log) {
                    echo "<h1>Seja bem-vindo, $nome</h1>";
                } else {
                    /* ↓ senão */
                    echo "<h1>Bem-vindo ao nosso site</h1>";
                    echo "<a href='contato.php'><h2>Marque um horário!</h2></a>";
                }
                ?>


            </header>
        </main>
    </body>

    </html>