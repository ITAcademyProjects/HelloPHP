<head>
<title>Suma</title>
</head>
<body>
<?php
	$array = initArray();
	$result=0;
	foreach($array as $key => $value){
		$result=add($result,$value);
	}	
	echo $result."<br>" ;		

	$vector=["One","Two","Three","Caramba"];
	$vector[]="Five";

	foreach($vector as $i){
		echo $i;
	}	

	function initArray(){
		return ['One'=>1,'Two'=>2,'Three'=>3];
	}

	function add($x,$y){
		return $x+$y;
	}

?>
</body>