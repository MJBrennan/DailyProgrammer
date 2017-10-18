<?php

	class tournament
	{
		/***
Tally the results of a small football competition.

Based on an input file containing which team played against which and what the outcome was, create a file with a table like this:

1
2
3
4
5
Team                           | MP |  W |  D |  L |  P
Devastating Donkeys            |  3 |  2 |  1 |  0 |  7
Allegoric Alaskans             |  3 |  2 |  0 |  1 |  6
Blithering Badgers             |  3 |  1 |  0 |  2 |  3
Courageous Californians        |  3 |  0 |  1 |  2 |  1




		***/


		public function __construct($input)
		{

			//Final Table

			$table = [
			"Allegoric Alaskans" => ["mp"=>0,"w"=>0,"d"=>0,"l"=>0,"p"=>0],
			"Blithering Badgers" => ["mp"=>0,"w"=>0,"d"=>0,"l"=>0,"p"=>0],
			"Tottenham Hotspur" =>  ["mp"=>0,"w"=>0,"d"=>0,"l"=>0,"p"=>0],
			"Manchester United" =>  ["mp"=>0,"w"=>0,"d"=>0,"l"=>0,"p"=>0]
			];

			$teamInput = explode(",", $input);

			foreach($teamInput as $key => $value)
			{

			$divide = explode(";", $teamInput[$key]);

			if($divide[2] == "win")
			{
				//played
				$table[$divide[0]]["mp"] += 1;
				$table[$divide[1]]["mp"] += 1;
				//points
				$table[$divide[0]]["p"] += 3;
				//win
				$table[$divide[0]]["w"] += 1;	
				//loss	
				$table[$divide[1]]["l"] += 1;	
			}

			if($divide[2] == "loss")
			{
				//played
				$table[$divide[0]]["mp"] += 1;
				$table[$divide[1]]["mp"] += 1;
				//points
				$table[$divide[1]]["p"] += 3;
				//win
				$table[$divide[1]]["w"] += 1;	
				//loss	
				$table[$divide[0]]["l"] += 1;
			}

			if($divide[2] == "draw")
			{

				$table[$divide[0]]["mp"] += 1;
				$table[$divide[1]]["mp"] += 1;
				//points
				$table[$divide[0]]["p"] += 1;
				$table[$divide[1]]["p"] += 1;
				//win
				$table[$divide[1]]["d"] += 1;	
				//loss	
				$table[$divide[0]]["d"] += 1;
			}
		}

		

		$forfile = "";

			$forfile =	 "P".""."W".""."D".""."L".""."P<br>";
		$forfile .=	 $table["Allegoric Alaskans"]["mp"]." ".$table["Allegoric Alaskans"]["w"]." ".$table["Allegoric Alaskans"]["d"]." ".$table["Allegoric Alaskans"]["l"]." ".$table["Allegoric Alaskans"]["p"]."<br>";

			$forfile .= $table["Blithering Badgers"]["mp"]." ".$table["Blithering Badgers"]["w"]." ".$table["Blithering Badgers"]["d"]." ".$table["Blithering Badgers"]["l"]." ".$table["Blithering Badgers"]["p"]."<br>";

		$forfile .=	$table["Tottenham Hotspur"]["mp"]." ".$table["Tottenham Hotspur"]["w"]." ".$table["Tottenham Hotspur"]["d"]." ".$table["Tottenham Hotspur"]["l"]." ".$table["Tottenham Hotspur"]["p"]."<br>";

		$forfile .=	 $table["Manchester United"]["mp"]." ".$table["Manchester United"]["w"]." ".$table["Manchester United"]["d"]." ".$table["Manchester United"]["l"]." ".$table["Manchester United"]["p"];

	
		$file = 'data.txt';
		$current = file_get_contents($file);
		$current .= $forfile;
		echo $forfile;
		file_put_contents($file, $current);




			
		}
	}


	new tournament("Allegoric Alaskans;Blithering Badgers;loss,Tottenham Hotspur;Manchester United;win,Allegoric Alaskans;Tottenham Hotspur;draw,Manchester United;Blithering Badgers;draw");