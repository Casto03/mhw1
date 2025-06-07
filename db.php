<?php

$connection = mysqli_connect("localhost", "root", "", "hw");
if ($connection->connect_error) {
    die("Connessione fallita: " . $connection->connect_error);
}

?>