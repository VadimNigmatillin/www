<?php

 //Контроллер функции пользователя
 

include_once '../models/CategoriesModel.php';
include_once '../models/UsersModel.php';


/**
 * AJAX решистрация пользователя.
 * Инициализация сессионной переменной ($_SESSION['user'])
 *
 * @return json  массив данных нового пользователя
 */
function registerAction() {
    $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : null;
    $email = trim($email);

    $pwd1 = isset($_REQUEST['pwd1']) ? $_REQUEST['pwd1'] : null;
    $pwd2 = isset($_REQUEST['pwd2']) ? $_REQUEST['pwd2'] : null;

    $phone = isset($_REQUEST['phone']) ? $_REQUEST['phone'] : null;
    $address = isset($_REQUEST['address']) ? $_REQUEST['address'] : null;
    $name = isset($_REQUEST['name']) ? $_REQUEST['name'] : null;
    $name =trim($name);

    //результат промежуточных данных об успехе\ошибках
    $resData = null;
    $resData = checkRegisterParams($email, $pwd1, $pwd2);

    //если пришли все данные, то проверяем наличие Эмейла в БД
    if(!$resData && checkUserEmail($email)) {
        $resData['success'] = false;
        $resData['message'] = "Пользователь с таким email ('{$email}') уже зарегистрирован";
    }

    if(!$resData) {
        $pwdMD5 = md5($pwd1);
        
        $userData = registerNewUser($email, $pwdMD5, $name, $phone, $address);

        if ($userData['success']) {

            $resData['message'] = 'Пользователь успешно зарегистрирован';
            $resData['success'] = 1;

            $userData = $userData[0];
            //Проверка логина при регистрации,если true - выводим Имя,иначе - email
            $resData['userName'] = $userData['name'] ? $userData['name'] : $userData['email'];
            $resData['userEmail'] = $email;

            $_SESSION['user'] = $userData;
            $_SESSION['user']['displayName'] = $userData['name'] ? $userData['name'] : $userData['email'];
            //$_SESSION['user']['displayName'] = $userData['userName'];

        }else{
            $resData['success'] = 0;
            $resData['message'] = 'Ошибка регистрации';
        }
    }

    echo json_encode($resData);
}

