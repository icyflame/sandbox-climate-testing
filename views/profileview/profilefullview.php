<html>

<head>

	<link rel="stylesheet" href="<?php echo base_url().'bootstrap/bootstrap.min.css'; ?>">
	<script src="<?php echo base_url().'bootstrap/bootstrap.min.js'; ?>"></script>

</head>

<body style="margin-left: 20px; margin-right: 20px;">

	<?php 

	$ent = $data->result_array();
	$ent = $ent[0];

	$ent = array_values($ent);

	?>

	<h1 style="text-align: center; color: #999999"> Alumni Profile (Alumni ID <?php echo $ent[0]; ?>)</h1>

	<?php

	$name_fields = array('Alumni ID',
		'Name',
		'Department',
		'Hall',
		'Alumni Since',
		'Date of birth',
		'Roll Number',
		'Company',
		'Designation',
		'Office Address',
		'Residential Address',
		'Phone (Office)',
		'Phone (Residence)',
		'Email ID (Office)',
		'Email ID (Personal)'
		);

		?>

		<table class="table table-bordered table-striped">

			<tbody>

				<?php for($i = 0; $i < count($name_fields); $i = $i + 1): ?>

				<tr>

					<td>

						<?php echo $name_fields[$i]; ?>

					</td>

					<td>

						<?php echo $ent[$i]; ?>

					</td>

				</tr>

			<?php endfor; ?>

		</tbody>


	</table>

		<!-- <h3> Alumni ID  <?php echo $ent[$i]; $i = $i + 1; ?> </h3>
		<h2> <?php echo $ent[$i]; $i = $i + 1; ?> </h2>
		<h4> <?php echo $ent[$i]; $i = $i + 1; ?> </h4>
		<h4> <?php echo $ent[$i]; $i = $i + 1; ?> </h4>
		<h5> An alumni since  <?php echo $ent[$i]; $i = $i + 1; ?> </h5>

		<h5> Date of Birth: <?php echo $ent[$i]; $i = $i + 1; ?> </h5>
		<h5> Roll Number: <?php echo $ent[$i]; $i = $i + 1; ?> </h5>

		<h5> Company: <?php echo $ent[$i]; $i = $i + 1; ?> </h5>
		<h5> Designation: <?php echo $ent[$i]; $i = $i + 1; ?> </h5>
		<h5> Office Address: <?php echo $ent[$i]; $i = $i + 1; ?> </h5>
		<h5> Home Address: <?php echo $ent[$i]; $i = $i + 1; ?> </h5>
		<h5> Office Phone: <?php echo $ent[$i]; $i = $i + 1; ?> </h5>
		<h5> Home Phone: <?php echo $ent[$i]; $i = $i + 1; ?> </h5>
		<h5> Email Office: <?php echo $ent[$i]; $i = $i + 1; ?> </h5>
		<h5> Email Personal: <?php echo $ent[$i]; $i = $i + 1; ?> </h5> -->





	</body>

	</html>