<?php
include "config.php";

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .jarak{
            padding:5px;
        }
        .butang{
            background-color: red;
            padding: 5px;
            border:1px solid black;
            border-radius:8px ;
            text-decoration: none;
            color: white;
            font-weight: 200;
        }
        .butangs{
            background-color: red;
            display: inline-block;
            cursor: pointer;
            padding: 10px;
        }
        .link{
            text-decoration: none;
            color: white;
            font-size: large;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <button class="butangs"><a class="link"  href="tambahpelajar.php">Tambah Pelajar</a></button>
    <table border=1 style="border-spacing: 0px;">

        <td class="jarak">Id</td>
        <td class="jarak">No Pelajar</td>
        <td class="jarak">Nama Pelajar</td>
        <td class="jarak">No Kad Pengenalan</td>
        <td class="jarak">No Jantina</td>
        <td class="jarak">No Phone</td>
        <td class="jarak">Tindakan</td>
        <?php
            $sql = "SELECT * FROM info_pelajar ORDER BY id ASC";
            $data = mysqli_query($con, $sql);
            $bil = 1;
            while ($pelajar = mysqli_fetch_array($data)){
                ?>
                <tr>
                <td class="bilnum"><?php echo $bil; ?>.</td>
                    <td class="jarak"><?php echo $pelajar['no_ndp']; ?></td>
                    <td class="jarak"><?php echo $pelajar['nama_pelajar']; ?></td>
                    <td class="jarak"><?php echo $pelajar['no_kp']; ?></td>
                    <td class="jarak"><?php echo $pelajar['jantina']; ?></td>
                    <td class="jarak"><?php echo $pelajar['no_hp']; ?></td>
                    <td class="jarak">
                        <a class="butang" href="padampelajar.php?no_kp=<?php echo $pelajar['no_kp'];?>">Padam Pelajar</a> 
                            </td> 
                </tr> 
            <?php $bil = $bil + 1; 
            } 
            ?> 
    </table>

</body>
</html>