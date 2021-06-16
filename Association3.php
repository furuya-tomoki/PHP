<?php
$item = array("02:戦士", "01:勇者", "04:魔法使い", "03:僧侶");
// 小さい順に並び替えて、print_rで出力してみましょう。
sort($item);
print_r($item);
?>

<?php
// 標準入力から全行のデータを取得
while($input = fgets(STDIN)){
	// 改行等を取り除いて配列に代入
	$item[] = trim($input);
}
// 小さい順に並び替え
sort($item);
print_r($item);

?>