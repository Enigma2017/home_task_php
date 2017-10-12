<?php
//проверить, правильно ли в строке расставлены круглые скобки
$symbol = 'a (b) (c)';
$symbols = 'a((bc))';
$pos = strpos($symbol, $symbols);
if ($pos === false) {
    echo "Строка '$symbols' не найдена в строке '$symbol'";
} else {
    echo "Строка '$symbols' найдена в строке '$symbol'";
    echo " в позиции $pos";
}