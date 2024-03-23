<?php
$name = $_POST['name'] ?? '';
$comment = $_POST['comment'] ?? '';

if (!empty($name) && !empty($comment)) {
    $formattedComment = "$name: $comment\n";

    $guestbookFile = "guestbook.txt";
    file_put_contents($guestbookFile, $formattedComment, FILE_APPEND | LOCK_EX);
}

header("Location: index.php");
exit();
?>
