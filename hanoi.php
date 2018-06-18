<?php
$count = 0;
echo "ハノイの塔を解く\n";
hanoi(2, "A", "B", "C");
echo $count;
echo "\n";
$count = 0;
echo "ハノイの塔を解く\n";
hanoi(3, "A", "B", "C");
echo $count;
echo "\n";

function hanoi($n_hanoi,  $a, $b, $c) {
    global $count;
    if ($n_hanoi > 0) {
        hanoi($n_hanoi-1, $a, $c, $b);
        $count++;
        echo $n_hanoi .'番目の円盤を' . $a . 'から' .$b. "に移動する\n";
        hanoi($n_hanoi-1, $c, $b, $a);
    }
}