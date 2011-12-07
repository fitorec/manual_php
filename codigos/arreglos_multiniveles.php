<pre>
<?php
	$a = array(	1,
			array('a','b'),
			'f',
			array('a'=>array(), 'b'=>8)
	);
foreach ($a as $c=>$v)
{
	if(gettype($v) == 'array')
		echo $c.'=>'.print_r($v,true);
	else
		echo $c.'=>'.$v."\n";
}
#print_r($a);

?>
</pre>
