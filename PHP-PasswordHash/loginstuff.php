<?php 
include('./lib/class/phpass/src/Phpass.php');
$phpassHash = new \Phpass\Hash;
$password = "hello";
// Create and verify a password hash from any of the above configurations
$passwordHash = $phpassHash->hashPassword($password);
echo $passwordHash;
// if ($phpassHash->checkPassword($password, $passwordHash)) {
//     echo "it worked";
// } else {
//     echo "it did not work";
// }
?>