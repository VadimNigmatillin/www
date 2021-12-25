<?php

  //Контроллер страницы категории (/category/1)
 

//подключаем модели
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';


 //Формирование страницы категории

 
function indexAction($smarty) {
    $catId = isset($_GET['id']) ? $_GET['id'] : null;
    if (!$catId) exit();
    //> Инициализируем переменные
    $rsProducts = null;
    $rsChildCats = null;
    //<
    $rsCategory = getCatById($catId);
    
    // Если главная категория, то показываем дочернии категории
    // иначе показываем товар
    if ($rsCategory['parent_id'] == 0) {
        $rsChildCats = getChildrenForCat($catId);
    }else {
        $rsProducts = getProductsByCat($catId);
    }

    $rsCategories = getAllMainCatsWithChildren();

    $smarty->assign('pageTitle', 'Товары категории'. $rsCategory['name']);

    $smarty->assign('rsCategory', $rsCategory);
    $smarty->assign('rsProducts', $rsProducts);
    $smarty->assign('rsChildCats', $rsChildCats);

    $smarty->assign('rsCategories', $rsCategories);

    loadTemplate($smarty,'header');
    loadTemplate($smarty,'category');
    loadTemplate($smarty,'footer');
}