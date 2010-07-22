<?php
if(file_exists(CONFIGS . 'core.private.php')) {
	require(CONFIGS . 'core.private.php');
}
else {
	die("<strong>Fatal Error:</strong> Please read (SVN-)SETUP.txt. (No core.private.php file)");
}
?>
