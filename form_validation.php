<?php

// ТЕСТОВАЯ БАЗА ДАННЫХ
$DATABASE = [
    [
        "id" => 1,
        "name" => 'Oleg',
        "email" => 'olegy@mail.ru'
    ],
    [
        "id" => 2,
        "name" => 'Sam',
        "email" => 'ssam@mail.ru'
    ],
    [
        "id" => 3,
        "name" => 'Lera',
        "email" => 'ledyLera@mail.ru'
    ],
    [
        "id" => 4,
        "name" => 'test',
        "email" => 'test@mail.ru'
    ]
];

$response = [
    'res' => true,
    'errors' => []
];

if (isset($_POST["name"]) && isset($_POST["surname"]) && isset($_POST["email"]) && isset($_POST["pass"]) && isset($_POST["repass"])) { 
    
    // Проверка все ли данные введены
    if ($_POST["name"] == "" || $_POST["surname"] == "" || $_POST["email"] == "" || $_POST["pass"] == "" || $_POST["repass"] == ""){
        array_push($response["errors"], "Заполнены не все поля");
    }
    // Проверка корректности пароля
    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        array_push($response["errors"], "Неверная почта");
    }
    // Проверка совпадения пролей
    if ($_POST["pass"] != $_POST["repass"]){
        array_push($response["errors"], "Пароли не совпадают");
    }

    
    if (!empty($response["errors"])){
        $response['res'] = false;
    } else {
        // Проверка есть ли пользователь в базе
        $inDatabase = false;

        foreach($DATABASE as $user){
            if($user["name"] == $_POST["name"] && $user["email"] == $_POST["email"]){
                $inDatabase = true;
            }
        }

        if ($inDatabase) {
            array_push($response["errors"], "Такой пользователь уже есть в базе");
            $response['res'] = false;
            file_put_contents(
                './logs/logs[' . date('Y-m-d') . '].txt',
                '[' . date('H:i:s') . '] Пользователь ' . $_POST["name"] . "|" . $_POST["email"] . " УЖЕ ЕСТЬ В БАЗЕ (НЕУДАЧА)\n",
                FILE_APPEND
            );
        } else {
            file_put_contents(
                './logs/logs[' . date('Y-m-d') . '].txt',
                '[' . date('H:i:s') . '] Пользователя ' . $_POST["name"] . "|" . $_POST["email"] . " НЕТ В БАЗЕ (УСПЕХ)\n",
                FILE_APPEND
            );
        }
    }

    echo json_encode($response); 
} else {
    $response['res'] = false;
    $response['errors'][0] = "Ошибка формы";
    echo json_encode($response); 
}

?>