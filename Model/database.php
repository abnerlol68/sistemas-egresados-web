<?php

$host = "db-for-graduates-db00006452.mdb0002659.db1.skysql.net";
$database = "graduate_forms";
$user = "DB00006452";
$password = "Hell47Drax+";
$port = "5001";
$options = array(
  PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
  PDO::MYSQL_ATTR_SSL_CA => '../aws_skysql_chain.pem',
  PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false,
);

try {
  $conn = new PDO("mysql:host=$host;port=$port;dbname=$database", $user, $password, $options);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("PDO Connection Error: " . $e->getMessage());
}
