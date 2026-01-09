<?php
include 'db.php';

$date = $_POST['note_date'];
$time = $_POST['note_time'];
$text = $_POST['note_text'];

$sql = "INSERT INTO notes (note_date, note_time, note_text)
        VALUES ('$date', '$time', '$text')";

mysqli_query($conn, $sql);

header("Location: index.php");
?>
