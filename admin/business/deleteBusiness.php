<?php 

$host="localhost";
$dbname="s_job";
$port="3306";
$charset="utf8";

$dsn = "mysql:host=".$host.";dbname=".$dbname.";port=".$port.";charset=".$charset;

$id_business = $_GET["id"];

try{
    $dbh = new PDO($dsn, "root","");
    $stmt = $dbh->prepare("DELETE FROM  business WHERE id_business =?;");

    $stmt->bindParam(1, $id_business);
    $stmt->execute();

    $business = $stmt->fetch();

    echo "supp en brrrr";


}catch(PDOException $error){
    echo $error->getMessage();
}

?>