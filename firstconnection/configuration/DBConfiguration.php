<?php

return [
    'dsn'=>'mysql:host=192.168.60.144;dbname=patrick_pacurar_studenti;charset=utf8mb4',
    'username'=>'patrick_pacurar',
    'password'=>'cesseresti.sovvertano.',
    'options'=>[
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]


];
