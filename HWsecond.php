<?php
$a = 1; // 1, 'one', true, 3.14, null, []
switch(true) {
    case is_bool($a):
        echo "bool\n";
        break;
    case is_float($a):
        echo "float\n";
        break;
    case is_int($a):
        echo "int\n";
        break;
    case is_string($a):
        echo "string\n";
        break;
    case is_null($a):
        echo "null\n";
        break;
    default: 
        echo "other\n";
}


if(is_bool($a)) {
    echo "bool";
} elseif (is_float($a)) {
    echo "float";
} elseif (is_int($a)) {
    echo "int";
} elseif (is_string($a)) {
    echo "string";
} elseif (is_null($a)) {
    echo "null";
} else {
    echo "other";
}
?>