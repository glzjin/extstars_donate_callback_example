<?php

//App ID
$app_id = 29;
//签名 Key
$sign_key = '8RcQ9gV3JYfK4bazgo8RfYv4YQQYmGRI';

//获取参数并排序
$params = $_GET;
ksort($params);

//提取 Sign
$sign = $params['sign'];
unset($params['sign']);

//计算正确的 Sign，先得到字符串，然后拼接，再 MD5
$correct_sign = md5(http_build_query($params).$sign_key);

//验证
if($correct_sign === $sign) {
    //正确
    echo("验证正确！");
} else {
    //错误
    echo("验证错误！");
}
