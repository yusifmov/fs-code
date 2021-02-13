<?php
$str = 'suretli kod yazmaq her zaman yaxshi kod yazmaq demek deyil. seliqeye ve hellin optimalligina da fikir vermek lazimdir.';

$noqte = true;
$i = 0;
while($str[$i]){
	if($noqte) $str[$i]  = strtoupper($str[$i]);
	if($str[$i] == '.') $noqte = true;
	else if($str[$i] != ' ') $noqte = false;
	$i++;
}
echo $str;
?>
