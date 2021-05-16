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
       
        function uit(){
            return ['kdh', 'kyj', 'ksy', 'lgh', 'sjh', 'jsw'];
        }
        $members = uit();

        for($i = 0; $i<count($members); $i++){
            //Uppercase first
            echo ucfirst($members[$i]).'<br />';
        }


    ?>
</body>
</html>