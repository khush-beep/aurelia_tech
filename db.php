<?php
$db = new SQLite3("contacts.db");

$db->exec("CREATE TABLE IF NOT EXISTS contacts (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  name TEXT,
  email TEXT,
  message TEXT
)");
?>
