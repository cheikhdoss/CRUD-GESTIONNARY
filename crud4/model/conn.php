<?php


$serveur="localhost";
$port = "5432";
$user="postgres";
$pwd="1964";
$dbname="gestion";

$connexion = pg_connect("host=$serveur port=$port dbname=$dbname user=$user password=$pwd");






?>