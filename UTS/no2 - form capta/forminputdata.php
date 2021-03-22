<?php
// Muhammad Afrizal Rizky Widyanto (19650048)
// Kelas: Pemrograman Web F

$a = rand(1,10);
$b = rand(1,10);
$c = $a + $b;
?>
<center>

    <form action="hasilforminputdata.php" method="POST">
    <?php echo '<input type="hidden" name="jawaban_soal" value="'.$c.'" id="jawaban_soal">' ?>
        <table>
            <tr>
                <td colspan="2">
                <h2 style="text-transform: uppercase;">Form Input Data</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="name">Nama</label>
                </td>
                <td>
                    :
                    <input type="text" name="nama" id="nama">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="alamat">Alamat </label>
                </td>
                <td>
                    :
                    <input type="text" name="alamat" id="alamat">
                </td>
            </tr>
            <tr>
                <td>
                    <label >Jenis Kelamin </label>
                </td>
                <td>
                    :
                    <input type="radio" name="jk" id="cowok" value="Cowok"><label for="cowok">Cowok</label>
                    <input type="radio" name="jk" id="cewek" value="Cewek"><label for="cewek">Cewek</label>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email </label>
                </td>
                <td>
                    :
                    <input type="email" name="email" id="email">
                </td>
            </tr>
            <tr>
                <td>
                    Hitung
                </td>
                <td>
                    <p>:
                        <?php echo $a . ' + ' . $b ?>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="jawaban_user">Jawab</label>
                </td>
                <td>
                :
                <input type="number" name="jawaban_user" id="jawaban_user">
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="submit">Simpan</button>
                </td>
                <td>
                    <button type="reset" name="reset">Batal</button>
                </td>
            </tr>
        </table>

    </form>
</center>
