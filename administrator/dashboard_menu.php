<!-- PHP -->
<?php
$file= basename($_SERVER['PHP_SELF'],'.php');
$link=$file."link";
?>
<!-- PHP -->


<aside class="menu">
<!--   <p class="menu-label">
    Menu
  </p> -->
  <ul class="menu-list">
    <li><a class="dashboardlink" href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
  </ul>
  <p class="menu-label">
    MY Account
  </p>
  <ul class="menu-list">
      <a class="profilelink" href="profile.php"><i class="fa fa-user"></i> Profile</a>
      <ul>
<!--         <li><a class="balancelink" href="balance.php" ><i class="fa fa-dollar"></i> Balance</a></li> -->


      </ul>
    </li>
  </ul>
  <p class="menu-label">
    General
  </p>
  <ul class="menu-list">
    <li><a class="clientslink" href="clients.php" ><i class="fa fa-user"></i> Clients</a></li>
    <li><a class="merchantslink" href="merchants.php" ><i class="fa fa-users"></i> Merchants</a></li>
    <li><a class="view_orderslink" href="view_orders.php" ><i class="fa fa-shopping-cart"></i> View orders</a></li>
    <li><a class="statisticslink" href="statistics.php" ><i class="fa fa-bar-chart"></i> Statistics</a></li>
    <li><a class="supportlink" href="support.php" ><i class="fa fa-question-circle"></i> Support</a></li>
    <li><a href="logout.php" ><i class="fa fa-power-off"></i> Logout</a></li>
  </ul>
</aside>  

<!-- JS -->
<script type="text/javascript">
var e = document.getElementsByClassName("<?php echo $link; ?>");
$(e).attr('class', 'is-active');
</script>
<!-- JS -->