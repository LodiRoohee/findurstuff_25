 <?php
/*	if(!isset($text))
	$text="";
	if(!isset($username))
	$username="";
		require_once('functions.php');
		if(isset($_POST['Submit']))
		{
			$username=htmlentities($_POST['username'],ENT_QUOTES);
			$password=htmlentities($_POST['password'],ENT_QUOTES);
			if($username=="" or $password=="")
			{
			$text="<font color=red>Please Enter Username/Password</font>";
			$_SESSION['type']=0;
			}
			else
			{

                     //$username = escapeshellcmd($username);
	             // $password = escapeshellarg($password);
       	       $command1 = "python imap.py $username $password";
		       $auth_status1 = trim(shell_exec($command1));
       	        if ($auth_status1)
	                    {
			        $_SESSION['login']=true;
			        $_SESSION['user']=$username;
				 $_SESSION['type']=1;
				 die("<script>top.location='index.php'</script>");
				}
		/*		else
				{
					require_once('connection.php');
                                   $password = SHA1($password);
					$sql="Select username,role from users where username='$username' and password='".(($password))."'";
					$result=mysql_query($sql,$connection);
					//echo mysql_num_rows($result);
                                   if($result and mysql_num_rows($result)>0)
					{
						$row=mysql_fetch_array($result);
						$_SESSION['login']=true;
						$_SESSION['user']=$row['username'];
						$_SESSION['type']=$row['role'];
						//echo 'here';
						die("<script>top.location='index.php'</script>");

					}
				}
				$text="<font color=red>Invalid Username/Password</font>";
			}
		}*/

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-stri.ct.dtd">
<html>
<head>
<title>FindUrStuff</title>
<link rel="shortcut icon" href="image/icon.ico" type="image/jpg"/>
<link rel="stylesheet" href="style/style_sheet.css"/>
</head>
<body>
<?php require_once('header.php') ?>
<script>
function validate()
{
var f=document.form1
if(f.username.value=="")
{
     error(document.getElementyById("usernametext"))
	 f.username.focus()
	 return false
}
else
{
  if(f.password.value=="")
  {
     error(document.getElementById("passwordtext"))
	 f.password.focus()
	 return false
}
function error(id)
{
 id.style.color='black'
 }
return true;
}
</script>
<form name="form1" method="post" onsubmit="return validate()">
<div id="description">
<table width="30%">
<tr>
<td><div id="transbox"><p style="font-family:"Times New Roman", Times, serif"><b>Welcome, NITT Student<b></br></br> Description About Site<p></div></td>
</tr>
</table>
<div id="input">
<table width="40%">
</br></br></br></br></br></br></br></br>
<tr align="center">
<td width="29%" align="right"><span id="usernametext"><b>Username </b></br></span> </td>
<td width="10%" align="left"><input type="text" name="username" size="18"  value="<?php if(isset($username))echo $username; ?>"/></td>
</tr>
<tr align="center">
<td width="29%" align="right"><span id="passwordtext"><b>Password (Webmail) <b></br></span></td>
<td width="18%" align="left"><input type="password" name="password" size="18" /></td>
</tr>
<tr align="center">
<td>&nbsp;</td>
<td  align="center"><input type="submit" name="Submit" value="Login" /></td>
</tr><tr><td>&nbsp;</td></tr>
</table>
</div>
</div>
</form>
<?php require_once('footer.php') ?>
</body>
</html>