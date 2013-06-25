<?php
	function currTime()
	{
		return "[" . date('c') . "] ";
	}
	
	echo currTime() . "Starting Template Gen...<br />\n";
	
	$template = file_get_contents("template.php");
	$content_folder = "./";

	function find_content($var)
	{
		return (substr($var,0,2) == "t-" ? true : false);
	}

	echo currTime() . "Loading up content files...<br />\n";
	//find all files that start with t-
	$content_list = array_values(array_filter(scandir($content_folder), "find_content"));

	//generate each php file
	for($i=0;$i<count($content_list);$i++)
	{
		include($content_list[$i]);
		//translate placeholder
		$trans = array(
			"{{TITLE}}" => (isset($title) ? $title : ""),
			"{{CONTENT}}" => (isset($content) ? $content : ""),
			"{{FOOTERJS}}" => (isset($footerjs) ? $footerjs : "")
		);

		//replace placeholder
		$content = strtr($template, $trans);
		
		echo currTime() . "Creating " . substr($content_list[$i],2) . "...<br />\n";
		$fp = fopen("../" . substr($content_list[$i],2),"w");
		fwrite($fp,$content);
		fclose($fp);
	}
	echo currTime() . "Template Gen Complete<br />\n";
	echo currTime() . "Total of $i files generated.<br />\n";
?>