<?php
function foo($actsAs){
	if ($actsAs !== null || $actsAs !== false) {
				echo "always runs!\n";
	}else
		var_dump($actsAs);
}

/*
 * 
How about I have a question about the condition logic in the Model file in line L678 on __contruct method.

<https://github.com/cakephp/cakephp/blob/master/lib/Cake/Model/Model.php#L678>

In my opinion always gives true, for example:

```php
<?php
function foo($actsAs){
	if ($actsAs !== null || $actsAs !== false) {
				echo "always runs!\n";
	}else
		var_dump($actsAs);
}

foo(false);
foo(null);
foo(
	array('Translate', 'MyBehavior' => array('setting1' => 'value1'))
);
foo('other mensaje');
```

**OUT**
always runs!
always runs!
always runs!
always runs!

* 
*/
foo(false);
foo(null);
foo(
	array('Translate', 'MyBehavior' => array('setting1' => 'value1'))
);
foo('other mensaje');
