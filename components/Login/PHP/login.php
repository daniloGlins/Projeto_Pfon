<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="../CSS/login.css" <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="logo"><img src="../CSS/img/LogoOn.png" alt=""></div>
            <div class="logo2"><img src="../CSS/img/user1.png" alt=""></div>
            <div class="cadastro">
                <nav>
                    <a id="login" href="#">Login</a>
                </nav>
            </div>
        </div>
    </header>

    <section class="area-login">
        <div class="login">
            <div>
                <img src="../img/user1.png" alt="">

            </div>
            <form name="" method="post" action="">
                <input type="text" name="user" placeholder="E-mail" />
                <input type="password" name="pass" placeholder="Senha" />
                <input type="submit" name="submit" value="Logar!" />
            </form>
            <?php
            /* Declaração de Variáveis */
            $user = @$_REQUEST['user'];
            $pass = @$_REQUEST['pass'];
            $submit = @$_REQUEST['submit'];

            /* Declaração das variáveis que possuem os usuarios e as senhas */
            $user1 = 'Fernando';
            $pass1 = '3030';

            $user2 = 'Morgam';
            $pass2 = '9090';

            $user3 = 'Gabriel';
            $pass3 = '6060';

            /* Testa se o botão submit foi ativado */
            if ($submit) {

                /* Se o campo usuário ou senha estiverem vazios geramos um alerta */
                if ($user == "" || $pass == "") {
                    echo "<script>alert('Por favor, preencha todos os campos!');</script>";
                }
                /* Caso o campo usuario e senha não 
						*estejam vazios vamos testar se o usuário e a senha batem 
					*iniciamos uma sessão e redirecionamos o usuário para o painel */ else {
                    if (($user == $user1 && $pass == $pass1) || ($user == $user2 && $pass == $pass2) || ($user == $user3 && $pass == $pass3)) {
                        session_start();
                        $_SESSION['usuario'] = $user;
                        $_SESSION['senha'] = $pass;
                        header("Location: ../../Tela_Inicial/html/Tela_Inicial.html");
                    }
                    /* Se o usuario ou a senha não batem alertamos o usuario */ else {
                        echo "<script>alert('Usuário e/ou senha inválido(s), Tente novamente!');</script>";
                    }
                }
            }   
            ?>
            <p>Esqueceu a <a href="#">senha?</a></p>
            <p>Ainda não possui cadastro? <a href="#">Crie sua conta !</a> </p>

        </div>
    </section>


</html>