
<html>
<body>
<?php

$conn = mysql_connect("localhost", "root", "") or die ("Error connecting to mysql");
mysql_select_db('event') or die ('Unable to select  database!');

$usn = $_POST['usn'];
$name = $_POST['name'];
$college = $_POST['college'];
$dept = $_POST['dept'];
$vol_exp= $_POST['vol_exp'];
$age=$_POST['age'];
$sem=$_POST['sem'];

 $conn = mysql_connect("localhost", "root","") or die ("Error connecting to mysql");
 $query= "insert into volunteer values('$usn','$name','$college','$dept','$vol_exp' ,'$age','$sem')";
 $result=mysql_query($conn, $query) or die('volunteer already existed.');


if (!mysql_query($query))
  {
  die('Error: ' . mysql_error());
  } 

  ?>
  
 <script>
 alert("You have registered successfully !! USN is used as your ID identification. HAPPY TO HAVE YOU :) "); 
document.location = "volunteer.html";

</script>

<?php 
 mysql_close($conn)
?>
</body>
</html>
  
?>
