<html>

<head>

	<link rel="stylesheet" href="<?php echo base_url().'bootstrap/bootstrap.min.css'; ?>">
	<script src="<?php echo base_url().'bootstrap/bootstrap.min.js'; ?>"></script>

	<style>

	table tr th{
		width: 25%;
	}

	/*

	a{

		text-decoration: none !important;

	}

	.selected{
		font-weight: bold;
	}

	.overall{

		font-size: 30px;

	}

	*/

	</style>

</head>

<body style="margin-left: 20px; margin-right: 20px;">

	<p>Page Begin</p>

	<?php

	echo 'Logged in.'.'<br/>'.'<br/>';

	echo 'Hey, '.$this->session->userdata('username').'.<br/>';
	echo 'You have a privilege of '.$this->session->userdata('privilege').'<br/>';

	// echo print_r($this->session->all_userdata());

	?>

	<h1> View Database </h1>

	<ul class="nav nav-pills nav-justified" role="tablist">

		<li><a href="<?php echo site_url('dbdisplay/buildTable/0') ?>">View All</a></li>
		<li><a href="<?php echo site_url('dbdisplay/buildTable/'.$year1) ?>"><?php echo $year1 ?></a></li>
		<li><a href="<?php echo site_url('dbdisplay/buildTable/'.$year2) ?>"><?php echo $year2 ?></a></li>
		<li><a href="<?php echo site_url('dbdisplay/buildTable/'.$year3) ?>"><?php echo $year3 ?></a></li>

	</ul>

	<h1>Networking Summary</h1>

	<div class="overall">

		<ul class='nav nav-pills nav-justified' role='tablist'>

			<li class="<?php echo $allyearsclass ?>"><a href="<?php echo site_url('member/specificYear') ?>">All Years</a></li>
			<li class="<?php echo $class_1 ?>"><a href="<?php echo site_url('member/specificYear/'.$year1) ?>"><?php echo $year1 ?></a></li>
			<li class="<?php echo $class_2 ?>"><a href="<?php echo site_url('member/specificYear/'.$year2) ?>"><?php echo $year2 ?></a></li>
			<li class="<?php echo $class_3 ?>"><a href="<?php echo site_url('member/specificYear/'.$year3) ?>"><?php echo $year3 ?></a></li>

		</ul>

	</div>

	<h3> Total Number of Alumni Allocated: <?php echo $totalallocated ?> </h3>

	<h3 style="text-decoration: underline;"> Searching Status </h3>

	<table class="table table-bordered">

		<thead>

			<tr class='active'>
				<th> Found
				</th>
				<th> Ready
				</th>
				<th> Yet to be searched
				</th>
				<th> Not Found
				</th>
			</tr>

		</thead>

		<tbody>

			<tr>
				<td> <?php echo $found ?>
				</td>
				<td> <?php echo $ready ?>
				</td>
				<td> <?php echo $yet ?>
				</td>
				<td> <?php echo $notfound ?>
				</td>
			</tr>

		</tbody>

	</table>

	<h3 style="text-decoration: underline;"> Response Status </h3>

	<table class="table table-bordered">

		<thead>

			<tr class='active'>
				<th> Called (2-way)
				</th>
				<th> Neutral
				</th>
				<th> Positive
				</th>
				<th> Negative
				</th>
			</tr>

		</thead>

		<tbody>

			<tr>
				<td> <?php echo $called2way ?>
				</td>
				<td> <?php echo $negative ?>
				</td>
				<td> <?php echo $neutral ?>
				</td>
				<td> <?php echo $positive ?>
				</td>
			</tr>

		</tbody>

	</table>

	<p>Page End</p>

</body>

</html>