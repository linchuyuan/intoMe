<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
	$list = scandir("top_click");
	$count = 10;
	array_splice($list,0,2);
	echo json_encode($list);
?>
