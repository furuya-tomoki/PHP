<?php

$dice = rand(1,6);
echo "サイコロは".$dice."\n";
if($dice >= 4){
    echo "スライムの攻撃をかわした";
} else{
    echo "スライムから10のダメージを受けた";
}
?>
