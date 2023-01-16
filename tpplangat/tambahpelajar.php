<?php
include('config.php'); 
if(isset($_POST['no_kp'])) {
    $id = $_POST['id'];
    $nondp = $_POST['no_ndp'];
    $namapekerja = $_POST['nama_pelajar'];
    $nokp = $_POST['no_kp'];
    $jantina = $_POST['jantina'];
	$nohp = $_POST['no_hp'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $sql = "INSERT INTO info_pelajar (id, no_ndp, nama_pelajar, no_kp, jantina, no_hp, email, alamat)
    VALUES ('$id','$nondp', '$namapekerja', '$nokp', '$jantina', '$nohp', '$email', '$alamat')";
    $result = mysqli_query($con, $sql); 
    if ($result)
        echo "<script>alert('Berjaya kemaskini')</script>";
    else 
        echo "<script>alert('Tidak berjaya kemaskini')</script>";
    echo "<script>window.location='index.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
         .butangs{
            background-color: red;
            display: inline-block;
            cursor: pointer;
            padding: 10px;
            color: white;
            font-weight: 600;
         }
         .input{
            padding: 6px;
         }
         .ayat{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
         }
    </style>
</head>
<body>
    <center>
    <form action="tambahpelajar.php" method="POST">
        <table>
            <tr>
                <td class="ayat"> Id </td>
                <td > <input class="input" type="text" name="id" placeholder="1"> </td>
            </tr>
            <tr>
                <td class="ayat"> Nombor Daftar Pelajar </td>
                <td > <input class="input" type="text" name="no_ndp" placeholder="23221100"> </td>
            </tr>
            <tr>
                <td class="ayat"> Nama Anda </td>
                <td > <input class="input" type="text" name="nama_pelajar" placeholder="Ali bin Abu"> </td>
            </tr>
            <tr>
                <td class="ayat"> No Kad Pengenalan </td>
                <td > <input class="input" type="text" name="no_kp" placeholder="030512140435"></td>
            </tr>
            <tr>
                <td class="ayat"> Jantina</td>
                <td > <input class="input" type="text" name="jantina" placeholder="Lelaki/Perempuan"></td>
            </tr>
            <tr>
                <td class="ayat"> Nombor Telefon</td>
                <td > <input class="input" type="text" name="no_hp" placeholder="0179999058"></td>
            </tr>
            <tr>
                <td class="ayat"> Emel</td>
                <td > <input class="input" type="text" name="email" placeholder="ali@abu.com"></td>
            </tr>
            <tr>
                <td class="ayat"> Alamat</td>
                <td > <input class="input" type="text" name="alamat" placeholder="Jalan Sungai Buluh, SB/4A"></td>
            </tr>
        </table>
        <button class="butangs" type="submit">Simpan</button>
    </form>
    </center>
</body>
</html>