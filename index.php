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
?>
<!DOCTYPE html>
<html>
    <head>
        <script src=" https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js "></script>
        <script src="https://kit.fontawesome.com/cda086cfbf.js" crossorigin="anonymous"></script>
        <script src="script.js" type="text/javascript"></script>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div id="content-wrapper">
            <div id="logo"><h1 id="logo-content-1">SF6</h1><h1 id="logo-content-2">Hit</h1><h1 id="logo-content-3">Calculator</h1></div>
            <div id="frame-calculator">
                <div class="move-container">
                    <h3>Move 1</h3>
                    <div class="move-image">

                    </div>
                </div>
                <div class="move-container">
                    <h3>Move 2</h3>
                    <div class="move-image">

                    </div>
                </div>
            </div> 
            <div class="drawer-handle" id="handle-1">
                <i class="fa-solid fa-chevron-left"></i>
            </div> 
            <div class="drawer-handle" id="handle-2">
                <i class="fa-solid fa-chevron-right"></i>
            </div>
        </div>
    </body>
</html>