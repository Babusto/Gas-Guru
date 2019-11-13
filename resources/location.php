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
<article style="" class="message is-primary">
<div class="message-body">
<h6 class="title is-6"><i class="fa fa-dot-circle-o has-text-primary"></i> To set location, click on the map to add marker then click on the marker to add location name and save.</h6>
<h6 class="title is-6"><i class="fa fa-dot-circle-o has-text-primary"></i> Adding a new marker deletes the previous one.</h6>
</div>
</article>
<?php
require 'user-map.php';
?>


</div>
<!-- MAIN -->

<!-- FOOTER -->
<?php
// require 'footer_resources.php';
?>
<!-- FOOTER -->

</body>
</html>