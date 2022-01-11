<?php
require "function.php";

// двумерный массив со списком записей
$items_list = [];

// окончательный HTML код
$layout_content = renderTemplate('layout.php',
['content' => $page_content, 'title' => 'Mountain king']);

// вывод на экран итоговой страницы
print($layout_content);
?>
