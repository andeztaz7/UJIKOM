<?php
$conn = mysqli_connect("localhost", "root", "", "dblatihan_lsp");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;

    $namalengkap = htmlspecialchars($data["Nama Lengkap"]);
    $nomoridentitas = htmlspecialchars($data["Nomor Identitas"]);
    $nohp = htmlspecialchars($data["No Hp"]);
    $tempatwisata = htmlspecialchars($data["Tempat Wisata"]);
    $tanggalkunjungan = htmlspecialchars($data["Tanggal Kunjungan"]);
    $jumlahpengunjung = htmlspecialchars($data["Jumlah Pengunjung"]);




    $query = "INSERT INTO user
    VALUES
    ('', '$namalengkap', '$nomoridentitas', '$nohp', '$tempatwisata', '$tanggalkunjungan', '$jumlahpengunjung', '$pengunjunganakanak')
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($Id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM user WHERE id = $Id");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;

    $id = $data['id'];
    $namalengkap = htmlspecialchars($data["Nama Lengkap"]);
    $nomoridentitas = htmlspecialchars($data["Nomor Identitas"]);
    $nohp = htmlspecialchars($data["No Hp"]);
    $tempatwisata = htmlspecialchars($data["Tempat Wisata"]);
    $tanggalkunjungan = htmlspecialchars($data["Tanggal Kunjungan"]);
    $jumlahpengunjung = htmlspecialchars($data["Jumlah Pengunjung"]);


    $query = "UPDATE user SET 
                namalengkap = '$Nama Lengkap', 
                nomoridentitas = '$Nomor Identitas', 
                nohp = '$No Hp', 
                tempatwisata = '$Tempat Wisata',
                tanggalkunjungan = '$Tanggal Kunjungan',
                jumlahpengunjung = '$Jumlah Pengunjung',
                pengunjunganakanak = '$Pengunjung Anak-Anak',
            WHERE id = $id
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
    