{"filter":false,"title":"for6.php","tooltip":"/for6.php","undoManager":{"mark":2,"position":2,"stack":[[{"start":{"row":0,"column":0},"end":{"row":5,"column":2},"action":"insert","lines":["<?php","for($i=1926; $i<=1989; $i++){","    $showa = $i-1925;","    echo \"西暦\".$i.\"年は、昭和\".$showa.\"年です。\\n\";","}","?>"],"id":1}],[{"start":{"row":5,"column":2},"end":{"row":6,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":6,"column":0},"end":{"row":7,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":7,"column":0},"end":{"row":15,"column":2},"action":"insert","lines":["<?php","$start_year = trim(fgets(STDIN)); // 標準入力1行目取得 開始年","$term = trim(fgets(STDIN)); // 標準入力2行目取得 表示年数","$end_year = $start_year + $term; // ループ終了年の計算","for($i=$start_year ; $i<$end_year; $i++){","    $showa = $i-1925;","    echo \"西暦\".$i.\"年は、昭和\".$showa.\"年です。\\n\";","}","?>"],"id":3}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":15,"column":2},"end":{"row":15,"column":2},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1623682204206,"hash":"c619ce1f19b14a2b4866f6f75460dccc8c0b127c"}