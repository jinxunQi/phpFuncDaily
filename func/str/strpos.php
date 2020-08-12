<?php
// +----------------------------------------------------------------------
// | 08-12 2020 strpos
// +----------------------------------------------------------------------

//Example 1
$myString = 'abc';
$findMe = 'a';
// 使用 !== 操作符。使用 != 不能像我们期待的那样工作，
// 因为 'a' 的位置是 0。语句 (0 != false) 的结果是 false。
$result = strpos($myString,$findMe);
if ($result !== false) {
    echo "The string '$findMe' was found in the string '$myString'";
    echo "and exists at the position $result";
}else{
    echo "The string '$findMe' was not found in the string '$myString'";
}

//Example 2
// 忽视位置偏移量之前的字符进行查找
// $pos = 7, 不是 0
$newString = 'abcdef abcdef';
$pos = strpos($newString,$findMe,1);
echo "The string '$findMe' was found in the string '$newString', and the position is ".$pos;