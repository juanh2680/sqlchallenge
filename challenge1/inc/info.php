<?php 
$db = new PDO("mysql:host=localhost;dbname=JHernandez;port=8888","root", "root");
try {
   $results = $db->query("SELECT Name FROM Challenge1");
} catch (Exception $e) {
    echo "Bad query";
}
$array =$results->fetchAll(PDO::FETCH_ASSOC);
?>
