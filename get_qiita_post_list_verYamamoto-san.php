<?php
/*
 * /api/v2/items
 * このパラメーターを叩いて記事を取得しますよー
 * page
 * ページ番号はいくつのものを取得しようかなー
 * per_page
 * 1ページあたりの南紀自分取得しまようかねー
 * query
 * さらに取得したい情報をクエリで絞ろー(特定のユーザーだけとか)
 *
 */
$curl = curl_init('https://qiita.com/api/v2/items?page=1&per_page=1&query=qiita+user');
$option = [
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_FOLLOWLOCATION => true,//curlの結果を自動で表示させない
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
        'Authorization: Bearer xxxxxxxxxxxxxxxxxxxxxxxxxxxx',
        'Content-Type: application/json',
    ],
];
curl_setopt_array($curl, $option);
$result = curl_exec($curl);
curl_close($curl);
$decode_res = json_decode($result);
print_r($decode_res);

foreach($decode_res as $key => $value){ //foreachで回してあげる
    echo $key.":".$value;
    echo "\n";
    echo "";
}