<?php
require_once('function.php');
secure(1);
require_once('connection.php');
?>
<?php
require_once('header.php');
?>
<div id="content">

<div id="right">
<style>
body
{background-color:#595C5C;}
</style>
<br/>
<table align="center" width="100%" id="table1" cellpadding="5" cellspacing="5" border="1">
    <tr><th colspan="3"><center><b id="styyle">LOST ITEMS LIST</b></center></th></tr>
    <tr>
	
<th><b id= "styyle">Name</b></th>
<th><b id= "styyle">Item Name</b></th>
<th><b id= "styyle">Item Description</b></th>
</tr>
<?php
	$result=mysql_query("Select name,itemname,description from lost",$conn);
	$i=1;
	while($row=mysql_fetch_array($result))
	{
?>
	<tr align="center"<?php if($i%2) { ?> style="background:#CCCCCC" <?php } ?>>
    <td align="center"><?php echo $row['name'] ?></td>
    <td align="center"><?php echo $row['itemname'] ?></td>
    <td align="center"><?php echo $row['description'] ?></td>
    </tr>

<?php } ?>
</table>
</div>

    <center> <h3>If you have lost something click on I LOST link.</h3> <a href="lost_register.php"><b id="styyle">I LOST</b></a></center>
</div>
<?php require_once('footer.php')?>
</body>

</html>
