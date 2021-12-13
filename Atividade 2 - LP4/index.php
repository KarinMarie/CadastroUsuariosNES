<?php
    if(session_status() !== PHP_SESSION_ACTIVE)
        session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in</title>
    <link href="css/nes.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="img/favicon.ico" rel="icon" type="image/x-icon">
    <script src="js/jquery-3.6.0.min.js"></script>

</head>

<body>

    <?php include('php/logar.php') ?>

    <div id="nescss">

        <header :class="{ sticky: scrollPos > 50 }">
            <div class="container">
                <div class="nav-brand">
                    <a href="">
                        <h1><i class="nes-icon is-medium star"></i> Cadastro de Usuários</h1>
                    </a>
                    <p>Marie e Fernanda</p>
                </div>
            </div>
        </header>

        <div class="container">
            <main class="main-content">

                <section class="nes-container with-title">

                    <h3 class="title">Log-in</h3>

                    <form id="form_login" method="POST">

                        <div class="nes-field">
                            <label>Login:</label>
                            <input type="text" name="login_login" class="nes-input">
                        </div>

                        <br><br>

                        <div class="nes-field">
                            <label>Senha:</label>
                            <input type="password" name="senha_login" class="nes-input">
                        </div>

                        <br><br>

                        <!-- <button type="button" class="nes-btn is-success">Logar</button> -->
                        <input type="submit" class="nes-btn is-success" value="Logar">
                        

                    </form>

                </section>

                <br><br>

                <div id="icons_bottom">

                    <p>

                    <i class="nes-mario" title="Oi!"></i>
                    <i class="nes-ash" title="Olá!"></i>
                    <i class="nes-pokeball" title="Oi!"></i>
                    <i class="nes-bulbasaur" title="Olá!"></i>
                    <i class="nes-charmander" title="Oi!"></i>
                    <i class="nes-squirtle" title="Olá!"></i>
                    <i class="nes-kirby" title="Oi!"></i>

                    </p>

                </div>


            </main>
        </div>

    </div>

    <dialog class="nes-dialog is-rounded" id="dialog-logar">
        <form method="dialog">
        <p>Login realizado com sucesso!</p>
        <menu class="dialog-menu">
            <button class="nes-btn is-primary" onclick="window.location='main.php'">Ok</button>
        </menu>
        </form>
    </dialog>

    <dialog class="nes-dialog is-rounded" id="dialog-logar-fail">
        <form method="dialog">
        <p>Login inválido, tente novamente.</p>
        <menu class="dialog-menu">
            <button class="nes-btn is-primary">Ok</button>
        </menu>
        </form>
    </dialog>

</body>

</html>