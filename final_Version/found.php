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
    <tr><th colspan="3"><center><b id="styyle">FOUND ITEMS LIST</b></center></th></tr>
    <tr>
<th><b id="styyle">Name</b></th>
<th><b id="styyle">Item Name</b></th>
<th><b id="styyle">Item Description</b></th>
</tr>
<?php
	$result=mysql_query("Select name,itemname,description from found",$conn);
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

    <center> <h3>If you found something click on I FOUND link.</h3> <a href="found_register.php"><b id="styyle">I FOUND</b></a></center>
</div>
</div>
<?php require_once('footer.php')?>
</body>

</html>
