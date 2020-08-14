<?php
// +----------------------------------------------------------------------
// | strripos — 计算指定字符串在目标字符串中最后一次出现的位置（不区分大小写）
// +----------------------------------------------------------------------
$haystack = 'ababcd';
$needle = 'aB';
$pos = strripos($haystack,$needle);

if ($pos === false) {
    echo "Sorry, we did not find ($needle) in ($haystack)";
}else{
    echo "Congratulations\n";
    echo "We found the last ($needle) in ($haystack) at position ($pos)";
}
//Congratulations! We found the last (aB) in (ababcd) at position (2)