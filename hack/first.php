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
   
    USN: <input type="text" name="USN">
   <span class="error">* <?php echo $USNErr;?></span>
   <br><br>
   BUSROUTE:<input type="number" name="BUSROUTE" min ="1" max="12">
   <span class="error">* <?php echo $BUSROUTEErr;?></span>
   <br><br>
    <input type="submit" name="submit" value="Submit"> 
</form>
   
   
</form>
<a href="register.php">REGISTER</a>







</body>
</html>

