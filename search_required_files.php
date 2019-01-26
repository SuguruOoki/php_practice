<?php

/**
 * requireしたファイルの中に存在するものがあるときに別の処理を行いたい場合、
 * requireしたファイルの中から特定のファイルが存在するかどうかを確認し、
 * 存在する場合は、true, 存在しない場合はfalseを返すような処理をかく。
 * 以下のような処理を書けば、そのようなことができることが結果的にはわかった。
 */
require('json.php');
// var_dump(get_included_files());
/**
 * 正規表現を使って判定を行うがゆえに実行コストがかさむ可能性が高い。
 * そのため、これを使う際には、実際にこの関数を使う箇所において
 * どれくらいの回数呼び出されるかを確認しておく必要がある。
 * 概算で微妙な値が出るときには、リリースして様子見が許されるかどうかを
 * 確認し、許されるのであれば、すぐにでもリバートできる準備を行った
 * 上で利用すると良い。技術負債をなんとかするために
 * 利用する用途しか考えられないため、もし新規のPJなのであれば、
 * この関数を使う前提で話を進めない方が良い。
 * 
 * @param string $particular_file_name requireされているか確かめたいファイル名。ファイルパスではない。
 * @return bool ファイル名がrequireされているファイル群に含まれていればtrue そうでなければfalse
 */
function isRequiredParticularFile($particular_file_name) {
    return preg_grep("/.*$particular_file_name$/", get_included_files());
}

var_dump(get_included_files());
// false↓
// if (strpos_arr(get_included_files(), 'data.php')) {
// false↓
// if (array_search('data.php', get_included_files())) {
// true↓
if (isRequiredParticularFile('data.php')) {
    echo 'true';
} else {
    echo 'false';
}
