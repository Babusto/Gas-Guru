<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="../images/favicon.ico" />
	<title>Order :: GasGuru</title>
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
<article style="" class="message is-primary">
<div class="message-body">
<h6 class="title is-6 has-text-left">Your location is set to: <b>Antalya</b> <a href="location.php">Change</a></h6>
</div>
</article>
<form method="get" action="select_merchant.php">
<div  class="columns">

<div class="column">
<div class="box">
<h4 class="title-is-4 is-bold has-text-primary"><b>CYLINDER SIZE</b></h4>	

<div class="field">
  <div class="control">
    <div class="select is-primary is-fullwidth">
      <select>
        <option>Select dropdown</option>
        <option>With options</option>
      </select>
    </div>
  </div>
</div>

</div>	
</div>

<div class="column">
<div class="box">
<h4 class="title-is-4 is-bold has-text-primary"><b>GAS BRAND</b></h4>	

<div class="field">
  <div class="control">
    <div class="select is-primary is-fullwidth">
      <select>
        <option>Select dropdown</option>
        <option>With options</option>
      </select>
    </div>
  </div>
</div>

</div>	
</div>

<div class="column">
<div class="box">
<h4 class="title-is-4 is-bold has-text-primary"><b>QUANTITY / NUMBER</b></h4>	

<div class="field">
  <div class="control">
    <div class="select is-primary is-fullwidth">
      <select>
        <option>Select dropdown</option>
        <option>With options</option>
      </select>
    </div>
  </div>
</div>

</div>	
</div>





</div>	
<button class="button is-primary button-full is-pulled-left">NEXT</button><br><br>
</form>	
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