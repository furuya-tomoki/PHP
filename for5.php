<?php
for($i = 20; $i >= 10; $i--){
    // 20~10まで1ずつ減らす
echo $i."\n";
}
?>

<?php
$input1 = trim(fgets(STDIN));
$input2 = trim(fgets(STDIN));
// 標準入力を値を代入
for($i = $input1; $i <= $input2; $i++){
    echo $i."\n";
}
?>

<?php
$input = trim(fgets(STDIN));
for($i = 0; $i < $input; $i++){
    echo "スライムがあらわれた。\n";
}
?>
