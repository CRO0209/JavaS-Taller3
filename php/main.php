<?php

# Conexion a la base de datos #
function conexion()
{
    $pdo = new PDO('mysql:host=localhost;dbname=id21559089_taller3', 'id21559089_root', 'Carlsd02..');
    return $pdo;
}


