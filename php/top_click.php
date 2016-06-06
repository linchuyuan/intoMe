<?php header('access-control-allow-origin: *'); ?>
<?php
	$list = scandir("/var/www/html/intoMe/all_video/");
	array_splice($list,0,2);
	$i = 0;
	while ($i < count($list)){
		$list[$i] = "all_video/" . $list[$i];
		$i = $i + 1; 
	}
	echo json_encode($list);
?>
