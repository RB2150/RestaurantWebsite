<html>
<body>
 <?php  
$total_seats=50;
$name = $_POST["uname"];
$email = $_POST["email"];
$number = $_POST["mno"];
$seat = $_POST["people"];
$time = $_POST['hours'].":".$_POST['mins']." ".$_POST['timex'];
$udate = $_POST["datex"];
$branch = explode(' ',(explode('-',$_POST["branch"])[0]))[0];
date_default_timezone_set("Asia/kolkata");
$datetime = date("Y-m-d H:i:s");
if($branch=="Bandra"){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant";
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
  
  ?><p id=zxzx>Connection failed..Try Again After Sometime..</p>
 
  <?php
}
	
$squery = "SELECT cust_seat from reservationdet where date=? order by booked_at desc";
$prst = $conn->prepare($squery);
$prst->bind_param("s", $udate);
$prst->execute();
$seresult=$prst->get_result();
$seats=0;
	while($row = $seresult->fetch_assoc()){ 
	$seats +=$row['cust_seat'];}
$rseats=$total_seats-$seats;
if($rseats>=$seat){
	$resdetail = "INSERT INTO reservationdet (cust_name,cust_email,cust_no,cust_seat,time,date,booked_at) values(?,?,?,?,?,?,?)";
	$prst = $conn->prepare($resdetail);
	$prst->bind_param("sssssss",$name,$email,$number,$seat,$time,$udate,$datetime);
	
if ($prst->execute()) {
	echo "<p id=zxzx>Booking Confirmed</p>";
} else {
  ?><p>Something Went Wrong..Try Again</p>
  
  <?php
}
}
else{
	if($rseats<=0){echo "<p id=zxzx>Sorry Tables are Full</p>";}
	else{
	echo "<p id=zxzx>Sorry Only  ".$rseats." Tables are available</p>";
	}
}
$conn->close();
}
else if($branch=="Thane"){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant_2";
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
  
  ?><p id=zxzx>Connection failed..Try Again After Sometime..</p>
 
  <?php
}
	
$squery = "SELECT cust_seat from reservationdet where date=? order by booked_at desc";
$prst = $conn->prepare($squery);
$prst->bind_param("s", $udate);
$prst->execute();
$seresult=$prst->get_result();
$seats=0;
	while($row = $seresult->fetch_assoc()){ 
	$seats +=$row['cust_seat'];}
$rseats=$total_seats-$seats;
if($rseats>=$seat){
	$resdetail = "INSERT INTO reservationdet (cust_name,cust_email,cust_no,cust_seat,time,date,booked_at) values(?,?,?,?,?,?,?)";
	$prst = $conn->prepare($resdetail);
	$prst->bind_param("sssssss",$name,$email,$number,$seat,$time,$udate,$datetime);
	
if ($prst->execute()) {
	echo "<p id=zxzx>Booking Confirmed</p>";
} else {
  ?><p>Something Went Wrong..Try Again</p>
  
  <?php
}
}
else{
	if($rseats<=0){echo "<p id=zxzx>Sorry Tables are Full</p>";}
	else{
	echo "<p id=zxzx>Sorry Only  ".$rseats." Tables are available</p>";
	}
}
$conn->close();
}
else{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant_3";
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
  
  ?><p id=zxzx>Connection failed..Try Again After Sometime..</p>
 
  <?php
}
	
$squery = "SELECT cust_seat from reservationdet where date=? order by booked_at desc";
$prst = $conn->prepare($squery);
$prst->bind_param("s", $udate);
$prst->execute();
$seresult=$prst->get_result();
$seats=0;
	while($row = $seresult->fetch_assoc()){ 
	$seats +=$row['cust_seat'];}
$rseats=$total_seats-$seats;
if($rseats>=$seat){
	$resdetail = "INSERT INTO reservationdet (cust_name,cust_email,cust_no,cust_seat,time,date,booked_at) values(?,?,?,?,?,?,?)";
	$prst = $conn->prepare($resdetail);
	$prst->bind_param("sssssss",$name,$email,$number,$seat,$time,$udate,$datetime);
	
if ($prst->execute()) {
	echo "<p id=zxzx>Booking Confirmed</p>";
} else {
  ?><p>Something Went Wrong..Try Again</p>
  
  <?php
}
}
else{
	if($rseats<=0){echo "<p id=zxzx>Sorry Tables are Full</p>";}
	else{
	echo "<p id=zxzx>Sorry Only  ".$rseats." Tables are available</p>";
	}
}
$conn->close();
	
}
    ?>
</body>
</html>