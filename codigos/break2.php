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
