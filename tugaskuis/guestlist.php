<?php
include_once('koneksi.php');

$sql = "SELECT * FROM guestbook";

if ($conn->query($sql)) {
    $guests = $conn->query($sql);        
}else {
    echo("Error description: " . $conn -> error);
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuestList</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
    <center>
        <h2>
            Guest List
        </h2>
        <input type="button" value="Add new Guest" onclick="location.href='guestbook.php'">
        <table>
            <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Address</th>
            <th>City</th>
            <th>Message</th>
            <th>Action</th>                        
            </tr>
            <?php
            if (mysqli_num_rows($guests)>0) {
                while($guest = mysqli_fetch_array($guests)){
                    ?>
                    <tr>
                        <td><?php echo $guest['name'] ?></td>
                        <td><?php echo $guest['email'] ?></td>
                        <td><?php echo $guest['address'] ?></td>
                        <td><?php echo $guest['city'] ?></td>
                        <td><?php echo $guest['message'] ?></td>
                        <td>
                            <a href="guestedit.php?id=<?php echo $guest['id'] ?>" 
                            style="color: black; background-color: green; padding: 5px; margin: 5px;" >Edit</a>
                            <a href="guestdelete.php?id=<?php echo $guest['id'] ?>" 
                            style="color: white; background-color: red; padding: 5px; margin: 5px;" onclick="return confirm('apakah anda yakin?')" >Delete</a>
                        </td>
                    </tr>
                    <?php
                }
            }            
            ?>
        </table>
    </center>
</body>
</html>