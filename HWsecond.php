<?php
$a = 1; // 1, 'one', true, 3.14, null, []
switch(true) {
    case is_bool($a):
        echo "bool";
        break;
    case is_float($a):
        echo "float";
        break;
    case is_int($a):
        echo "int";
        break;
    case is_string($a):
        echo "string";
        break;
    case is_null($a):
        echo "null";
        break;
    default: 
        echo "other";
}
?>