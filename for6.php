<?php
for($i=1926; $i<=1989; $i++){
    $showa = $i-1925;
    echo "西暦".$i."年は、昭和".$showa."年です。\n";
}
?>

<?php
$start_year = trim(fgets(STDIN)); // 標準入力1行目取得 開始年
$term = trim(fgets(STDIN)); // 標準入力2行目取得 表示年数
$end_year = $start_year + $term; // ループ終了年の計算
for($i=$start_year ; $i<$end_year; $i++){
    $showa = $i-1925;
    echo "西暦".$i."年は、昭和".$showa."年です。\n";
}
?>