<?php
$arr=['id'=>'1','country'=>'taiwan','dream'=>'e'];
// array_keys為陣列
print_r(array_keys($arr));
// join()得出的會是array的value，看不到array的key
echo join(",",$arr);
?>