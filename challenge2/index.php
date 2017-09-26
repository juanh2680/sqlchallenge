<!DOCTYPE html> 
<html>
<head>
<title> 
</title> 
</head>
<body> 
<h1> Challenge 2 </h1>
<form method="GET">
 <label for="colors">Search for products</label><input id="color" name="color" type="text" />
 <select name="colors" id="colors">
 <option value="red">RED </option>
 <option value="yellow">Yellow </option>
 <option value="brown">Brown </option>
 <option value="purple"> Purple </option>
 </select>
<input type="submit" value="Submit">
</form>
<div>
<?php
if(!empty($_GET)){
    $db = new PDO("mysql:host=localhost;dbname=JHernandex;port=8888","r2hstudent", "SbFaGzNgGIE8kfP");
    try {
        //this queries what we actually need 
       $results = $db->query("SELECT name, description, price, color, id FROM Challenge2 WHERE color = :color");
      // this gets your statement ready
       $prepared = $db->prepare($results);
       $prepared->bindParam(':color',$_GET["colors"]);
       $prepared->execute();
        
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
