<?php
include_once('koneksi.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guestbook</title>
</head>

<body>
    <center>
        <h2>Guestbook</h2>
        <table>
            <form action="" method="post">
                <tr>
                    <td>
                        <label for="name">Name</label>
                    </td>
                    <td>
                        <input type="text" name="name" id="name" placeholder="masukkan nama" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">Email</label>
                    </td>
                    <td>
                        <input type="email" name="email" id="email" placeholder="masukkan email" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="address">Address</label>
                    </td>
                    <td>
                        <textarea name="address" id="" cols="30" rows="10" placeholder="masukkan address" required></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="city">City</label>
                    </td>
                    <td>
                        <input type="text" name="city" id="city" placeholder="masukkan kota/city" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="message">Message</label>
                    </td>
                    <td>
                        <textarea name="message" id="" cols="30" rows="10" placeholder="masukkan pesan/message" required></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="submit" style="margin: 10px;"> Insert guest baru</button>
                    </td>
                    <td>
                        <a href="guestlist.php">Lihat Guest Lainnya</a>
                    </td>
                </tr>
            </form>
        </table>
    </center>
</body>
</html>
<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $message = $_POST['message'];

    $sql = "INSERT INTO guestbook(name,email,address,city,message,posted) 
    VALUES ('$name','$email','$address','$city','$message',now())";

    if ($conn->query($sql) === TRUE) {
        echo "Guest berhasil dibuat";
        header('location:guestlist.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>