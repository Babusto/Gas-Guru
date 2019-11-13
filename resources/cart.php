<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="../images/favicon.ico" />
	<title>Location :: GasGuru</title>
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
<h1 style="color:#a88beb;" class="title is-3 has-text-left">Confirm order</h1>

<p class="help is-info has-text-left">* Pay on delivery</p>

<div style="border:1px solid #a88beb;" class="box">
    <p class="has-text-left"><span class="has-text-weight-semibold">CYLINDER SIZE: </span>6kg</p>
    <p class="has-text-left"><span class="has-text-weight-semibold">GAS BRAND: </span>Total</p>	
    <p class="has-text-left"><span class="has-text-weight-semibold">QUANTITY: </span>1</p>	
    <p class="has-text-left"><span class="has-text-weight-semibold">MERCHANT: </span>Africana</p>	
    <p class="has-text-left"><span class="has-text-weight-semibold">ESTIMATED BUDGET: </span>Ksh 800</p>	
</div>

   <a class="button is-primary is-pulled-left button-full" href="confirmed.php">CONFIRM</a>


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