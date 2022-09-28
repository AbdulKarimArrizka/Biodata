<html>
<head><title>Biodata</title>
<style type="text/css">

    table {
        borde-collaps: collapse;
        margin-top:10px;
    }

    img {
        border : 2px solid #ddd;
        border-radius: 4px;
        padding: 10px;
        width: 150px;
        margin: 5px;
        float: left;
    }
    table{
        margin:10px;
        margin-top: 10px;
        background-color: ##0000FF;
    }

    </style>
    </head>

<body>
<center><h1 ><font style=”background-color:black; color:white”>Data Biodata Anda</h1></center></font>
<?php
$nama   = "Abdul Karim Arrizka Raya"; 
$nim     = 202520028; 
$alamat   = "Purworejo"; 
$email = "rayavfx99@gmail.com";
$bidang_minat = "Desain";
?>

<table>
<img src="WIN_20220928_10_50_18_Pro.JPG" alt="">
        <tr>
          <td>Nama  : <?php echo $nama ?> </td>  
        </tr>
        <tr>
          <td>Nim   : <?php echo $nim ?> </td>  
        </tr>
        <tr>
          <td>Alamat    : <?php echo $alamat ?> </td>  
        </tr>
        <tr>
          <td>email : <?php echo $email ?> </td>  
        </tr>
        <tr>
          <td>bidang minat  : <?php echo $bidang_minat ?> </td>  
        </tr>

</table>
</body>
</html>