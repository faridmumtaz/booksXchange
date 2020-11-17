<?php
	function image_validator($ext,$s)
	{
		if(!($ext == "jpg" || $ext == "png" || $ext == "jpeg"))
			return 1;
		else if($s>524288)
			return 2;
		else
			return 0;
	}
?>