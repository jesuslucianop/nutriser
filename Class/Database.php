<?php
$connmysql= new mysqli("localhost", "root", "", "nutriser");
if ($connmysql->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $connmysql->connect_errno . ") " . $connmysql->connect_error;
}
