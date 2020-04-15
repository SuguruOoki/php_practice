<?php

$sample = '[1,2,4,5]';

echo trim($sample, '[]');

$sample2 = '【sinsotu】2022';
echo trim($sample2, '【】');
// sinsotu】2022
