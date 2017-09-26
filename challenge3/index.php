<!DOCTYPE html> 
<html>
<head>
<title> 
</title> 
</head>
<body> 
<h1> Challenge 3  </h1>
<form method "POST" action="index.php">
 <label for="name">Name</label><input id="fname" name="fname" type="text" /> 
<label for="description">Description</label><input type="text" id="description" name="description" />
<label for="price">Price</label><input id="price" name="price" type="price" /> 
<label for="color">Color</label><input type="text" id="color" name="color" /> 
<input type="submit" value="Submit">
</form>
<?php
if(!empty($_POST)){
    $db = new PDO("mysql:host=localhost;dbname=JHernandex;port=8888","r2hstudent", "SbFaGzNgGIE8kfP");
    try {
        //this queries what we actually need 
      $eachProduct = 'INSERT INTO Challenge2(name,description,price,color) VALUES (:name,:description,:price,:color)');
      // this gets your statement ready
       $prepared = $db->prepare($$eachProduct);
    
       
       $prepared->bindParam(':colors',$_POST["name"]);
       $prepared->bindParam(':colors',$_POST["description"]);
       $prepared->bindParam(':colors',$_POST["price"]);
       $prepared->bindParam(':colors',$_POST["color"]);
       $prepared->execute();
    
      
    } catch (Exception $e) {
        echo "Bad query";
        exit;
    }
    }
?>

</body>
</html>
