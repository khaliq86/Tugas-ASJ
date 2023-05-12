<?php
$nama = "Muhammad Khaliq Teuku Ansari";
$nim = "2110817310008";
$jKelamin = "Laki-Laki";
$cita2 = "Menjadi Programmer";
$motivasi = "Seiring dengan perkembangan zaman teknologi akan semakin meningkat, sehingga diperlukan lebih
banyak programmer dimasa depan, dan saya ingin menjadi salah satunya.";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASJ No 1</title>
    <style>
        table,
        tr,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            border-radius: 10px;
        }

        table {
            width: 600px;
            margin: 30px;
            box-shadow: 8px 7px 6px 7px grey;
            overflow: hidden
        }

        td {
            width: 100px;
            height: 5px;
            padding: 20px;
            text-align: justify;
        }

        div {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <div>
        <table>
            <tr>
                <td>
                    Nama
                </td>
                <td>
                    <?= $nama ?>
                </td>
            </tr>
            <tr>
                <td>
                    NIM
                </td>
                <td>
                    <?= $nim ?>
                </td>
            </tr>
            <tr>
                <td>
                    Jenis Kelamin
                </td>
                <td>
                    <?= $jKelamin ?>
                </td>
            </tr>
            <tr>
                <td>
                    Cita-cita
                </td>
                <td>
                    <?= $cita2 ?>
                </td>
            </tr>
            <tr>
                <td>
                    Motivasi Berkuliah di TI
                </td>
                <td>
                    <?= $motivasi ?>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>