<?php



	class FlattenArray {

		public $input = [0, 2, [[2, 3], 8, 100, 4, [[[50]]]], -2];


		public function __construct()
		{
			$this->flatten($this->input);  
		}



		public function flatten($in)
		{
			$flattened_array = [];
			

			  foreach ((array)$in as  $value) {
			  		if(is_numeric($value))
			  		{
			  			array_push($flattened_array, $value);
			  		}else{
			  				$this->flatten($value);
			  		}
		   }

		   foreach ($flattened_array as $value) {
		   		
		   		echo $value . "<br>";
		   }
		}
	}


	new FlattenArray();







