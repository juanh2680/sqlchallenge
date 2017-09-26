<!DOCTYPE html>

<html>

<head>
    <title> Forms</title>
    <link href="./styles.css" rel="stylesheet" type="text/css"> 
</head>

<body>

<p></p>
    <form method="get" action="process.php" onSubmit="return validate()" class="form">        <div>
            <label for="fname">First Name <input type="text" id="fname" name="fname" value="" placeholder="First Name" required/></label>
        </div>
        <div>
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lname" value="" placeholder="Last Name" required/>
        </div>
        <div>
            <label for="phone">Phone <input type="tel" id="phone" name="phone" value="" placeholder="phone" pattern="^\d{3}-\d{3}-\d{4}$" required /></label>
        </div>
        <div>
            <label for="email">Email <input type="email" id="email" name="email" value="" placeholder="Email"  required /></label>
        </div>
        <div>
            <label for="colors">Colors</label>
            <select name="colors" id="colors">
                    <option value="">Please choose a color</option>
                    <option value="4">Red</option>
                    <option value="5">Blue</option>
                    <option value="6">Green</option>
                  </select>
        </div>
        <div>
            <label for="good" class="inlinelabel">Good <input type="radio" name="karma" value="good" id="good"required /></label>
            <label for="bad" class="inlinelabel">Bad <input type="radio" name="karma" value="bad" id="bad"required /></label>
        </div>
        <div>
            <p>Choose your favorite flavor:</p>
            <label for="chocolate"><input type="checkbox" name="flavors[]" value="Chocolate" id="chocolate" /> Chocolate</label>
            <label for="vanilla"><input type="checkbox" name="flavors[]" value="Vanilla" id="vanilla" /> Vanilla</label>
            <label for="coffee"><input type="checkbox" name="flavors[]" value="Coffee" id="coffee" /> Coffee</label>
        </div>
        <label for="lifestory">Tell me your life story</label>
        <textarea placeholder="Speak ..." cols="200" rows="10" name="lifestory" id="lifestory" required></textarea>
        <div>
            <input type="submit" name="submit" value="Save" />
            <button type="button">Click me</button>
        </div>
    </form>
</body>

</html>