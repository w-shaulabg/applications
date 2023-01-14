<?php
namespace App;
use PDO;

class Contact
{
    private $pdo;

    public function __construct()
    {
        $dbUserName = 'root';
        $dbPassword = 'password';
        $this->pdo = new PDO(
            'mysql:host=mysql; dbname=contactform; charset=utf8',
            $dbUserName,
            $dbPassword
        );
    }

    public function insert($title, $email, $content)
    {
        $stmt = $this->pdo
            ->prepare("INSERT INTO contacts (title, email, content)
 VALUES (:title, :email, :content)");

        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':content', $content, PDO::PARAM_STR);
        $res = $stmt->execute();
    }
}
