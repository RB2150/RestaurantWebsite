<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">

        <title>
          
        </title>
        <!--<link rel="stylesheet" type="text/css" href="Restro.css">-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" type="text/css" href="/RestoProject/SU/css/all.css">
<link rel="stylesheet" type="text/css" href="css/RestoStyle.css">


    </head>
    <body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant";
$conn = new mysqli($servername, $username, $password,$dbname);
$AdQuery = "SELECT * from about_us where team=?"; 
$adst = $conn->prepare($AdQuery); 
$catx = "yes";
$adst->bind_param("s",$catx);
$adst->execute() or die($conn->error);
$ad_result = $adst->get_result() or die($conn->error);
$row_count = ceil(mysqli_num_rows($ad_result)/4);


?>
        <div class="container_about">
          <img src="images/AboutBg.png">
            <div class="headIcon">
            <img src="images/TheExstasisB.png" id="headon">
            
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
                <h1>ABOUT</h1>
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
<br>
<br>

 
<div class="AboutUs">
        <div class="aboutn">
          
           <img src="images/aboutN.png"> 
           
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
           
         </div>   
</div>   
<br>
<br>
<br>
<br>



<div class="AboutOwn">

  <center>
<div class="team_head">
  <h1>Our Owner</h1>
</div>
</center>
<br>
<br>
        <div class="aboutowner">
          
           <img src="images/restroOwn.jpg"> 
           
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
           
         </div>   
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="team_container">
<center>
<div class="team_head">
  <h1>Our Team</h1>
</div>
</center>
<br>

<div class="cardrow" id="cardParent">
<?php 
$s=0;
$e=3;

for($i=0;$i<$row_count;$i++)
{
	
?>

<div class="cardbg">
<?php 
$aq = "SELECT * from about_us where team=? limit ?,?"; 
$adxst = $conn->prepare($aq); 
$catx = "yes";
$adxst->bind_param("sss",$catx,$s,$e);
$adxst->execute() or die($conn->error);
$adx_result = $adxst->get_result() or die($conn->error);
while($row = $adx_result->fetch_assoc())
{
	
?>
		<div class="card">
      <div class="card-image card4" style="background-image: url('/RestoProject/AdminPanel/Database/ImgStaff/<?php echo $row['img']; ?>');"></div>
      <div class="card-text card4">
       
        <h2><?php echo $row['name']; ?></h2>
        <p><?php echo $row['bio']; ?></p>
      </div>
      <div class="card-stats card4">
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
	


<?php } ?>
</div>
<?php 
 $s=$s+3;	
 } 
 mysqli_close($conn); 
 ?>
</div>

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
          <img src="TheExstasis.png" alt="" class="logo">
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

<script>
document.getElementById("rs").addEventListener( "click", function () {
window.location="/RestoProject/website/RestoReserve";
});
</script>
</body>




</html>




