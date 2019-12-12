<?php
    header('Content-type: text/html; charset=utf-8');

    $server = localgost;
    $username = u0879673_pfumiko;
    $password = 6130360Ghbdtn;
    $database = u0879673_registr-pfumiko;

    $mysqli = new mysqli($server, $username, $password, $database);

    //Проверяем статус подключения к БД
    if (mysqli_connect_errno()) {
        echo "<p><strong>Error connect database</strong>. Log error:"+mysqli_connect_errno()."</p>";
        exit();
    }

    $mysqli->set_charset('utf8');

    $address_site = "http://pfumiko.ru";
    ?>