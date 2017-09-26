<?php 
$db = new PDO("mysql:host=localhost;dbname=JHernandez;","r2hstudent", "SbFaGzNgGIE8kfP");
try {
   $results = $db->query("SELECT Name FROM Challenge1");
} catch (Exception $e) {
    echo "Bad query";
}
$array =$results->fetchAll(PDO::FETCH_ASSOC);
?>
