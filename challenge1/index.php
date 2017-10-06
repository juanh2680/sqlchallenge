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
// for each that sets (Name) which is equal to the states name's to $states
 foreach($array as $states){
          // this makes the drop down work.
    echo "<option value =$states[Name]> $states[Name]</option>";
 }
?> 
</select>  
</form>
</body>
</html>
