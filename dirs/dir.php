<?php
// Открываем каталог
$cat = dir('.');

// Читаем содержимое каталога
while(($file = $cat->read()) !== false) {
    echo $file . '<br />';
}

// Закрываем каталог
$cat->close();