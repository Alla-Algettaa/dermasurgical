<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile doc</title>
	<link rel="stylesheet" href="style.css"/>
</head>
 
<body>

<header class="header fixed-top"> 
   <div class="container">
      <div class="row align-items-center justify-content-between">
		<a href="#home" class="logo">derma<span>surgical.</span></a>
		<nav class="nav">
			<a href="dermasurgical">Home</a>
						
		</nav>
      </div>
   </div>
</header>


    <script src="http://localhost/dermasurgical/formulair.js"></script>
<div class="profile">
    <?php
    include("connexion.php");
    include("BDoperations.php");

    $bdd = maConnexion();
    $code = $bdd->quote($_REQUEST['code']);
    $sql = "SELECT * FROM doctors WHERE CIN_Doc=" . $code;
	
    $reponse = $bdd->query($sql) or die($bdd->errorInfo()[2]);
    $resultat = $reponse->fetchObject();
    echo "<table border=0>";
    echo "<tr>
            <td rowspan=3><img src='$resultat->photo' height='123px'/></td>
            <td> <h1>$resultat->FullName</h1> </td>
            <td> </td>
        </tr>";
    echo "<tr>
                <td>$resultat->Specialty</td>
                <td> </td>
        </tr>";
    echo "<tr>
        <td rowspan=2> </td>
        
</tr>";
    echo "<tr>
            <td colspan=3 >$resultat->Profile</td>
        </tr>";
    echo "<tr>
            <td><h2>Contact :</h2></td>
        </tr>";
    echo "<tr>
            <td>PhoneNumber</td>
            <td>$resultat->PhoneNumber</td>
        </tr>";
    echo "<tr>
            <td>Email</td>
            <td>$resultat->Email</td>
        </tr>";
    echo "</table>";

    $bdd = null;

    ?>
	</div>
	</div>
</body>

</html>