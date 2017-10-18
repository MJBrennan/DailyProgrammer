<?php

	/*
The Collatz Conjecture or 3x+1 problem can be summarized as follows:

Take any positive integer n. If n is even, divide n by 2 to get n / 2. If n is odd, multiply n by 3 and add 1 to get 3n + 1. Repeat the process indefinitely. The conjecture states that no matter which number you start with, you will always reach 1 eventually.

Given a number n, return the number of steps required to reach 1.
	*/

	function steps(int $input)
	{
		if($input < 1)
		{
			throw new InvalidArgumentException('Only positive numbers are allowed');
		}

		$counter = 0;
		$n = $input;
		while($n != 1)
		{
		if(($n % 2) == 0)
		{
			$n = $n / 2;
			$counter++;
		}else{
			$n = (3 * $n) + 1;
			$counter++;
		 }
		}

	return $counter;

}




