<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">

        <title>
        	
        </title>
        <!--<link rel="stylesheet" type="text/css" href="Restro.css">-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/RestoStyle.css">
      <link rel="stylesheet" type="text/css" href="/RestoProject/SU/css/all.css">
    </head>
    <body>
    	
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant";
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
    
}	
$starters = "SELECT name,ingredient,price from food_menu where category like 'starters'"; 
$prst = $conn->prepare($starters);
$prst->execute();
$sresult=$prst->get_result();
$main_course = "SELECT name,ingredient,price from food_menu where category like 'main_course'";
$prst = $conn->prepare($main_course);
$prst->execute();
$mcresult=$prst->get_result();
$desert = "SELECT name,ingredient,price from food_menu where category like 'desert'";
$prst = $conn->prepare($desert);
$prst->execute();
$dresult=$prst->get_result();
$Beverages = "SELECT name,ingredient,price from food_menu where category like 'Beverages'";
$prst = $conn->prepare($Beverages);
$prst->execute();
$beresult=$prst->get_result();


?>

       <div class="container_menu">
          <img src="images/MenuBg.png">
            <div class="headIcon">
            <img src="images/TheExstasisB.png"  id="headon">
            
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
                <h1>MENU</h1>
                <br>
               
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
 <center>
<h2 id="ourmenu">Our Menu</h2><br>

</center>
      


<center>
<div class="menuslider" id="menu_s">
  <div class="navigation" id="nav_menu">
        <label for="r1" class="bar active">Starters</label>
        <label for="r2" class="bar">Main Course</label>
        <label for="r3" class="bar">Desserts</label>
        <label for="r4" class="bar">Beverages</label>
        
      </div>


 <div class="slidershow middle">
 
  <div class="slides">
        <input type="radio" name="r" id="r1" checked>
        <input type="radio" name="r" id="r2">
        <input type="radio" name="r" id="r3">
        <input type="radio" name="r" id="r4">
       
    <div class="slide s1" id="starters">

    <table width="100%" cellpadding="5px">
    <div class="dish_container">
	<?php 
		while($row = $sresult->fetch_assoc()){ 
		$name = $row["name"];
		$ing = $row["ingredient"];
		
		$price = $row["price"];
		?>
    <tr>
      <td id="dishname"><?php echo $name ?></td>
      <td id="price"><?php echo $price ?></td>
    

    </tr>
    <tr>
      <td id="ingredients"><?php echo $ing ?></td>
    </tr>
	<?php } ?>
    </div>

         </table>
        </div>



    <div class="slide" id="maincourse">
    <table width="100%" cellpadding="5px">
    <div class="dish_container">
    <?php 
		while($row = $mcresult->fetch_assoc()){ 
		$name = $row["name"];
		$ing = $row["ingredient"];
		
		$price = $row["price"];
		?>
    <tr>
      <td id="dishname"><?php echo $name ?></td>
      <td id="price"><?php echo $price ?></td>
    

    </tr>
    <tr>
      <td id="ingredients"><?php echo $ing ?></td>
    </tr>
	<?php } ?>

    </div>

         </table>

    </div>


    <div class="slide" id="dessert">
     <table width="100%" cellpadding="5px">
    <div class="dish_container">
    <?php 
		while($row = $dresult->fetch_assoc()){ 
		$name = $row["name"];
		$ing = $row["ingredient"];
		
		$price = $row["price"];
		?>
    <tr>
      <td id="dishname"><?php echo $name ?></td>
      <td id="price"><?php echo $price ?></td>
    

    </tr>
    <tr>
      <td id="ingredients"><?php echo $ing ?></td>
    </tr>
	<?php } ?>
    </div>

         </table>
    </div>


    <div class="slide" id="beverage">
    <table width="100%" cellpadding="5px">
    <div class="dish_container">
 <?php 
		while($row = $beresult->fetch_assoc()){ 
		$name = $row["name"];
		$ing = $row["ingredient"];
		
		$price = $row["price"];
		?>
    <tr>
      <td id="dishname"><?php echo $name ?></td>
      <td id="price"><?php echo $price ?></td>
    

    </tr>
    <tr>
      <td id="ingredients"><?php echo $ing ?></td>
    </tr>
	<?php } mysqli_close($conn); ?>
    </div>

         </table>
        </div>
 
   </div>

     
    </div>
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

   <center>
    <div class="ReserveCont">
       <div class="ResText">
       <h1>Reserve Table</h1>
       <p>Wanna join us?  Get your table reserved.</p>
        <button class="resmore" id="rs"> Reserve Table</button>
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
      <div class="footer_container">

        <div class="left">
          <img src="images/TheExstasis.png" alt="" class="logo">
          <div class="social">
            <p>Follow us</p>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <p class="rights">© 2020 Created By SK All Rights Reserved.</p>
        </div>
       
        <div class="right">
          <h1>Our Newsletter</h1>
          <div class="borderfoot"></div>
          <p>Enter Your Email to get our news and updates.</p>
          <form action="" class="newsletter">
            <input type="text" class="txtb" placeholder="Enter Your Email" name="email">
            <input type="submit" class="btn" value="submit" name="submit">
          </form>
        </div>
      </div>
    </footer>


<script src="JavaScript/restomenu.js" ></script>
</body>




</html>




