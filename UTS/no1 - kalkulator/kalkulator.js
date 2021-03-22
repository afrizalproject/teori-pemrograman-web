function kalkulator() {

    // Muhammad Afrizal Rizky Widyanto (19650048)
    // Kelas: Pemrograman Web F

    //variable angka satu
    var angkaSatu = parseInt(document.getElementById("angkaSatu").value);

    //variable angka dua
    var angkaDua = parseInt(document.getElementById("angkaDua").value);

    //variable operasi aritmatik
    var op = document.getElementById("op").value;

    //variable angka hasil
    var hasil = document.getElementById("hasil");

    //variable untuk menampung total angka satu dan angka dua
    var total;

    if (isNaN(angkaSatu) || isNaN(angkaDua)) {
        alert('isi form dengan angka!')

    } else {

        if (op == "+") {
            total = "Hasil Operator tambah adalah " + (angkaSatu + angkaDua);
        } else if (op == "-") {
            total = "Hasil Operator kurang adalah " + (angkaSatu - angkaDua);
        } else if (op == "*") {
            total = "Hasil Operator kali adalah " + (angkaSatu * angkaDua);
        } else if (op == "%") {
            total = "Hasil Operator modulus adalah " + (angkaSatu % angkaDua);
        } else if (op == "/") {
            total = "Hasil Operator bagi adalah " + (angkaSatu / angkaDua);
        }
    }

    document.calculator.hasil.value = total;
}