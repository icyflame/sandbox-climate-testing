<html>

<head>

	<link rel="stylesheet" href="<?php echo base_url().'bootstrap/bootstrap.min.css'; ?>">
	<script src="<?php echo base_url().'bootstrap/bootstrap.min.js'; ?>"></script>

</head>

<body>

	<?php echo validation_errors(); ?>

	<?php echo form_open('auth/loginval') ?>

	<div class="container-fluid jumbotron" style="text-align: center;">

		<div class="col-md-3">

		</div>

		<div class="col-md-6">

			<h1>Networking Portal</h1>

			<form style="text-align: center;">

				<input type="text" name="username" class="form-control" placeholder="Username"> <br>

				<input type="password" name="password" class="form-control" placeholder="Password"> <br>

				<button class="btn btn-large btn-success" type="submit">Sign In</button>

			</form>

		</div>

		<div class="col-md-3">

		</div>

	</div>

</form>

</body>

</html>