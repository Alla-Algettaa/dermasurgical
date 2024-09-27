<!DOCTYPE html>
<html>
<head>
<title>dermasurgical</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="style.css">
</head>
<body>
<script src="http://localhost/dermasurgical/formulair.js"></script>
<?php


function affichageDoc($bdd, $CIN_Doc)
    {
        $sql = "SELECT * FROM doctors WHERE CIN_Doc=" . $CIN_Doc;
        $reponse = $bdd->query($sql) or die($bdd->errorInfo()[2]);
        $resultat = $reponse->fetchObject();
		echo "<p>".$resultat->Profile."</p>"."<div class='stars'>
            <i class='fas fa-star'></i>
            <i class='fas fa-star'></i>
            <i class='fas fa-star'></i>
            <i class='fas fa-star'></i>
            <i class='fas fa-star'></i>
         </div>"."<a href='#' onClick='consulterProfile($CIN_Doc)'><h3>".$resultat->FullName."</h3></a>"."<span>".$resultat->Specialty."</span>";
        
    }

function affichageDocs($bdd){
    $sql = "SELECT * FROM doctors order by CIN_Doc";
    $response = $bdd->query($sql) or die($bdd->errorInfo()[2]);
    if ($response->rowCount() > 0) {
        echo "<table >
                <tr>
                <th>FullName</th>
                <th>Specialty</th>
                <th>Email</th>
                <th>PhoneNumber</th>
                <th>Profile</th>
                <th>Date</th>
				<th>SocialMedia</th>
                </tr>";
        while ($ligne = $response->fetchObject()) {
            echo "<tr>";
            echo "<td>$ligne->FullName</td>";
            echo "<td> $ligne->Specialty</td>";
            echo "<td>$ligne->Email</td>";
            echo "<td>$ligne->PhoneNumber</td>";
            echo "<td>$ligne->Profile</td>";
            echo "<td>$ligne->Date</td>";
			echo "<td>$ligne->SocialMedia</td>";
			
			echo "<td><a href='#' onClick='confirme($ligne->CIN_Doc)'>❌</a>
                <a href='#' onClick='consulterProfile($ligne->CIN_Doc)'>👤</a>
                <a>🔄</a></td>";
			
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "la table est vide";
    }
}

function affichageP($bdd, $CIN_P)
    {
        $sql = "SELECT * FROM patients WHERE CIN_P=" . $CIN_P;
        $reponse = $bdd->query($sql) or die($bdd->errorInfo()[2]);
        $resultat = $reponse->fetchObject();
		echo "<h3>".$resultat->FullName."</h3>"."<span>".$resultat->Email."</span>"
		."<span>".$resultat->PhoneNumber."</span>"."<span>".$resultat->appointments."</span>";
        
    }



function affichagePs($bdd){
    $sql = "SELECT * FROM patients order by CIN_P";
    $response = $bdd->query($sql) or die($bdd->errorInfo()[2]);
    if ($response->rowCount() > 0) {
        echo "<table border=1>
                <tr>
                <th>FullName</th>                
                <th>Email</th>
                <th>PhoneNumber</th>                
                <th>appointments</th>
                </tr>";
        while ($ligne = $response->fetchObject()) {
            echo "<tr>";
            echo "<td>$ligne->FullName</td>";           
            echo "<td>$ligne->Email</td>";
            echo "<td>$ligne->PhoneNumber</td>";
            echo "<td>$ligne->appointments</td>";			
			echo "<td><a href='#' onClick='confirme2($ligne->CIN_P)'>❌</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "la table est vide";
    }
}

//ajout d'un nouveau docteur(form d'inscription d'un doc)

function addDoc(
    $bdd,
    $FullName,
    $Specialty,
    $Email,
    $PhoneNumber,
    $Password,
    $Profile,
    $Date,
    $SocialMedia,
    $photo
) {
    $sql = "SELECT doctors.FullName FROM doctors WHERE doctors.FullName=$FullName";
    $resultat = $bdd->query($sql) or die($bdd->errorInfo()[2]);
    if ($resultat->rowCount() == 0) {
        $sql2 = "INSERT INTO doctors VALUES (NULL,$FullName,$Specialty,$Profile,$PhoneNumber,$Email,$SocialMedia,$Password,$Date,$photo)";
        $nblignes = $bdd->exec($sql2);
        if ($nblignes == 1) {
            echo "enregistrement ajouté avec succés";
        } else {
            echo "erreur:enregigtrement existant!";
        }
        $bdd = null;
    }
}



function addP(
    $bdd,
    $FullName,   
    $Email,
    $PhoneNumber,
    $appointmints,
) {
    $sql = "SELECT patients.FullName FROM patients WHERE patients.FullName=$FullName";
    $resultat = $bdd->query($sql) or die($bdd->errorInfo()[2]);
    if ($resultat->rowCount() == 0) {
        $sql2 = "INSERT INTO patients VALUES (NULL,$FullName,$PhoneNumber,$Email,$appointmints)";
        $nblignes = $bdd->exec($sql2);
        if ($nblignes == 1) {
            echo "enregistrement ajouté avec succés";
        } else {
            echo "erreur:enregigtrement existant!";
        }
        $bdd = null;
    }
}


//recherche doc selon nom
function rechercheNom($bdd, $FullName){
	$requete = "SELECT * FROM doctors WHERE (doctors.FullName =$FullName) ORDER BY CIN_Doc";
        $reponse = $bdd->query($requete) or die($bdd->errorInfo()[2]);
        echo "<br/>";
		echo "<h3>Click on the Name below: </h3>";
        echo "<ol>";
        while ($ligne = $reponse->fetchObject()) {
            echo "<li>";
            echo $ligne->FullName;
		    echo "</li>";
        }
        echo "</ol>";
    }    
    
        
	
?>
</body>
</html>

