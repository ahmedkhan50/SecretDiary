
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Contact form</title>

    <!-- Bootstrap -->
     <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
.emailform
{

  margin-top:20px;
}

.suc
{
  margin-top:10px;
}

.container
{

background-image:url("background.jpg");
background-position:center;
width:100%;
height:100%;
}


#r
{
 color:#FFFFFF;

}
</style>
</head>
<body>

<? include("login.php");  ?>

<div class="container">
<div class="row">
<div class="col-md-6 col-md-offset-3 emailform">
<h2>Please Sign In to Gain Access</h2> 
<form method="post">
<div class="form-group">
<input type="text" name="email" class="form-control" id="email" placeholder="Email" value="<?php echo addslashes($_POST['email']) ?>"/>

<input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo addslashes($_POST['password']) ?>"/>

<input type="submit" name="submit" class="btn btn-success suc" value="Sign Up"/>

<span id="r"><?   echo  "<br> ".$res."  ";        ?></span>
</div>
</form>
</div>

</div>
</div>

<div class="container">
<div class="row">
<div class="col-md-6 col-md-offset-3 ">
<form method="post">
<div class="form-group">
<input type="text" name="loginemail" class="form-control" id="loginemail" placeholder="Email" value="<?php echo addslashes($_POST['loginemail']) ?>"/>

<input type="password" class="form-control" name="loginpassword" placeholder="Password" value="<?php echo addslashes($_POST['loginpassword']) ?>"/>

<input type="submit" name="submit" class="btn btn-success suc" value="Log In"/>
</div>
</form>
</div>

</div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"><script>

  </body>
</html>