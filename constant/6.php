<?php
//Magic Constant 

class mss

{

function demo()

{

echo "Function of mss class : ". __FUNCTION__ ."<br/>";

}

function demo1()

{

echo "Method of mss  class : ". __METHOD__ ."<br/>";

echo "Class : ". __CLASS__;
				
}

}

$object=new mss();

$object->demo();

$object->demo1();

?>