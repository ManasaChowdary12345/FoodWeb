<?php
// Define variables and set to empty values
$name = $email = $mobile = $items = $location = $pincode = "";
$nameErr = $emailErr = $mobileErr = $itemsErr = $locationErr = $pincodeErr = "";
$isValid = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate Name
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
        $isValid = false;
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
            $isValid = false;
        }
    }

    // Validate Email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
        $isValid = false;
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            $isValid = false;
        }
    }

    // Validate Mobile
    if (empty($_POST["mobile"])) {
        $mobileErr = "Mobile number is required";
        $isValid = false;
    } else {
        $mobile = test_input($_POST["mobile"]);
        if (!preg_match("/^[0-9]{10}$/", $mobile)) {
            $mobileErr = "Invalid mobile number";
            $isValid = false;
        }
    }

    // Validate Items
    if (empty($_POST["items"])) {
        $itemsErr = "Please select a food item";
        $isValid = false;
    } else {
        $items = test_input($_POST["items"]);
    }

    // Validate Location
    if (empty($_POST["location"])) {
        $locationErr = "Location is required";
        $isValid = false;
    } else {
        $location = test_input($_POST["location"]);
    }

    // Validate Pincode
    if (empty($_POST["pincode"])) {
        $pincodeErr = "Pincode is required";
        $isValid = false;
    } else {
        $pincode = test_input($_POST["pincode"]);
        if (!preg_match("/^[0-9]{6}$/", $pincode)) {
            $pincodeErr = "Invalid pincode";
            $isValid = false;
        }
    }

    // If all inputs are valid, insert data into the database
    if ($isValid) {
        $conn = new mysqli("localhost", "root", "", "online");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("INSERT INTO food (name, email, mobile, items, location, pincode) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssissi", $name, $email, $mobile, $items, $location, $pincode);

        if ($stmt->execute()) {
            echo "Order placed successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
}

// Function to sanitize user input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
