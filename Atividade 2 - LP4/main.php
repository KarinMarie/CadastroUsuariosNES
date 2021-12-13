<?php
    if(session_status() !== PHP_SESSION_ACTIVE)
        session_start();

    if(!isset($_SESSION['login']))
    {
        header("location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link href="css/nes.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="img/favicon.ico" rel="icon" type="image/x-icon">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
</head>

<body>

    <?php
        include("php/bd.php");
        $pdo = conecta();
    ?>

    <?php include("php/cadastro.php") ?>
    <?php include("php/deletar.php") ?>
    <?php include("php/atualizar.php") ?>


    <div id="nescss2">

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

                <div id="left-side">

                    <ul class="no-dot">
                        <li id="btn-usuarios"><a class="nes-btn is-warning" href="#" title="Cadastre ou apague usuários">Usuários&nbsp;</a></li>
                        <li id="btn-conta"><a class="nes-btn is-success" href="#">Conta&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                        <li class="nothing"><a class="nes-btn" href="#">Turmas&nbsp;&nbsp;&nbsp;</a></li>
                        <li class="nothing"><a class="nes-btn" href="#">Temas&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                        <li class="nothing"><a class="nes-btn" href="#">Palavras&nbsp;</a></li>
                        <li class="nothing"><a class="nes-btn" href="#">Perguntas</a></li>
                        <li><a class="nes-btn is-primary" href="index.php">Voltar&nbsp;&nbsp;&nbsp;</a></li>
                        <li>
                            <form action="php/deslogar.php">
                                <input id="btn-sair" class="nes-btn is-error"title="Deslogar da sessão e ir à página de log-in" type="submit" value="Sair&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;">
                            </form>
                        </li>
                    </ul>

                </div>

                <div class="nes-container is-rounded right-side" id="principal">
                    <section class="message -left">
                        <p class="nes-balloon from-left">Selecione um menu ao lado</p>
                        <br>
                        <i class="nes-kirby"></i>
                    </section>
                </div>

                <div class="nes-container is-rounded right-side" id="menu_nada">
                    <section class="message -left">
                        <p class="nes-balloon from-left">Nada por aqui...</p>
                        <br>
                        <i class="nes-charmander"></i>
                    </section>
                </div>

                <div class="nes-container is-rounded right-side" id="usuarios">
                    
                    <button type="button" class="nes-btn is-success" id="btn-usuarios-cadastrar">Cadastrar Usuário</button>
                    <button type="button" class="nes-btn is-error" id="btn-usuarios-deletar">Deletar Usuário</button>
                    
                </div>


                <div class="nes-container is-rounded right-side" id="usuarios_cadastrar">

                    <form id="form_cadastro" method="post">

                        <div class="nes-field">
                            <label>Login:</label>
                            <input type="text" name="login_cad" class="nes-input" required>
                        </div>

                        <br><br>

                        <div class="nes-field">
                            <label>Nome:</label>
                            <input type="text" name="nome_cad" class="nes-input" required>
                        </div>

                        <br><br>

                        <div class="nes-field">
                            <label>E-mail:</label>
                            <input type="text" name="email_cad" class="nes-input" required>
                        </div>

                        <br><br>

                        <div class="nes-field">
                            <label>Senha:</label>
                            <input type="password" name="senha_cad" class="nes-input" required>
                        </div>

                        <br><br>

                        <div class="nes-field">
                            <label>Data de Nascimento:</label>
                            <input type="date" name="dataNasc_cad" class="nes-input" required>
                        </div>

                        <br><br>

                        <div class="nes-field">
                            <label>Sexo:</label>
                            <label>
                                <input type="radio" class="nes-radio" name="sexo_cad" checked value="F" required>
                                <span>Feminino</span>
                            </label>

                            <label>
                                <input type="radio" class="nes-radio" name="sexo_cad" value="M" required>
                                <span>Masculino</span>
                            </label>

                            <label>
                                <input type="radio" class="nes-radio" name="sexo_cad" value="O" required>
                                <span>Outro</span>
                            </label>
                        </div>

                        <br><br>

                        <div class="nes-field">
                            <label>Logradouro:</label>
                            <input type="text" name="logradouro_cad" class="nes-input" required>
                        </div>

                        <br><br>

                        <div class="nes-field">
                            <label>Número:</label>
                            <input type="number" name="numero_cad" class="nes-input" min="0" max="1000" required>
                        </div>

                        <br><br>

                        <div class="nes-field">
                            <label>Complemento:</label>
                            <input type="text" name="complemento_cad" class="nes-input">
                        </div>

                        <br><br>

                        <div class="nes-field">
                            <label>Bairro:</label>
                            <input type="text" name="bairro_cad" class="nes-input" required>
                        </div>

                        <br><br>

                        <div class="nes-field">
                            <label>Cidade:</label>
                            <input type="text" name="cidade_cad" class="nes-input" required>
                        </div>

                        <br><br>

                        <label>Estado</label>
                        <div class="nes-select">
                            <select required name="estado_cad">
                                <option value="" disabled selected hidden>Selecione sua UF...</option>
                                <option value="Acre (AC)">Acre (AC)</option>
                                <option value="Alagoas (AL)">Alagoas (AL)</option>
                                <option value="Amapá (AP)">Amapá (AP)</option>
                                <option value="Amazonas (AM)">Amazonas (AM)</option>
                                <option value="Bahia (BA)">Bahia (BA)</option>
                                <option value="Ceará (CE)">Ceará (CE)</option>
                                <option value="Espírito Santo (ES)">Espírito Santo (ES)</option>
                                <option value="Goiás (GO)">Goiás (GO)</option>
                                <option value="Maranhão (MA)">Maranhão (MA)</option>
                                <option value="Mato Grosso (MT)">Mato Grosso (MT)</option>
                                <option value="Mato Grosso do Sul (MS)">Mato Grosso do Sul (MS)</option>
                                <option value="Minas Gerais (MG)">Minas Gerais (MG)</option>
                                <option value="Pará (PA)">Pará (PA)</option>
                                <option value="Paraíba (PB)">Paraíba (PB)</option>
                                <option value="Paraná (PR)">Paraná (PR)</option>
                                <option value="Pernambuco (PE)">Pernambuco (PE)</option>
                                <option value="Piauí (PI)">Piauí (PI)</option>
                                <option value="Rio de Janeiro (RJ)">Rio de Janeiro (RJ)</option>
                                <option value="Rio Grande do Norte (RN)">Rio Grande do Norte (RN)</option>
                                <option value="Rio Grande do Sul (RS)">Rio Grande do Sul (RS)</option>
                                <option value="Rondônia (RO)">Rondônia (RO)</option>
                                <option value="Roraima (RR)">Roraima (RR)</option>
                                <option value="Santa Catarina (SC)">Santa Catarina (SC)</option>
                                <option value="São Paulo (SP)">São Paulo (SP)</option>
                                <option value="Sergipe (SE)">Sergipe (SE)</option>
                                <option value="Tocantins (TO)">Tocantins (TO)</option>
                            </select>
                        </div>

                        <br><br>

                        <div class="nes-field">
                            <label>CEP:</label>
                            <input type="text" name="CEP_cad" class="nes-input" required>
                        </div>

                        <br><br>

                        <input type="submit" class="nes-btn is-success" value="Cadastrar Usuário">

                    </form>

                </div>

                <div class="nes-container is-rounded right-side" id="usuarios_deletar">

                    <form id="form_deletar" method="post">

                        <div class="nes-field">
                            <label>Login:</label>
                            <input type="text" name="login_deletar" class="nes-input" required>
                        </div>

                        <br><br>

                        <button type="submit" class="nes-btn is-error">Deletar Usuário</button>

                    </form>

                </div>

                <div class="nes-container is-rounded right-side" id="conta">

                    <form id="form_atualizar" method="post">

                        <h2>Atualizar Dados da Conta</h2>
                        
                        <br>

                        <div class="nes-field">
                            <label>Logradouro:</label>
                            <input type="text" name="logradouro_att" value="<?php if(isset($_SESSION['logradouro'])) echo $_SESSION['logradouro'] ?>" class="nes-input" required>
                        </div>

                        <br><br>

                        <div class="nes-field">
                            <label>Número:</label>
                            <input type="number" name="numero_att" value="<?php if(isset($_SESSION['numero'])) echo $_SESSION['numero'] ?>" class="nes-input" min="0" max="1000" required>
                        </div>

                        <br><br>

                        <div class="nes-field">
                            <label>Complemento:</label>
                            <input type="text" name="complemento_att" value="<?php if(isset($_SESSION['complemento'])) echo $_SESSION['complemento'] ?>" class="nes-input">
                        </div>

                        <br><br>

                        <div class="nes-field">
                            <label>Bairro:</label>
                            <input type="text" name="bairro_att" value="<?php if(isset($_SESSION['bairro'])) echo $_SESSION['bairro'] ?>" class="nes-input" required>
                        </div>

                        <br><br>

                        <div class="nes-field">
                            <label>Cidade:</label>
                            <input type="text" name="cidade_att" value="<?php if(isset($_SESSION['cidade'])) echo $_SESSION['cidade'] ?>" class="nes-input" required>
                        </div>

                        <br><br>

                        <label>Estado</label>
                        <div class="nes-select">
                            <select required name="estado_att">
                                <option value="" disabled selected hidden>Selecione sua UF...</option>
                                <option value="Acre (AC)">Acre (AC)</option>
                                <option value="Alagoas (AL)">Alagoas (AL)</option>
                                <option value="Amapá (AP)">Amapá (AP)</option>
                                <option value="Amazonas (AM)">Amazonas (AM)</option>
                                <option value="Bahia (BA)">Bahia (BA)</option>
                                <option value="Ceará (CE)">Ceará (CE)</option>
                                <option value="Espírito Santo (ES)">Espírito Santo (ES)</option>
                                <option value="Goiás (GO)">Goiás (GO)</option>
                                <option value="Maranhão (MA)">Maranhão (MA)</option>
                                <option value="Mato Grosso (MT)">Mato Grosso (MT)</option>
                                <option value="Mato Grosso do Sul (MS)">Mato Grosso do Sul (MS)</option>
                                <option value="Minas Gerais (MG)">Minas Gerais (MG)</option>
                                <option value="Pará (PA)">Pará (PA)</option>
                                <option value="Paraíba (PB)">Paraíba (PB)</option>
                                <option value="Paraná (PR)">Paraná (PR)</option>
                                <option value="Pernambuco (PE)">Pernambuco (PE)</option>
                                <option value="Piauí (PI)">Piauí (PI)</option>
                                <option value="Rio de Janeiro (RJ)">Rio de Janeiro (RJ)</option>
                                <option value="Rio Grande do Norte (RN)">Rio Grande do Norte (RN)</option>
                                <option value="Rio Grande do Sul (RS)">Rio Grande do Sul (RS)</option>
                                <option value="Rondônia (RO)">Rondônia (RO)</option>
                                <option value="Roraima (RR)">Roraima (RR)</option>
                                <option value="Santa Catarina (SC)">Santa Catarina (SC)</option>
                                <option value="São Paulo (SP)">São Paulo (SP)</option>
                                <option value="Sergipe (SE)">Sergipe (SE)</option>
                                <option value="Tocantins (TO)">Tocantins (TO)</option>
                            </select>
                        </div>

                        <br><br>

                        <div class="nes-field">
                            <label>CEP:</label>
                            <input type="text" name="CEP_att" value="<?php if(isset($_SESSION['CEP'])) echo $_SESSION['CEP'] ?>" class="nes-input" required>
                        </div>
                        

                        <br><br>

                        <button type="submit" class="nes-btn is-success">Atualizar Dados</button>

                    </form>

                </div>

            </main>
        </div>

    </div>

    <dialog class="nes-dialog is-rounded" id="dialog-cadastro">
        <form method="dialog">
        <p>Cadastro realizado com sucesso.</p>
        <menu class="dialog-menu">
            <button class="nes-btn is-primary">Ok</button>
        </menu>
        </form>
    </dialog>

    <dialog class="nes-dialog is-rounded" id="dialog-cadastro-fail">
        <form method="dialog">
        <p>Erro na realização do cadastro.</p>
        <menu class="dialog-menu">
            <button class="nes-btn is-primary">Ok</button>
        </menu>
        </form>
    </dialog>

    <dialog class="nes-dialog is-rounded" id="dialog-deletar">
        <form method="dialog">
        <p>Cadastro deletado com sucesso.</p>
        <menu class="dialog-menu">
            <button class="nes-btn is-primary">Ok</button>
        </menu>
        </form>
    </dialog>

    <dialog class="nes-dialog is-rounded" id="dialog-deletar-fail">
        <form method="dialog">
        <p>Erro em deletar cadastro.</p>
        <menu class="dialog-menu">
            <button class="nes-btn is-primary">Ok</button>
        </menu>
        </form>
    </dialog>

    <dialog class="nes-dialog is-rounded" id="dialog-atualizar">
        <form method="dialog">
        <p>Atualização realizada com sucesso.</p>
        <menu class="dialog-menu">
            <button class="nes-btn is-primary">Ok</button>
        </menu>
        </form>
    </dialog>

    <dialog class="nes-dialog is-rounded" id="dialog-atualizar-fail">
        <form method="dialog">
        <p>Erro em atualizar cadastro.</p>
        <menu class="dialog-menu">
            <button class="nes-btn is-primary">Ok</button>
        </menu>
        </form>
    </dialog>

</body>

</html>