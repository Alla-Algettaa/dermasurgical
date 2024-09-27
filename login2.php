<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 class="heading">List Of Doctors</h1>
    <?php
    include("connexion.php");
    include("BDoperations.php");
    $bdd = maConnexion();
    if (isset($_REQUEST['Email']) && !empty($_REQUEST['Email']))
        $Email = $bdd->quote(trim($_REQUEST['Email']));
    else die("<p>Donnez votre email</p>");
    if (isset($_REQUEST['Password']) && !empty($_REQUEST['Password']))
        $Password = $bdd->quote(md5(trim($_REQUEST['Password'])));
    else die("<p>Donnez motdepasse</p>");
    $sql = "SELECT * FROM doctors WHERE doctors.Email=$Email OR doctors.Password=$Password";
    //echo "<p>sql=$sql</p>";
    $resultat = $bdd->query($sql) or die("Problème de recherche" . $bdd->errorInfo()[2]);
    if ($resultat->rowCount() == 0) {
        echo ("<p>Doctor non exist</p>");
    } else {
        echo ("<p> successfully identified Doctors and Patients </p>");
        $doctor = $resultat->fetchObject();
        $_SESSION['FullName'] = $doctor->FullName;
        if ($_SESSION['FullName'] == "admin") {
            include("admin.php");
        } else {
			
            echo ("<p>Welcome Mme/M. " . $_SESSION['FullName']  . ", your session is open  .</p>");
        include("doctor.php");
		}
		
    }
    ?>
	
	
	
	
	
</body>

</html>