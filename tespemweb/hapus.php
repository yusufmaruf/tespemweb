<?php
include 'conn.php';
$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM `guestbook` WHERE `guestbook`.`id` = '$id'");

header("location: guestbookindex.php");
?>