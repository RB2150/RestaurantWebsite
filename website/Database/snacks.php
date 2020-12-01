<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant";
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$starters = "SELECT name,ingredient,price from food_menu where category like 'starters'"; 
$prst = $conn->prepare($starters);
$prst->execute();
$sresult=$prst->get_result();
?>

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

							
							