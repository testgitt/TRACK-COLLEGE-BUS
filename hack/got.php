<?php
if(isset($_POST['USN']))
{
    //echo $_POST['USN'];

$usn=$_REQUEST['USN'];
$route=$_REQUEST['BUSROUTE'];

	//echo "$usn";
}
	?>
 
<!DOCTYPE HTML> 
<html>
<style>
table, th, td {
     border: 1px solid black;
}
</style>



<head>
</head>

<body>

<form action=" got.php "method="get"><center>
<input type="submit" name="GOTIN" value="GOTIN" alt="submit" style="float:middle" />

<br></br><br></br>
<input type="submit" name="CHECKSTATUS" value="CHECKSTATUS" /></center>

 </form>


 
 
 <?php
 if(isset($_GET['GOTIN'])){
	 
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

//date_default_timezone_set('America/Chicago');
//$date=date('m/d/y h:i:s a',time());
//echo  "current time is" .$date;
//date_default_timezone_set('America/Chicago');
//$date=date( 'h:i:s a',time());
//echo  "current time is" .$date;

$sql = "UPDATE student SET gotin='1'WHERE usn =usn";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
   echo "Error: " . $sql . "<br>" . $conn->error;
}


//date_default_timezone_set('America/Chicago');
//$date=date('m/d/y h:i:s a',time());
//echo  "current time is" .$date;
date_default_timezone_set('America/Chicago');
$date=date( 'h:i:s a',time());
echo  "current time is" .$date;




$sql = "INSERT INTO student (OrderDate)VALUES ('$date') ";
//$sql = "UPDATE student SET OrderDate='$date' WHERE usn = usn  AND routeno  = route";







if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 }

 if(isset($_GET['CHECKSTATUS'])){
	 
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
//$sql=" SELECT name,pickup,OrderDate FROM student  WHERE gotin='1' AND routeno = 'route' ORDER BY OrderDate ASC ";
//if ($conn->query($sql) === TRUE) {
//    echo "New record created successfully";
//} else {
 //   echo "Error: " . $sql . "<br>" . $conn->error;
//}
//$sql="SELECT * FROM student
//WHERE gotin='1'
//AND routeno='route'";

//$result = $conn->query($sql);

//if ($result->num_rows > 0) {
    // output data of each row
    //while($row = $result->fetch_assoc()) {
    //    echo "name: " . $row["name"]. " - gotin: " . $row["pickup"]. " " . $row["OrderDate"]. "<br>";
        // echo  . $row["name"]. " " . $row["pickup"]. " " . $row["OrderDate"]. "<br>";
    //}
//} else {
//    echo "0 results";
$sql = "SELECT name, pickup, OrderDate FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>name</th><th>pickup</th><th>time</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
         
        echo "<tr><td>".$row["name"]." </td><td>".$row["pickup"]."</td><td> ".$row["OrderDate"]."</td></tr>";
        
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
 }
?>

	 
	 
 
	 
 
 



 

</body>
</html>