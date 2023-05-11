<?php

if(isset($_POST["register"])){

$name_business = $_POST["name_business"];
// $email = $_POST["email"];
// $password = $_POST["password"];
// $street_name = $_POST["street_name"];
$siret_number = $_POST["siret_number"];
// $street_number= $_POST["street_number"];

$host = "localhost";
$dbname = "s_job";
$port = "3306";
$dsn = "mysql:host=".$host.";dbname=".$dbname.";port=".$port.";charset=utf8";

try{
    $dbh = new PDO($dsn, "root", "");
    $requete = $dbh->prepare("INSERT INTO business(name_business, siret_number)
    VALUES(?, ?)");
$requete->bindParam(1, $name_business);
$requete->bindParam(2, $siret_number);

$requete->execute();


echo "succès";


}catch(PDOException $exception){
echo $exception->getMessage();
}}


?>