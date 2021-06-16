<?php
// 標準入力から1行取得
$input = trim(fgets(STDIN));
// カンマで分割して配列に代入
$omikuji = explode(",", $input);
// ランダムの上限値を計算して変数に代入
$max = count($omikuji)-1;
$key = rand(0,$max);
// 配列の中身を出力
print_r($omikuji);
// ランダム出力
echo $omikuji[$key];
?>

<?php
// 標準入力から1行取得
$input = trim(fgets(STDIN));
// カンマで分割して配列に代入
$array = explode(",", $input);
// ランダムの上限値を計算して変数に代入
$max_num = count($array)-1;
// 配列の中身を出力
print_r($array);
// ランダム出力
$rand_num = rand(0,$max_num);
echo $array[$rand_num];
?>

<?php
// 標準入力から1行取得し値があればループ
while($input = fgets(STDIN)){
    $array[] = trim($input);
}
// ランダムの上限値を計算して変数に代入
$max_num = count($array)-1;
// 配列の中身を出力
print_r($array);
// ランダム出力
$rand_num = rand(0,$max_num);
echo $array[$rand_num];
?>