<?php header('access-control-allow-origin: *'); ?>
<?php header('access-control-allow-headers: Origin, X-Requested-With, Content-Type, Accept, Key, X_FILE'); ?>
<?php
	$file_name = $_SERVER['HTTP_X_FILE'];
	file_put_contents($file_name,file_get_contents('php://input'));

?>
