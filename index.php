<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guestbook Application</title>
</head>
<body>

<h1>Guestbook Application</h1>

<form action="Task3P2.php" method="POST">
    <label for="name">Your Name:</label><br>
    <input type="text" id="name" name="name" required><br>
    <label for="comment">Your Comment:</label><br>
    <textarea id="comment" name="comment" rows="4" required></textarea><br>
    <input type="submit" value="Submit">
</form>

<hr>

<h2>All Comments</h2>
<?php
$guestbookFile = "guestbook.txt";
if (file_exists($guestbookFile)) {
    $comments = file($guestbookFile, FILE_IGNORE_NEW_LINES);
    if ($comments) {
        foreach ($comments as $comment) {
            echo "<p>$comment</p>";
        }
    } else {
        echo "<p>No comments yet.</p>";
    }
} else {
    echo "<p>Guestbook file does not exist.</p>";
}
?>

</body>
</html>
