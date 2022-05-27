<?php
if(isset($_POST["firstname"]) && isset($_POST["lastname"]))
{
    $firstname = htmlentities($_POST["firstname"]);
    $lastname = htmlentities($_POST["lastname"]);
    $output ="
    <html>
    <head>
    <title>ОБЯЗАТЕЛЬНОЕ ДЗ</title>
    </head>
    <body>
    Привет, ($firstname) ($lastname) <br />
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
