<?php

$email= $_POST('email');
$password= $_POST('password');

//$errors = [];
//if (strtoupper($name[0]) !== $name[0]){
//    $errors['name'] = 'Имя начинается с большой буквы!';
//}
//if (!ctype_alpha($name)) {
//    $errors['name'] = 'Имя состоит только из букв!';
//}
//if (strlen($name) < 2) {
//    $errors['name'] = 'Имя состоит из 2-х и более букв!';
//}
//if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//    $errors['email'] = 'Email некорректен!';
//}
//if (preg_match("/^[a-zA-Z0-9]+$/", $password)) {
//    $errors['psw'] = 'Пароль должен состоять из цифр, букв и символов!';
//}
//if ($password !== $passwordRep) {
//    $errors['psw-repeat'] = 'Повторный пароль введен не верно!';
//}
//if (empty($errors)) {
//
//    $pdo = new PDO("pgsql:host=db; port=5432; dbname=dbname", "dbuser", "dbpwd");
//
//    $password = password_hash($password, PASSWORD_DEFAULT);
//
//    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
//    $stmt -> execute(['email' => $email]);
//    $result = $stmt->fetch();