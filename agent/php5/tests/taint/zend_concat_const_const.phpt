--TEST--
hook ZEND_CONCAT CONST CONST
--SKIPIF--
<?php
include(__DIR__.'/../skipif.inc');
?>
--INI--
openrasp.root_dir=/tmp/openrasp
--GET--
a=openrasp&b=test
--FILE--
<?php
$a0 = "name"."name";
var_dump(taint_dump($a0));
?>
--EXPECT--
bool(false)
