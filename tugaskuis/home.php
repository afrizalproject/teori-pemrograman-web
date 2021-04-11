<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>
<body>
    <?php
    if (isset($_SESSION['username'])) {
        echo '<h2>Selamat Datang '.$_SESSION['username'].' Pada hari '.date('l').', '.date('d-m-Y').'</h2>';        
    ?>
        <a href="auth/logout.php" onclick="return confirm('Are you sure')"> Logout</a>
    <?php
    }else{
        echo '<h2>Tolong login dulu</h2>';
        echo "<a href='auth/login.php'>Login</a>";
    }
    ?>    
    <a href="guestbook.php" style="margin: 20px;">Insert Guest Baru</a>    
    <a href="guestlist.php">Tampilkan Seluruh guest</a>
</body>
</html>