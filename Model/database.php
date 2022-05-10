<?php
require __DIR__ . "/../vendor/autoload.php";

$env = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
$env->load();

$host = $_ENV["HOST"];
$database = $_ENV["DATABASE"];
$user = $_ENV["USER"];
$password = $_ENV["PASSWORD"];
$port = $_ENV["PORT"];
$options = array(
  PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
  PDO::MYSQL_ATTR_SSL_CA => './aws_skysql_chain.pem',
  PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false,
);

try {
  $conn = new PDO("mysql:host=$host;port=$port;dbname=$database", $user, $password, $options);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("PDO Connection Error: " . $e->getMessage());
}
