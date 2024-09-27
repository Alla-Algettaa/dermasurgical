<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add Doc</title>
</head>

<body>
<section class="add" id="add">
 <h1>ADD DOCTORS</h1>
    <form action="http://localhost/web%20avance/php&sql/projet/Db/ajoutDoc2.php" method="POST">
        <fieldset>
            <legend>doctor</legend>
			
            <table>
                <tr>
                    <td>FullName</td>
                    <td><input type="text" name="FullName"></td>
                </tr>
				
                <tr>
                    <td>Specialty</td>
                    <td><input type="text" name="Specialty"></td>
                </tr>
				
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="Email"></td>
                </tr>
				
                <tr>
                    <td>PhoneNumber</td>
                    <td><input type="text" name="PhoneNumber"></td>
                </tr>
				
				<tr>
                    <td>Password</td>
                    <td><input type="password" name="Password"></td>
                </tr>
				
				<tr>
                    <td>Profile</td>
                    <td><input type="text" name="Profile"></td>
                </tr>
				
				<tr>
                    <td>Date</td>
                    <td><input type="date" name="Date"></td>
                </tr>
				
				<tr>
                    <td>SocialMedia</td>
                    <td><input type="text" name="SocialMedia"></td>
                </tr>
				
                <tr>
                    <td colspan="2">
                        <input type="submit" value="add">
                    </td>
                </tr>
            </table>
        </fieldset>
</section>		
</body>
</html>