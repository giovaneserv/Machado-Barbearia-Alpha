
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login -  Machado Barbearia</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contato.css">
</head>
<body>
<div class="img"><a href="quem-somos.php"><img src="imgs/logo.jpeg" alt=""></a></div>   
    <nav>
        <div id="slogan">
            <h1>Barber Shop</h1>
            <p>SUA BARBEARIA E LOJA PARA SEU ESTILO</p>
        </div>
    </nav>
    <h1 class="titulo">Fazer Login</h1>
    <main class="contato">
        <div class="area-do-formulario">
            <div class="introducao">
            </div>

            <form class="formulario" method="POST" action="php/login.php">
                Email:<input type="text" name="email" id="email" placeholder="Email" class="info" required>


                Senha: <input type="password" name="senha" id="senha" placeholder="Senha">
                    <input type="submit" value="Login" placeholder="enviar" class="btn">
                </div>
            </form>
    </main>
</body>
</html>