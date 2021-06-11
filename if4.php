<?php
$omikuji = rand(1,100);
if($omikuji >= 30){
    // 30~100は大吉
    echo "omikujiの中身は".$omikuji."なので大吉";
}else{
    // 29以下は大凶
    echo "omikujiの中身は".$omikuji."なので大凶";
}

?>
