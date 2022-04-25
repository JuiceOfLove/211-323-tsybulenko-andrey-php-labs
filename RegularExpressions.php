<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo preg_replace('#(?<!\*)\*(?!\*)#', '!', 'aaa * bbb ** eee * **');
    echo '<br>';
    echo preg_replace('#a\d+a#', '0', 'a1a a22a a333a a4444a a55555a aba aca');
    echo '<br>';
    echo preg_replace('#ab*a#','0','aa aba abba abbba abca abea');
    echo '<br>';
    $mail = 'mail@yandex.ru';
    echo preg_match('#^[a-z0-9_.-]+@[a-z_.-]+\.[a-z]{2,}$#', $mail);

    ?>
</body>
</html>