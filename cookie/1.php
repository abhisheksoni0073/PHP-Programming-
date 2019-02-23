<?php

        
@$id=$_POST['id'];
       
 @$pass=$_POST['pass'];
	
	
if(isset($_POST['signin']))
	
{
		
if($id=="sanjeev@gmail.com" && $pass==123)
		
{
			
if($_POST['ch']==true)
			
{
			
setcookie("cid",$id,time()+60*60);
			
setcookie("cpass",$pass,time()+60*60);
			

			
}
			
header('location:https://www.facebook.com');
		

}
		
else
		
{
		
echo "invalid id or pass";
		
}
	
}  


        
@$id=$_POST['id'];
       
 @$pass=$_POST['pass'];
	
	
if(isset($_POST['signin']))
	
{
		
if($id=="admin" && $pass==123)
		
{
			
if($_POST['ch']==true)
			
{
			
setcookie("cid",$id,time()+60*60);
			
setcookie("cpass",$pass,time()+60*60);
			

			
}
			
header('location:https://www.facebook.com');
		

}
		
else
		
{
		
echo "invalid id or pass";
		
}
	
}  
  
?>


  <html>

<form method="post">
 
<table align="center"> 
	
<tr>
		
<td colspan="2" align="center"><?php echo @$err;?></td>
	
</tr>
	
	
<tr>
		
<th>Your email</th>
		
<td><input type="text" name="id" placeholder="admin"  value="<?php echo @$_COOKIE['cid'];?>" required/></td>
	
</tr>
	
<tr>
		
<th>Your password</th>
		
<td><input type="password" placeholder="123" name="pass" value="<?php echo @$_COOKIE['cpass'];?>" required/></td>
	
</tr>
	
<tr>
		
<th>stay signed in</th>
		
<td><input type="checkbox" name="ch"/></td>
	
</tr>
	
<tr>
	
<td colspan="2" align="center">
		
<input type="submit" name="signin" value="SignIn"/></td>
	
</tr>

</table>
	
</body>

</form>

</html>