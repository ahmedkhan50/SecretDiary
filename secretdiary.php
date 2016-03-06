
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Secret Diary</title>

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

.navbar-toggle { display:block;
float:right; }<!--to display the navbar button on right-->

.navbar-brand
{
 font-size:1.8em;
}
.navbar-toggle
{
  margin:8px -5px 0 5px;
  position:relative;
  left:11px;
  
}

#topcontainer
{
background-image:url("http://img14.deviantart.net/a853/i/2010/037/a/9/plain_wood_texture_01_by_goodtextures.jpg");
background-repeat:no-repeat;
background-size:contain;
height:650px;
background-size:cover;
width:100%;

}

#middlecontainer
{
 width:100%;
 height:auto;

}

#toprow
{
  margin-top:70px;
  text-align:center;
}

#toprow h1
{
  font-size:300%;
  font-weight:bold;
}

#toprow p
{
   font-size:20px;
}

.bold
{
 font-weight:bold;
 font-size:18px;
}

.margintop
{
 margin-top:30px;
}

.center
{
 text-align:center;
}

#label
{
    position:relative;
    left:-290px;
    top:35px;
    font-size:20px;
}

</style>


</head>
<body>
 <? include("login.php"); ?>
<div class="navbar navbar-default navbar-fixed-top">
<div class="container">
<div class="header">
<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" style="font-size:1.8em">Secret Diary</a>
</div> <!--end of navbar-header-->

<div class="collapse navbar-collapse">

<ul class="nav navbar-nav">
<li class="active"><a href="secretdiary.php">Home</a></li>
<li><a href="about.php">About</a></li>
<li><a href="secretdiary.php">Sign Up</a></li>

</ul>
<form class="navbar-form navbar-right" method="post">
<div class="form-group">
<input type="email" name="loginemail" placeholder="Email" class="form-control" value="<?php echo addslashes($_POST['loginemail']) ;       ?>"/>
</div>
<div class="form-group">
<input type="password" name="loginpassword" placeholder="Password" class="form-control"/>
</div>
<input type="submit" name="submit" class="btn btn-success" value="Log In"/>
</form>
</div><!--End of items to be collapsed-->

</div> <!--end of container--->
</div> <!--end of navbar-->


<div class="container" id="topcontainer">

<div class="row">
    <div class="col-md-6 col-md-offset-3" id="toprow">

          <h1 class="margintop">Ur Secret Keeper!</h1>
         <p class="lead">Your own private diary with you wherever you go.</p>
<?php 

if($error)
{
   echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
}

if($message)
{
   echo '<div class="alert alert-success">'.addslashes($message).'</div>';
}     
?>

      <p>If Interested Sign Up below!.</p>


<form class="margintop" method="post">
<label for="email" id="label">Email</label>
<div class="input-group">
<span class="input-group-addon at">@</span>

<input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo addslashes($_POST['email']) ;?>"/>

</div>
<label for="password" id="label">Password</label>
<div class="input-group">
<span class="input-group-addon at">@</span>
<input type="password" name="password" class="form-control"  placeholder="Password" value="<?php echo
addslashes($_POST['password']) ; ?>"/>

</div>


<input type="submit" name="submit" value="Sign Up" class="btn btn-success btn-lg margintop"/>

</form>

</div>  
  
</div>
</div>

 

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

  </body>
<script>
$(function(){
    $('.nav-tabs a:first').tab('show');/* for navbar to work*/

}); 

</script>
</html>
