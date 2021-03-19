<?php

$a = rand(1,10);
$b = rand(1,10);
$c = $a + $b;
?>
<center>
<h2>Form Perhitungan</h2>
    <form action="formhasilinputdata.php" method="POST">
    <?php echo '<input type="hidden" name="jawaban_soal" value="'.$c.'" id="jawaban_soal">' ?>
        <table>
            <tr>
                <td>
                    <label for="name">Nama</label>
                </td>
                <td>
                    :
                    <input type="text" name="name" id="name">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="address">Alamat </label>
                </td>
                <td>
                    :
                    <input type="text" name="address" id="address">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="jk">Jenis Kelamin </label>
                </td>
                <td>
                    :
                    <input type="radio" name="jk" id="cowok" value="cowok">Cowok
                    <input type="radio" name="jk" id="cewek" value="cewek">Cewek
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
                    <label for="jawab2">Jawab</label>
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
