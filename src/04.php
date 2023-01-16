<?php

/* 論理リテラル(bool) */
// 値を入れて表示してみる
$bool_type_variable = true;
var_dump($bool_type_variable);
$bool_type_variable = false;
var_dump($bool_type_variable);

// trueとfalseは「大文字小文字の区別なく」認識される
$bool_type_variable = TRUE;
var_dump($bool_type_variable);
$bool_type_variable = TrUe;
var_dump($bool_type_variable);

/* 整数リテラル(int) */
// 値を入れて表示してみる
$int_type_variable = 123;
var_dump($int_type_variable);
$int_type_variable = -123;
var_dump($int_type_variable);

// 様々な進数での表記
$int_type_variable = 0b1111; // 2進数
var_dump($int_type_variable);
$int_type_variable = 077; // 8進数
var_dump($int_type_variable);
$int_type_variable = 0xff; // 16進数
var_dump($int_type_variable);

// 扱える値の最大値と最小値(値自体は環境によって異なります)
var_dump(PHP_INT_MAX);
var_dump(PHP_INT_MIN);

/* 浮動小数点数リテラル(float) */
// 値を入れて表示してみる
$float_type_variable = 1.41421356;
var_dump($float_type_variable);

// 指数表現
$float_type_variable = 14e2; // 14 * 10の2乗(100)
var_dump($float_type_variable);
$float_type_variable = 14e-2; // 14 * 10の-2乗(1/100)
var_dump($float_type_variable);

/* ヌル(null) */
// 値を入れて表示してみる
$null_type_variable = null;
var_dump($null_type_variable);

// nullは「大文字小文字の区別なく」認識される
$null_type_variable = NULL;
var_dump($null_type_variable);
$null_type_variable = nuLL;
var_dump($null_type_variable);

/* 文字列リテラル(string) */
// 値を入れて表示してみる
$string_type_variable = 'string';
var_dump($string_type_variable);

// ダブルクォートとシングルクォートの違い
$value = 123; // "変数の展開"用の変数

// 変数の展開をシングルクォートで試みる
$string_type_variable = 'single quotation mark: value is {$value}';
var_dump($string_type_variable);
// 変数の展開をダブルクォートで試みる
$string_type_variable = "double quotation mark: value is {$value}";
var_dump($string_type_variable);

// エスケープシーケンスをシングルクォートで試みる
$string_type_variable = 'single quotation mark: \n line feed code';
var_dump($string_type_variable);
// エスケープシーケンスをダブルクォートで試みる
$string_type_variable = "double quotation mark: \n line feed code";
var_dump($string_type_variable);

// ヒアドキュメントの書き方
$string_type_variable = <<<EOD
Heredoc : value is {$value}
EOD;
var_dump($string_type_variable);

// Nowdocの書き方
$string_type_variable = <<<'EOD'
Nowdoc : value is {$value}
EOD;
var_dump($string_type_variable);
