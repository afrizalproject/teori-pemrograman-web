<?php
include_once('../koneksi.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>

<body>
    <center>
        <h2>
            Login Form
        </h2>
        <form action="" method="post">
            <table>
                <tr>
                    <td>
                        <label for="username">Username</label>
                    </td>
                    <td>
                        <input type="text" name="username" id="username" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Password</label>
                    </td>
                    <td>
                        <input type="password" name="password" id="password" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="login">Login</button>
                    </td>
                    <td>
                        <a href="signup.php" style="text-align: right   ;">belum punya akun? Sign up</a>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>
<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    //to prevent from mysqli injection  
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "SELECT * FROM user WHERE username = '$username' and password = '$password'";
    $query = $conn->query($sql);
    if (mysqli_num_rows($query) == 1) {
        $data = $query->fetch_array();
        $_SESSION['username'] =$data['username'];
        // echo 'sukses';
        header('location:../home.php');
    }
    else{
        die('Password Salah');
    }
}

?>