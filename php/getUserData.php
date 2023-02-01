<?php
    session_start();
    $userData = [
        'id'=>$_SESSION['id'],
        'name'=>$_SESSION['name'],
        'lastname'=>$_SESSION['lastname'],
        'email'=>$_SESSION['email']
    ]; // То что преобразуем
    $jsonUserData = json_encode($userData); // Преобразование в json
    exit($jsonUserData); // Вывод в формате json