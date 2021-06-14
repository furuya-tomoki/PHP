<select name="year">
<?php
$i = trim(fgets(STDIN));
$u = trim(fgets(STDIN));
while($i <= $u){
echo "<option>".$i."年生まれ</option>\n";
$i++;
}
?>
</select>
