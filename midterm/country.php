<?php
    $link = mysqli_connect("localhost", "root", "yuna0106", "world");
    if (isset($_GET['code'])) {
        $filtered_code = mysqli_real_escape_string($link, $_GET['code']);
    } else {
        $filtered_code = mysqli_real_escape_string($link, $_POST['code']);
    }
    $query = "SELECT name, population
              FROM city
              where countrycode='{$filtered_code}'
              order by name";
    $query_info = "SELECT name, code from country where code = '{$filtered_code}'";
    $result = mysqli_query($link, $query);
    $result_info = mysqli_query($link, $query_info);

    $city_info = '';
    while ($row = mysqli_fetch_array($result)) {
        $city_info .= '<tr>';
        $city_info .= '<td>'.$row['name'].'</td>';
        $city_info .= '<td>'.$row['population'].'</td>';
        $city_info .= '</tr>';
    }

    $row_info = mysqli_fetch_array($result_info);
    $country_info = array(
        'name' => $row_info['name'],
        'code' => $row_info['code']
    );
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> 세계 정보 </title>
</head>
<body>
    <h2><a href="index.php">세계 정보</a> | 나라별 도시 조회</h2>
    <h3>나라 이름 : <?=$country_info['name']?>  나라 코드 : <?=$country_info['code']?></h3>
    <table border="1">
        <tr>
            <th>name</th>
            <th>population</th>
        </tr>
        <?=$city_info?>
    </table>
</body>
</html>
