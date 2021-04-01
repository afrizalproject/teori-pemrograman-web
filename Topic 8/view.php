<?php
include_once('koneksi.php');

$sql = "SELECT * FROM barang";
$guests = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td{
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th{
            background-color: salmon;
            border: 1px solid #dddddd;
        }

    </style>
</head>

<body>
    <center>
        <h2>
            Tabel Barang
        </h2>
        <table>
            <tr>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            </tr>
            <?php
            if (mysqli_num_rows($guests)>0) {
                while($guest = mysqli_fetch_array($guests)){
                    echo "<tr>";
                        echo "<td>" . $guest['id_barang'] . "</td>";
                        echo "<td>" . $guest['nm_barang'] . "</td>";
                        echo "<td>" . $guest['jumlah'] . "</td>";                
                    echo "</tr>";
                }
            }            
            ?>
        </table>
    </center>
</body>

</html>