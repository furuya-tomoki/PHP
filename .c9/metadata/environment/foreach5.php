{"filter":false,"title":"foreach5.php","tooltip":"/foreach5.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":12,"column":2},"action":"insert","lines":["<?php","$input = trim(fgets(STDIN));","$array = explode(\",\", $input);","","// ここから下に記述　","// $array の value に代入されている","// 全ての数値の合計を出力してみましょう。","$total = 0;","foreach($array as $value){","    $total = $total + $value;","}","echo $total;","?>"],"id":1}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":12,"column":2},"end":{"row":12,"column":2},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1624023563564,"hash":"b9fe9dfac0e37f08aa5d8accd0ce7143a9a1e037"}