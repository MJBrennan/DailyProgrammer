<?php


	/**
		https://www.reddit.com/r/dailyprogrammer/comments/65vgkh/20170417_challenge_311_easy_jolly_jumper/

		reddit DailyProgrammer Challenge No. 1
		is a jolly jumper, because the absolute differences are 3, 2, and 1, respectively. The definition implies that any sequence of a single integer is a jolly jumper. Write a program to determine whether each of a number of sequences is a jolly jumper.

		Step 1: Aquire First Number in The Array

		*/

	class JollyJumper{

		public function __construct()
		{
			$this->jj();
		}




		public function jj()
		{

			//Phase One
			$input = "4,19,22,24,25";
			$array = explode(",", $input);
			$intArr = array();
			$firstElement = $array[0];
			array_shift($array);
			$count = count($array)-1;
			for($i=1;$i<=$count;$i++)
			{
			$finalVar = $array[0] - $array[1];
			array_push($intArr, $finalVar);
			array_shift($array);
			}
			$final = array();
			foreach($intArr as $int)
			{
			array_push($final, abs($int));
			}
			$compare = array();

			for($i=$count;$i>=1;$i--)
			{
				array_push($compare, $i);
			}
			rsort($final);
			$origin = serialize($final);
			$check = serialize($compare);

			if($origin != $check)
			{
				echo "Not Jolly";
			}else{
				echo "Jolly";
			}
		}
	}



	(new JollyJumper);