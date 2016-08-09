<?php
    header('content-type:text/html;charset="utf-8"');

    $name = $_GET['name'];
    $info = $_GET['info'];

    $ch = curl_init();
    if(strstr($name,'ding')) {
        $url = 'http://apis.baidu.com/turing/turing/turing?key=46ebca1f8a3a4a338e9d05b7d701476a&info='.$info.'&userid=eb2edb736';
    } else { 
        $url = 'http://apis.baidu.com/turing/turing/turing?key=e90aebfab247483a8b34f0610e3bf382&info='.$info.'&userid=eb2edb736';
    }
    
    $header = array(
        'apikey: bae7ccffb8b51243307d0b96e52a7dbb',
    );
    // 添加apikey到header
    curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // 执行HTTP请求
    curl_setopt($ch , CURLOPT_URL , $url);
    $res = curl_exec($ch);

    echo $res;

    //var_dump(json_decode($res));
?>