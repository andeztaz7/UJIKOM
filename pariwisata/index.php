<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>INFORMATIKA PESAT</title>
</head>

<body>
    <img id="header-img" src="" alt="">
    <div class="nav">
        <a class="navbar" href="#">
            <img src="azwisata.com-logo-baru.png" alt="" width="70" height="24">
        </a>
        <a class="active" href="#home">Home</a>
        <a href="#reg">Pesan Tiket</a>
        <a href="#reg">About us</a>
    </div>
    <div class="depan">
        <h1>WELCOME TOUR AND TRAVELING</h1>
    </div>
    <div class="profil">
        <div class="kelas">
            <h3>Gunung Bromo</h3>
            <img src="6099375e04acb.jpg" alt="" width="300" height="260">
            <p>Gunung Bromo atau dalam bahasa Tengger dieja "Brama", juga disebut Kaldera Tengger, adalah sebuah gunung berapi aktif di Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.329 meter di atas permukaan laut dan berada dalam empat wilayah kabupaten, yakni Kabupaten Probolinggo, Kabupaten Pasuruan, Kabupaten Lumajang, dan Kabupaten Malang. Gunung Bromo terkenal sebagai objek wisata utama di Jawa Timur. Sebagai sebuah objek wisata, Bromo menjadi menarik karena statusnya sebagai gunung berapi yang masih aktif. Gunung Bromo termasuk dalam kawasan Taman Nasional Bromo Tengger Semeru.

                Nama Bromo berasal dari nama dewa utama dalam agama Hindu, Brahma.

                Bentuk tubuh Gunung Bromo bertautan antara lembah dan ngarai dengan kaldera atau lautan pasir seluas sekitar 10 kilometer persegi. Ia mempunyai sebuah kawah dengan garis tengah ± 800 meter (utara-selatan) dan ± 600 meter (timur-barat). Sedangkan daerah bahayanya berupa lingkaran dengan jari-jari 4 km dari pusat kawah Bromo.</p>

        </div>
        <div class="kelas">
            <h3>Kebun Raya Bogor</h3>
            <img src="kebun_raya1.jpg" alt="" width="300" height="260">
            <p>Sejarah Kebun Raya Bogor
                Pada mulanya kebun ini hanya akan digunakan sebagai kebun percobaan bagi tanaman perkebunan yang akan diperkenalkan di Hindia Belanda. Namun pada perkembangannya pendirian Kebun Raya Bogor bisa dikatakan mengawali perkembangan ilmu pengetahuan di Indonesia dan sebagai wadah bagi ilmuwan terutama bidang botani di Indonesia secara terorganisasi pada zaman itu (1880 - 1905). Dari sini lahir beberapa institusi ilmu pengetahuan lain, seperti Bibliotheca Bogoriensis (1842), Herbarium Bogoriense (1844), Kebun Raya Cibodas (1860), Laboratorium Treub (1884), dan Museum dan Laboratorium Zoologi (1894).</p>
        </div>
        <div class="kelas">
            <h3>Taman Safari Bogor</h3>
            <img src="download.jpg" alt="" width="300" height="260">
            <p>Taman Safari Indonesia adalah tempat wisata keluarga berwawasan lingkungan yang berorientasi pada habitat satwa di alam bebas. Taman Safari Indonesia terletak di Desa Cibeureum Kecamatan Cisarua, Kabupaten Bogor, Jawa Barat atau yang lebih dikenal dengan kawasan Puncak. Taman ini berfungsi menjadi penyangga Taman Nasional Gunung Gede Pangrango di ketinggian 900-1800 m di atas permukaan laut, serta mempunyai suhu rata-rata 16 - 24 derajat Celsius.[1]


                Memberi makan hewan dengan wortel.
                Keunikan tempat wisata ini dari kebun binatang lainnya di Indonesia adalah pengunjungnya bisa berkeliling ke berbagai tempat untuk bisa melihat dari dekat semua jenis binatang dengan memakai mobil pribadi ataupun naik bus yang sudah disediakan pihak pengelola Taman Safari. Pengunjung juga bisa berinteraksi langsung dengan memberi makan hewan-hewan tersebut.</p>
        </div>
    </div>
    <div class="all">
        <div class="registrasi">
            <h1>FORM PEMBAYARAN</h1>
        </div>
        <form>
            <div class="formulir">
                <h1>Silahkan Untuk Pembayaran</h1>

                <form action="" method="POST">
                    <table>
                        <tr>
                            <td width="120">Nama Lengkap</td>
                            <td><input type="text" size="30"></td>
                        </tr>
                        <tr>
                            <td>Nomor Identitas</td>
                            <td><input type="number"></td>
                        </tr>
                        <tr>
                            <td>Nomor HP</td>
                            <td><input type="number"></td>
                        </tr>
                        <tr>
                            <td width="120">Tempat Wisata</td>
                            <td><input type="text" size="30"></td>
                        </tr>
                        <tr>
                            <td width="120">Tanggal Kunjungan</td>
                            <td><input type="date" size="30"></td>
                        </tr>
                        <tr>
                            <td width=" 120">Jumlah Pengunjung</td>
                            <td><input type="number" size="30"></td>

                        </tr>
                        <tr>
                            <td>Pengunjung Anak-Anak</td>
                            <td><input type="number"></td>
                        </tr>
                        <tr>
                            <td>Pilih Wisata</td>
                            <td><select>
                                    <option>Gunung Bromo</option>
                                    <option>Kebun Raya Bogor</option>
                                    <option>Taman Safari Bogor</option>
                        </tr>
                        <tr>

                            <td></td>
                            <td><input type="submit" value="Simpan">
                                <input type="reset" value="Reset">
                                <input type="button" value="Kembali">

                            </td>
                        </tr>
                    </table>
                </form>
                <td>Total Pembayaran :</td>
                <td><input type="button"></td>