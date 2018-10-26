<?php
require '../vendor/autoload.php';
use Exam\User;

$dotenv = new \Dotenv\Dotenv(__DIR__.'/../');
$dotenv->load();

echo getenv('DATABASE_SERVER')."\n";
try {
    $pdo = new PDO('mysql:host=localhost;dbname=exam', 'root', '');
} catch (PDOException $e) {
    die('error on connection to database');
}

$req = $pdo->prepare("SELECT * FROM users");
$req->execute();

$i = 1;
$users = [];
while ($row = $req->fetch()) {
    //print_r($row);
    //echo $row["id"]."\n";
    $users[$row["id"]-1] = new User($row["created_at"], $row["updated_at"]);
    $users[$row["id"]-1]->setFirst_name($row["first_name"]);
    $users[$row["id"]-1]->setLast_name($row["last_name"]);
    $users[$row["id"]-1]->setEmail($row["email"]);
    $users[$row["id"]-1]->setPassword($row["password"]);
}

for ($i=0; i<$users.lenght(); $i++) {
    echo $users[$i]->getFullname()."\n";
}
