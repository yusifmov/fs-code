<?php
$str = 'Bu cumlede tam-tamina alti soz var';
$count=0;
$last_is_empty=true; //boshluqlar 1 deneden chox olma ehtimalina gore
$i=0;
while($str[$i]){
	if(!$last_is_empty && $str[$i]==' ') $count++;
	$last_is_empty = ($str[$i]==' ') ? true : false;
	$i++;
}
echo ($last_is_empty) ? $count : $count+1;
?>
