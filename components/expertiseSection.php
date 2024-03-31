<?php
// Include the database connection file
$sql = "SELECT * FROM surgicalareaexpertise";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<div class='typesofcancer__subcontainer'>"; // Start typesofcancer__subcontainer div outside the loop
    while ($row = $result->fetch_assoc()) {
        echo "<div class='typesofCancer__Card' onclick='displayPopup()'>";
        // Use proper array keys to access data from the database
        echo "<img src='" . $row["cardimageUrl"] . "' alt='' />"; // Fix image source and alt attribute
        echo "<p>" . $row["cardText"] . "</p>"; // Fix paragraph content
        // Display other relevant data fields as needed
        echo "<hr>";
        echo "</div>"; // Close typesofCancer__Card div
    }
    echo "</div>"; // Close typesofcancer__subcontainer div
} else {
    echo "No data found";
}
