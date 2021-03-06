--TEST--
Number properties
--FILE--
<?php
require __DIR__ . "/helpers/Number.php";

$instance = Number::valueOf(0);

$instance->test = 5;
var_dump($instance->test);
unset($instance->test);
isset($instance->test);
var_dump($instance->test);

try {
    $instance[0] = 5;
} catch (Error $e) {
    printf("%s\n", $e->getMessage());
}

echo "Done";

?>
--EXPECTF--
int(5)

Notice: Undefined property: Number::$test in %s on line %s
NULL
Cannot use object of type Number as array
Done
