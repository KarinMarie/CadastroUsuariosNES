<?php

    try
    {

        if(isset($_POST['login_deletar']) && $_SESSION['adm'] == 1)
        {

            $sql = $pdo->prepare("DELETE FROM usuario_acesso WHERE login = ?");
            $sql->execute(array($_POST['login_deletar']));

            $count = $sql->rowCount();

            if($count > 0)
                echo "<script>$(document).ready(function(){ document.getElementById('dialog-deletar').showModal(); });</script>";
            else
                echo "<script>$(document).ready(function(){ document.getElementById('dialog-deletar-fail').showModal(); });</script>";
        }
    }
    
    catch(PDOException $e)
    {
        die($e->getMessage());
    }
        
?>