<?php

    if(session_status() !== PHP_SESSION_ACTIVE)
        session_start();
    
    

    $sql = $pdo->prepare("SELECT logradouro_user FROM usuario WHERE `login` = ?");
    $sql->execute(array($_SESSION['login']));

    $_SESSION['logradouro'] = $sql->fetchColumn();

    $sql = $pdo->prepare("SELECT numero_user FROM usuario WHERE `login` = ?");
    $sql->execute(array($_SESSION['login']));

    $_SESSION['numero'] = $sql->fetchColumn();

    $sql = $pdo->prepare("SELECT complemento_user FROM usuario WHERE `login` = ?");
    $sql->execute(array($_SESSION['login']));

    $_SESSION['complemento'] = $sql->fetchColumn();

    $sql = $pdo->prepare("SELECT bairro_user FROM usuario WHERE `login` = ?");
    $sql->execute(array($_SESSION['login']));

    $_SESSION['bairro'] = $sql->fetchColumn();

    $sql = $pdo->prepare("SELECT cidade_user FROM usuario WHERE `login` = ?");
    $sql->execute(array($_SESSION['login']));

    $_SESSION['cidade'] = $sql->fetchColumn();

    $sql = $pdo->prepare("SELECT UF_user FROM usuario WHERE `login` = ?");
    $sql->execute(array($_SESSION['login']));

    $_SESSION['UF'] = $sql->fetchColumn();

    $sql = $pdo->prepare("SELECT CEP_user FROM usuario WHERE `login` = ?");
    $sql->execute(array($_SESSION['login']));

    $_SESSION['CEP'] = $sql->fetchColumn();

?>