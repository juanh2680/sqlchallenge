<!DOCTYPE html> 
<html>
<head>
<title> 
</title> 
</head>
<body> 
<h1> Challenge 2 </h1>
<form method="GET" action="index.php">
 <label for="color">Search for products</label>
 <select name="color" id="colors">
    <option value="red">Red </option>
    <option value="yellow">Yellow </option>
    <option value="brown">Brown </option>
    <option value="purple"> Purple </option>
 </select>
<input type="submit" value="Submit">
</form>
<div>
<?php
// if POST is not empty then go inside this.
if (!empty($_POST))
	{
	// establishes a connection to the database. It passes the paramets (user, password);
	$db = new PDO("mysql:host=localhost;dbname=jdavid_JHernandez;port=8888", "r2hstudent", "SbFaGzNgGIE8kfP");
	try
		{
		// this queries what we actually need
		$query = "INSERT INTO jdavid_JHernandez.Challenge2 (name, description, price, color) VALUES (:name, :description, :price, :color)";
		// this gets your statement ready
		$prepared = $db->prepare($query);
		// Sets the place holders to the values that are in the POST form
		$prepared->execute(array(
			':name' => $_POST["name"],
			':description' => $_POST["description"],
			':price' => $_POST["price"],
			':color' => $_POST["color"],
		));
		// / Shows a message the user can read.
		}
	catch(Exception $e)
		{
		echo "Bad query";
		exit;
		}
	}
?>

</div>
</body>
</html>
