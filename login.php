<?php
 session_start();
 $db=mysqli_connect("localhost","root","","home services");

if (isset($_POST['submit']))
{
   //echo"hai";
   $username=$_POST["uname"];   //username value from the form
   $password=$_POST["psw"];	//password value from the form
   $sql="select role from login where username='$username' and password='$password'"; //value querried from the table
         //echo $sql;
   $res=mysqli_query($db,$sql);  //query executing function

   while($fetch=mysqli_fetch_array($res))
   {
     if($fetch['role']==0) // role means user , for admin set to 0 and for user set to
     {
       $_SESSION["uname"]=$fetch['username'];	// setting username as session variable
                  header("location:adminindex.php");	//home page or the dashboard page to be redirected
            }

     if($fetch['role']==1) // role means user , for admin set to 0 and for user set to
     {
       $_SESSION["uname"]=$fetch['username'];	// setting username as session variable
                  header("location:index.php");	//home page or the dashboard page to be redirected
           }


         }


}
?>
<!DOCTYPE html>
<html >
<head>
  <title>Login Form</title>
  <script>
  function validation()
  {
  	var uname=document.myform.uname.value;
  	if((uname == null) || (uname.length == 0)){
  	alert("Enter username!");
  	document.myform.uname.focus();
  	return false;
  	}
  	return true;
          }
  </script>



      <link rel="stylesheet" href="css/style1.css">


</head>

<body>
  <div class="login-page">
  <div class="form">
  
    <form class="login-form" action="#" name="myform" method="post" onsubmit="return validation();">

      <input type="text" placeholder="username" name="uname"/>
      <input type="password" placeholder="password" name="psw"/>
      <button type="submit" name="submit" value="submit">LOGIN</button>
      <p class="message">Find Jobs ? <a href="eregister.php">Clickme</a></p>
      <p class="message">New User? <a href="Register.php"</a>REGISTER</p>

    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index1.js"></script>

</body>
</html>
