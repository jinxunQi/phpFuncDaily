<?php
// +----------------------------------------------------------------------
// | stristr — strstr() 函数的忽略大小写版本
// | 返回 字符串从 第一次出现的位置开始到结尾的字符串。
// +----------------------------------------------------------------------
$email = 'USER@EXAMPLE.com';
var_dump(stristr($email,'e'));//"ER@EXAMPLE.com"
var_dump(stristr($email,'e',true));//"US"

//测试字符串的存在与否
$string = "Hello World!";
if (stristr($string,'earth') === false) {
    echo "'earth' not found in string;";
}

//查找非字符串 后面即将废弃
$string2 = 'APPLE';
echo stristr($string2, 97);// 97 = 小写字母 a // 输出: APPLE