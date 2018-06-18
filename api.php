<?php

$base_url = 'https://qiita.com';
$tag      = 'PHP';
$curl     = curl_init();

curl_setopt($curl, CURLOPT_URL, $base_url.'/api/v2/tags/'.$tag.'/items');
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HEADER, true);   // ヘッダーも出力する

$response = curl_exec($curl);
$code     = curl_getinfo($curl, CURLINFO_HTTP_CODE); // ステータスコード取得

// header & body 取得
$header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE); // ヘッダサイズ取得
$header      = substr($response, 0, $header_size); // headerだけ切り出し
$body        = substr($response, $header_size); // bodyだけ切り出し
$result      = json_decode($body, true); // json形式で返ってくるので、配列に変換

// ヘッダから必要な要素を取得
preg_match('/Total-Count: ([0-9]*)/', $header, $matches); // 取得記事要素数
$total_count = $matches[1];

echo $total_count;

curl_close($curl);