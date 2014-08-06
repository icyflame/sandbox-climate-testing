<html>

<head>

	<link rel="stylesheet" href="<?php echo base_url().'bootstrap/bootstrap.min.css'; ?>">
	<script src="<?php echo base_url().'bootstrap/bootstrap.min.js'; ?>"></script>

</head>

<body>

	<!-- <p> Entered the newsfeed view. </p> -->

	<table class="table table-striped">

		<thead>

			<th>Time</th>
			<th>Alumni ID</th>
			<th>Username</th>
			<th>News</th>

		</thead>

		<tbody>

			<?php foreach($data as $row): ?>

			<tr>


				<td><?php echo $row['activitytime']; ?></td>
				<td><?php echo $row['alumid']; ?></td>
				<td><?php echo $this->userdb->getusername($row['userid']); ?></td>
				<td><?php echo $row['newsitem']; ?></td>

			</tr>

		<?php endforeach ?>

	</tbody>

</table>

</body>

</html>