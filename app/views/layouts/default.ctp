<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title><?php echo $title_for_layout?></title> 
<?php echo $html->css("style.css") ?>
<?php echo $javascript->link('jquery-1.4.2.min');?>
<?php echo $javascript->link('jquery.autocomplete.min');?>
<?php echo $javascript->link('jquery.jeditable.mini');?>
<?php echo $javascript->link('jquery-ui-1.7.2.custom.min');?>
<?php echo $scripts_for_layout ?>
</head> 
 
<body> 
<div id="header"> 
	<div id="logo"></div> 
</div>
<div id="contentblock"> 
<?php echo $content_for_layout ?>
</div>
</body> 
</html>