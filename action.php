<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php 
echo '<p>Form Submitted !</p>'; 
echo $_POST['firstname']."<br>";
echo $_POST['lastname']."<br>";
echo $_POST['gender']."<br>";

$servername = "localhost";
$username = "";
$password = "";
$dbname = "myDB";

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];

// Create Connection
$conn = mysql_connect($servername,$username,$password);
if(!$conn){
die("Can not connect: ".mysql_error());
}

mysql_select_db($dbname,$conn);

$sql = "INSERT INTO `Personal_Info` (`firstname`, `lastname`, `gender`)
VALUES ('$firstname','$lastname','$gender')";


mysql_query($sql,$conn);
	
echo '<p>successful</p>';
mysql_close($conn);
?> 
 </body>
</html>
