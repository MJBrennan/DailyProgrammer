<?php


	class Palindrome{


		public function __construct()
		{
			$this->getFactors();
		}


		public function getFactors()
		{
			$array = [];
			$palArr = [];
			$int1 = 1;
			$int2 = 9;


			for($i=$int1;$i<=$int2;$i++)
			{

				for($x=$int2;$x>=$int1;$x--)
				{
					$prod = $i * $x;
					array_push($array, $prod);
				}
			}

			foreach ($array as $value)
			{
			//	echo $value."<br>";
				$rev = strrev($value);

				if($value == $rev)
				{
					array_push($palArr, $value);
				}
			}



			echo max($palArr);








		}
	}


	new Palindrome;