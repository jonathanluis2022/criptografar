<?php

    $host = "localhost";
    $db = "login";
    $user = "root";
    $pass = "";
    $mysqli = new mysqli($host, $user, $pass, $db);
        
    if($mysqli->connect_errno) {
        die("Falha na conexão banco de dados "); //die para parar por ali
    }