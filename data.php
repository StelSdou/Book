<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $number = isset($_POST['number']) ? intval($_POST['number']) : 0;

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "data";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Σφάλμα σύνδεσης: " . $conn->connect_error);
    }

    $sql = "INSERT INTO pages (name, sum) VALUES ('demo', '$number')";

    if ($conn->query($sql) === TRUE) {
        echo "Δεδομένα αποθηκεύτηκαν επιτυχώς!";
    } else {
        echo "Σφάλμα: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}