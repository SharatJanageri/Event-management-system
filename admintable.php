
  <!DOCTYPE html>
<html>
<head>
    <link href="css/menu.css" rel="stylesheet" type="text/css">

  <title>
    TABLE DETAILS!
  </title>


  
<style >
  
  body
  {

    background-color: #FFFFFF;
    background-repeat: no-repeat;
    background-size: 100%;

  }
</style>
</head>

  <body>
      <!-- Menu Bar-->
  
<center>

  <div class="dropdown">
  <a href="admindata.php">
  <button class="dropbtn">BACK</button></a>
</div>


<div class="dropdown">
  <a href="manage.html">
  <button class="dropbtn">LOGOUT</button></a>
</div>
</center>
</div>
<!-- End of Menu Bar-->


<div style="margin: 50px;">
    <h1> CULTURAL EVENTS REGISTRATION LIST : </h1>
<table border="1">
  <th> USN </th>
  <th> NAME OF THE CANDIDATE </th>  
  <th> COLLEGE NAME  </th>
  <th> DEPARTMENT </th>
  <th> AGE </th>
  <th> SEM  </th>
  <th> EVENT REGISTERED  </th>
<?php

mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("event") or die(mysql_error());
				
$result=mysql_query("select * from parti") or die(mysql_error());
while($row=mysql_fetch_array($result))
{

echo "<tr><td>";
echo $row[0];
echo "</td><td>";

echo $row[1];
echo "</td><td>";

echo $row[2];
echo "</td><td>";

echo $row[3];
echo "</td><td>";

echo $row[4];
echo "</td><td>";

echo $row[5];
echo "</td><td>";

echo $row[6];
echo "</td>";



}
?>
</table>
<h1> TECHNICAL EVENT REGISTRATION LIST: </h1>
<table border="1">

  <th> USN </th>
  <th> NAME OF THE CANDIDATE </th>  
  <th> COLLEGE NAME  </th>
  <th> DEPARTMENT </th>
  <th> AGE </th>
  <th> SEM  </th>
  <th> EVENT REGISTERED  </th>
<?php

mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("event") or die(mysql_error());
        
$result=mysql_query("select * from tech_parti") or die(mysql_error());

while($row=mysql_fetch_array($result))
{
  
echo "<tr><td>";
echo $row[0];
echo "</td><td>";

echo $row[1];
echo "</td><td>";

echo $row[2];
echo "</td><td>";

echo $row[3];
echo "</td><td>";

echo $row[4];
echo "</td><td>";

echo $row[5];
echo "</td><td>";

echo $row[6];
echo "</td>";


}
?>
</table>

<h1> ORGANIZER DETAILS LIST:  </h1>
<table border="1">
  <th> USN </th>
  <th> NAME OF THE CANDIDATE </th>  
  <th> COLLEGE NAME  </th>
  <th> DEPARTMENT </th>
  <th> VOLUNTEER EXPERIENCE  </th>
  <th> AGE </th>
  <th> SEM  </th>
  
<?php

mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("event") or die(mysql_error());
        
$result=mysql_query("select * from volunteer") or die(mysql_error());

while($row=mysql_fetch_array($result))
{
  
echo "<tr><td>";
echo $row[0];
echo "</td><td>";

echo $row[1];
echo "</td><td>";

echo $row[2];
echo "</td><td>";

echo $row[3];
echo "</td><td>";

echo $row[4];
echo "</td><td>";

echo $row[5];
echo "</td><td>";

echo $row[6];
echo "</td>";


}

?>
</table>

</table>
</body>
</html>

