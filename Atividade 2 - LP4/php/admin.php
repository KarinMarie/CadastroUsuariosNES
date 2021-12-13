<?php

    if(session_status() !== PHP_SESSION_ACTIVE)
        session_start();
    

    if($_SESSION['adm'] == 1) $adm = 1;
    else $adm = 0;

    echo json_encode($adm);
    
?>