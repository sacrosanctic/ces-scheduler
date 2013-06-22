<?php
	
	$template = "template.php";
	$fill = "repo.php";

	//get template
	$template = file_get_contents($template);
	require_once("t-" . $fill);

	//translate placeholder
	$trans = array(
		"{{TITLE}}" => $title,
		"{{CONTENT}}" => $content
	);

	//replace placeholder
	$content = strtr($template, $trans);
	
	$fp = fopen("../" . $fill,"w");
	fwrite($fp,$content);
	fclose($fp);
?>