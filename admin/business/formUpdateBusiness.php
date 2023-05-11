<?php 

$id = $_GET["id"];

$host="localhost";
$dbname= "s_job";
$port= "3306";
$charset= "UTF8";

$dsn ="mysql:host=".$host.";dbname=".$dbname.";port=".$port.";charset=".$charset;


try{

    $dbh = new PDO($dsn, "root", "");
    $stmt = $dbh->prepare("SELECT * FROM business where id_business = ?;");

    $stmt->bindParam(1, $id);
    $stmt->execute();

    $business = $stmt->fetch();


}
catch(PDOException $error){
    echo $error->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de modif</title>
</head>
<body>
<form action="./UpdateBusiness.php" method="post">

<input type="hidden" value="<?= $business["id_business"]?>" name="id">

<label for="name_business">Entrez le nom de votre entreprise</label>
<input type="text" name="name_business" id="name_business" value="<?=$business["name_business"]?>">

 
<label for="siret_number">Entrez votre numéro de siret</label>
<input type="number" id="siret_number" name="siret_number" placeholder="Numéro de siret" value="<?= $business["siret_number"]?>">



<input type="submit" name="update" id="update" value="update">



</form>
</body>
</html>