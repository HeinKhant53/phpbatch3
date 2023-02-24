<?php 

// PHP Loops

// for 
// foreach 
// while 
// do..while

	$colorones = ["red","green","blue","white","black","gray","pink"];  //indexed array
	print_r($colorones);
	//Array ( [0] => red [1] => green [2] => blue [3] => white [4] => black [5] => gray [6] => pink )
	echo "<br/>";
	var_dump($colorones);
	//array(7) { [0]=> string(3) "red" [1]=> string(5) "green" [2]=> string(4) "blue" [3]=> string(5) "white" [4]=> string(5) "black" [5]=> string(4) "gray" [6]=> string(4) "pink" }
	echo "<br/>";
	echo count($colorones); //7
	echo "<br/>";

	//Get array key
	$coloroneskey = array_keys($colorones);
	var_dump($coloroneskey);
	//array(7) { [0]=> int(0) [1]=> int(1) [2]=> int(2) [3]=> int(3) [4]=> int(4) [5]=> int(5) [6]=> int(6) }
	echo($coloroneskey); //Array (warning)

	echo "<br/>";
	echo "<br/>";
	echo "<hr/>";

	//for loop 
	// for(statment1,statment2,statment3){
	//     code to executed;
	// }
	
	//Indexed Array (Manual)
	for($i = 0 ; $i < count($colorones) ; $i++){
		// echo "$i";
		// echo "<br/>";

		echo "This is indexed array or manual array by forloop = index key is ". $i ." and value is ". $colorones[$i] ."<br/>";

		// echo "This is indexed array or manual array by forloop = index key is ". $coloroneskey[$i] ." and value is ".$colorones[$i]."<br/>";

		// $i == $coloroneskey[$i]
	}

	echo "<hr/>";


	//Associated Array
	$posts = [
		"postone"=>"this is news post one",
		"posttwo"=>"this is news post two",
		"postthree"=>"this is news post three",
		"postfour"=>"this is news post four"
	];

	$postskey = array_keys($posts);
	var_dump($postskey);
	echo "<br/>";


	for($x = 0; $x < count($posts); $x++){
		// echo "$x";
		// echo "<br/>";

		echo "This is associated array by forloop = index key is ". $postskey[$x] ." and value is ". $posts[$postskey[$x]] ."<br/>";

	}

	echo "<hr/>";


	//Multidimension Array
	$employees = [
		["name"=>"Aung Aung","gender"=>"Male"],
		["name"=>"Su Su","gender"=>"Female"],
		["name"=>"Nu Nu","gender"=>"Female"],
		["name"=>"Kyaw Kyaw","gender"=>"Male"],
		["name"=>"Tun Tun","gender"=>"Male"],
	];

	$employeeskey = array_keys($employees);
	// var_dump($employeeskey);
	// echo "<br/>";


	//remove cover first array (multi array)
	for($k = 0; $k < count($employees); $k++){
		// echo "$k";
		// echo "<br/>";
		
		$newkey = array_keys($employees[$employeeskey[$k]]);
		// var_dump($newkey);
		// echo "<br/>";
		
		//remove cover second array (asso array)

		for($j = 0; $j < count($newkey); $j++){
			// var_dump($employees[$k][$newkey[$j]]);

			echo "This is multidimensional array by forloop = index key is ". $newkey[$j] ." and value is ". $employees[$k][$newkey[$j]] ."<br/>";

		}
	}


?>