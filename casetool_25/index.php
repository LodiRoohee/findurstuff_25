<?php require_once('header.php') ?>
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

if(f.classes.value=="")
	{	alert("Please Enter Your Class Name");
		f.classes.focus()
		x = 0;
		blinkBorder("white","red", f.classes, 500);
		return false;
	}
	if(f.hostel.value=="")
	{
	 alert("Select Hostel Name");
	 f.hostel.focus();
	 x=0;
	 blinkBorder("white","blue",f.hostel, 500);
	 return false;
	 }

if(f.year.value=="")
{
alert("Select year of study from the list please...");
f.year.focus();
x = 0;
blinkBorder("white","red", f.year, 500);
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
<div align="center" class="box" style="color:#006600"><?php if (!isset($text)) $text=""; echo $text ?></div>
<div id="errorbox" class="box" align="center" style="color:#FF0000"></div>
<table width="90%" align="center" border="0" cellpadding="5" cellspacing="5">
<tr align="center">
<td width="39%" align="right">Name : </td>
<td id="userTbox" width="25%" align="left"><input type="text" name="username" size="26" /></td>
</tr>
<tr align="center">
<td width="39%" align="right">Roll No. : </td>
<td id="" width="25%" align="right"><?php if (isset($_SESSION['user']))echo $_SESSION['user'] ?></td>
</tr>
<tr align="center">
<td align="right">Department <sup>*</sup>:</td>
						<td><select id="department" name="department" style="border:solid 1px black;">

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
						<td width="39%" align="right">Class : </td>
<td id="userTbox" width="25%" align="left"><input type="text" name="classes" size="26" placeholder="course name" /></td>
</tr>
<tr id="otherdesig"  style="display:none">
<td>&nbsp;</td>
<td align="left" ><input type="text" name="otherdesignation" size="26" /></td>
</tr>
<tr align="center">
    <td align="right">Year of Study <sup>*</sup>:</td>
<td align="left"><select id="year" name="year" style="border:solid 1px black;">

						<option value="">Year of Study</option>
						<option value="first">I</option>
                                                <option value="second">II</option>
                                                <option value="third">III</option>
                                                <option value="fourth">IV</option>
												<option value="fifth">V</option>
    </select></td>
</tr>
<tr align="center">
<td width="39%" align="right">E-Mail : </td>
<td id="userTbox" width="25%" align="left"><input type="text" name="email" size="26" /></td>
</tr>


<tr align="center">
<td width="39%" align="right">Hostel<sup>*</sup>:</td>
<td align="left"><select id="hostel" name="hostel" style="border:solid 1px black;">

						<option value="">Hostel</option>
						<option value="opal-A">Opal-A</option>
                                                <option value="opal-B">Opal-B</option>
                                                <option value="opal-C">Opal-C</option>
                                                <option value="opal-D">Opal-D</option>
                                                <option value="Aquamarine-A">Aquamarine-A</option>
                                                <option value="opal-E">Opal-E</option>
                                                <option value="Aquamarine-B">Aquamarine-B</option>
                                                <option value="diomand">Diomand</option>
												<option value="Ruby">Ruby</option>
												<option value="Perl">Perl</option>
    </select></td>

</tr>
<tr align="center">
<td width="39%" align="right">Item : </td>
<td id="userTbox" width="25%" align="left"><input type="text" name="item" size="26" /></td>
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
</div>
</div>
</div>
</form>
<?php require_once('footer.php') ?>
</body>
</html>
