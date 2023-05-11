<?php 

$id = $_GET["id"];

$host="localhost";
$dbname="s_job";
$port="3306";
$charset="utf8";

$dsn = "mysql:host=".$host.";dbname=".$dbname.";port=".$port.";charset=".$charset;

try{
    $dbh = new PDO($dsn, "root", "");
    // $stmt = $dbh->query("SELECT *
    // FROM business
    // INNER JOIN `user` ON business.id_business = `id_user` ;");
    // $stmt = $dbh->prepare("SELECT * FROM business WHERE id_business= ?");
    $stmt = $dbh->prepare("SELECT * FROM business WHERE id_business= ?");
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
    <title>Read Business</title>
</head>
<body>
    <section>
        <div>
            <ul>
                <li><?php echo $business["name_business"]?></li>
                <li><?php echo $business["siret_number"]?></li>
            </ul>
            <a href="./formUpdateBusiness.php?id=<?= $business["id_business"]?>">Modifier</a>
            <a href="./deleteBusiness.php?id=<?= $business["id_business"]?>">Suppr</a>
        </div>
    </section>
</body>
</html>