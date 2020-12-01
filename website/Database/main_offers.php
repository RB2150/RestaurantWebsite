    	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant";
$conn = new mysqli($servername, $username, $password,$dbname);
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
		while($row = $sresult->fetch_assoc()){ 
		$name = $row["name"];
		?>
		<p><?php echo $name ; ?></p>
		<?php } ?><p style="opacity:0.1%;">b</p><?php
while($row = $dresult->fetch_assoc()){ 
		$name = $row["name"];
		?>
		<p><?php echo $name ; ?></p>
		<?php } ?><p style="opacity:0.1%;">b</p><?php
while($row = $bresult->fetch_assoc()){ 
		$name = $row["name"];
		?>
		<p><?php echo $name ; ?></p>
		<?php } $conn->close();?><p style="opacity:0.1%;">b</p>	

