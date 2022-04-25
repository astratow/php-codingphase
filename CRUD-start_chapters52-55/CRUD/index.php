<?php
    require('database.php');
    initMigration($pdo);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Simple CRUD APP</title>
</head>
<body>
    <a href="create.php">Create User</a>
    <a href="read.php?show=all">Show All Users</a>
</body>
</html>