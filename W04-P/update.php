<?php
  $link = mysqli_connect('localhost', 'root', 'yuna0106', 'dbp');
  $query = "SELECT * FROM minions";
  $result = mysqli_query($link, $query);
  $list ='';

  while ($row = mysqli_fetch_array($result)) {
      $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
  }

  $article = array(
    'title' => 'Welcome',
    'description' => 'The Minions are small, yellow, cylindrical creatures, who have one or two eyes. They are the signature characters of the Despicable Me series. They bring much of the comedy in the film, and they are known as the scene-stealer of the movie. Frequently, they speak in an incomprehensible language, called Minionese, occasionally switching to English. They are much childish in some ways, yet they seem to be very intelligent in certain aspects. All the minions are minor characters in Minions (with the exception of Kevin, Stuart, and Bob), major character in Despicable Me and Despicable Me 2 and supporting characters in Despicable Me 3 (with the exception of Mel).

Jerry, Kevin, Stuart, Dave and Carl having an ice cream party from Despicable Me 2

They are impulsive creatures with little self-control, but with a wide-eyed wonder and odd innocence that endears them to viewers and makes them relatable. They can be pesky when they are doing weird interactions with other people, animals, or objects; they are also famous for their gibberish-speaking language. Minions have standard English names (see below).

Unlike most other criminal masterminds and their usual doctrine of abusing their henchmen, Gru gets along famously with the minions. He genuinely seems to like them and shows appreciation for their hard work and support, only having to be strict with them very few times. He even seems to know each of them by name.'
  );

  $updated_link = '';

  if (isset($_GET['id'])) {
      $query = "SELECT * FROM minions WHERE id={$_GET['id']}";
      $result = mysqli_query($link, $query);
      $row = mysqli_fetch_array($result);
      $article = array(
      'title' => $row['title'],
      'description' => $row['description']
    );
      $updated_link = '<a href="update.php?id'.$_GET['id'].'">update</a>';
  }

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>MINIONS</title>
  </head>
  <body>
    <h1><a href="index.php">MINIONS</a></h1>
    <ol><?= $list ?></ol>
    <form action="process_update.php" method="POST">
      <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
      <p><input type="text" name="title" placeholder="title" value="<?= $article['title'] ?>"></p>
      <p><textarea name="description" placeholder="description"><?= $article['description'] ?></textarea></p>
      <p><input type="submit"></p>
    </form>
  </body>
</html>
