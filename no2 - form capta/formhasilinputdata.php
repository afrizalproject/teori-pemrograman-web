<?php
// Muhammad Afrizal Rizky Widyanto (19650048)
// Kelas: Pemrograman Web F
$datainput = array(
    'nama' => $_POST['nama'],
    'alamat' => $_POST['alamat'],
    'email' => $_POST['email'],
    'jenis_kelamin' => $_POST['jk']
);

$jawaban=array(
    'jawaban_soal' => $_POST['jawaban_soal'],
    'jawaban_user' => $_POST['jawaban_user'],
);

if ($jawaban['jawaban_soal'] == $jawaban['jawaban_user']) {
 ?>

<style>
table ,td ,tr, th{    
    padding: 5px;
    border: 1px solid black;
}
</style>
<h2 style="margin-left: 320px;">Hasil Input Data</h2>
 <center>
 <table>
    <tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>Jenis Kelamin</th>
        <th>Jawaban</th>
    </tr>
    <?php
    foreach ($datainput as $key => $value) {
        echo "<th>$value</th>";
    }
    echo "<th>Benar</th>"
    ?>
 </table>
 </center>
 <?php  
}else{
    echo "Maaf Jawaban Anda Salah \n";
    echo '<a href="forminputdata.php"> Ulang</a>';
}
?>