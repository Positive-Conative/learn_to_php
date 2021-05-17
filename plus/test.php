<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // echo (print("b")) ;
    // print(echo "a");  //ERROR!
    $asdf = "Conative";
?>

안녕하세요<?= $asdf?>님.<br><br>

<?php
    // $str = <<<hello
    // asdf
    // "fdsa"
    // asdf
    // fdsa
    // hello;
    // echo $str."<br>";
?>

<?php
    // $a = "1";
    // $b = 2;
    // echo $a + $b."ff";

    // $c =  (double)($b + 0.1);
    // echo $c."<br>";
?>

<?php
    //메모리 해제 방법은 null 대입방법과 unset을 사용하는 방법이 있다.
    // unset($c);  
    // $c = null;

    // echo "empty 값 : ".empty($c)."<br>";
    // echo "isset 값 : ".isset($c)."<br>";
    // echo "is_null 값 : ".is_null($c)."<br>";
    
    // if(isset($c)) echo "ok!";
    // else echo "no!";
?>

<?php
    //참조

    //기본적으로 변수 대입은 Call by value임.

    // $a = 100;
    // $b = $a;

    // echo $a."<br>";
    // echo $b."<br>";
    
    // $a = 10;

    // echo $a."<br>";
    // echo $b."<br>";

    // echo "-------------------------<br>";
    // //Call by reference 로 변경하기

    // $x = 100;
    // $y = &$x;

    // echo $x."<br>";
    // echo $y."<br>";
    
    // $x = "a";

    // echo $x."<br>";
    // echo $y."<br>";
?>

<?php
    //상수 TEST

    // $a = 100;
    // $b = &$a;
    // define("HELLO", $b);
    // $a = 10;
    // echo HELLO;
?>

<?php
    // 증감 연산자는 문자에도 사용할 수 있다!!
    // $a = "Zaz";
    // echo ++$a;
?>

<?php
    // 요상한 변수 값 지정
    // $a = "hello";
    // $$a = "world";
    // echo $a;
    // echo "aa $$a";
    // print "AA$$a"
?>

<?php
    // constant 확인하기

    // $a = "name";

    // define("Server_name", "localhost");

    // echo constant("Server_". $a);
?>

<?php
    // 알파벳, 숫자로만 이루어져있는지 확인
    // 비밀번호 체크할때 유용할 듯

    // $a = "1q2w3e4r!";   //X
    // $a = "1q2w3e4r";   //O
    // echo ctype_alnum($a);
?>

<?php
    // foreach Test...!
    // $a = array("conative");  //0, conative
    // $a = array("name"=>"conative"); //name, conative
    // foreach($a as $b=>$c){
    //     echo $b."<br>";
    //     echo $c."<br>";
    // }
?>

<?php
    //Defined : define 된 것이 있는지 확인하기.
    // @ define("HELLO", "world");

    // if(defined("HELLO1")) echo "Exists";
    // else echo "Not exists";
?>

<?php
    //????
    // import_request_variables("gP", "rvar_");
    // print $rvar_foo
?>

</body>
</html>