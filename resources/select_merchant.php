<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="../images/favicon.ico" />
	<title>Select Merchant :: GasGuru</title>
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
require 'header_dashboard.php';
?>
<!-- HEADER -->

<!-- ASIDE -->
<div class="custom-aside">
<?php
require 'dashboard_menu.php';
?>
</div>
<!-- ASIDE -->

<!-- MAIN -->
<div class="custom-main">
<!-- MOBILE -->
<?php
require 'mobile_dashboard_menu.php';
?>
<!-- MOBILE -->
<div class="steps">
<h1 style="color:#a88beb;" class="title is-3 has-text-left">Select merchant</h1> 
 <!-- SEARCH -->
  <form  method="get" action="">
  <div style="width:100%;" class="field has-addons">
  <div class="control is-expanded">
    <input name="search" class="input" type="text" placeholder="Enter merchant name" required>
  </div>
  <div class="control">
    <button type="submit" class="button is-primary">
     <i class="fa fa-search"></i>&nbsp;Search
    </button>
  </div>
</div> 
 </form><br>
 <!-- SEARCH -->

<hr>

<div class="columns">

<div class="column">
<div class="box">
<article class="message">
  <div class="message-header">
    <p>Africana</p>
  </div>
  <div class="message-body">
    <p class="has-text-left"><span class="has-text-weight-bold">DISTANCE: </span>400m</p>
    <p class="has-text-left"><span class="has-text-weight-bold">SHIPPING TIME: </span>10 min</p>
    <p class="has-text-left"><span class="has-text-weight-bold">PRICE: </span>400m</p><br>
   <a class="button is-primary is-pulled-left" href="cart.php">SELECT ME</a>
  </div>
</article>   
</div> 
</div>

<div class="column">
<div class="box">
<article class="message">
  <div class="message-header">
    <p>Maina</p>
  </div>
  <div class="message-body">
    <p class="has-text-left"><span class="has-text-weight-bold">DISTANCE: </span>400m</p>
    <p class="has-text-left"><span class="has-text-weight-bold">SHIPPING TIME: </span>10 min</p>
    <p class="has-text-left"><span class="has-text-weight-bold">PRICE: </span>400m</p><br>
   <a class="button is-primary is-pulled-left" href="cart.php">SELECT ME</a>
  </div>
</article>   
</div> 
</div>

<div class="column">
<div class="box">
<article class="message">
  <div class="message-header">
    <p>Venus</p>
  </div>
  <div class="message-body">
    <p class="has-text-left"><span class="has-text-weight-bold">DISTANCE: </span>400m</p>
    <p class="has-text-left"><span class="has-text-weight-bold">SHIPPING TIME: </span>10 min</p>
    <p class="has-text-left"><span class="has-text-weight-bold">PRICE: </span>400m</p><br>
   <a class="button is-primary is-pulled-left" href="cart.php">SELECT ME</a>
  </div>
</article>   
</div> 
</div>

<div class="column">
<div class="box">
<article class="message">
  <div class="message-header">
    <p>System</p>
  </div>
  <div class="message-body">
    <p class="has-text-left"><span class="has-text-weight-bold">DISTANCE: </span>400m</p>
    <p class="has-text-left"><span class="has-text-weight-bold">SHIPPING TIME: </span>10 min</p>
    <p class="has-text-left"><span class="has-text-weight-bold">PRICE: </span>400m</p><br>
   <a class="button is-primary is-pulled-left" href="cart.php">SELECT ME</a>
  </div>
</article>   
</div> 
</div>
  
</div>


</div>


</div>
<!-- MAIN -->

<!-- FOOTER -->
<?php
// require 'footer_resources.php';
?>
<!-- FOOTER -->

</body>
</html>