<?php include('inc/header.php'); ?>
<p> This is the contact page </p>
<form method="POST" action="#">
   <div>
      <label for="fname">First Name<input type="text" id="fname" name="fname" value="" placeholder="First Name" required/></label>
   </div>
   <div>
      <label for="lname">Last Name<input type="text" id="lname" name="lname" value="" placeholder="Last Name" required/></label>
   </div>
   <div>
      <label for="email">Email<input type="text" id="email" name="email" value="" placeholder="Email" required/></label>
   </div>
   <div>
      <label for="rainbowcolor">Comment</label> <textarea placeholder="Comment" cols="20" rows="10" name="comment"  id="comment"> </textarea>
   </div>
</form>

<?php include ('inc/footer.php'); ?>





















|