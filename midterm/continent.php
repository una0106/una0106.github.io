<?php
    $link = mysqli_connect("localhost", "root", "yuna0106", "world");
    if (isset($_GET['continent'])) {
        $filtered_continent = mysqli_real_escape_string($link, $_GET['continent']);
    } else {
        $filtered_continent = mysqli_real_escape_string($link, $_POST['continent']);
    }
    $query = "SELECT continent, code, name, headofstate, population FROM country where continent='{$filtered_continent}' order by code";
    $result = mysqli_query($link, $query);

    $country_info = '';
    while ($row = mysqli_fetch_array($result)) {
        $country_info .= '<tr>';
        $country_info .= '<td>'.$row['continent'].'</td>';
        $country_info .= '<td>'.$row['code'].'</td>';
        $country_info .= '<td>'.$row['name'].'</td>';
        $country_info .= '<td>'.$row['headofstate'].'</td>';
        $country_info .= '<td>'.$row['population'].'</td>';
        $country_info .= '</tr>';
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> 세계 정보 </title>
</head>
<body>
    <h2><a href="index.php">세계 정보</a> | 대륙별 나라 조회</h2>
    <table border="1">
        <tr>
            <th>continent</th>
            <th>code</th>
            <th>name</th>
            <th>headofstate</th>
            <th>population</th>
        </tr>
        <?=$country_info?>
    </table>
</body>
</html>
