<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>333</title>
</head>
<body>
    <?php
        // $class = Array("hello", "world");
        // $class1 = ["Hello", "World"];
        // echo $class[0];
        // echo $class1[0];
        function hello(){
            return ['hello', 'world'];
        }
        // $tmp = hello();
        // echo $tmp[1];    //world
        echo hello()[1];    //world - php 5.4 이후버전부터 사용 가능
    ?>
</body>
</html>