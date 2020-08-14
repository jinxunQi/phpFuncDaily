<?php
// +----------------------------------------------------------------------
// | strtr — 转换指定字符
// +----------------------------------------------------------------------
//the usage of from to
$addr = strtr($addr, "äåö", "aao");
var_dump($addr);

$trans = array("hi" => "hello", "hello" => "hi");
var_dump(strtr("hi,all, I said hello",$trans));//hello,all, I said hi

var_dump(strtr("baab","ab","01"));//1001
var_dump(strtr("baab", ["ab" => '01']));//ba01