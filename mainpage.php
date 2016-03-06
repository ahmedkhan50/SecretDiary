<?php
session_start();
include("connection.php");
$query="SELECT diary FROM users WHERE id=' ".$_SESSION['id']." '  LIMIT 1";

$result=mysqli_query($link,$query);
$row=mysqli_fetch_array($result);

$diary=$row['diary'];




?>


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



#topcontainer
{
background-image:url("http://img14.deviantart.net/a853/i/2010/037/a/9/plain_wood_texture_01_by_goodtextures.jpg");
background-repeat:no-repeat;
background-size:contain;
height:650px;
background-size:cover;
width:100%;
}


.text
{
   margin-top:100px;
   position:relative;
   height:auto;
}

.navbar-header
{
  position:absolute;
}
</style>


</head>
<body>
 <? include("login.php"); ?>
<div class="navbar navbar-default navbar-fixed-top">
<div class="container">
<div class="navbar-header pull left">

<a class="navbar-brand" style="font-size:1.8em">Secret Diary</a>
</div> <!--end of navbar-header-->

<div class="pull-right">

<ul class="nav navbar-nav pull-right">
<li><a href="secretdiary.php?logout=1">Log Out</a></li>

</ul>

</div><!--End of items to be collapsed-->

</div> <!--end of container--->
</div> <!--end of navbar-->


<div class="container" id="topcontainer">

<div class="row">
    <div class="col-md-6 col-md-offset-3" id="toprow">

          <div class=form-group>
          <textarea class="form-control text" rows="20"><?php echo $diary; ?></textarea>
</div>
</div>  
  
</div>
</div>

 

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

  </body>
<script>

  $("textarea").keyup(function(){

     $.post("updatediary.php", {diary:$("textarea").val()});

});

</script>
</html>
