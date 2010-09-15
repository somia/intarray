--TEST--
intarray_get
--SKIPIF--
<?php if (!extension_loaded("intarray")) print "skip"; ?>
--POST--
--GET--
--INI--
--FILE--
<?php 
if (!extension_loaded('intarray')) {
	dl('intarray.' . PHP_SHLIB_SUFFIX);
}

$intarray = intarray_create_from_array(array(1, 2, 3, 4, 5));
intarray_dump($intarray);
echo "\n";

echo intarray_get($intarray, 2), "\n";

?>
--EXPECT--
{ 1, 2, 3, 4, 5 }
3
