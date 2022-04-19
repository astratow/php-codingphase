<?php
require("classes/honda.php");
require("classes/BMW.php");
// require("classes/car.php");
$car_1 = new Honda("Civic", 2, "Green", "25000", 1);
$car_2 = new BMW("M6", 3, "Space Grey", "80000", 1);

$car_1->statement();

$car_1->price();

echo Car::city();
echo Car::states();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cars</title>
</head>
<body>

</body>
</html>