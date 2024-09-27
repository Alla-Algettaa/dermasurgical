<!DOCTYPE html>
<html>
<head>
<title>dermasurgical</title>
<meta charset="utf-8" />
 <link rel="stylesheet" href="style.css"/>
 
 

</head>

<body>
          
<header class="header fixed-top"> 
   <div class="container">
      <div class="row align-items-center justify-content-between">
         <a href="#home" class="logo">derma<span>surgical.</span></a>
         <nav class="nav">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
			<a href="#process">See More</a>
            <a href="#staff">Medical Staff</a>
			<a href="#search">Find DOC</a>
			<a href="#contact">Contact</a>			
			<a href="login1.php">Log In</a>
         </nav>
         
         
		
      </div>
   </div>
</header>
 



<section class="home" id="home">
   <div class="container">
   
      <div class="row min-vh-100 align-items-center">
         <div class="content text-center text-md-left">
            <h3>Care is a new BEAUTY..</h3>
            <p>how old you are is your business ! how young you look is ours.</p> 
            <a href="#contact" class="link-btn">make appointment</a>
			<a href="#process" class="link-btn">See More</a>
         </div>
      </div>
   </div>
</section>





<section class="about" id="about">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-md-6 image">
            <img src="http://localhost/dermasurgical/photos/feelyourbest.jfif" class="w-100 mb-5 mb-md-0" alt="">
         </div>
			<div class="col-md-6 content">
            <span>About us</span>
            <h3>Look and feel your best!</h3>
            <p>The Plastic Surgery Clinic "DERMASURGICAL" has been serving for over 40 years
			and has gained a reputation as the best and most respected clinic in Colorado.
			Procedures range from cosmetic and reconstructive surgeries to sophisticated skin care techniques.
			At the Plastic Surgery Clinic we pride ourselves on our ability to cater to each individual and listen to the specific needs of every patient.
			Our highly trained and board certified staff have the experience and the knowledge to make your aesthetic transition possible</p>
            <a href="#process" class="link-btn">make appointment</a>
         </div>
      </div>
   </div>
</section>




<section class="services" id="services">
   <h1 class="heading">our services</h1>
   <div class="box-container container">
      <div class="box">
         <img src="http://localhost/dermasurgical/photos/face.png" alt="">
         <h3>Face Lift Surgery</h3>
         <p> neck lift is a time-tested and proven procedure, readily embraced by patients. The main purpose of the face lift is to give your face a more youthful appearance
		 but it may also provide a slight correction of your facial features. An unquestioned advantage of the face lift is that it makes your face look much younger and natural, since surgical intervention is hardly noticeable.</p>
      </div>

      <div class="box">
         <img src="http://localhost/dermasurgical/photos/rhinoplasty.png" alt="">
         <h3>Nose Reshaping Surgery</h3>
         <p> whose nose size or shape does not fit the rest of their face
		 When you have a crooked nose or a nasal hump, a nasal bone needs to be aligned but when your nose is too wide,
		 protruding or has an asymmetric tip then the nasal cartilage needs correction (no need to correct the nasal bone).
		 Patients quite often complain about breathing difficulties caused by a nasal obstruction. In this case, a deviated nasal septum must be repaired to improve patient's overall comfort.
		 However, in most cases a total rhinoplasty, including a combination of all above procedures, is performed.</p>
      </div>

      <div class="box">
         <img src="http://localhost/dermasurgical/photos/hair-transplant.png" alt="">
         <h3>Hair Transplant</h3>
         <p> cosmetic preparations or minimally invasive procedures have limited effectiveness.
		 Fortunately, plastic surgery is able to deal with this problem effectively,
		 offering the only solution that works in the long run – hair transplants.</p>
      </div>

      <div class="box">
         <img src="http://localhost/dermasurgical/photos/liposuction.png" alt="">
         <h3>Body Plastic Surgery</h3>
         <p> exercising do not feel good in their body. Operations of this type are carried out by qualified professionals who ensure safety and satisfactory results.
		 Surgical procedures will help you effectively get rid of insecurities which may negatively affect the your mood and often result in reduced self-esteem.
		 It is worth handing yourself over to specialists who will use their knowledge and experience to help you.</p>
      </div>

      <div class="box">
         <img src="http://localhost/dermasurgical/photos/skin-care.png" alt="">
         <h3>Skin Booster</h3>
         <p>Skin Booster is a treatment that consists of micro-injections of dermal filler in the deeper layers of the skin,
		 that hydrates and repairs the skin. Unlike traditional dermal fillers, it is not injected beneath the skin to volumize the face.
		 Instead, Skin Booster contains a light hyaluronic acid, vitamins and minerals that aim at hydrating the skin and improving skin’s quality. </p>
      </div>

      <div class="box">
         <img src="http://localhost/dermasurgical/photos/reconstructive.png" alt="">
         <h3>Skin Reconstruction Surgery</h3>
         <p>skin grafting is a type of surgery. During this procedure,
		 providers take healthy skin from one part of the body and transplant (move) it to cover skin that's damaged or missing.
		 Within a few days, the grafted skin begins to develop blood vessels and connect to the skin around it.</p>
      </div>
   </div>
</section>





<section class="process" id="process">
    
   <h1 class="heading">Our Surgeries</h1>

   <div class="box-container container">

      <div class="box">
		<img src="http://localhost/dermasurgical/photos/Hair%20Growth%20Vitamins%20&%20Cosmetics.png" alt="logo" />
		<h3>Hair Transplantation</h3>
         
      </div>
			
      <div class="box">
         <img src="http://localhost/dermasurgical/photos/Nose%20Reshaping%20Surgery.jfif" alt="logo">
         <h3>Nose Reshaping Surgery</h3>
         
      </div>
		
      <div class="box">
         <img src="http://localhost/dermasurgical/photos/Face%20Lift%20Surgery.jfif" alt="logo">
         <h3>Face Lift Surgery</h3>
         
      </div>
	  
	  <div class="box">
         <img src="http://localhost/dermasurgical/photos/Skin%20Reconstruction%20Surgery.png" alt="logo">
         <h3>Skin Reconstruction Surgery</h3>          
      </div>

   </div>

</section>


<section class="staff" id="staff">
<?php

include("connexion.php");
include("BDoperations.php");
$bdd=maConnexion();
 //echo affichageDocs($bdd);
 
?>
   <h1 class="heading"> Our Doctors </h1>

   <div class="box-container container">

      <div class="box">
         <img src="photos/DR cat.jpg" alt="">
         <?php echo affichageDoc($bdd, 1);
		 ?>
      </div>

        <div class="box">
        <img src="photos/DR. Alfredo.jpg" alt="">
		<?php echo affichageDoc($bdd, 2);
		 ?>
      </div>

      <div class="box">
         <img src="photos/DR. Harrison.jpg" alt="">
          <?php echo affichageDoc($bdd, 3);
		 ?>
      </div>
	  
	  
	  
	  <div class="box">
         <img src="photos/DR. John.jpg" alt="">
          <?php echo affichageDoc($bdd, 4);
		 ?>
      </div>
	  
	  
	  
	  <div class="box">
         <img src="photos/DR. Rod .jpeg" alt="">
          <?php echo affichageDoc($bdd, 5);
		 ?>
      </div>
	  
	  
	  
	  
	  
	  <div class="box">
         <img src="photos/Dr. Ergin.jpg" alt="">
          <?php echo affichageDoc($bdd, 6);
		 ?>
      </div>
	  
</section>

<section class="search" id="search">

<div class="forms">

<h1 class="heading"> Find A DOCTOR :</h1>

            <form action="<?php echo $_SERVER['PHP_SELF']; ?> " method="POST">


				<span>Doctor's Name :</span>
                <input type="text" name="name" placeholder="Name" class="box" required /></td>
                <input type="submit" value="Search" class="link-btn" />
                
			
			
					<?php
                    $bd = maConnexion();
                    //recherche selon nom
                    if (isset($_REQUEST['name']) and !empty($_REQUEST['name'])) {
                        $docteurN = $bd->quote($_REQUEST['name']);
                        rechercheNom($bd, $docteurN);
                    } else {
                        echo "Enter the doctor's NAME";
                    }

                    ?>
			</form>

<section class="contact" id="contact">
   <h1 class="heading">make appointment</h1>

   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <?php 
         if(isset($message)){
            foreach($message as $message){
               echo '<p class="message">'.$message.'</p>';
            }
         }
      ?>
      <span>your name :</span>
      <input type="text" name="name" placeholder="enter your name" class="box" required>
      <span>your email :</span>
      <input type="email" name="email" placeholder="enter your email" class="box" required>
      <span>your number :</span>
      <input type="number" name="number" placeholder="enter your number" class="box" required>
      <span>appointment date :</span>
      <input type="datetime-local" name="date" class="box" required>
      <input type="submit" value="make appointment" name="submit" class="link-btn">
   </form>  

</section>


<section class="footer">

   <div class="box-container container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <p>+216-00 000 000</p>
         <p>+216-11 111 111</p>
      </div>
      
      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>our address</h3>
         <p>Tunisia-****</p>
      </div>
	  
	  
	  
	  <div class="box">
         <i class="fas fa-clock"></i>
         <h3>opening hours</h3>
         <p>07:00am to 10:00pm</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <p>dermasurgicalClini@gmail.com</p>
         
      </div>

   </div>



<div class="credit">
 <?php echo date('Y'); ?> by <span>Alla Al-gettaa</span>  </div>

</section>
</div>


<script src="script.js"></script>

</body>
</html>
