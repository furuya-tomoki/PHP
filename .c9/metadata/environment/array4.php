{"filter":false,"title":"array4.php","tooltip":"/array4.php","undoManager":{"mark":9,"position":9,"stack":[[{"start":{"row":0,"column":0},"end":{"row":7,"column":0},"action":"insert","lines":["<?php","// 標準入力から1行取得し$inputに代入","$input = trim(fgets(STDIN));","// $inputの文字列を分割してみよう！","$input = explode(\"/\", $input);","print_r($input);","?>",""],"id":1}],[{"start":{"row":4,"column":30},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":5,"column":0},"end":{"row":5,"column":1},"action":"insert","lines":["/"]},{"start":{"row":5,"column":1},"end":{"row":5,"column":2},"action":"insert","lines":["/"]}],[{"start":{"row":5,"column":2},"end":{"row":5,"column":3},"action":"insert","lines":[" "],"id":3}],[{"start":{"row":5,"column":3},"end":{"row":5,"column":18},"action":"insert","lines":["explodeで文字列を分割 "],"id":4}],[{"start":{"row":5,"column":18},"end":{"row":6,"column":0},"action":"insert","lines":["",""],"id":5},{"start":{"row":6,"column":0},"end":{"row":6,"column":1},"action":"insert","lines":["/"]},{"start":{"row":6,"column":1},"end":{"row":6,"column":2},"action":"insert","lines":["/"]}],[{"start":{"row":6,"column":2},"end":{"row":6,"column":13},"action":"insert","lines":["スラッシュ（/）で分割"],"id":6}],[{"start":{"row":9,"column":0},"end":{"row":10,"column":0},"action":"insert","lines":["",""],"id":7},{"start":{"row":10,"column":0},"end":{"row":11,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":11,"column":0},"end":{"row":18,"column":0},"action":"insert","lines":["<?php","// 標準入力から1行取得し$inputに代入","$input = trim(fgets(STDIN));","// カンマ区切りでいくつの要素が入っているか数えよう","$array = explode(\",\", $input);","echo count($array);","?>",""],"id":8}],[{"start":{"row":18,"column":0},"end":{"row":19,"column":0},"action":"insert","lines":["",""],"id":9}],[{"start":{"row":19,"column":0},"end":{"row":34,"column":0},"action":"insert","lines":["<?php","// 標準入力から1行取得し$inputに代入","$input = trim(fgets(STDIN));","// explodeで$inputの文字列を分割し$arrayに配列として代入","$array = explode(\",\", $input);","// $arrayの要素数を数えて$numに代入","$num = count($array);","// $numの数だけループして$arrayから","// 要素を一つづつ取り出してみよう","$i = 0;","while($i < $num){","    echo $array[$i].\"\\n\";","    $i++;","}","?>",""],"id":10}]]},"ace":{"folds":[],"scrolltop":110.5,"scrollleft":0,"selection":{"start":{"row":19,"column":0},"end":{"row":33,"column":2},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":5,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1623771440322,"hash":"8de3bd1f0091155e2e0f358dc3417d8df5447e47"}