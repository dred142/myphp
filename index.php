<?
$rand = rand(100,2000);
$rez = $rand*2;
if($rand > 1000){
echo '<b><center><font color="green">Резуьтат: '.$rez.'</font></center></b>';
} else {
echo '<b><center><font color="red">Результат рандома меньше 1000!</font></center></b>';
}
?>