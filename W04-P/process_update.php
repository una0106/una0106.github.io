<?php
    $link = mysqli_connect('localhost', 'root', 'yuna0106', 'dbp');
    settype($_POST['id'], 'integer');
    $filtered = array(
        'title' => mysqli_real_escape_string($link, $_POST['title']),
        'description' => mysqli_real_escape_string($link, $_POST['description']),
        'id' => mysqli_real_escape_string($link, $_POST['id'])
    );
    $query = "
        UPDATE minions
            SET
                title = '{$filtered['title']}',
                description = '{$filtered['description']}'
            WHERE
                id = '{$filtered['id']}'
    ";

    $result = mysqli_multi_query($link, $query);
    if ($result == false) {
        echo '수정하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
        error_log(mysqli_error($link));
    } else {
        echo '성공했습니다. <a href="index.php">돌아가기</a>';
    }
