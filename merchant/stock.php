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
<h6 class="title is-6 has-text-left">Fill in the form below to add stock for different brands and sizes. Only add a particular (brand and size) once</h6>
</div>
</article>
<form method="get" action="select_merchant.php">
<div  class="columns">

<div class="column">
<div class="box">
<h4 class="title-is-4 is-bold has-text-primary"><b>CYLINDER SIZE (Kgs)</b></h4>	

 <div class="field">
  <p class="control">
    <input class="input" type="text" name="cylinder_size" placeholder="e.g 6" required>
  </p>
</div>

</div>	
</div>

<div class="column">
<div class="box">
<h4 class="title-is-4 is-bold has-text-primary"><b>GAS BRAND NAME</b></h4>	

 <div class="field">
  <p class="control">
    <input class="input" type="text" name="brand_name" placeholder="e.g Total" required>
  </p>
</div>

</div>	
</div>

<div class="column">
<div class="box">
<h4 class="title-is-4 is-bold has-text-primary"><b>PRICE (KSH)</b></h4>  

 <div class="field">
  <p class="control">
    <input class="input" type="text" name="quantity" placeholder="e.g 900" required>
  </p>
</div>

</div>  
</div>

<div class="column">
<div class="box">
<h4 class="title-is-4 is-bold has-text-primary"><b>QUANTITY</b></h4>  

 <div class="field">
  <p class="control">
    <input class="input" type="text" name="quantity" placeholder="e.g 15" required>
  </p>
</div>

</div>  
</div>






</div>	
<button class="button is-primary button-full is-pulled-left">SUBMIT</button><br><br>
</form>	

<div class="divider"></div>
<h2  class="title is-4 has-text-left has-text-weight-bold">Available stock</h2>

<table class="table is-fullwidth is-striped">
<thead>
<tr>
<th>BRAND</th>  
<th>CYLINDER SIZE (kgs)</th>
<th>PRICE (Ksh)</th>
<th>QUANTITY</th>
<th>ACTION</th>
</tr>
</thead>
<tbody>
<tr>
  <td>K-Gas</td>
  <td>6</td>
  <td>900</td>
  <td>15</td>
  <td>
    <a class="button is-warning" href="#"><i class="fa fa-edit"></i>&nbsp;Edit</a>
    <a class="button is-danger" href="#"><i class="fa fa-trash"></i>&nbsp;Delete</a>
  </td>
</tr>
<tr>
  <td>Total</td>
  <td>9</td>
  <td>900</td>
  <td>11</td>
  <td>
    <a class="button is-warning" href="#"><i class="fa fa-edit"></i>&nbsp;Edit</a>
    <a class="button is-danger" href="#"><i class="fa fa-trash"></i>&nbsp;Delete</a>
  </td>
</tr>
<tr>
  <td>Pro Gas</td>
  <td>6</td>
  <td>900</td>
  <td>13</td>
  <td>
    <a class="button is-warning" href="#"><i class="fa fa-edit"></i>&nbsp;Edit</a>
    <a class="button is-danger" href="#"><i class="fa fa-trash"></i>&nbsp;Delete</a>
  </td>
</tr>
</tbody>
</table>

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