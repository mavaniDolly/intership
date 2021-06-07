<?php
	
	$i=0;
	
	while($i<10){
		echo $i;
		$i++;
	}
?>
<br/>
<?php

	$a=0;
	do{
		echo $a;
		$a++;
	}
	while($a<5);
	
		

?>
<br/>
<?php
	echo "<table border='1'>";
	for($i=0;$i<10;$i++){
		echo "<tr>";
		echo "<td>$i</td>";
		echo "</tr>";
	}
	
	echo "</table>";
?>