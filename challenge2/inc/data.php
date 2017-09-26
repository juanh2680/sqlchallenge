<?php 
if(!empty($_GET)){
$db = new PDO("mysql:host=localhost;dbname=jdavid_JHernandez;port=8888","r2hstudent", "SbFaGzNgGIE8kfP");
try {
    //this queries what we actually need 
   $results = $db->query("SELECT name,description,price,color,id FROM Challenge2 WHERE color= :colors");
  // this gets your statement ready
   $prepared = $db->prepare($results);

   
   $prepared->bindParam(':colors',$_GET["colors"]);
   $prepared->execute();

   foreach($prepared->fetchAll() as $color){
       echo "<p>{$color["name"]}, {$color["color"]}</p>";
   }
} catch (Exception $e) {
    echo "Bad query";
    exit;
}
}
$array =$results->fetchAll(PDO::FETCH_ASSOC);
?>