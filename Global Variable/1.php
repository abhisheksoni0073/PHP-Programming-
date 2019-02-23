<?php 
$a = 500; 
$b = 800;
 
function add() { 
    $GLOBALS['z'] = $GLOBALS['a'] + $GLOBALS['b']; 
}
 
add(); 
echo $z; 
?>