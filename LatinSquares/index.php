<?php

	function latinSquares()
	{

		$multi = [];

		$input = "13 44";
		$split = explode(" ", $input);
		
		foreach ($split as $s) {
			$sp = str_split($s);
			array_push($multi, $sp);
		}

		$len1 = count($multi[0]);
		$len2 = count($multi);
		$len3 = count($multi[$len2-1]);

		//check if its a square

		if($len1 != $len2 OR $len1 != $len3)
		{
			return "Not a Square";
		}

		//Horizontal

		for ($i= 0;$i<=$len2-1;$i++) { 
			$arr = $multi[$i];
			$count = count($arr);
			$temp_arr = [];
			for($j=0;$j<=$count-1;$j++){ 
				array_push($temp_arr, $arr[$j]);
			}

			$arr_uni = array_unique($temp_arr);
			if(count($arr_uni) !== count($temp_arr))
			{
				return "Not a Latin Square";
			}
			unset($temp_arr);
		}

		//Vertical

		for ($i= 0;$i<=$len2-1;$i++) { 
			
			$temp_arr2 = [];

			$len2 = count($multi);
			//echo($len2);

			for ($j=0;$j<=$len2-1;$j++) { 
				array_push($temp_arr2,$multi[$j][$i]);
			}


			$arr_uni2 = array_unique($temp_arr2);
			if(count($arr_uni2) !== count($temp_arr2))
			{
				return "Not a Latin Square";
			}

			unset($temp_arr2);
		}
	}


	echo latinSquares();