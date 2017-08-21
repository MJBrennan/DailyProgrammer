<?php



	class affine{

		

		public function encrypt()
		{
			$input = "ihhwvcswfrcp";
			$final_arr = [];
			$newnumbers = [];
			$affineTable = range('a', 'z');
			$res = array_flip($affineTable );
			$input = str_replace(' ', '',$input);
			$arr = str_split($input);

			foreach($arr as $key => $value)
			{
			$mod = 5 * $res[$value] + 8;
			$mod = $mod % 26;
			$newnumbers[] = $mod;
			}

			foreach($newnumbers as $ns)
			{
				$final_arr[] = $affineTable[$ns];
			}

			$output = implode('', $final_arr);
			echo $output;
		}


		public function decrypt()
		{


			$input = "ihhwvcswfrcp";
			$final_arr = [];
			$newnumbers = [];
			$affineTable = range('a', 'z');
			$res = array_flip($affineTable );
			$input = str_replace(' ', '',$input);
			var_dump($input);
			$arr = str_split($input);

			//Formula 5(x)+ 8 % 26;

			foreach($arr as $key => $value)
			{
			$num = $res[$value];
			$num = $num - 8;
			$mod = 21 * $num;
			$mod = $mod % 26;
			if($mod < 0)
			{
				$mod += 26;
			}
			$newnumbers[] = $mod;
			}

			var_dump($newnumbers);

			foreach($newnumbers as $ns)
			{
				$final_arr[] = $affineTable[$ns];
			}

			$output = implode('', $final_arr);
			echo $output;
		}


	


	}


	$aff = new affine;
	$aff->encrypt();