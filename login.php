<?php 

session_start();


if($_GET["logout"]==1 AND $_SESSION['id']) {
 session_destroy();
$message="You have successfully logged out have a nice day!";
}

include("connection.php");

if($_POST['submit']=="Sign Up"){

   session_start();
 
   if(!$_POST['email']) 
    $error.="Please Enter your email<br>";

elseif (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))

$error.="Please Enter valid email address<br>";

if(!$_POST['password'])
$error.="Please Enter your password<br>";

else
{
  if(strlen($_POST['password'])<8)
  $error.="Please enter password with atleast 8 characters<br>";

 if(!preg_match('`[A-Z]`',$_POST['password']))

  $error.="Please Enter atleast one capital letter in your password<br>";
}

if($error) echo "There were Errors in your signup details!!:<br>" .$error;

else
{

  
$em=mysqli_real_escape_string($link,$_POST['email']);
$pas=mysqli_real_escape_string($link,$_POST['password']);


$query="SELECT * FROM users WHERE EmailId='$em' ";
$result=mysqli_query($link,$query);


  if(mysqli_num_rows($result)!=0)
{
     $error="You are already registered with us please Log In to continue<br>";
}
else
{ 
   $query="INSERT INTO users(EmailId,Password) VALUES('$em', md5(md5('$pas')))";
    if(mysqli_query($link,$query)){
    
     $res="Successfully Signed up!";

    $_SESSION['id']=mysqli_insert_id($link);

    header("location:mainpage.php");

}

  else { $error="Problem in signing in please try again later<br>";}
  
}


//echo "<br>The No of Rows Affected are:  ". mysqli_affected_rows($link)."  ";

}
}

if($_POST['submit']=="Log In")
{

$em1=mysqli_real_escape_string($link,$_POST['loginemail']);
$pas1=mysqli_real_escape_string($link,$_POST['loginpassword']);

$query="SELECT * FROM users WHERE EmailId='$em1' AND password=md5(md5('$pas1')) ";
$result=mysqli_query($link,$query);

$row=mysqli_fetch_array($result);

if($row)
{

  $_SESSION['id']=$row['ID'];
 
   header("location:mainpage.php");

}
else
{
  $error="Could not find person with that username and password<br>";
}

}



?>