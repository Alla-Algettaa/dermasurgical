<!DOCTYPE html>

<html lang="en">

 
<<head>
<title>Welcome..</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
</head>

<body>


<header class="header fixed-top"> 
   <div class="container">
      <div class="row align-items-center justify-content-between">
		<a href="#home" class="logo">derma<span>surgical.</span></a>
		<nav class="nav">
			<a href="dermasurgical">Home</a>	
			<a href="http://localhost/dermasurgical/login1.php">Back</a>
		</nav>
      </div>
   </div>
</header>

<div>
		<h1 class="heading">List Of Patients</h1>
		<h1></h1>
        <h1 class="heading">Patients</h1>
        <?php

        $bdd = maConnexion();
        

        affichagePs($bdd);

        ?>
</div>
	
	

<div class="adminn">

 <section class="admin" id="admin">
 
    <h1 class="heading">ADD PATIENTS</h1>
    
     <form action="http://localhost/dermasurgical/addP.php" method="POST">
            
			
			
                <h1 class="heading">Patient</h1>
                
                        <span>Full Name: </span>
                        <input type="text" name="FullName" class="box" required>
                    
                        <span>Email: </span>
                        <input type="email" name="Email" class="box" required>
                    
                        <span>Phone Number: </span>
                        <input type="text" name="PhoneNumber" class="box" required>
                    
                        <span>Appointment Date: </span>
                        <input type="date" name="appointmints" class="box" required>
						
						<input type="submit" value="ADD" name="submit" class="link-btn">
     </form> 
 </section>		 
</div>

	
</body>

</html>

