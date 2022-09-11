<html>

<head>
    <link rel="stylesheet" href="php.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chico State University - Perfil</title>
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
</head>

<body>

    <div class="box">
        <div class="continer">

            <div class="logo">
                <img class="logoimg" src="assets/logo.svg" alt="Chico State University">
            </div>

            <?php
            /*Variáveis*/
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            //------------BANCO DE DADOS LOCAL------------ 

            //login1
            $name1 = 'Carlos Nascimento';
            $realemail1 = 'carloscdf@github.com';
            $realpass1 = 'carlos18';

            //login2
            $name2 = 'Parzival';
            $realemail2 = 'parzival@rpo.com';
            $realpass2 = 'parzival2';

            //login3
            $name3 = 'Coldplay';
            $realemail3 = 'coldplay@band.com';
            $realpass3 = 'coldplayparadise34';           

            //------------BANCO DE DADOS LOCAL------------ 


            if ($email == $realemail1 & $pass == $realpass1) {
                print "<div class='profile'><img class='profimg' src='assets/user1.png'></div>";
                print "<section class='title'><p>Olá, <b>$name1</b>!</p></section>";
                print "<div class='desc66'><p>Bem vindo de volta, acesse o seu perfil clicando no botão abaixo.</p></div>";
                print "<div class='button'><a id='link' href='index.php'>Acessar</a></div>";
            }
            else if ($email == $realemail2 & $pass == $realpass2) {
                print "<div class='profile'><img class='profimg' src='assets/user2.jpg'></div>";
                print "<section class='title'><p>Olá, <b>$name2</b>!</p></section>";
                print "<div class='desc66'><p>Bem vindo de volta, acesse o seu perfil clicando no botão abaixo.</p></div>";
                print "<div class='button'><a id='link' href='index.php'>Acessar</a></div>";
            }
            else if ($email == $realemail3 & $pass == $realpass3) {
                print "<div class='profile'><img class='profimg' src='assets/user3.jpg'></div>";
                print "<section class='title'><p>Olá, <b>$name3</b>!</p></section>";
                print "<div class='desc66'><p>Bem vindo de volta, acesse o seu perfil clicando no botão abaixo.</p></div>";
                print "<div class='button'><a id='link' href='index.php'>Acessar</a></div>";
            }
             else {
                print "<section><p>A sua conta não foi localizada no nosso banco de dados, por favor entre em contato com a administração do campus.</p></section>";
                print "<article><spam><b>Conta não encontrada!</b></spam></article>";
                print "<div class='button'><a id='link' href='index.php'>Página de Login</a></div>";
            }



            ?>

        </div>
    </div>
</body>

</html>