
<html>
<body>
<?php

$conn = mysql_connect("localhost", "root", "") or die ("Error connecting to mysql");
mysql_select_db('event') or die ('Unable to select  database!');

$usn = $_POST['usn'];
$name = $_POST['name'];
$college = $_POST['college'];
$pl = $_POST ['place'];
$pr =$_POST ['prize'];
$eve = $_POST['eve'];

$query= "insert into tech_win values('$usn','$name','$college','$pl','$pr','$eve' )";


if (!mysql_query($query))
  {
  die('Error: ' . mysql_error());
  } 

  ?>
 <script>
 alert("The data is entered successfully !! "); 
document.location = "win_tech.html";

</script>

<?php 
 mysql_close($conn)
?>

?>
</body>
</html>
  

