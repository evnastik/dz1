<?php
if(isset($_POST["firstname"]) && isset($_POST["lastname"]))
{
    $firstname = htmlentities($_POST["firstname"]);
    $lastname = htmlentities($_POST["lastname"]);
    $host = 'localhost';
    $user = 'admin';
    $password = '';
    $db_name = 'test';

    $link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error());
    $query = "INSERT INTO users (name, lastname) VALUES ('$firstname', '$lastname')";
    $result = mysqli_query($link, $query) or die( mysqli_error($link) );
    $output ="
    <html>
    <head>
    <title>ОБЯЗАТЕЛЬНОЕ ДЗ</title>
    </head>
    <body>
    Привет, ($firstname) ($lastname) <br />
    Даные сохранены в БД.
    <br />
    <a href='/index.php'>Назад</a>
    </body></html>";
    echo $output;
}
else
{
    echo "Введенные данные некорректны";
}
?>
