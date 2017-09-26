<?php include("inc/info.php"); ?> 
<!DOCTYPE html> 
<html>
<head>
<title> 
</title> 
</head>
<body> 
<h1> Challenge 1 </h1>
<form method "post">
 <label for="fname">First Name</label><input id="fname" name="fname" type="text" /> 
<label for="fname">Last Name</label><input type="text" id="lname" name="lname" /> 
<input type="submit" value="Submit">
<select>
<?php 
 foreach($array as $states){
    echo "<option value =$states[Name]> $states[Name]</option>";
 }
?> 
</select>  
</form>
</body>
</html>
