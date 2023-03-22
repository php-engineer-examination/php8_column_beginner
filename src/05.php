<?php

/* 配列の基本 */
// 配列を作る
$data = ['1st', '2nd', '3rd', '4th'];
// 中身の確認
print_r($data);
var_dump($data);
print "\n";
// 1つの要素へのアクセス
print_r($data[1]);
var_dump($data[1]);
print "\n";

// 要素の書き換え
$data[0] = 'first';
// 末尾への要素の追加
$data[] = '5th';
// 中身の確認
print_r($data);
var_dump($data);
print "\n";

/* 連想配列 */
$fruit = [
    'apple' => '林檎',
    'strawberry' => 'いちご',
    'キウイ' => 'kiwi',
    'さくらんぼ' => 'cherry',
];
print_r($fruit);
var_dump($fruit);
print "\n";
// 1つの要素へのアクセス
print_r($fruit['apple']);
var_dump($fruit['apple']);
print "\n";

/* 配列の繰り返し処理 */
// count(要素数を数える)
$data_count = count($data);
var_dump($data);
var_dump($data_count);
print "\n";

// foreach(配列に対して繰り返し処理をする)
foreach($data as $key => $value) {
    print 'key: ';
    print $key;
    print ', value: ';
    print $value;
    print "\n";
}
print "\n";

/* 多次元配列 */
$users = [
    ['name' => '金子 加奈', 'name_kana' => 'かねこ かな', 'birthday' => '1999/10/22'],
    ['name' => '長谷川 あかり', 'name_kana' => 'はせがわ あかり', 'birthday' => '2001/3/13'],
    ['name' => '浅野 英明', 'name_kana' => 'あさの ひであき', 'birthday' => '1971/5/26'],
    ['name' => '境野 健太', 'name_kana' => 'さかいの けんた', 'birthday' => '2009/10/16'],
];

// 全体を表示してみる
var_dump($users);
print "\n";

// foreachで「配列として」表示してみる
foreach($users as $user) {
    var_dump($user);
}

// foreachをネストさせて「配列の配列」として表示してみる
foreach($users as $no => $user) {
    print $no;
    print "番目は... \n";
    foreach($user as $key => $value) {
        print $key;
        print '=>';
        print $value;
        print "\n";
    }
    print "\n";
}
