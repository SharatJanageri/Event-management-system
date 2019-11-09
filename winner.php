
<!DOCTYPE html>
<html>
<head>
  <title>EVENT DETAILS </title>

  <link href="css/menu.css" rel="stylesheet" type="text/css">
  <link href="css/box.css" rel="stylesheet" type="text/css">
 


<style type="text/css">

  body
  {
    background: url(images/d_back.jpg);
    background-repeat: no-repeat;
    background-size: 110% ;
  }
  h1,h2,h3,table
  {
    color: #fff;
  }
  
  .margin
  {

    margin: 10px 200px 0px 600px;
  }

  

</style>
</head>

<body>



<!-- Menu Bar-->
  
<center>
<div class="dropdown">
	<a href="home.html">
  <button class="dropbtn">Home</button></a>

</div>

<div class="dropdown">
  <a href="about.html"><button class="dropbtn">About Us</button></a>
  
  
   

 </div>
</div>


<div class="dropdown">
  <a href="volunteer.html">
  <button class="dropbtn">Volunteer</button></a>
  <div class="dropdown-content">
    <a href="volunteer.html">Life as a Volunteer</a>
    <a href="reg_vol.html"> Apply for Volunteer</a>
 
   
&nbsp
 </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Events</button>
  <div class="dropdown-content">
    
    <a href="tech.html">Technical Events</a>
    <a href="details.html"> Event Details </a>
    
&nbsp 
 </div>
</div>

<div class="dropdown">
	<a href="contact.html">
  <button class="dropbtn">Contact Us</button></a>
  <div class="dropdown-content">
  </div>
</div>
&nbsp &nbsp&nbsp &nbsp
<div class="dropdown">
  <a href="manage.html">
  <button class="dropbtn">Management</button></a>
  <div class="dropdown-content">
  </div>
</div>
&nbsp &nbsp

</br>
</br></br>



<!--End of Menu-->





<div style="margin: 50px;">
    <h1> CULTURAL EVENTS WINNERS LIST : </h1>
<table border="1">
  <th> CANDIDATE USN </th>
  <th> NAME OF THE CANDIDATE </th>  
  <th> COLLEGE NAME  </th>
  <th> PLACE </th>
  <th> CASH PRIZE</th>
  <th> EVENT</th>
<?php

mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("event") or die(mysql_error());
				
$result=mysql_query("select * from cul_win") or die(mysql_error());
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
echo "</td></tr>";


}

?>

</tr>
</table>
<h1> TECHNICAL EVENTS WINNERS LIST : </h1>

<table border="1">
  <th> CANDIDATE USN </th>
  <th> NAME OF THE CANDIDATE </th>  
  <th> COLLEGE NAME  </th>
  <th> PLACE </th>
  <th> CASH PRIZE</th>
  <th> EVENT</th>
<?php

mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("event") or die(mysql_error());
        
$result=mysql_query("select * from tech_win") or die(mysql_error());
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
echo "</td></tr>";


}

?>
</body>
</html>
