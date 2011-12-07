<pre>
<?php
	#comportamiento similar al rsort
	function ordenamiento($v1,$v2) {
		if($v1==$v2)
			return 0;
		return ($v1<$v2)? 1 : -1;
	}
	$a = array('b'=>'hola','f'=>'php','d'=>'web');
	#$a[]=2;
	#array_push($a,2,8);
	print_r($a);
	usort($a,'ordenamiento');
	print_r($a);
	
?>
</pre>
