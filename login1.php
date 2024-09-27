<!DOCTYPE html>

<html lang="en">

 
<<head>
<title>dermasurgical</title>
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
						
		</nav>
      </div>
   </div>
</header>

<div class="adminn">
 <section class="admin" id="admin">
 
    <h1 class="heading">Log In</h1>
    
    
	<form action="login2.php" method="POST">
      <?php 
         if(isset($message)){
            foreach($message as $message){
               echo '<p class="message">'.$message.'</p>';
            }
         }
      ?>
        
            <span> your Email :</span> 
			<input type="email" name="Email" placeholder="enter your email" size="40" class="box" required>
            
			<span>your Password (8 characters minimum):</span>
			<input type="password" name="Password" placeholder="enter your password" minlength="8" class="box" required>
            
            
             <input type="submit" name="submit" value="LOG IN" class="link-btn"/>
             <input type="reset" name="Effacer" value="Reset" class="link-btn"/>
                    
                
    </form>      
    
</body>
</html>