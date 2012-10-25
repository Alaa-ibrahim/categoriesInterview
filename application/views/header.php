<!DOCTYPE html>
<html>
<head>

   <title>Categories Interview</title>
   <!-- java script-->
	<script  src="<?php echo base_url();?>js/jquery.js"></script>
	<!-- javascript-->
	<script src="<?php echo base_url();?>js/jqueryui.js"></script>
		<!-- javascript-->
	<script  src="<?php echo base_url();?>js/bootstrap.min.js"></script>
	<!-- css-->
	<link href="<?php echo base_url();?>css/bootstrap.css" rel='stylesheet' type="text/css"/>

	
</head>
<body>

	<div>
		<div class='alert alert-info'><h1>Categories</h1></div>
		<div id="menu">
		<ul class="nav nav-pills">
  <li <?php if("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']==base_url()){ ?>class="active"<?php } ?>>
    <a href="<?php echo base_url();?>">Category List</a>
  </li>
  <li <?php if("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']==base_url()."index.php/categories/add"){ ?>class="active"<?php } ?>><a href="<?php echo base_url();?>index.php/categories/add">Add</a></li>
  
</ul>
		</div> 
