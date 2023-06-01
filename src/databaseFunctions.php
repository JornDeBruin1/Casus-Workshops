<?php
require_once('../src/db.php');

function db_connect()
{
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    return $conn;
}

function db_getData($query)
{
    $mysqli = db_connect();
    $result = $mysqli->query($query);
    $mysqli->close();
    return $result;
}
?>