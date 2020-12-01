<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">

        <title>
        	
        </title>
        <link rel="stylesheet" type="text/css" href="css/RestoMainStyle.css">
		<script src="jquery-2.1.4.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="/RestoProject/SU/css/all.css">

    </head>
    <body>
    	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant";
$conn = new mysqli($servername, $username, $password,$dbname);
$AdQuery = "SELECT * from about_us where home='yes'"; 
$adst = $conn->prepare($AdQuery); 
$adst->execute() or die($conn->error);
$ad_result = $adst->get_result() or die($conn->error);
$row_count = ceil(mysqli_num_rows($ad_result)/3);
$query = "SELECT * from offers where category like ?"; 
$prst = $conn->prepare($query);
$cat="starters";
$prst->bind_param("s",$cat);
$prst->execute();
$sresult=$prst->get_result();
$query = "SELECT * from offers where category like ?"; 
$prst = $conn->prepare($query);
$cat="desert";
$prst->bind_param("s",$cat);
$prst->execute();
$dresult=$prst->get_result();
$query = "SELECT * from offers where category like ?"; 
$prst = $conn->prepare($query);
$cat="beverage";
$prst->bind_param("s",$cat);
$prst->execute();
$bresult=$prst->get_result();

?>


<div class="splash_container">
  
<div class="splashimg"> 
  <img src="images/SplashBG.png">
</div>



<img src="images/Splash2Text.png" id="splashlogo">


</div>
        <div class="container">
          <img src="images/MainPlate.png">
            <div class="headIcon">
            <img src="images/TheExstasisB.png">
            
             </div>
          <div class="scrollmenu">
         <a href="RestoMain.php">Home</a>
          <a href="RestoMenu.php">Menu</a>
          <a href="RestoAbout.php">About Us</a>
          <a href="RestoContact.php">Contact</a>
          <a href="RestoGallery.php">Gallery</a>
          <a href="RestoBlog.php">Blog</a>
        </div>
            <div class="site_title">
                <h1>COME JOIN IN</h1>
                <br>
                <button id="rs1">Reserve Table</button>
              
            </div>
            <div class="overlay"></div>
        </div>
        
        


<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
<br>
<div class="offers">
<center>
<h1>Worth Offers</h1>
<p>Checkout some of our best dishes here</p>
</center>

<br><br>

<div class="image_slides" id="offParent">
    <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/Cook.png" style="width:100%">
  <div class="title-subtilte">
    
     <h3>Our Specialities</h3>
     <?php 
		while($row = $sresult->fetch_assoc()){ 
		$name = $row["name"];
		?>
		<p><?php echo $name ; ?></p>
		<?php } ?>
    <div class="item">
    </div>
    </div>
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/Nougat.png" style="width:100%">
  <div class="title-subtilte">
     <h3>Sweet Heaven</h3>
     <?php 
		while($row = $dresult->fetch_assoc()){ 
		$name = $row["name"];
		?>
		<p><?php echo $name ; ?></p>
		<?php } ?>
    <div class="item">
    </div>
    </div>
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/shakes.jpg" style="width:100%">
  <div class="title-subtilte">
     <h3>Beverages</h3>
     <?php 
		while($row = $bresult->fetch_assoc()){ 
		$name = $row["name"];
		?>
		<p><?php echo $name ; ?></p>
		<?php } ?>
    <div class="item">
    </div>
    </div>
  <div class="text"></div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>

<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 

</div>
</div>
</div>
<center>
<button class="seemore" id="off1">See More</button>
</center>
<br>
<br>
<br>
<br>
<br>
<div class="Contactcont">
   <center> <h3 class="contact_subhead">Wanna get in touch ?</h3></center>
   <br>
   <br>
  <img src="images/icecontact.png">

  <br>
  <br>
  <center>
<button class="seemore" id="cnt1">Contact Us</button>
</center>
</div>

<br>
<br>
<br>
<br>
<br>

<div class="AboutUsCont">
    <div class="about_us">
        <img src="images/pan.png">
        
        <h1>About Us</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </p>
    

    </div>
</div>
    <center>
<button class="seemore" id="ab1">About Us</button>
</center>
</div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<center>
<div class="team_head">
  <h1>Our Team</h1>
  <p>Always at your service</p>
</div>
</center>
<br>

<div class="cardbg" id="parentcard">
<?php
while($row = $ad_result->fetch_assoc())
{
?>
<div class="card">
      <div class="card-image" style="background-image: url('/RestoProject/AdminPanel/Database/ImgStaff/<?php echo $row['img']; ?>');"></div>
      <div class="card-text">
        
        <h2><?php echo $row['name']; ?></h2>
        <p><?php echo $row['bio']; ?></p>
      </div>
      <div class="card-stats">
        <div class="stat">
           <a href="https://<?php echo $row['fb']; ?>"><i class="fab fa-facebook-f"></i></a>
          
        </div>
        <div class="stat bord">
         <a href="https://<?php echo $row['twitter']; ?>"><i class="fab fa-twitter"></i></a>
        </div>
        <div class="stat">
          <a href="https://<?php echo $row['insta']; ?>"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
	<?php } $conn->close();?>
   
</div>
<br>
<br>
<center>
 <button class="seemore" id="ab2">Meet More</button>
 </center>
<br>
<br>
<br>



 <center>
    <div class="ReserveCont">
      <div class="ResText">
       <h1>Reserve Table</h1>
       <p>Wanna join us?  Get your table reserved.</p>
        <button class="resmore" id="rs2"> Reserve Table</button>
      </div>
       <img src="images/settable.jpg">
      
     
     
    </div>
   </center>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
	
 <footer>
      <div class="footer-container">

        <div class="left-col">
          <img src="images/TheExstasis.png" alt="" class="logo">
          <div class="social-media">
            <p>Follow us</p>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <p class="rights-text">© 2020 Created By SK All Rights Reserved.</p>
        </div>
       
        <div class="right-col">
          <h1>Our Newsletter</h1>
          <div class="border"></div>
          <p>Enter Your Email to get our news and updates.</p>
          <form action="" class="newsletter-form">
            <input type="text" class="txtb" placeholder="Enter Your Email" name="email">
            <input type="submit" class="btn" value="submit" name="submit">
          </form>
        </div>
      </div>
    </footer>

 

<script src="JavaScript/restomain.js"></script>

</body>




</html>




