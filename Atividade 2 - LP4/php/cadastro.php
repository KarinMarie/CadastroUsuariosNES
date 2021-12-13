<?php

    try
    {
        if(isset($_POST['login_cad']) && $_SESSION['adm'] == 1)
        {

            $sql = $pdo->prepare("INSERT INTO usuario_acesso(`login`, senha_acesso, email_acesso, administrador) VALUES (?, ?, ?, 0)");
            $sql->execute(array($_POST['login_cad'], $_POST['senha_cad'], $_POST['email_cad']));

            $sql = $pdo->prepare("INSERT INTO usuario(`login`, nome_user, data_nasc_user, sexo_user, logradouro_user, numero_user, complemento_user, bairro_user, cidade_user, UF_user, CEP_user) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $sql->execute(array($_POST['login_cad'], $_POST['nome_cad'], $_POST['dataNasc_cad'], $_POST['sexo_cad'], $_POST['logradouro_cad'], $_POST['numero_cad'], $_POST['complemento_cad'], $_POST['bairro_cad'], $_POST['cidade_cad'], $_POST['estado_cad'], $_POST['CEP_cad']));

            echo "<script>$(document).ready(function(){ document.getElementById('dialog-cadastro').showModal(); });</script>";
            
        }
    }
    
    catch(PDOException $e)
    {
        echo "<script>$(document).ready(function(){ document.getElementById('dialog-cadastro-fail').showModal(); });</script>";
    }

?>