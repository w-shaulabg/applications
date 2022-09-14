<?php
//echo "工事中";

$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=contactform; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT title, content FROM contacts";
$statement = $pdo->prepare($sql);
$statement->execute();
$contacts = $statement->fetchAll(PDO::FETCH_ASSOC);
//var_dump($contacts);

// $name = "お問合せタイトル";
// $body = "お問合せ内容";

// $contact_detail = [];
// $contact_title = [];
?>

<!DOCTYPE html>
<html lang="ja">
<font size="5"><b>送信履歴</b></font><br><br><br>

</html>

<?php
foreach ($contacts as $contact) {
    echo $contact['title'] . "<br>";
    echo $contact['content'] . "<br>";
    echo "-----------------------------------------------" . "<br>";
}
if (empty($contact)) {
  echo "送信履歴はありません。";
}

?>
<!DOCTYPE html>
<html lang="ja">
<form action="index.php" method="post">
  <br><a href="index.php">戻る</a>
</form>

</html>