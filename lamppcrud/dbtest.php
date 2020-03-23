<?php

$db = new SQLite3('test.db');

$db->exec("CREATE TABLE users(id INTEGER PRIMARY KEY, first_name TEXT, last_name TEXT, user_city TEXT)");
$db->exec("INSERT INTO users(first_name,last_name,user_city) VALUES('john', 'doe', 'Paris')");
$db->exec("INSERT INTO users(first_name,last_name,user_city) VALUES('Mike', 'Jones', 'Berlin')");
$db->exec("INSERT INTO users(first_name,last_name,user_city) VALUES('Maria', 'Garcia', 'London')");
$db->exec("INSERT INTO users(first_name,last_name,user_city) VALUES('Robert', 'Smith', 'Dubai')");
echo "ok";

?>
