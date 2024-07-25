<?php
    echo 'PHP is working';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $jsonData = file_get_contents('php://input');

        $data = json_decode($jsonData, true);

        if ($data === null) {
            echo'Error';
            die('Error decoding JSON');
        }

        echo ' Data successfully ' . $data["data"];
    }
    else {
        echo 'false';
    }
?>
