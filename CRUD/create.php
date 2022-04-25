<?php
    require('database.php');

    // create new user
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $age = $_POST["age"];
        try{
        $statement = $pdo->prepare(
            'INSERT INTO users (first_name, last_name, age) 
            VALUES (:first_name, :last_name, :age);'
        );
        $statement->execute(['first_name' => $first_name, 'last_name' => $last_name, 'age' => $age]);
        // added blue color for variety and spark not included in original code
        echo "<h4 style='color: blue;'> Insert user: {$first_name} {$last_name} </h4>"; 

        $id = $pdo->lastInsertId();
        //  $id = PDO::lastInstertId();
        echo "<script>location.href='read.php?show=one&id={$id}'</script>";
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