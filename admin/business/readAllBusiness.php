<?php 

$host = "localhost";
$dbname= "s_job";
$port = "3306";
$charset="utf8";

$dsn= "mysql:host=".$host.";dbname=".$dbname.";port=".$port.";charset=".$charset;

try{
    $dbh = new PDO($dsn, "root", "");

    $stmt = $dbh->query("SELECT * FROM business;");

    $businessa = $stmt->fetchAll();

    // $stmt = $dbh->query("SELECT * FROM `address`;");

    // $addressa = $stmt->fetchAll();

    // $stmt = $dbh->query("SELECT * FROM user;");

    // $usera = $stmt->fetchAll();


//  $stmt = $dbh->query("SELECT *
//  FROM user
//  INNER JOIN `business` ON user.id_user = `id_business` ;");



//  $businessa= $stmt->fetchAll();


}catch(PDOException $error){
    echo $error->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALL BUSINESS</title>
</head>
<body>
    <section>
        <?php foreach($businessa as $business):?>
            <div>
                <ul>
                    <li><?= $business["name_business"];?></li>
                    <li><?= $business["siret_number"];?></li>
                </ul>
                <a href="./readBusiness.php?id=<?= $business["id_business"]?>">Voir detail</a>
                <a href="./formUpdateBusiness.php?id=<?= $business["id_business"]?>">Modifier</a>
                <a href="./deleteBusiness.php?id=<?= $business["id_business"]?>">Suppr</a>
            </div>

            <?php endforeach; ?>

        
    </section>
</body>
</html>