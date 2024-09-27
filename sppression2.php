<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>suppression...</title>
</head>

<body>
    <?php
    include("connexion.php");

    $bdd = maConnexion();
    $code = $bdd->quote($_REQUEST['code']);
    $sql = "DELETE FROM Patients WHERE CIN_P=" . $code;
    $nblignes = $bdd->exec($sql);
    if ($nblignes != 1) {
        die("<p> Impossible d'effectuer la requete!" . $bdd->errorInfo()[2] . "</p>");
    } else {
        echo "suppression success";
        echo "<script>";
        echo "window.location.replace('BDoperations.php')";
        echo "</script>";
    }
    $bdd = null;
    ?>

</body>

</html>
