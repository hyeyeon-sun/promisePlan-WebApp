<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
    $password = $_GET["password"];
    $name = $_GET["name"];

    if($name == "username"){

        if($password == "12345"){
            echo "안녕하세요 ".$name."님";
        }else{
            echo "비밀번호가 일치하지 않습니다.";
        }
    }else{
        echo "존재하지 않는 회원입니다.";
    }

 ?>
</body>
</html>