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
        //연관배열
        $grades = array('conative'=>100, 'kyj'=>80, 'hw'=>35);
        echo $grades['conative']."<br />";

        // $grades['conative'] = 100;
        // $grades['kyj'] = 80;
        // $grades['hw'] = 35;
        // var_dump($grades);


        //열거
        foreach($grades as $key => $value){
            echo "key: {$key} value: {$value} <br />";
        }
    ?>
</body>
</html>