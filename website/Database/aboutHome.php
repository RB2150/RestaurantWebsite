<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant";
$conn = new mysqli($servername, $username, $password,$dbname);	
?>


<?php 
$aq = "SELECT * from about_us where home='yes'"; 
$adxst = $conn->prepare($aq); 
$adxst->execute() or die($conn->error);
$adx_result = $adxst->get_result() or die($conn->error);

while($row = $adx_result->fetch_assoc())
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
	<?php } mysqli_close($conn); ?>