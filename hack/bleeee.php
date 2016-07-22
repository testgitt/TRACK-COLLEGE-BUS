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
						<li><a href="index.html">HOME</a></li>
						
						<li class="active"> LOGIN </li>

					
				<li><a href="right-sidebar.html">CHAT ROOM</a></li>
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
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   
    USN: <input type="text" name="USN">
   <span class="error">* <?php echo $USNErr;?></span>
   <br><br>
   BUSROUTE:<input type="number" name="BUSROUTE" min ="1" max="12">
   <span class="error">* <?php echo $BUSROUTEErr;?></span>
   <br><br>
    <input type="submit" name="submit" value="Submit"> 
</form>
   
   
</form>
<a href="loginpage.php">REGISTER</a></br>
<a href="C:\xampp\htdocs\my_db\site\index1.html">TAKE ME TO OPTIONS PAGE</a>

</body>
</html>


</body></html>


</body>
</html>							

	