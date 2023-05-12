<?php
include_once("koneksi.php");

$query = $conn->prepare("SELECT * from biodata");

$query->execute();

$hasil = $query->fetchAll(PDO::FETCH_ASSOC);

// echo "<table>";
// foreach ($hasil as $baris) {
//     // echo "Nama : " . $baris['nama'] . " NIM : " . $baris['nim'] . "<a href='editdata.php?id='". $baris['id'] . "<br>";
//     echo "<tr><td>" . $baris['nama'] . $baris['nim'] . $baris['jKelamin'] . $baris['angkatan'] . $baris['alamat'] .
//         "<a href='delete.php?id=" . $baris['id'] . "'>Hapus</a> 
//         </td></tr>";
// }
// echo "</table>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Data</title>
    <style>
        table,
        th,
        tr,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            border-radius: 10px;
        }

        table {
            width: 900px;
            margin: 30px;
            box-shadow: 8px 7px 6px 7px grey;
            overflow: hidden
        }

        td {
            width: 100px;
            height: 5px;
            padding: 20px;
            text-align: center;
        }

        div {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        button:hover {
            cursor: pointer;
            transform: scale(1.1);
            border-radius: 9px;
        }


        button {
            background-color: cyan;
            transition: transform 100ms ease-in-out;
        }
    </style>
</head>

<body>
    <div>
        <h1 style="margin-left: 30px;">Data Mahasiswa</h1>
        <table>
            <?php
            echo "<th>Nama</th>";
            echo "<th>NIM</th>";
            echo "<th>Jenis Kelamin</th>";
            echo "<th>Angkatan</th>";
            echo "<th>Alamat</th>";
            echo "<th>Hapus Data</th></tr>";
            foreach ($hasil as $baris) {
                echo "<tr><td>" . $baris['nama'] . "</td><td>" . $baris['nim'] . "</td><td>" . $baris['jKelamin'] . "</td><td>" . $baris['angkatan'] . "</td><td>" . $baris['alamat'] . "</td><td>" .
                    "<button><a href='delete.php?id=" . $baris['id'] . "'>Hapus</a></button> 
                    </td></tr>";
            }
            ?>
        </table>
        <form action="tambah-data.php" method="post">
            <button type="submit">Tambah Data</button>
        </form>
    </div>
</body>

</html>