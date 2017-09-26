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
if(!empty($_GET) && $_GET["color"] != ""){
    $db = new PDO("mysql:host=localhost;dbname=jdavid_JHernandez;port=8888","r2hstudent", "SbFaGzNgGIE8kfP");
    try {
        //this queries what we actually need 
        $query = "SELECT id, name, description, price, color FROM Challenge2 WHERE color = :color";
        // this gets your statement ready
        $prepared = $db->prepare($query);
        $prepared->execute(array(':color' => $_GET["color"]));
        $items = $prepared->fetchAll();
        print_r($items);

        foreach( $items as $item){
            echo "<p>{$item["name"]}, {$item["color"]}</p>";
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
