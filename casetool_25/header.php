<?php
if(isset($_SESSION['type']))
$role=$_SESSION['type'];
else
{
	$role=0;
}
if(isset($_SESSION['user']))
$user=$_SESSION['user'];
else
	$user="";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-stri.ct.dtd">
<html>
<head>
<title>FindUrStuff</title>
<link rel="shortcut icon" href="image/icon.ico" type="image/jpg"/>
<link rel="stylesheet" href="style/style_sheet.css"/>
</head>
<body>
    <div>
<div id="header">
<table width="100%">
<tr>
<td><div style="padding-left:0px;"align="right"><img src="image/logooo.png" alt="Logo" width="70" height="70" /></div></td>
<td style="padding-left:10px; max-width:500px;"><img src="image/logoname.png" alt="National Institute of Technology Tiruchirappalli" width="450px" height="70px"/><div><td>
</tr>
</table>
</div>
<div id ="header2">
<table width="100%">
<tr>
<td><div style="padding-right:55px;"align="right";><h1 style ="font-family:"Times New Roman", Times, serif";>Find Your Stuff</h1></div></td>
</tr>
</table> </div>
<div id="menu">
  <ul id="nav">
  <?php
  
 /*  if($role==1)
   echo '<li><a href="index_copy.php">Home</a></li>';
   if($role==1)
   echo '<li><a href="L_list.php">Lost</a></li>';
   if($role==1)
   echo '<li><a href="F_list.php"><font color="">Found</a></font></li>';
    if($role==2)    I changed... role 1 to index_copy
   echo '<li><a href="index_copy1.php">Home</a></li>';
    if($role>=1)
   echo '<li><a href="logout.php">Logout</a></li>';
   
   echo '';*/
    ?> 
   
   </ul>
 </div>
 </div>
</body>
</html>
