<?php
if(isset($_POST["update"])){

$id_business = $_POST["id"];
$name_business = $_POST["name_business"];
// $email = $_POST["email"];
// $password = $_POST["password"];
$siret_number = $_POST["siret_number"];
// $street_number = $_POST["street_number"];
// $street_name = $_POST["street_name"];
// $siret_number = (int)$siret_number;

$host = "localhost";
$dbname = "s_job";
$port="3306";
$charset = "utf8";

$dsn = "mysql:host=".$host.";dbname=".$dbname.";port=".$port.";charset=".$charset;

try{

$dbh = new PDO($dsn, "root", "");
$stmt = $dbh->prepare( "UPDATE business SET name_business=?, siret_number=? WHERE id_business=?");

$stmt->bindParam(1, $name_business);
$stmt->bindParam(2, $siret_number);
$stmt->bindParam(3, $id_business);

// $stmt->bindParam(3, $email);
// $stmt->bindParam(4, $password);

// $stmt->bindParam(6, $street_number);
// $stmt->bindParam(7, $street_name);


$stmt->execute();


}
catch(PDOException $error){
    echo $error->getMessage();
}}
?>