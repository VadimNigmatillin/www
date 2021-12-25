<?php

/**
 *
 * Основные функции
 * 
 */

/**
 * Формирование запрашиваемой страницы
 * 
 * @param string $controllerName название контроллера
 * @param string $actionName название функции обработки страницы 
 */
function loadPage($smarty, $controllerName, $actionName = 'index'){
	
	include_once PathPrefix . $controllerName . PathPostfix;
   
    $function = $actionName . 'Action';
    $function($smarty);
}

/**
 * Загрузка шаблона
 * 
 * @param object $smarty объект шаблонизатора
 * @param string $templateName название файла шаблона 
 */
function loadTemplate($smarty, $templateName)
{
    $smarty->display($templateName . TemplatePostfix);
}

/**
 * Функция отладки. Останавливает работу програамы выводя значение переменной
 * $value
 * 
 * @param variant $value переменная для вывода ее на страницу 
 */
function d($value = null, $die = 1)
{
    echo 'Debug: <br /><pre>';
    print_r($value);
    echo '</pre>';
    
    if($die) die;
}


/**
 * Преобразование результата работы функции выборки в ассоциативный массив
 *
 * @param  recordset $rs набор строк - результат работы $SELECT
 * @return array
 */
function createSmartyRsArray($rs) {

    if (!$rs) return false;
        $smartyRs = array();
    while($row = mysqli_fetch_assoc($rs))

        $smartyRs[] = $row;

    return $smartyRs;
}












