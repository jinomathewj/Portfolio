<?php

    $server_name = "localhost";
    $user_id = "root";
    $pw = "";
    $db_name = "agd_2020_sem";

    $connection = mysqli_connect($server_name, $user_id, $pw, $db_name);

    if(!$connection)
    {
        echo "ERROR";
    }
?>