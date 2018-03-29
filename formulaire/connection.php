<?php

$server="localhost";
$login="root";
$passwd="";
$dbname="school";
$con =new PDO('mysql:host='.$server.';dbname='.$dbname.';charset=utf8',$login,$passwd);

?>