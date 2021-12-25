<?php
/**
 * Модель для таблицы продукции (products)
 *
 */

/**
 * Получаем последние добавленные товары(показ товаров на главной странице)
 * 
 *
 * @param integer $limit Лимит товаров
 * @return array массив товаров
 */

function getLastProducts($limit = null) {
    $sql = "SELECT * FROM `products`   WHERE `status` = 1  ORDER BY `id` DESC";
    if ($limit) {
        $sql .= " LIMIT {$limit}";
    }
    $rs = db()->query($sql);

    return createSmartyRsArray($rs);
}



/**
 * Получить продукты для категории $itemId
 *
 * @param integer $itemId ID категории
 * @return array массив продуктов
 */

function getProductsByCat($itemId) {

    $itemId = intval($itemId);
    $sql = "SELECT * FROM products WHERE  `category_id` = '{$itemId}' ";

    $rs = db()->query($sql);

    return createSmartyRsArray($rs);
}



/**
 * Получить данные продукта по ID
 *
 * @param integer $itemId ID продукта
 * @return array массив данных продукта
 */
function getProductById($itemId) {

    $itemId = intval($itemId);
    $sql = "SELECT * FROM `products` WHERE `id` = '{$itemId}'";
    $rs = db()->query($sql);

    return mysqli_fetch_assoc($rs);

}
