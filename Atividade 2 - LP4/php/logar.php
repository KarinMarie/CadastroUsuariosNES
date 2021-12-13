<?php

    if(session_status() !== PHP_SESSION_ACTIVE)
        session_start();

    include("bd.php");
    $pdo = conecta();

    try
    {

        if(isset($_POST['login_login']) AND isset($_POST['senha_login']))
        {

            $sql = $pdo->prepare("SELECT COUNT(*) FROM usuario_acesso WHERE `login` = ? AND senha_acesso = ?");
            $sql->execute(array($_POST['login_login'], $_POST['senha_login']));

            $numero_linhas = $sql->fetchColumn();

            if($numero_linhas == 1)
            {
                if (session_status() !== PHP_SESSION_ACTIVE)
                    session_start();

                $_SESSION['login'] = $_POST['login_login'];
                $_SESSION['senha'] = $_POST['senha_login'];

                $sql = $pdo->prepare("SELECT email_acesso FROM usuario_acesso WHERE `login` = ? AND senha_acesso = ?");
                $sql->execute(array($_POST['login_login'], $_POST['senha_login']));
                
                $_SESSION['email'] = $sql->fetchColumn();
        
                $sql = $pdo->prepare("SELECT administrador FROM usuario_acesso WHERE `login` = ? AND senha_acesso = ?");
                $sql->execute(array($_POST['login_login'], $_POST['senha_login']));

                $_SESSION['adm'] = $sql->fetchColumn();

                include("atualizarsession.php");

                echo "<script>$(document).ready(function(){ document.getElementById('dialog-logar').showModal(); });</script>";
            }

            else
            {
                echo "<script>$(document).ready(function(){ document.getElementById('dialog-logar-fail').showModal(); });</script>";
            }
        }
    }
    
    catch(PDOException $e)
    {
        die($e->getMessage());
    }

?>