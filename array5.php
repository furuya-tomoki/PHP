<?php
// 標準入力から1行データを取得
$input = trim(fgets(STDIN));
// $inputの値が空で無ければループする
while($input){
    // 配列に$inputの値を追加
    $array[] = $input;
    // 標準入力から1行データを取得
    $input = trim(fgets(STDIN));
}
print_r($array);
?>

<?php
// 標準入力から1行データを取得
$input = trim(fgets(STDIN));
// $inputの値が空で無ければループする
while($input){
    // 配列に$inputの値を追加
    echo $input."さん\n";
    // 標準入力から1行データを取得
    $input = trim(fgets(STDIN));
}
?>

<?php
// 標準入力から1行データを取得
$input = trim(fgets(STDIN));
// $inputの値が空で無ければループする
while($input){
    // $inputの値が勇者だったら配列に追加
    if($input == "勇者"){
        $array[] = $input;
    }
    // 標準入力から1行データを取得
    $input = trim(fgets(STDIN));
}
echo count($array);

?>

<?php
// 標準入力から1行取得し値があればループ
while($input = fgets(STDIN)){
    // 配列に$inputの値を追加
     $input = trim($input);
     if($input == "勇者"){
    $array[] = trim($input);
     }
}
echo count($array);
?>
