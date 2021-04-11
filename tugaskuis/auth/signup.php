<?php
include_once('../koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
</head>

<body>
    <center>
        <h2>
            Sign Up
        </h2>
        <form action="" method="post">
            <table>
                <tr>
                    <td>
                        <label for="username">Username</label>
                    </td>
                    <td>
                        <input type="text" name="username" id="username" placeholder="masukkan username" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Password</label>
                    </td>
                    <td>
                        <input type="password" name="password" id="password" placeholder="masukkan password" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="submit">Sign Up</button>
                    </td>
                    <td>
                        <a href="login.php"> or Login?</a>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>
<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password =  $_POST['password'];

    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "INSERT INTO user(username,password) VALUES ('$username','$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Akun anda berhasil didaftarkan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }   
}
?>