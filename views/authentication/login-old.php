<html>

<body>

	<h2>Login Page</h2>

	<?php echo validation_errors(); ?>

	<?php echo form_open('auth/loginval') ?>

	<label for="username">Username</label>
	<input type="input" name="username" /><br />

	<label for="password">password</label>
	<input type="password" name="password" /><br />

	<input type="submit" name="submit" value="Login" />

</form>

</body>

</html>