<h1>Ejemplo continue</h1>
<?php
	for($i=0; $i<10; $i++){
		for($j=0; $j<5; $j++){
			if($j%2 != 0)
				continue 2;
			echo $i.'---'.$j."<br>\n";
		}
	}
	?>
<h1>Ejemplo break</h1>
<?php
	$i=1;
	$j=1;
	for(; $i<100; $i++){
		for(; $j<100; $j++){
			if($j/2 == $i)
				break 2;
		}
	}
	echo $i.'---'.$j."<br>\n";
	?>
