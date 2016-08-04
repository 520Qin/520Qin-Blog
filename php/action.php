<?php
    $id = $_GET['id'];
    
    switch($id){
        case 1:
            $ch = curl_init();
            $ip = $_SERVER['REMOTE_ADDR'];
            $url = 'http://apis.baidu.com/thinkpage/weather_api/suggestion?location=guangzhou&language=zh-Hans&unit=c&start=0&days=3';
            $header = array(
                'apikey: bae7ccffb8b51243307d0b96e52a7dbb',
            );
            // 添加apikey到header
            curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            // 执行HTTP请求
            curl_setopt($ch , CURLOPT_URL , $url);
            $res = curl_exec($ch);
            //$res = json_decode($res);
            echo ($res);
            //echo json_encode($res);
            break;
        case 2:
            $ch = curl_init();
            $url = 'http://apis.baidu.com/3023/news/channel?id=popular&page=1';
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
            break;
        }

?> 