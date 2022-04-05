<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>과일 검색</title>
</head>
<body>
    <form method="post" action="./fruitdata.php">
        <!-- method (방식)
        get : 보안없음 주소에 보임. 255자 길이제한o. 헤더에서 넘어감
        post : 값을 담긴 담지만 주소에 보이지 않음. 길이제한x. 바디에서 넘어감 ex)비밀번호, 파일업로드 -->
        원하는 가격을 입력하세요.<br>
        가격: <input type="text" name="low"><br> <!-- name값: 넘어갈때 키값 -->
        <input type="submit" value="찾기">
    </form>
</body>
</html>