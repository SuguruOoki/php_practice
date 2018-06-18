<?php

$token = '2471fc0be30ae4e5153455d3fe77cee44f9c791b'; // 前準備で作っておいた、tokenを設定
$base_url = 'https://qiita.com';

$data = [
    'body' => 'example',
    'coediting' => false, 
    'private' => true,      // テストで作る時は限定公開で
    'title'=> 'sample test',
    'tags' => [
        [
            'name' => 'PHP',
            'versions' => ["4.3.0",">="]
        ],
        [
            'name' => 'sample',
        ]
    ]
];

$header = [
    'Authorization: Bearer '.$token,  // 前準備で取得したtokenをヘッダに含める
    'Content-Type: application/json',
];

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $base_url.'/api/v2/items');
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST'); // post
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data)); // jsonデータを送信
curl_setopt($curl, CURLOPT_HTTPHEADER, $header); // リクエストにヘッダーを含める
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HEADER, true);

$response    = curl_exec($curl);
$header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE); 
$header      = substr($response, 0, $header_size);
$body        = substr($response, $header_size);
$result      = json_decode($body, true); 

var_dump($result);

curl_close($curl);