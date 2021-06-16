<?php
$item = array(
	"ショートソード" => "攻撃力:23",
	"バスタードソード" => "攻撃力:45",
	"ロングソード" => "攻撃力:34",
	"ダガー" => "攻撃力:10"
);
// $itemのvalueを大きい順に並べ替えて
// print_rで出力しましょう
arsort($item);
print_r($item);
?>


<?php
// 標準入力から全行のデータを取得
while($input = fgets(STDIN)){
	// 改行等を取り除きカラムで分割
	$key_value = explode(",", trim($input));
	$key = $key_value[0];
	$value = $key_value[1];
	// 最初の要素をkeyに、後ろの要素をvalueとして代入
	$item[$key] = $value;
}
// valueを大きい順に並べ替え
arsort($item);
print_r($item);

?>