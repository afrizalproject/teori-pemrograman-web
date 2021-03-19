<?php

$bio = array(
    'nama' => $_POST['name'],
    'alamat' => $_POST['address'],
    'gender' => $_POST['gender'],
    'email' => $_POST['email'],
    'jawaban_soal' => $_POST['jawaban_soal'],
    'jawaban_user' => $_POST['jawaban_user'],
);


if ($bio['jawaban_soal'] == $bio['jawaban_user']) {
 ?>

<style>
table ,td ,tr, th{    
    padding: 5px;
    border: 1px solid black;
}
</style>
 <center>
     <h2>Rsultt</h2>
 <table>
    <tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Jawaban Soal</th>
        <th>Jawaban Usr</th>
        <th>Hasil</th>
    </tr>
    <?php
    foreach ($bio as $key => $b) {
        echo "<td>$b</td>";
    }
    echo "<td>Benar</td>"
    ?>
 </table>
 </center>
 <?php  
}else{
    echo $bio['jawaban_soal'];
    // echo $bio['jawaban_user'];
    echo "jawaban anda salah \n";
    echo '<a href="index.php"> Ulang</a>';
}
?>