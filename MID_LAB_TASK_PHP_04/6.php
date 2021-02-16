<?php

	$studentArr =  [1, 'Zafir', 3.10, "zafir24u@gmail.com"];
	$element = 'Zafir';
	$check = false;
	foreach ($studentArr as $value) 
	{
		if($value === $element)
		{
			echo "Search element found \r\n Element: $value";
			$check = true;
			break;
		}
	}

	if($check==false) echo "\r\n Element not found...";
?>