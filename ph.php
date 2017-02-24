<?php
	for ($i =0; $i <10; $i++){

		echo $i;
	}
	//index array
	$a = [1,2,3,'abc','a'];
	$b = array(1,2,3,'abc','a');
	$c = array();
	$c[0] = 'a';

	$abc = [
	[1,2,3],
	[4,5,6]
	];
	print_r($a);
	print_r($abc);

	//associative array
	$x = array('a' =>4, 'bc' => 2);

	foreach ($x as $key => $value) {
		echo "key: $key & value : $value <br>";
	}



	?>