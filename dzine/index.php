<?php

$view = empty ($_GET['view']) ? 'index' : $_GET['view'];
/* если элемент массива $_GET пустой, то передаем в переменную $view значение переменной index; если - НЕ пустой - то мы присваиваем переменной $view это значение */

include($_SERVER['DOCUMENT_ROOT']. "/mysite/dzine/belkashop.php"); 

?>