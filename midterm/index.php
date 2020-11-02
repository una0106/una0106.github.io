<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> 세계 정보 </title>
</head>
<body>
    <h1> 세계 정보 </h1>
    <form action="continent.php" method="POST">
        (1) 대륙별 나라 조회 :
        <select name="continent">
            <option value="none">===선택===</option>
            <option value="Asia">아시아</option>
            <option value="Europe">유럽</option>
            <option value="North America">북아메리카</option>
            <option value="South America">남아메리카</option>
            <option value="Africa">아프리카</option>
            <option value="Oceania">오세아니아</option>
            <option value="Antarctica">남극대륙</option>
        </select>
        <input type="submit" value="Search">
    </form>
    <form action="country.php" method="POST">
        (2) 나라별 도시 조회 :
        <input type="text" name="code" placeholder="code">
        <input type="submit" value="Search">
    </form>
    <form action="language.php" method="POST">
        (3) 각 나라의 사용언어 :
        <input type="text" name="code" placeholder="code">
        <input type="submit" value="Search">
    </form>
</body>
</html>
