

<html>
<body>

<?php


$conn = mysql_connect("localhost", "root", "") or die ("Error connecting to mysql");
mysql_select_db('event') or die ('Unable to select  database!');

$usn = $_POST['usn'];
$name = $_POST['name'];
$college = $_POST['college'];
$dept = $_POST['dept'];
$age=$_POST['age'];
$sem=$_POST['sem'];
$eve= $_POST['eve'];


 $query= "insert into tech_parti values('$usn','$name','$college','$dept','$age','$sem','$eve')";


if (!mysql_query($query))
  {
  die('Error: ' . mysql_error());
  } 

 
  
  
  ?>
 <script>
alert("You have registered successfully !! USN is used as your ID identification. "); 
document.location = "tech.html";

</script>

<?php 
 mysql_close($conn)
?>
</body>
</html>




