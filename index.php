<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Calendar Notes App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<script src="alarm.js"></script>

<div class="container">
    <h2>📅 D \ Calendar Notes App</h2>

    <form action="save_note.php" method="POST">

        <label>Date</label>
        <input type="date" name="note_date" required>

        <label>Time</label>
        <input type="time" name="note_time" required>

        <label>Note</label>
        <textarea name="note_text" placeholder="Write your daily note..." required></textarea>

        <button type="submit">Save Note</button>
    </form>

</div>

</body>
</html>
