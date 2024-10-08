<?php
$servername = "localhost:3306";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=sistema",$username,$password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e){
    echo "Falha na conexão" . $e->getMessage();
}
?>

