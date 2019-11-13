<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="../images/favicon.ico" />
	<title>Create an account :: GasGuru</title>
	<link rel="stylesheet" type="text/css" href="../css/bulma.css">
	<link rel="stylesheet" type="text/css" href="../css/custom.css">
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
     <script src="../js/jquery-3.3.1.min.js"></script>
     <script src="../js/custom.js"></script>
     <script src="../js/bulma.js"></script>
</head>
<body class="is-light">

<!-- HEADER -->
<?php
require 'header_resources.php';
?>
<!-- HEADER -->


<!-- MAIN -->
<div class="custom-hero2">
  <h1 class="title is-1">Online gas order</h1>	
<div class="box">
<h2 class="title is-4">Register</h2>
 <form>
<div class="columns">
<div class="column">
 <div class="field">
  <p class="control has-icons-left">
    <input class="input" type="text" placeholder="First Name">
    <span class="icon is-small is-left">
      <i class="fa fa-user"></i>
    </span>
  </p>
</div>
<div class="field">
  <p class="control has-icons-left">
    <input class="input" type="text" placeholder="Last Name">
    <span class="icon is-small is-left">
      <i class="fa fa-user"></i>
    </span>
  </p>
</div> 
 <div class="field">
  <p class="control has-icons-left">
    <input class="input" type="email" placeholder="Email">
    <span class="icon is-small is-left">
      <i class="fa fa-envelope"></i>
    </span>
  </p>
</div>
<div class="field disappear-mobile">
  <button type="submit" class="button is-primary">Register</button>
</div> 
</div>  
<div class="column">
<div class="field">
  <p class="control has-icons-left">
    <input class="input" type="text" placeholder="Phone">
    <span class="icon is-small is-left">
      <i class="fa fa-phone"></i>
    </span>
  </p>
</div>
<div class="field">
  <p class="control has-icons-left">
    <input class="input" type="password" placeholder="Password">
    <span class="icon is-small is-left">
      <i class="fa fa-lock"></i>
    </span>
  </p>
</div>
<div class="field">
  <p class="control has-icons-left">
    <input class="input" type="password" placeholder="Confirm Password">
    <span class="icon is-small is-left">
      <i class="fa fa-lock"></i>
    </span>
  </p>
</div> 
 <div class="field appear-mobile">
  <button type="submit" class="button is-primary">Register</button>
</div> 
</div>
</div>

 
 </form>  
  </div>




</div>
<!-- MAIN -->

<!-- FOOTER -->
<?php
require 'footer_resources.php';
?>
<!-- FOOTER -->

</body>
</html>