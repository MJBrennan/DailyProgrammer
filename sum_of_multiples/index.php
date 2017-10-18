<?php

/**
Given a number, find the sum of all the multiples of particular numbers up to but not including that number.
If we list all the natural numbers up to but not including 20 that are multiples of either 3 or 5, we get 3, 5, 6 and 9, 10, 12, 15, and 18.
The sum of these multiples is 78.
Given a number, find the sum of the multiples of a given set of numbers, up to but not including that number.
*/

function checkMul($input,$val)
{
     $outcome = $input/$val;
     $floor = is_float($outcome);
  //   var_dump( $outcome);
  //   var_dump($floor);
     if($floor == null)
     {
     	return "True";
     }
}

function sumOfMultiples($input,$multiples)
{
	if($multiples == [0])
	{
		return 0;
	}
	$multiplesArray = [];
	$checkNumbers = $input - 1;
	for($i =1;$i<=$checkNumbers;$i++)
	{
		foreach($multiples as $mul)
		{
			
		$mul = 	checkMul($i,$mul);

			if($mul == "True")
			{
				array_push($multiplesArray, $i);
				break;
			}
		}
	}

	$sum = array_sum($multiplesArray);
	return $sum;
}

 //sumOfMultiples(1000,[0]);
