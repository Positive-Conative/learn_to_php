<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Study</title>
</head>
<body>
    <form method="post" action="forms.php">
        id: <input type="text" name="id"/><br>
        pw: <input type="password" name="password"/> <br>
        <input type="submit"/>
    </form>

    <?php
        #http://localhost/firstapp/helloworld.php?id=conative&password=asdf
        echo "환영합니다 ".$_GET['id']."님, 안녕하세용.";
        echo "비밀번호는 ".$_GET['password']."네요.";
    ?>
</body>
</html>