<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>

<body>
    <?php
    include("connexion.php");
    include("BDoperations.php");
	//include("admin.php");
    $bdd = maConnexion();
    if (isset($_REQUEST['FullName']) && !empty($_REQUEST['FullName'])) {
        $FullName = $bdd->quote(trim($_REQUEST['FullName']));
    } else die("<p>Donnez votre FullName</p>");
	
    if (isset($_REQUEST['Specialty']) && !empty($_REQUEST['Specialty'])) {
        $Specialty = $bdd->quote(trim($_REQUEST['Specialty']));
    } else die("<p>Donnez votre Specialty</p>");
	
	    if (isset($_REQUEST['Email']) && !empty($_REQUEST['Email'])) {
        $Email = $bdd->quote(trim($_REQUEST['Email']));
    } else die("<p>Donnez Email</p>");
	
	
    if (isset($_REQUEST['PhoneNumber']) && !empty($_REQUEST['PhoneNumber'])) {
        $PhoneNumber = $bdd->quote(trim($_REQUEST['PhoneNumber']));
    } else die("<p>Donnez votre numero PhoneNumber</p>");
	
	if (isset($_REQUEST['Password']) && !empty($_REQUEST['Password'])) {
        $Password = $bdd->quote(md5(trim($_REQUEST['Password'])));
    } else die("<p>Donnez votre Password</p>");	
	
    if (isset($_REQUEST['Profile']) && !empty($_REQUEST['Profile'])) {
        $Profile = $bdd->quote(trim($_REQUEST['Profile']));
    } else die("<p>Donnez une description de votre Profile</p>");
	
    if (isset($_REQUEST['SocialMedia']) && !empty($_REQUEST['SocialMedia'])) {
        $SocialMedia = $bdd->quote(trim($_REQUEST['SocialMedia']));
    } else die("<p>Donnez les lien de votre Social Media</p>");
	
    if (isset($_REQUEST['photo']) && !empty($_REQUEST['photo'])) {
        $photo = $bdd->quote(trim($_REQUEST['photo']));
	}


    if (isset($_REQUEST['Password']) && !empty($_REQUEST['Password'])) {
        $Password = $bdd->quote(md5(trim($_REQUEST['Password'])));
    } else die("<p>Donnez votre Password</p>");	
    $Date = $bdd->quote(date("Y-m-d H:i:s"));
    addDoc(
        $bdd,
        $FullName,
        $Specialty,
        $Email,
        $PhoneNumber,
        $Password,
        $Profile,
        $Date,
        $SocialMedia,
		$photo,
    );
	
?>
</body>
</html>