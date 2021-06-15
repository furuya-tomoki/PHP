<?php
// 標準入力から1行データを取得
// $inputの値が空で無ければループする
while($input = fgets(STDIN)){
    // 配列に$inputの値を追加
    $array[] = $input;
    // 標準入力から1行データを取得
}
print_r($array);

?>

<?php
// 標準入力から1行取得し値があればループ
while($input = fgets(STDIN)){
    // 配列に$inputの値を追加
    $array[] = trim($input);
    // trimの付け忘れ注意
    // 文字列の先頭および末尾にあるホワイトスペースを取り除く
}
// 配列の値を出力
print_r($array);
?>
