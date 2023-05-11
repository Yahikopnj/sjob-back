<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Business</title>
</head>
<body>
    <form action="createBusiness.php" method="post">

    <label for="name_business">Entrez le nom de votre entreprise</label>
    <input type="text" name="name_business" id="name_business">


    <label for="siret_number">Entrez votre numéro de siret</label>
    <input type="number" id="siret_number" name="siret_number" placeholder="Numéro de siret">


    <input type="submit" name="register" id="register">



    </form>
</body>
</html>