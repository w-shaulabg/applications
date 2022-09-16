<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>お問合せフォーム</title>
</head>

<body>
  <form action="complete.php" method="post">
    <font size="5"><b>お問合せフォーム</b><br></font>
    <br>
    以下のフォームからお問合せください。<br>
    <br>
    タイトル(必須)<input type="text" name="title" value="" placeholder="タイトル"><br>
    Email(必須)<input type="email" name="email" value="" placeholder="Email"><br>
    お問合せ内容(必須)<textarea cols="40" rows="8" name="content" placeholder="お問合せ内容(1000文字までをお書きください。)"></textarea><br>
    <input type="submit" name="confirm" value="送信"><br>
  </form>
</body>

</html>