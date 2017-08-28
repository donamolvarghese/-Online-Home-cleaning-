<!DOCTYPE html>
<?php

$db=mysqli_connect("localhost","root","","home services");
//echo 'hai';
if(isset($_POST['submit']))
{
$username=$_POST["userid"];

$password=$_POST["psw"];

$confirm_password=$_POST["cpsw"];

$firstName=$_POST["fname"];

$lastName=$_POST["lname"];

$address=$_POST["address"];

$city=$_POST["city"];

$date_of_birth=$_POST["dob"];

$email=$_POST["email"];

if(isset($_POST["gender"])) {

$gender = $_POST["gender"];


} else {

$gender= '';

}

$contact=$_POST["contact"];


echo $gender;
$sql="INSERT INTO `registration`(`username`, `Password`, `confirm password`, `Firstname`, `lastname`, `address`, `city`, `dob`, `email_id`, `gender`, `contact`)
VALUES ('$username','$password','$confirm_password','$firstName','$lastName','$address','$address','$city','$date_of_birth','$email','$gender','$contact')";
 $result=mysqli_query($db,$sql);
/*
$sql1="INSERT INTO `login`(`username`, `password`, `role`) VALUES ('$a','$b',1)";
$result1=mysqli_query($db,$sql1);*/
echo "Sucessfully inserted";

$sql2= "select MAX(`Reg_id`) as regid from `registration`";
$result2=mysqli_query($db,$sql2);
$row = mysqli_fetch_array($result2);
$register_id = $row['regid'];

$sql3="INSERT INTO `login`( `Reg_id`, `username`, `password`, `Role`) VALUES ('$register_id','$username','$password',1)";
$result2=mysqli_query($db,$sql3);
	header("location:adminindex.php");
}
?>

<html >
<head>
  <meta charset="UTF-8">
  <title>REGISTRATION</title>



        <link rel="stylesheet" href="css/style1.css">


</head>

<body>
  <div class="menu_block ">
    <nav class="horizontal-nav full-width horizontalNav-notprocessed">
      <ul class="sf-menu">
           <li class="current"><a href="index.php">Home</a></li>

          
         </ul>
      </nav>
     <div class="clear"></div>
  </div>
</div>
  <div class="login-page">

  <div class="form">
    <form name="myform" method="post"  action="#" onSumbit="return validate()">
    <div id="3">
    </div>
    <div>
       <h2>REGISTRATION FORM</h2>
        <label><br><b>USERNAME:</b></br></label>
        <input type="text" name="userid" required>
    	<br>
        <label><br><b>FIRST-NAME:</b></br></label>
        <input type="text" name="fname" required>
    	<br>
      <br>
        <label><br><b>LAST-NAME:</b></br></label>
        <input type="text" name="lname" required>
    	<br>
    	<label><br><b>PASSWORD:</b></br></label>
    	<input type="password" name="psw" required>
    	<br>
      <br>
    	<label><br><b>CONFIRM PASSWORD:</b></br></label>
    	<input type="password" name="cpsw" required>
    	<br>
    	<label><br><b>EMAIL:</b></br></label>
    	<input type="email" name="email" required>
    	<br>
    	<label><br><b>ADDRESS:</b></br></label>
    	<textarea  name="address" required>
     	</textarea>
    	<br>
    	<label><br><b>GENDER:</b></br></label>
    	<input type="radio" name="gender" value="female">Female</input>
      <input type="radio" name="gender" value="male">Male</input>
    	<br>
      <br>
    	<label><br><b>DOB:</b></br></label>
    	<input type="text" name="dob" required>
    	<br>
      <br>
    	<label><br><b>PHN NUMBER:</b></br></label>
    	<input type="text" name="contact" required>
    	<br>
      <br>
    	<label><br><b>CITY:</b></br></label>
    	<input type="text" name="city" required>
    	<br>
      <br></br>
    		  <button type="submit" name="submit" value="submit">REGISTER</button>
    </div></form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index1.js"></script>

</body>
</html>
