<?php

$title = filter_input(INPUT_POST, 'title');
$email = filter_input(INPUT_POST, 'email');
$content = filter_input(INPUT_POST, 'content');

$errors = [];
if (empty($title)||empty($email)||empty($content)) {
  $errors[] =  "「タイトル」「Eメール」「お問合せ内容」のどれかが記入されてません！";
}

$dbUserName = 'root';
$dbPassword = 'password';
$pdo = new PDO(
  'mysql:host=mysql; dbname=contactform; charset=utf8',$dbUserName, $dbPassword);
  $stmt = $pdo->prepare("INSERT INTO contacts (title, email, content)
   VALUES (:title, :email, :content)");
   
  $stmt->bindParam( ':title', $title, PDO::PARAM_STR);
  $stmt->bindParam( ':email', $email, PDO::PARAM_STR);
  $stmt->bindParam( ':content', $content, PDO::PARAM_STR);
  $res = $stmt->execute();

?>

<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>sample</title>
</head>

<body>
  <div>
    <?php if (!empty($errors)): ?>
    <?php foreach ($errors as $error):?>
    <p><?php echo $error . "\n";?></p>
    <?php endforeach;?>
    <a href="index.php">送信画面へ</a>
    <?php endif;?>
    <?php if (empty($errors)): ?>
    <h2>送信完了！！</h2>
    <a href="index.php">送信画面へ</a><br><br>
    <a href="history.php">送信履歴へ</a>
    <?php endif;?>
    <div>
</body>

</html>