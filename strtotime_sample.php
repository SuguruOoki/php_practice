<?php

// 2012-03-02 になる！？
$date = strtotime('2012-03-31');
echo date('Y-m-d', strtotime('-1 month', $date)) . "\n";

// -1dayに関するトラブルはないか？
$date2 = strtotime('-1 day');
echo date('Y-m-d', $date2) . "\n";

// 文字列を繋げた時に問題がないかの確認
$date3 = strtotime('-1 day');
echo date('Y-m-d', $date3.' 23:59:00') . "\n";

