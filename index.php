<!DOCTYPE html>
<html>
<head>
    <title>PHP. Знакомство</title>
    <meta charset="utf-8"/>
</head>
<body>
<h2>ОБЯЗАТЕЛЬНОЕ ДЗ</h2>
<ol>
    <li>У вас есть массив. Необходимо отсортировать его по PRICE<br>
        <?php
        $array = [
            'SKLAD1' => [
                'EDA' => [
                    'TOVAR1' => [
                        'NAME' => '....',
                        'PRICE' => 156
                    ],
                    'TOVAR2' => [
                        'NAME' => '....',
                        'PRICE' => 12
                    ],
                ],
                'NAPITKI' => [
                    'TOVAR55' => [
                        'NAME' => '....',
                        'PRICE' => 12356
                    ],
                    'TOVAR54' => [
                        'NAME' => '....',
                        'PRICE' => 1234
                    ],
                ],
            ],
            'SKLAD2' => [
                'EDA' => [
                    'TOVAR66' => [
                        'NAME' => '....',
                        'PRICE' => 12345
                    ],
                    'TOVAR67' => [
                        'NAME' => '....',
                        'PRICE' => 12346
                    ],
                ],
                'NAPITKI' => [
                    'TOVAR77' => [
                        'NAME' => '....',
                        'PRICE' => 12347
                    ],
                    'TOVAR78' => [
                        'NAME' => '....',
                        'PRICE' => 125
                    ],
                ],
            ],
        ];
        function cmp($a, $b)
        {
            if ($a['PRICE'] == $b['PRICE']) {
                return 0;
            }
            return ($a['PRICE'] < $b['PRICE']) ? -1 : 1;
        }
        foreach ($array as &$sklad) {
            foreach ($sklad as &$type_s) {
                uasort($type_s, 'cmp');
            }
        }
        echo '<pre>';
        var_dump($array);
        echo '</pre>';
        ?>
    </li>
    <li>Создать форму с полями: Имя, Фамилия и кнопка “Отправить”.
        После нажатия на кнопку на странице должны отобразиться данные из формы.
        В виде строки “Привет, (Фамилия) (Имя)”.<br>
        <form action="input.php" method="POST">
            <p>Введите имя:<br>
                <input required type="text" name="firstname"/></p>
            <p>Введите фамилию:<br>
                <input required type="text" name="lastname"/></p>
            <input type="submit" value="Отправить">
        </form>
        <br>
    </li>
    <li> Создать абстрактный класс.
        Он должен содержать обязательные к реализации 2 метода: save, new.
        А также внутри него должен быть реализован метод: getName - возвращающий произвольную строку.
        Далее реализовать свой класс, который наследуется от абстрактного класса.
        Реализовать все требуемые методы (содержимое реализации не имеет значения),
        переопределить метод getName (он должен возвращать строку родительского метода + надпись “Здорово!”)<br>
        <?php
        abstract class AbstractClass
        {
            abstract protected function save();
            abstract protected function new();

            public function getName() {
                print "Hello world!\n";
            }
        }
        class MyClass extends AbstractClass
        {
            public function new() {
                return "MyClass_new";
            }

            public function save() {
                return "MyClass_save";
            }
            public function getName() {
                print parent::getName()."Здорово!";
            }
        }
        $class = new MyClass;
        $class->getName();
        //echo $class->new() ."\n";
        //echo $class->save() ."\n";
        ?>
    </li>
    <li>Доработать форму из пункта 2. При отправки формы, сохранять Имя и Фамилию в БД.<br>
        <form action="input2.php" method="POST">
            <p>Введите имя:<br>
                <input required type="text" name="firstname"/></p>
            <p>Введите фамилию:<br>
                <input required type="text" name="lastname"/></p>
            <input type="submit" value="Отправить">
        </form>
        <br>
    </li>
</ol>
</body>
</html>
