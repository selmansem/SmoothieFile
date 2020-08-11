<?php
	ob_start();
	$url = './../index.php';
	while (ob_get_status()){
		ob_end_clean();
	}
	header("Location: $url");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta name="robots" content="noindex, nofollow">
	</head>
</html>