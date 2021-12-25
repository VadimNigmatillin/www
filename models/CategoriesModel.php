<?php



/**
 *  Получить дочернии категории для категории $catId
 *
 * @param integer $catId ID категории
 *
 * @return array массив дочерних категорий
 */
function getChildrenForCat($catId) {
    $sql ="SELECT * FROM categories WHERE  parent_id = '{$catId}'";

    $rs = db()->query($sql);

    return createSmartyRsArray($rs);
}




/**
Модель для таблицы категорий(categories)
 */

/**
 * Получить главные категории с привязками дочерних
 *
 * @return array иассив категорий
 */

function getAllMainCatsWithChildren() {
    

    $sql = 'SELECT * FROM categories WHERE `parent_id` = 0';

$rs = db()->query($sql);

    $smartyRs = array();
    while($row = mysqli_fetch_assoc($rs)) {

        $rsChildren = getChildrenForCat($row['id']);
        if ($rsChildren) {
            $row['children'] = $rsChildren;
        }
        $smartyRs[] = $row;
    }

    return $smartyRs;
}


/**
 * Получить данные категории по id
 *
 * @param integer $catId ID категории
 * @return array массив - строка категории
 */
function getCatById($catId) {

    $catId = intval($catId);

    $sql = "SELECT * FROM `categories` WHERE `id` = '{$catId}'";

    $rs = db()->query($sql);

    return mysqli_fetch_assoc($rs);
}
