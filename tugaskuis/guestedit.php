<?php
include_once('koneksi.php');

$id = $_GET['id'];        // Collecting data from query string
if(!is_numeric($id)) echo "Data Error"; // Checking data it is a number or not

$query = "SELECT * FROM guestbook WHERE id =?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $id);
$stmt->execute();
$result = $stmt->get_result();
$guest = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest EDIT</title>
</head>

<body>
    <center>
        <h2>Guest EDIT</h2>
        <table>
            <form action="" method="post">
                <tr>
                    <td>
                        <label for="name">Name</label>
                    </td>
                    <td>
                        <input type="text" name="name" id="name" value="<?php echo $guest['name']?>" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">Email</label>
                    </td>
                    <td>
                        <input type="email" name="email" id="email" value="<?php echo $guest['email']?>" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="address">Address</label>
                    </td>
                    <td>
                        <textarea name="address" id="" cols="30" rows="10" required> <?php echo $guest['address']?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="city">City</label>
                    </td>
                    <td>
                        <input type="text" name="city" id="city" value="<?php echo $guest['city']?>" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="message">Message</label>
                    </td>
                    <td>
                        <textarea name="message" id="" cols="30" rows="10" required><?php echo $guest['message']?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="update" style="margin: 10px;"> update the Guest</button>
                    </td>
                    <td>
                        <a href="guestlist.php">Back to look other guest</a>
                    </td>
                </tr>
            </form>
        </table>
    </center>
</body>

</html>
<?php
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $message = $_POST['message'];

    $sql = "UPDATE guestbook 
    SET name='$name', email='$email',address='$address',city='$city',message='$message'
    WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    header('location:guestlist.php');
  } else {
    echo "Error updating record: " . $conn->error;
  }
}

?>