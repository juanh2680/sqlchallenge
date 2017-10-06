<?php include('inc/header.php'); 
    var_dump($_GET);


    if (isset($_GET["term"])) {
        echo 'Get only products that match this term!';
    }
?>
<p> this is the page for the products </p>
<h2> BMX Bikes </h2>

<?php include ('inc/footer.php'); ?>