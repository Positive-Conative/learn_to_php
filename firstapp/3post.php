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
        if($_GET['value']==1){
            for($i = 0; $i<5; $i++){
                echo $i;
            }
        }else{
            hello();
        }
    ?>

    <?php
        function hello(){
            echo "hello";
        }
    ?>
</body>
</html>