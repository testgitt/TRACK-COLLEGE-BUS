<!DOCTYPE HTML>
<html>


	<head>
		<title>LOGIN PAGE</title>
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
						
						<li class="active"> LOGIN </li>

				<a href="chatroom.html">CHAT ROOM</a></li>
					</ul>
				</nav>
			</div>
			<div class="container"> 
				
				<!-- Logo -->
				<div id="logo">
					<h1><a href="#">LOGIN</a></h1>
					
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
<html>
<head>
<style>
<style>
.error {color: #FF0000;}
</style>
</head>
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
$USNErr = $BUSROUTEErr = "";
$USN = $BUSROUTE = "";

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
   
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
<form method="post" action="got.php"> 
   <center>
   
    USN: <input type="text" name="USN" align="center">
   <span class="error">* <?php echo $USNErr;?></span>
   <br><br>
   BUSROUTE:<input type="number" name="BUSROUTE" min ="1" max="12">
   <span class="error">* <?php echo $BUSROUTEErr;?></span>
   <br><br>
    <input type="submit" name="submit" value="Submit"> </center>
</form>
   
   
</form><center>

<a href="nosidebar.php">REGISTER</a>
<center>
<?php
echo "<h2>Your Input:</h2>";
echo $USN;
echo "<br>";
echo $BUSROUTE;
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

//$sql = "INSERT INTO busroute(usn,routeno)
//VALUES ('$USN', '$BUSROUTE')";

//if ($conn->query($sql) === TRUE) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}

$conn->close();
?>




</body>
</html>

</body>
</html>


</body></html>


</body>
</html>							

					</header>
				</section>
			</div>
		</div>
	<!-- /Main -->

	<!-- Tweet -->
		<div id="tweet">
			<div class="container">
				<section>
					<blockquote>&ldquo;In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat.&rdquo;</blockquote>
				</section>
			</div>
		</div>
	<!-- /Tweet -->

	<!-- Footer -->
		<div id="footer">
			<div class="container">
				<section>
					<header>
						<h2>Get in touch</h2>
						<span class="byline">Integer sit amet pede vel arcu aliquet pretium</span>
					</header>
					<ul class="contact">
						<li><a href="#" class="fa fa-twitter"><span>Twitter</span></a></li>
						<li class="active"><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>
						<li><a href="#" class="fa fa-dribbble"><span>Pinterest</span></a></li>
						<li><a href="#" class="fa fa-tumblr"><span>Google+</span></a></li>
					</ul>
				</section>
			</div>
		</div>
	<!-- /Footer -->

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
			</div>
		</div>

	<li><a href="index1.html">TAKE ME TO OPTIONS PAGE</a></li>
</body>
</html>