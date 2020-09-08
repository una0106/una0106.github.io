<?php
  $link = mysqli_connect("localhost", "root", "yuna0106", "dbp");
  $query = "
    INSERT INTO minions
      (title, description, created)
      VALUES (
        '{$_POST['title']}',
        '{$_POST['description']}',
        now()
        )
  ";

  $result = mysqli_query($link, $query);
  if($result ==false){
    echo"관리자에게 문의해 주세요";
    error_log(mysql_error($link));
  }else{
    echo'성공했습니다.<a href="index.php"> 돌아가기 </a>';
  }

?>

<!-- <?php
  var_dump($_POST);
?> -->
