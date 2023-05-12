<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <style>
        table,
        tr,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            border-radius: 10px;
        }

        table {
            width: max-content;
            margin: 30px;
            box-shadow: 8px 7px 6px 7px grey;
            overflow: hidden
        }

        td {
            width: 100px;
            height: 2px;
            padding: 10px;
            text-align: center;
        }

        div {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        input:hover {
            cursor: pointer;
            border: 2px solid black;
        }

        button:hover {
            cursor: pointer;
            transform: scale(1.1);
            border-radius: 9px;
        }

        button {
            margin-left: 30px;
            background-color: cyan;
            transition: transform 100ms ease-in-out;
        }

        * {
            font-size: 20px;
        }
    </style>
</head>

<body>
    <div>
        <h1>Tambah Data Mahasiswa</h1>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td><input type="text" name="nim"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><input type="text" name="jKelamin"></td>
                </tr>
                <tr>
                    <td>Angkatan</td>
                    <td><input type="text" name="angkatan"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
            </table>
            <button type="submit" name="submit" value="simpan">Simpan</button>
        </form>
    </div>
    <?php
    if (isset($_POST['nama']) && isset($_POST['nim']) && isset($_POST['jKelamin']) && isset($_POST['angkatan']) && isset($_POST['alamat'])) {


        include_once("koneksi.php");

        $nama = $_POST["nama"];
        $nim = $_POST["nim"];
        $jKelamin = $_POST['jKelamin'];
        $angkatan = $_POST['angkatan'];
        $alamat = $_POST['alamat'];

        $query = $conn->prepare("INSERT INTO biodata (nama, nim, jKelamin, angkatan, alamat) VALUES (:nama, :nim, :jKelamin, :angkatan, :alamat)");

        $query->execute(array(":nama" => $nama, ":nim" => $nim, ":jKelamin" => $jKelamin, ":angkatan" => $angkatan, ":alamat" => $alamat));

        if ($query->rowCount() > 0) {
            header("Location: read.php");
        } else {
            echo "data gagal ditambahkan";
        }
    }
    ?>
</body>

</html>