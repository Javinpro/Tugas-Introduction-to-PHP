<?php
    // Menampilkan teks "1 Baris Hello World:" diikuti dengan baris baru (br)
    echo "1 Baris Hello World: <br>";
    
    // Menampilkan teks "Hello World"
    echo "Hello World"; // 1 Baris Hello World
    echo "<br><br>"; // Baris baru dua kali untuk memberikan jarak

    // Menampilkan teks "10 Baris Hello World:" diikuti dengan baris baru (br)
    echo "10 Baris Hello World: <br>";
    
    // Menggunakan loop for untuk menampilkan "Hello World" sebanyak 10 kali
    for($i = 0; $i < 10; $i++) {
        echo "Hello World<br>"; // 10 Baris Hello World
    }
    echo "<br><br>"; // Baris baru dua kali untuk memberikan jarak

    // Menampilkan teks "10 Baris Hello World Dengan Nomor Baris:" diikuti dengan baris baru (br)
    echo "10 Baris Hello World Dengan Nomor Baris: <br>";
    
    // Menggunakan loop for untuk menampilkan "Hello World" sebanyak 10 kali dengan nomor baris
    for($i = 0; $i < 10; $i++) {
        echo 'Hello World - '. ($i+1) .'<br>'; // 10 Baris Hello World dengan Nomor Baris
    }
    echo "<br><br>"; // Baris baru dua kali untuk memberikan jarak

    // Menampilkan teks "Array Nama Bulan:" diikuti dengan baris baru (br)
    echo "Array Nama Bulan: <br>";
    
    // Mendefinisikan array $NamaBulan yang berisi nama-nama bulan
    $NamaBulan = [
        "Januari", 
        "Februari", 
        "Maret", 
        "April", 
        "Mei", 
        "Juni", 
        "Juli", 
        "Agustus", 
        "September", 
        "Oktober", 
        "November", 
        "Desember"
    ]; // Nama Bulan

    // Menggunakan loop foreach untuk menampilkan setiap nama bulan
    foreach($NamaBulan as $Bulan) {
        echo $Bulan . "<br>"; //Tampilkan Nama Bulan
    }
    echo "<br><br>"; // Baris baru dua kali untuk memberikan jarak

    // Menampilkan teks "Array Nama Bulan dan Hari Libur:" diikuti dengan baris baru (br)
    echo "Array Nama Bulan dan Hari Libur: <br>";
    
    // Mendefinisikan array $HariLibur yang berisi nama-nama hari libur
    $HariLibur = [
        "Tahun Baru",
        "Valentine",
        "Libur Maret",
        "Libur April",
        "Libur Mei",
        "Libur Juni",
        "Libur Juli",
        "Libur Agustus",
        "Libur September",
        "Libur Oktober",
        "Libur November",
        "Libur Desember",
    ]; // Hari Libur

    // Mendefinisikan array 2 dimensi $Arr2D untuk menyimpan pasangan nama bulan dan hari libur
    $Arr2D = [];
    for($i = 0; $i < count($NamaBulan); $i++) {
        $Arr2D[$i] = [$NamaBulan[$i], $HariLibur[$i]]; // Memasukkan Ke Array 2 Dimensi
    }

    // Menggunakan loop foreach untuk menampilkan pasangan nama bulan dan hari libur
    foreach($Arr2D as $Tanggal) {
        echo $Tanggal[0] ." - ". $Tanggal[1] ."<br>"; //Tampilkan Nama Bulan dan Hari Libur
    }
    echo "<br><br>"; // Baris baru dua kali untuk memberikan jarak

    // Menampilkan teks "4 Function Aritmatika:" diikuti dengan baris baru (br)
    echo "4 Function Aritmatika: <br>";
    
    // Mendefinisikan fungsi tambah untuk menjumlahkan dua angka
    function tambah($nomor1, $nomor2) {
        return $nomor1 + $nomor2; // Pembuatan Function Penjumlahan
    }

    // Mendefinisikan fungsi kurang untuk mengurangkan dua angka
    function kurang($nomor1, $nomor2) {
        return $nomor1 - $nomor2; // Pembuatan Function Pengurangan
    }

    // Mendefinisikan fungsi kali untuk mengalikan dua angka
    function kali($nomor1, $nomor2) {
        return $nomor1 * $nomor2; // Pembuatan Function Perkalian
    }

    // Mendefinisikan fungsi bagi untuk membagi dua angka
    function bagi($nomor1, $nomor2) {
        return $nomor1 / $nomor2; // Pembuatan Function Pembagian
    }

    // Mendefinisikan dua variabel angka untuk operasi aritmatika
    $angka1 = 10; 
    $angka2 = 5;

    // Menampilkan nilai dari variabel angka1 dan angka2
    echo "Angka 1 = $angka1<br>Angka 2 = $angka2<br><br>Penggunaan Function: <br>";
    
    // Menggunakan fungsi tambah untuk menjumlahkan angka1 dan angka2 dan menampilkan hasilnya
    echo 'Penjumlahan ('.$angka1.' + '.$angka2.'): '. tambah($angka1, $angka2) .'<br>'; // Penggunaan Function Penjumlahan
    
    // Menggunakan fungsi kurang untuk mengurangkan angka1 dan angka2 dan menampilkan hasilnya
    echo 'Pengurangan ('.$angka1.' - '.$angka2.'): '. kurang($angka1, $angka2) .'<br>'; // Penggunaan Function Pengurangan
    
    // Menggunakan fungsi kali untuk mengalikan angka1 dan angka2 dan menampilkan hasilnya
    echo 'Perkalian ('.$angka1.' * '.$angka2.'): '. kali($angka1, $angka2) .'<br>'; // Penggunaan Function Perkalian
    
    // Menggunakan fungsi bagi untuk membagi angka1 dengan angka2 dan menampilkan hasilnya
    echo 'Pembagian ('.$angka1.' / '.$angka2.'): '. bagi($angka1, $angka2) .'<br>'; // Penggunaan Function Pembagian
?>
