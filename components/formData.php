<?php
include("./connectDB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['username']);
    $phone = htmlspecialchars($_POST['userPassword']);

    // Check for any potential errors
    if (empty($name) || empty($phone)) {
        echo "Name and Phone Number are required.";
    } else {
        $sql = 'INSERT INTO contactustable (username, phonenumber) VALUES (?, ?)';
        $queryPrepare = $conn->prepare($sql);

        if ($queryPrepare === false) {
            echo "Error preparing statement: " . $conn->error;
        } else {
            // Bind parameters correctly
            $queryPrepare->bind_param('ss', $name, $phone);

            if ($queryPrepare->execute()) {
                echo '<h1>Thank you for your booking</h1>';
                echo "<h2>Name: $name</h2>";
                echo "<h2>Phone Number: $phone</h2>";
            } else {
                echo "<h1>Error:</h1> " . $sql . "<br>" . $conn->error;
            }

            $queryPrepare->close();
        }

        $conn->close();
    }
}
