<?php
require_once __DIR__ . '/../vendor/autoload.php';
use App\Contact;

$title = filter_input(INPUT_POST, 'title');
$email = filter_input(INPUT_POST, 'email');
$content = filter_input(INPUT_POST, 'content');

$errors = [];
if (empty($title) || empty($email) || empty($content)) {
    $errors[] =
        '「タイトル」「Eメール」「お問合せ内容」のどれかが記入されてません！';
}

$contact = new Contact();
$contact->insert($title, $email, $content);
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
    <?php foreach ($errors as $error): ?>
    <p><?php echo $error . "\n"; ?></p>
    <?php endforeach; ?>
    <a href="index.php">送信画面へ</a>
    <?php endif; ?>
    <?php if (empty($errors)): ?>
    <h2>送信完了！！</h2>
    <a href="index.php">送信画面へ</a><br><br>
    <a href="history.php">送信履歴へ</a>
    <?php endif; ?>
    <div>
</body>

</html>