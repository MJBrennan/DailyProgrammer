<?php


	/*
	* A prime number is any integer greater than 1 which can only be evenly divided by 1 or itself. For this challenge, you will output two numbers: the nearest prime below the input, and the nearest prime above it
	*/


	class nearestPrime{

		public function getPrime($input)
		{
			$prime_arr = [];
	
			for($i=1;$i<=$input;$i++)
			{
				$temp_arr = [];
				if(($input % $i) == 0)
				{
					array_push($temp_arr, $i);
				}

				if(count($temp_arr) == 1)
				{
					array_push($prime_arr, $i);
				}

				empty($temp_arr);
			}

			if(count($prime_arr) == 2)
			{
				return "Is Prime";
			}
			else
			{
				return "Not Prime";
			}
		
		}

		public function nearest()
		{
			$input = '2010741';
			$prime = $this->getPrime($input);
			if($prime === "Is Prime")
			{
				return $input." it is a prime";
			}
			
		

			//Get Next Lowest,Prime
			
			$prime_arr = [];
			$prime_arr[1] = $input;
			$lower = $input - 1;
			

			while(!isset($prime_arr[0]))
			{
				$pr = $this->getPrime($lower);
				if($pr == "Is Prime")
				{
					$prime_arr[0] = $lower;
				}

				$lower--;
			}

			$higher = $input - 1;


			while(!isset($prime_arr[2]))
			{
				$pr = $this->getPrime($higher);
				if($pr == "Is Prime")
				{
					$prime_arr[2] = $higher;
				}

				$higher++;
			}


	return $prime_arr[0]. " < ".$prime_arr[1]. " < ".$prime_arr[2];


		}
	}

	$prime = new nearestPrime();
	echo $prime->nearest();

