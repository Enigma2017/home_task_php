<?php
//дан массив с номерами телефонов. Получить строку с перечислением телефонов через запятую (implode)
$array = array(38050, 38067, 38099, 38093);
$comma_separated = implode("," , $array);
echo "$comma_separated";
?>