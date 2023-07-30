<?php
    $server = 'localhost';
    $db = 'street fighter 6 framedata test';
    $user = 'root';
    $password = '';
    try {
            $conn = new PDO("mysql:host=$server;dbname=$db", $user, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        // https://stackoverflow.com/questions/15757750/how-can-i-call-php-functions-by-javascript
        // Read through this figure out how to update the move list when character field changes
    if (isset($_POST['getMovelist'])) {
        $character = $_POST['getMovelist'];
        $query = "SELECT characterName, moves from `characters` WHERE characterName = '".$character."'"; 
        $result = $conn->query($query);
        $moveList = array();
        
        while ($row = $result->fetch()) {
           $moveList[$row['characterName']] = $row['moves'];
        }
        header('Content-Type: application/json');
        echo json_encode($moveList);
    }
?>