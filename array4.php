<?php
// 標準入力から1行取得し$inputに代入
$input = trim(fgets(STDIN));
// $inputの文字列を分割してみよう！
$input = explode("/", $input);
// explodeで文字列を分割 
//スラッシュ（/）で分割
print_r($input);
?>


<?php
// 標準入力から1行取得し$inputに代入
$input = trim(fgets(STDIN));
// カンマ区切りでいくつの要素が入っているか数えよう
$array = explode(",", $input);
echo count($array);
?>

<?php
// 標準入力から1行取得し$inputに代入
$input = trim(fgets(STDIN));
// explodeで$inputの文字列を分割し$arrayに配列として代入
$array = explode(",", $input);
// $arrayの要素数を数えて$numに代入
$num = count($array);
// $numの数だけループして$arrayから
// 要素を一つづつ取り出してみよう
$i = 0;
while($i < $num){
    echo $array[$i]."\n";
    $i++;
}
?>
