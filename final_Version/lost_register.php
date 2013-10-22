<?php
require_once('function.php');
secure(1);
require_once('connection.php');
//if($_SESSION['type']==2)
//header("Location: stall.php");
?>

<?php require_once('header.php') ?>
<?php
		if(isset($_POST['Submit']))
		{
			$sql="Insert into lost(rollno,name,department,email,contact,itemname,description) values('" . $_SESSION['user'] . "', '".mysql_real_escape_string($_POST['username'])."','".$_POST['department']."','".mysql_real_escape_string($_POST['email'])."','". $_POST['contact']."','".mysql_real_escape_string($_POST['item'])."','".mysql_real_escape_string($_POST['desc'])."')";

			mysql_query($sql,$conn) or die(mysql_error()) ;
			$id=mysql_insert_id($conn);
        
			$text="LOST information Registration Completed Successfully! <br> Go to lost list to see your entry."?>
			<?php
	
			$to = $_SESSION['user'].'@nitt.edu';
			$subject = "Mail from admin";
	
			$from = "Admin";
			$headers = "From:" . $from;
		//	mail($to,$subject,$message,$headers);
			/*Sending mail to Complainant*/
		}
?>


<script>

var x;

function blinkBorder(colorA, colorB, element, time){
  x++;
  if(x == 10)
	  return;
  element.style.borderColor = colorB ;
  setTimeout( function(){
    blinkBorder(colorB, colorA, element, time);
    colorB = null;
    colorA = null;
    element = null;
    time = null;
  } , time) ;
}

function validate()
{
	var f=document.form1
	//alert("hi calculation "+calc()+"timing::"+calct()+"problem::"+calcp())
	var name = f.username.value;
	var nameReg = /^[a-zA-Z ]*$/;
	var numReg = /^\d+$/;

var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	//alert(f.contact.value.length);
	if(name=="" || !nameReg.test(name))
	{	alert("Please Enter Your Name.\nName can only have Alphabets and Spaces.")
		f.username.focus()
		x = 0;
		blinkBorder("white","blue", f.username, 500);
		return false;
	}

        if(f.department.value=="")
{
alert("Select your department from the list please...");
f.department.focus();
x = 0;
blinkBorder("white","blue", f.department, 500);
return false;
}


if(f.contact.value=="" || !numReg.test(f.contact.value) || f.contact.value.length > 10)
	{	alert("Please Enter Proper Contact Number.\nContact can have only numbers (Max 10 digits)");
		f.contact.focus()
		x = 0;
		blinkBorder("white","red", f.contact, 500);
		return false;
	}


if(f.email.value=="")
{
alert("Can't leave email field empty.");
f.email.focus();
x = 0;
blinkBorder("white","red", f.email, 500);
return false;
}

  if(!(f.email.value.match(mailformat)))
	{
    alert("Invalid email address!");
    f.email.focus();
    x = 0;
blinkBorder("white","red", f.email, 500);
    return false;
    }

if(f.item.value=="")
{
alert("please write Item name, which you have Lost");
f.item.focus();
x = 0;
blinkBorder("white","blue", f.item, 500);
return false;
}
}
function error(str)
{
	document.getElementById("errorbox").innerHTML=str
}
</script>
<?php require_once('header.php') ?>
<form name="form1" method="post" onsubmit="return validate()">
<div id="description">
<div align="center" class="box" style="color:white"><?php if (!isset($text)) $text=""; echo $text ?></div>
<div id="errorbox" class="box" align="center" style="color:#FF0000"></div>
<table width="90%" align="center" border="0" cellpadding="5" cellspacing="5">
<tr align="center">
<td width="39%" align="right">Name : </td>
<td id="userTbox" width="25%" align="left"><input type="text" name="username" size="26" required /></td>
</tr>
<tr align="center">
<td width="39%" align="right">Roll No. : </td>
<td id="" width="25%" align="left"><?php if (isset($_SESSION['user']))echo $_SESSION['user'] ?></td>
</tr>
<tr align="center">
<td align="right">Department <sup>*</sup>:</td>
						<td><select id="department" name="department" style="border:solid 1px black;" required>

						<option value="">Department</option>
						<option value="Architecture">Architecture</option>
						<option value="Chemical Engineering">Chemical Engineering</option>
						<option value="Chemistry">Chemistry</option>
						<option value="Civil Engineering">Civil Engineering</option>
						<option value="Computer Applications">Computer Applications</option>
						<option value="computer Science and Engineering">computer Science and Engineering</option>
						<option value="Electricals and Electronics Engineering">Electricals and Electronics Engineering</option>
						<option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
						<option value="Humanities">Humanities</option>
						<option value="Instrumentation and Control Engineering">Instrumentation and Control Engineering</option>
						<option value="Management Studies">Management Studies</option>
						<option value="Mathematics">Mathematics</option>
						<option value="Mechanical Engineering">Mechanical Engineering</option>
						<option value="Production Engineering">Production Engineering</option>
						<option value="Metallurgical and Materials Engineering">Metallurgical and Materials Engineering</option>
						<option value="Physics">Physics</option>
						</select></td>
</tr>		
<tr>				
						<td width="39%" align="right">Contact No. : </td>
<td id="userTbox" width="25%" align="left"><input type="text" name="contact" size="26" placeholder="Don't put 0 or +91" required/></td>
</tr>


<tr align="center">
<td width="39%" align="right">E-Mail : </td>
<td id="userTbox" width="25%" align="left"><input type="email" name="email" size="26" required /></td>
</tr>

<tr align="center">
<td width="39%" align="right">Item : </td>
<td id="userTbox" width="25%" align="left"><input type="text" name="item" size="26" required /></td>
</tr>
<tr align="center">
<td width="39%" align="right">description : </td>
<td id="userTbox" width="25%" align="left"><textarea rows="5" col="20" type="text" name="desc" size="26"></textarea><td>
</tr>
<tr>
<td colspan="4" align="center"><input type="submit" name="Submit" value="Submit" /></td>
</tr>
</table>
</div>
</form>
<?php require_once('footer.php') ?>
</body>
</html>
