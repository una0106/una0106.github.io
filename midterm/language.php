<?php
    $link = mysqli_connect("localhost", "root", "yuna0106", "world");
    if (isset($_GET['code'])) {
        $filtered_code = mysqli_real_escape_string($link, $_GET['code']);
    } else {
        $filtered_code = mysqli_real_escape_string($link, $_POST['code']);
    }
    $query = "SELECT c.name, cl.language, cl.isofficial, cl.percentage
              FROM countrylanguage cl
              inner join  country c on c.code = cl.countrycode
              where countrycode='{$filtered_code}'
              order by c.name";
    $query_code = "SELECT countrycode from countrylanguage where countrycode = '{$filtered_code}'";
    $result = mysqli_query($link, $query);
    $result_code = mysqli_query($link, $query_code);

    $language_info = '';
    while ($row = mysqli_fetch_array($result)) {
        $language_info .= '<tr>';
        $language_info .= '<td>'.$row['name'].'</td>';
        $language_info .= '<td>'.$row['language'].'</td>';
        $language_info .= '<td>'.$row['isofficial'].'</td>';
        $language_info .= '<td>'.$row['percentage'].'</td>';
        $language_info .= '</tr>';
    }

    $row_code = mysqli_fetch_array($result_code);
    $code_info = $row_code['countrycode'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> 세계 정보 </title>
</head>
<body>
    <h2><a href="index.php">세계 정보</a> | 나라별 사용언어 조회</h2>
    <h3>나라 코드 : <?=$code_info?></h3>
    <table border="1">
        <tr>
            <th>name</th>
            <th>language</th>
            <th>isofficial</th>
            <th>percentage</th>
        </tr>
        <?=$language_info?>
    </table>
</body>
</html>
