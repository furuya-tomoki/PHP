<?php
// 標準入力から５行分の入力を配列に代入する
for($i=0; $i < 5; $i++){
    // for文で1=5の標準入力を指定
    $team[] = trim(fgets(STDIN));
}
// ここから下に記述　
// $team の3つ目の要素を出力してください
print_r($team[2])

?>

<?php
// 標準入力から4行分の入力を配列に代入する
for($i=0; $i < 4; $i++){
    $team[] = trim(fgets(STDIN));
}
// ここから下に記述　
// $team の2つ目の要素を「木こり」に上書き
$team[1] = "木こり";
print_r($team);
?>

<?php
// 標準入力から3行分の入力を配列に代入する
for($i=0; $i < 3; $i++){
    $team[] = trim(fgets(STDIN));
}
// ここから下に記述　
// $team の冒頭の要素を削除
unset($team[0]);
print_r($team);
?>
