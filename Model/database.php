<?php
require __DIR__ . "/../vendor/autoload.php";

$env = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
$env->load();

$host = $_ENV["MYSQL_ADDON_HOST"];
$database = $_ENV["MYSQL_ADDON_DB"];
$user = $_ENV["MYSQL_ADDON_USER"];
$password = $_ENV["MYSQL_ADDON_PASSWORD"];
$port = $_ENV["MYSQL_ADDON_PORT"];

try {
  $conn = new PDO("mysql:host=$host;port=$port;dbname=$database", $user, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("PDO Connection Error: " . $e->getMessage());
}
