<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
echo "Today is " . date("Y/m/d") . "<br>";
date_default_timezone_set("Europe/Copenhagen");
echo "The time is " . date("h:i:sa");
?>
<script src="jquery-ui.js"></script>
</body>
</html>