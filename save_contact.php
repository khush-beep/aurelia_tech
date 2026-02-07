<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$stmt = $db->prepare("INSERT INTO contacts (name,email,message) VALUES (?,?,?)");
$stmt->bindValue(1, $name);
$stmt->bindValue(2, $email);
$stmt->bindValue(3, $message);
$stmt->execute();

echo "Thank you! Your message has been saved.";
?>
