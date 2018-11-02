<?php

$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL         => 'https://vm-ne-dev/Usercsv/upload',
    CURLOPT_POST        => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_POSTFIELDS  => [
        // 'fl' => new CURLFile('~/Desktop/45716_tsv.txt'),
        'fl' => new CURLFile('/Users/oki.suguru/Desktop/45716_tsv.txt'),
    ],
]);

$result = curl_exec($ch);
$info   = curl_getinfo($ch);
$errno  = curl_errno($ch);
$error  = curl_error($ch);

curl_close($ch);
if (CURLE_OK !== $errno) {
  throw new RuntimeException($error, $errno);
}
// var_dump($result);

if (strpos($result, '本サービスを利用するためには、2段階のログインが必要です')) {
    echo 'ログイン情報が足りていないようです。';
} else {
    echo 'ログイン情報が足りているため、次の処理に移ります';
}

