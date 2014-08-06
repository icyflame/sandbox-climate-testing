<html>

<body>

	<p>Page Begin</p>

	<?php

	echo $status.'<br/>';

	echo 'Hey, '.$this->session->userdata('username').'<br/>';
	echo 'You have a privilege of '.$this->session->userdata('privilege').'<br/><br/>';

	echo print_r($this->session->all_userdata());

	$new_view = site_url("member/specificYear/");

	// echo "<a href='$new_view'>Go to summary page</a>"

	?>

	<br/><a href="<?php echo $new_view ?>"> Go to summary page </a>

	<p>Page End</p>

</body>

</html>