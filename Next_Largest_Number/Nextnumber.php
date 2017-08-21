<?php

	/*
		Reddit Daily Programmer Challenge 2
		Given an integer, find the next largest integer using ONLY the digits from the given integer.
		Example 
		Input: 			1234
						1243
						234765
						19000

		

	*/


	class Nextnumber {
		public function __construct()
		{
			$this->next();
		}

		public function next()
		{

			$input_arr = ["1234","1243","234765","19000"];
			$count = count($input_arr);

		//for($i=0;$i<=$count-1;$i++)
		//{
			$another_fuckinmg_array = [];
			$search_array = [];
			$orin = $input_arr[0];
			$input = $orin;
			$input = str_split($input);
			rsort($input);
			$new_arr = implode("", $input);
			$count = str_replace("'", "", $new_arr);
			
			for($i=0;$i<=$count;$i++)
			{
				array_push($search_array, $i);
			}

			foreach($search_array as $se)
			{
			$sp = str_split($se);
			rsort($sp);
			//print_r($sp);
			//$input = "1234";
			$input2 = $input_arr[0];
			$input2 = str_split($input2);
			rsort($input2);
			if($input2 === $sp)
			{
				array_push($another_fuckinmg_array, $se);
			}

			}

			$key = array_search($orin,$another_fuckinmg_array);
			$key = $key + 1;

			echo $another_fuckinmg_array[$key];
		//	unset($another_fuckinmg_array);
		//	unset($search_array);


	//	}






		}
	}

new Nextnumber;