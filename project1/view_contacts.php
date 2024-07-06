<?php
$sql = "SELECT * FROM contacts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "First Name: ". $row["first"]. "<br>";
        echo "Last Name: ". $row["last"]. "<br>";
        echo "Phone: ". $row["phone"]. "<br>";
        echo "Mobile: ". $row["mobile"]. "<br>";
        echo "Fax: ". $row["fax"]. "<br>";
        echo "Email: ". $row["email"]. "<br>";
        echo "Web: ". $row["web"]. "<br><br>";
    }
} else {
    echo "0 results";
}
?>