--TEST--
ph_radish_imagehash() function
--SKIPIF--
<?php 

if(!extension_loaded('pHash')) die('skip ');

if(!function_exists('ph_radish_imagehash')) die('skip not compiled in (HAVE_IMAGE_HASH)');

 ?>
--FILE--
<?php
echo 'OK'; // no test case for this function yet
?>
--EXPECT--
OK