<!DOCTYPE html>
<?php

$db=mysqli_connect("localhost","root","","home services");
//echo 'hai';
if(isset($_POST['submit']))
{
$ename=$_POST["ename"];

$type=$_POST["typeofwork"];

$address=$_POST["eaddress"];

$econtact=$_POST["econtact"];

if(isset($_POST["time"])) {

$time = $_POST["time"];


} else {

$time= '';

}


$status=$_POST["status"];

$email=$_POST["email"];

if(isset($_POST["gender"])) {

$gender = $_POST["gender"];


} else {

$gender= '';

}

$sql="INSERT INTO `employee registration`(`E_name`, `Type of work`, `E_address`, `E_contact`, `Status`, `email`, `Gender`, `time`)
VALUES ('$ename','$type','$address','$econtact','$status','$email','$gender','$time')";
 $result=mysqli_query($db,$sql);
/*
$sql1="INSERT INTO `login`(`username`, `password`, `role`) VALUES ('$a','$b',1)";
$result1=mysqli_query($db,$sql1);*/
echo "Sucessfully inserted";

/*$sql2= "select MAX(`Reg_id`) as regid from `employee registration`";
$result2=mysqli_query($db,$sql2);
$row = mysqli_fetch_array($result2);
$register_id = $row['regid'];

$sql3="INSERT INTO `login`( `Reg_id`, `username`, `password`, `Role`) VALUES ('$register_id','$username','$password',1)";
$result2=mysqli_query($db,$sql3);
	header("location:index.php");*/
}
?>

<html >
<head>
  <meta charset="UTF-8">
  <title>EMPLOYEE REGISTRATION</title>



        <link rel="stylesheet" href="css/style1.css">


</head>

<body>
  <div class="login-page">
  <div class="form">
    <form name="myform" method="post"  action="#" onSumbit="return validate()">
    <div id="3">
    </div>
    <div>
       <h2>EMPLOYEE REGISTRATION FORM</h2>
        <label><br><b>USERNAME:</b></br></label>
        <input type="text" name="ename" required>
    	<br>
        <label><br><b>Type_Of_Work:</b></br></label>
        <input type="text" name="typeofwork" required>
    	<br>
      <br>
      <label><br><b>ADDRESS:</b></br></label>
    	<textarea  name="eaddress" required>
     	</textarea>
    	<br>
    	<label><br><b>Contact:</b></br></label>
    	<input type="text" name="econtact" required>
    	<br>
      <br>
    	<label><br><b>Time:</b></br></label>
    	<input type="radio" name="time" value="full time">Full time</input>
      <input type="radio" name="time" value="Part time">Parttime</input>
    	<br>
      <br>
    	<label><br><b>STATUS:</b></br></label>
    	<input type="text" name="status" required>
    	<br>
    	<label><br><b>EMAIL:</b></br></label>
    	<input type="email" name="email" required>
    	<br>
    	<label><br><b>GENDER:</b></br></label>
    	<input type="radio" name="gender" value="female">Female</input>
      <input type="radio" name="gender" value="male">Male</input>
    	<br>
     <br>
      <label><br><b>DOB:</b></br></label>
    	<input type="text" name="dob" required>
      <br></br>
    		  <button type="submit" name="submit" value="submit">REGISTER</button>
    </div></form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index1.js"></script>

</body>
</html>
