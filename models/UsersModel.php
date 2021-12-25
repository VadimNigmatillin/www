<?php

/**
 * Модель для таблицы пользователей (users)
 */

/**
 * Регистрация нового пользователя
 *
 * @param string $email почта
 * @param string $pwdMD5 пароль зашифрованный в MD5
 * @param string $name имя пользователя
 * @param string $phone телефон
 * @param string $address адрес пользователя
 * @return  array массив данных нового пользователя
 */
function registerNewUser($email, $pwdMD5, $name, $phone, $address) {
    $email = htmlspecialchars(mysqli_real_escape_string(db(), $email));
    $name = htmlspecialchars(mysqli_real_escape_string(db(), $name));
    $phone = htmlspecialchars(mysqli_real_escape_string(db(), $phone));
    $address = htmlspecialchars(mysqli_real_escape_string(db(), $address));

    $sql = "INSERT INTO users (`email`, `pwd`, `name`, `phone`, `address`)
                  VALUES ('{$email}', '{$pwdMD5}', '{$name}', '{$phone}', '{$address}')";

    $rs = db()->query($sql);

    if ($rs) {
        $sql = "SELECT * FROM users WHERE (`email` = '{$email}' and `pwd` = '{$pwdMD5}') LIMIT 1";

        $rs = db()->query($sql);
        $rs = createSmartyRsArray($rs);

        if (isset($rs[0])) {
            $rs['success'] = 1;
        }else {
            $rs['success'] = 0;
        }
    }else {
        $rs['success'] = 0;
    }
    
    return $rs;
}

/**
 * Проверка параметров для регистрации пользователя
 *
 * @param  string $email email
 * @param string  $pwd1 пароль
 * @param string  $pwd2 повтор пароля
 * @return array результат
 */
function checkRegisterParams($email, $pwd1, $pwd2)
{
    $res = null;

    if (!$email) {
        $res['success'] = false;
        $res['message'] = 'Введите email';
    }

    else if (!$pwd1) {
        $res['success'] = false;
        $res['message'] = 'Введите пароль';
    }

    else if (!$pwd2) {
        $res['success'] = false;
        $res['message'] = 'Введите повтор пароля';
    }

    else if ($pwd1 != $pwd2) {
        $res['success'] = false;
        $res['message'] = 'Пароли не совпадают';
    }

    return $res;
}

/**
 * Проверка почты (есть ли email адрес в БД)
 *
 * @param string $email
 * @return array массив -  строка из таблицы users, либо пустой массив
 */
function checkUserEmail($email) {

    $email = mysqli_real_escape_string(db(), $email);
    $sql = "SELECT `id` FROM `users` WHERE `email` = '{$email}'";

    $rs = db()->query($sql);
    $rs = createSmartyRsArray($rs);

    return $rs;
}

