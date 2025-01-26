<?php
    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION['ID'])){
        die("Você não está logado");
    }

?>
