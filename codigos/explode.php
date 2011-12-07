<pre>
<?
	$nombres = 'Sandra,Juan,Pedro,Maria,Alejandra,Ivan,Jorge,Miguel';
	$a_nombres = explode(",",$nombres);
	sort($a_nombres);
#insertando un elemento al inicio.
#array_unshift($a_nombres,'Ximena');
	print_r($a_nombres);
?>
</pre>
