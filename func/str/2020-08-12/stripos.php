<?php
// +----------------------------------------------------------------------
// | stripos — 查找字符串首次出现的位置（不区分大小写）
// +----------------------------------------------------------------------
$mystring1 = 'ABC';
$mystring2 = 'XYZ';
$findme = 'a';
$pos = stripos($mystring1,$findme);
if ($pos !== false) {
    echo "The '$findme' was found in the string '$mystring1',";
    echo "and the position is '$pos'";
}else{
    echo "The '$findme' was not found in the string '$mystring1'";
}