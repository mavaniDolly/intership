<?php
	
	$a=$_POST['text1'];
	$b=$_POST['text2'];
	
	
	echo "my name is $a and age is $b";
	
	for($i=0;$i<$b;$i++){
		echo "<br>$i Happy Birthday $a";
	}
?>