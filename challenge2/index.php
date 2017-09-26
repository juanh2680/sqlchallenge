<!DOCTYPE html> 
<html>
<head>
<title> 
</title> 
</head>
<body> 
<h1> Challenge 2 </h1>
<form method="POST" action="index.php">
 <label for="colors">Search for products</label><input id="color" name="color" type="text" />
 <select name="color" id="colors">
 <option value="red">RED </option>
 <option value="yellow">Yellow </option>
 <option value="brown">Brown </option>
 <option value="purple"> Purple </option>
 </select>
<input type="submit" value="Submit">
</form>
<div>
<?php
if(!empty($_POST)){
    var_dump($_POST);
    $db = new PDO("mysql:host=localhost;dbname=jdavid_JHernandez;port=8888","r2hstudent", "SbFaGzNgGIE8kfP");
    try {
        //this queries what we actually need 
        $query = "SELECT name, description, price, color, id FROM Challenge2 WHERE color = :color";
        // this gets your statement ready
        $prepared = $db->prepare($query);
        $prepared->execute(array(':color' => $_POST["color"]));
        
        var_dump($prepared->fetchAll());
        foreach($prepared->fetchAll() as $color){
            echo "<p>{$color["name"]}, {$color["color"]}</p>";
        }
    } catch (Exception $e) {
        echo "Bad query";
        exit;
    }
}
?>

</div>
</body>
</html>
