<?php
//дана строка. Убрать из нее все повторения символов. Например Hello world -> Helo wrd
$x = "Hello world";
echo implode('', array_unique(str_split($x)));
?>