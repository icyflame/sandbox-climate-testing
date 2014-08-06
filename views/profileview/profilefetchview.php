<html>

<head>

	<link rel="stylesheet" href="<?php echo base_url().'bootstrap/bootstrap.min.css'; ?>">
	<script src="<?php echo base_url().'bootstrap/bootstrap.min.js'; ?>"></script>

</head>

<body style="margin-left: 20px; margin-right: 20px;">

	<h3> Alumni ID <?php echo $alumid ?> </h3>
	<h2> <?php echo $name ?> </h2>
	<h4> <?php echo $hall ?> </h4>
	<h4> <?php echo $dept ?> </h4>
	<h5> An alumni since <?php echo $alumSince ?> </h5>

	<h2> Change the search status </h2>

	<ul class="nav nav-pills nav-justified" role="menu">

		<li class='<?php echo $s_1 ?>'><a href="<?php echo site_url('profilefetch/updateSearch/'.$alumid.'/1') ?>">Yet to be searched</a></li>
		<li class='<?php echo $s_2 ?>'><a href="<?php echo site_url('profilefetch/updateSearch/'.$alumid.'/2') ?>">Not Found</a></li>
		<li class='<?php echo $s_3 ?>'><a href="<?php echo site_url('profilefetch/updateSearch/'.$alumid.'/3') ?>">Found</a></li>
		<li class='<?php echo $s_4 ?>'><a href="<?php echo site_url('profilefetch/updateSearch/'.$alumid.'/4') ?>">Ready</a></li>

	</ul>

	<h2> Change the calling status </h2>

	<ul class="nav nav-pills nav-justified" role="menu">

		<li class="<?php echo $c_1 ?>"><a href="<?php echo site_url('profilefetch/updateCalling/'.$alumid.'/1') ?>">Called (2 way)</a></li>
		<li class="<?php echo $c_2 ?>"><a href="<?php echo site_url('profilefetch/updateCalling/'.$alumid.'/2') ?>">Negative</a></li>
		<li class="<?php echo $c_3 ?>"><a href="<?php echo site_url('profilefetch/updateCalling/'.$alumid.'/3') ?>">Neutral</a></li>
		<li class="<?php echo $c_4 ?>"><a href="<?php echo site_url('profilefetch/updateCalling/'.$alumid.'/4') ?>">Positive</a></li>

	</ul>

</body>

</html>