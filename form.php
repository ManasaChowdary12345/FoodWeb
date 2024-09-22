<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .error { color: red; }
    </style>
</head>
<body>
    
    <div class="container">
    <h2>Order Form</h2>
    <form action="foodc1.php" method="post">
        <i class="fas fa-user"></i>
        <input type="text" name="name" placeholder="Enter your full name" value="<?php echo isset($name) ? $name : ''; ?>"> Full_Name
        <span class="error">* <?php echo $nameErr; ?></span><br><br>

        <i class="fas fa-envelope"></i>
        <input type="text" name="email" placeholder="Enter your email" value="<?php echo isset($email) ? $email : ''; ?>"> Email_Address
        <span class="error">* <?php echo $emailErr; ?></span><br><br>

        <i class="fas fa-phone"></i>
        <input type="text" name="mobile" placeholder="Enter your phone number" value="<?php echo isset($mobile) ? $mobile : ''; ?>"> Mobile_no
        <span class="error">* <?php echo $mobileErr; ?></span><br><br>

        Food items:
        <select name="items">
           
            <option>Chicken Biriyani</option>
            <option>Mutton Biriyani</option>
            <option>Egg Biriyani</option>
            <option>Fish Biriyani</option>
            <option>Chicken Gravy</option>
            <option>Leg pieces</option>
            <option>Chicken Pakodi</option>
            <option>Chicken Lollipop</option>
            <option>Veg Fried Rice</option>
            <option>Veg Curries</option>
            <option>Panner Butter</option>
            <option>Mushroom Masala</option>
            <option>Chocolate Flavour</option>
            <option>Cone Ice cream</option>
            <option>Cup Ice cream</option>
            <option>Pista Flavour</option>
            <option>Mocktails</option>
            <option>Spring Mocktails</option>
            <option>Blue Lagoon Mocktails</option>
            <option>Cool Drinks</option>
            <option>Panner Tikka</option>
            <option>Kabab</option>
            <option>Chinese Item</option>
            <option>Dragon Chicken</option>
            
            
        </select>
        <span class="error">* <?php echo $itemsErr; ?></span><br><br>

        <i class="fas fa-location"></i>
        <input type="text" name="location" placeholder="Enter your location" value="<?php echo isset($location) ? $location : ''; ?>"> Location
        <span class="error">* <?php echo $locationErr; ?></span><br><br>

        <i class="fas fa-map-pin"></i>
        <input type="text" name="pincode" placeholder="Enter your pincode" value="<?php echo isset($pincode) ? $pincode : ''; ?>"> Pincode
        <span class="error">* <?php echo $pincodeErr; ?></span><br><br>

        <input class="btn" type="submit" name="submit" value="Submit">
    </form>
</div>
</body>
</html>

