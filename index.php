<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chico State University - Login</title>
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="all">
    <div class="container">
        <div class="box">
            <div class="logo">
                <img class="logoimg" src="assets/logo.svg" alt="Chico State University">
            </div>
            <div class="header">
                <p id="title">Fazer login</p>
                <p class="desc">Coloque os seus dados já cadastrados abaixo</p>
            </div>
            <div class="formulario">

                <form method="post" action="user.php">
                <input class="input" type="email" placeholder="Digite o seu e-mail" name="email" required>
                <div class="formdec">
                    <a href="#">Recuperar e-mail</a>
                </div>
                <input class="input" id="input" type="password" placeholder="Digite a sua senha de no mínimo 8 dígitos" 
                minlength="8"
                name="pass" required>
                <div class="formdec">
                    <a href="#">Recuperar senha</a>
                </div>
                <div class="descform">
                    <p id="descrip">Ao clicar em "Login" você entrará na área do estudante da Universidade California State Chico. <a href="#">Saiba mais</a></p>
                </div>
                <div class="button-cont">
                    <a href="#" class="button2">Solicitar Cadastro</a>
                  <input class="button" type="submit" value="Login">
                </div>
                <div class="footer">
                <p>By Carlos Nascimento</p><a target="_blank" href="https://github.com/carloscdf">GitHub</a>
            </div>
            </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<?php

?>