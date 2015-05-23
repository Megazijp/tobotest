<?php
include("functions.inc");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>
            <?php echo $page->title; ?>
        </title>
        <link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates?>styles/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates?>styles/main.css" />

            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
            <script src="<?php echo $config->urls->templates?>scripts/main.js"></script>
        
 
    </head>
            <body>
                
                <!-- Bodywrap closes in footer.php -->
                <div id="bodywrap">
                    
                    <li class="loginbar"><form class="navbar-form navbar-right" action="<?php echo $page->root; ?>/login.php/" method="post">
<div class="form-group">
    <input type="password" class="form-control" name="ww" id="ww" class="ww" />
</div>
    <input type="submit" class="btn btn-default" name="clickme" id="loginsubmit" />
</form></li>


                    
                    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  <!-- navbar-fixed-top -->
<div class="container">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
	<span class="sr-only">Toggle navigation</span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
  </button>
<a class="navbar-brand" href="/"><img src="<?php echo $config->urls->assets?>files/images/logo.jpg" class="logo"/></a>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="navbar-collapse collapse in" id="navbar-collapse-1" style="height: auto;">
<ul class="nav navbar-nav navbar-right">
<?php
    $root = $pages->get("/");
    $children = $root->children("limit=7");
    $children->prepend($root);
    foreach($children as $child) {
        echo "<li><a href='{$child->url}'>{$child->title}</a></li>";
    }
?>
<?php

    if(loggedin()){
      echo "<li><a href='/uploads'>Uploads</a></li>";
    }
?>
</ul>

<ul class="nav navbar-nav navbar-right">
<?php

if(!loggedin()){
    
print <<<EOD
<span class="login"><a id="loginbutton" href="#">Login</a></span>

EOD;
}else{
    
echo <<<EOD

<span class="logout"><a id="logoutbutton" href='$page->root/logout.php'>Logout</a></li>";

EOD;
}
?>
</ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
<?php
if(isset($_COOKIE["loggedout"])) {
print <<<EOD
    <style>
    .carousel-inner{
        margin-top: 0px;
    }
    .content{
        margin-top: 0px;
    }
    </style>
EOD;
    
    echo "<div class='alert alert-success' role='alert'>Log out Sucessful!</div>";
    setcookie("loggedout", "", time() - 3600);
} 
if(isset($_COOKIE["success"])) {
print <<<EOD
    <style>
    .carousel-inner{
        margin-top: 0px;
    }
    .content{
        margin-top: 0px;
    }
    </style>
EOD;
    echo "<div class='alert alert-success' role='alert'>Login Sucessful!</div>";
    setcookie("success", "", time() - 3600);
} 
if(isset($_COOKIE["error"])) {
print <<<EOD
    <style>
    .carousel-inner{
        margin-top: 0px;
    }
    .content{
        margin-top: 0px;
    }
    </style>
EOD;
    echo "<div class='alert alert-danger' role='alert'>Login Failed!</div>";
    setcookie("error", "", time() - 3600);
} 
// IK SNAP ER NIET VAN AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAbAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
?>


                    
   
                    
                    
                    
                    
                    
                    
                 
               
                <script>
                 $( "#loginbutton" ).click(function() {
                   $('.loginbar').toggleClass('loginshow');
                });
                </script>

