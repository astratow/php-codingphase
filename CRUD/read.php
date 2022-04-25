<?php
    require('database.php');

    // create new user
    if(isset($_GET["show"]) && isset($_GET['id'])){
        $id = $_GET['id'];
        try{
            $statement = $pdo->prepare(
            'SELECT * FROM users WHERE id  = :id; '
            );
            $statement->execute();
            // added blue color for variety and spark not included in original code
            echo "<h4 style='color: blue;'> Read from table users. </h4>"; 

        $results = $statement->fetchAll(PDO::FETCH_OBJ);

        var_dump($results);

        } catch(PDOException $e){
            echo "<h4 style='color: red;'>" .$e->getMessage(). "</h4>";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Simple CRUD APP</title>
</head>
<body>
    <form action="create.php" method="POST">
        <label for="first_name">First Name</label><br>
        <input type="text" name="first_name"><br>
        <label for="last_name">Last Name</label><br>
        <input type="text" name="last_name"><br>
        <label for="age">Age</label><br>
        <input type="text" name="age"><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>