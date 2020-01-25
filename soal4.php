<?php


	$kalimat = "ingin terbang";

	foreach (count_chars($kalimat, 1) as $key => $value) 
	{
		if ($value > 1) 
		{
			# code...
		
		echo " \" " , chr($key) , "\" = $value <br><br>";
		}
	}
?>