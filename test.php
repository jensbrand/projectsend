<?php
	$linkdir = "/home/wolfsoft/dateien.wolf-software.de/download/95586bbd7d634eaa0e43f949088b28a2d6f23560";
	$filesToDelete = glob($linkdir . "/*");
	print($linkdir);
	print_r($filesToDelete);
?>