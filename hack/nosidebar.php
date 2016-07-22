<!DOCTYPE HTML>

<html>
	<head>
	
		<title>SIGN UP</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
	</head>
	<body>

	<!-- Header -->
		<div id="header">
			<div id="nav-wrapper"> 
				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="index.php">HOME</a></li>
						<li><a href="originalbleee.php">LOGIN</a></li>
						<li class="active"> SIGN-UP </li>

			<li class="active"><a href="chatroom.html">CHAT ROOM</a></li>
					</ul>
				</nav>
			</div>
			<div class="container"> 
				
				<!-- Logo -->
				<div id="logo">
					<h1><a href="#">SIGN-UP</a></h1>
					
				</div>
			</div>
		</div>
	<!-- Header --> 

	<!-- Main -->
		<div id="main">
			<div id="content" class="container">
				<section>
					<header>
						<!DOCTYPE HTML> 


<style>
.error {color: #FF0000;}
</style>
<body> 
<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body> 

<?php
// define variables and set to empty values
$USNErr = $BUSROUTEErr = $PICKUPPOINTErr = $NAMEErr = "";
$USN = $BUSROUTE = $PICKUPPOINT = $NAME = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["USN"])) {
     $USNErr = "USN is required";
   } else {
     $USN = test_input($_POST["USN"]);
   }
   
   if (empty($_POST["BUSROUTE"])) {
     $BUSROUTEErr = "BUSROUTE is required"; 
   } else {
	 $BUSROUTE = test_input($_POST["BUSROUTE"]);
	 
   } 
     
   if (empty($_POST["PICKUPPOINT"])) {
     $PICKUPPOINT = "PICKUPPOINT is required";
   } else {
     $PICKUPPOINT = test_input($_POST["PICKUPPOINT"]);
   } 
   if (empty($_POST["NAME"])) {
     $NAME = "";
   } else {
     $NAME = test_input($_POST["NAME"]);
   }

   

   
}

function test_input($data) {
	$data = trim($data);
   $data = stripslashes($data);
	
   
   
   $data = htmlspecialchars($data);
   return $data;
}
?>


<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   USN: <input type="text" name="USN">
   <span class="error">* <?php echo $USNErr;?></span>
   <br><br>
    NAME: <input type="text" name="NAME">
   <span class="error">* <?php echo $NAMEErr;?></span>
   <br><br> 
   BUSROUTE:<input type="number" name="BUSROUTE" min ="1" max="12">
   <span class="error">* <?php echo $BUSROUTEErr;?></span>
   <br><br>
   PICKUPPOINT: <input type="text" name="PICKUPPOINT">
   <span class="error"><?php echo $PICKUPPOINTErr;?></span>
   <br><br>
  
   <input type="submit" name="submit" value="Submit"> 
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $USN;
echo "<br>";
echo $BUSROUTE;
echo "<br>";
echo $NAME;
echo "<br>";
echo $PICKUPPOINT;
echo "<br>";

?>
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "bus";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO student(usn,name,routeno,pickup)
VALUES ('$USN', '$NAME', '$BUSROUTE', '$PICKUPPOINT')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


</body>
</html>
</body>
</html>

