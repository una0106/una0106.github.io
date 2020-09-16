<?php
  $link = mysqli_connect("localhost", "root", "yuna0106", "dbp");

  $filtered = array(
    'title' => mysqli_real_escape_string($link, $_POST['title']), #인자로 들어온 데이터 중에서 SQL을 주입하는 공격에 사용될수 있는 기호를 문자로 바꿔줌 => 보안의 역할
    'description' => mysqli_real_escape_string($link, $_POST['description'])
);

$query = "
   INSERT INTO minions
     (title, description, created)
     VALUES (
       '{$filtered["title"]}',
       '{$filtered["description"]}',
       now()
       )

  ";

  $result = mysqli_multi_query($link, $query);
  if ($result ==false) {
      echo"관리자에게 문의해 주세요";
      error_log(mysqli_error($link));
  } else {
      echo'성공했습니다.<a href="index.php"> 돌아가기 </a>';
  }

?>

<!-- <?php
  var_dump($_POST);
?> -->
