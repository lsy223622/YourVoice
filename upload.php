<?php
move_uploaded_file($_FILES["file"]["tmp_name"], "voice.mp3");
echo "Stored in: voice.mp3";
?>
<html>

<head>
    <title>Upload complete</title>
</head>

<body>
    <h3>File upload succeeded...</h3>
    <ul>
        <li>Sent: <?php echo $_FILES['file']['name']; ?></li>
        <li>Size: <?php echo $_FILES['file']['size']; ?> bytes</li>
        <li>Type: <?php echo $_FILES['file']['type']; ?></li>
    </ul>
</body>

</html>