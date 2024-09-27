<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome..</title>
</head>

<body>
    <?php
    include("connexion.php");
    include("BDoperations.php");
    $bdd = maConnexion();
    if (isset($_REQUEST['FullName']) && !empty($_REQUEST['FullName'])) {
        $FullName = $bdd->quote(trim($_REQUEST['FullName']));
    } else die("<p>Donnez votre nom</p>");
    if (isset($_REQUEST['PhoneNumber']) && !empty($_REQUEST['PhoneNumber'])) {
        $PhoneNumber = $bdd->quote(trim($_REQUEST['PhoneNumber']));
    } else die("<p>Donnez votre numero PhoneNumber</p>");
    if (isset($_REQUEST['Email']) && !empty($_REQUEST['Email'])) {
        $Email = $bdd->quote(trim($_REQUEST['Email']));
    } else die("<p>Donnez Email</p>");
    if (isset($_REQUEST['appointmints']) && !empty($_REQUEST['appointmints'])) {
        $appointmints = $bdd->quote(trim($_REQUEST['appointmints']));
    } else die("<p>Donnez la date de votre rendez-vous</p>");

    addP(
        $bdd,
        $FullName,
        $PhoneNumber,
        $Email,
        $appointmints
    );
    ?>
</body>

</html>
