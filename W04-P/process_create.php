<?php
  $link = mysqli_connect("localhost", "root", "yuna0106", "dbp");
  $filtered = array(
    'title' => mysqli_real_escape_string($link, $_POST['title']),
    'description' => mysqli_real_escape_string($link, $_POST['description']),
  'author_id' => mysqli_real_escape_string($link, $_POST['author_id'])
  );
  $query = "
    INSERT INTO minions (
      title, description, created, author_id
      ) VALUES (
        '{$filtered['title']}',
        '{$filtered['description']}',
        now(),
        '{$filtered['author_id']}'
        )
  ";

  $result = mysqli_multi_query($link, $query);
  if ($result == false) {
      echo '저장하는 과정에서 문제가 발생했습니다. 관리자에게 문의하세요.';
      error_log(mysqli_error($link));
  } else {
      echo '성공했습니다. <a href="index.php">돌아가기</a>';
  }
