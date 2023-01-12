<?php
include "connection.php";
if(isset($_POST['id'])){
    $id=$_POST['id'];
    $no_ndp=$_POST['no_ndp'];
    $nama_pelajar=$_POST['nama_pelajar'];
    $no_kp=$_POST['no_kp'];
    $jantina=$_POST['jantina'];
    $no_hp=$_POST['no_hp'];

   $sql= " INSERT INTO info_pelajar (id,no_ndp,nama_pelajar,no_kp,jantina,no_hp)
    values ('$id','$no_ndp','$nama_pelajar','$no_kp','$jantina','$no_hp')";
    $result=mysqli_query($samb,$sql);
    if($result){
        echo "<script>alert('pendaftaran ahli berjaya');
        window.location='tambahpelajar.php'</script>";
      }else{
        echo "<script>alert('pendaftaran ahli gagal!');
        window.location='tambah.php'</script>"; 
          }
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      table,tr,th,td{border: 2px black solid; 
       border-collapse: collapse;
      padding: 20px; text-align: center; margin: auto;}
    body{background-color: cadetblue;}
      .img1{height: 200px; width: 200px; margin-left: 150px;}
      .img2{height: 200px; width: 200px; margin-left: 650px;}
      .button{margin-left: 650px;}
    </style>
    
</head>
<body>
<div class="container"><button class="button"> <a href="tambahpelajar.php" > add user</a></button></div>
<table class="table">
<html>
    
<head>
<body>

<table>
  <tr>
    <th>id</th>
    <th>no_ndp</th>
    <th>nama_pelajar</th>
    <th>no_kp</th>
    <th>jantina</th>
    <th>no_hp</th>
  </tr>
  <tr>
    <td>1</td>
    <td>23221084</td>
    <td>aina atikah binti mohd azhar</td>
    <td>20828160168</td>
    <td>perempuan</td>
    <td>01123456789</td>
    <td>
      <a class='btn btn-denger btn -sm' href='padampelajar.php'>delete</a>
    </td>
  </tr>
  <tr>
    <td>2</td>
    <td>23221102</td>
    <td>aina najwa binti amran</td>
    <td>21013031452</td>
    <td>perempuan</td>
    <td>011241442144</td>
    <td>
      <a class='btn btn-denger btn -sm' href='padampelajar.php'>delete</a>
    </td>
  </tr>
  <tr>
    <td>3</td>
    <td>23221157</td>
    <td>allyssa binti abdullah</td>
    <td>31206140104</td>
    <td>perempuan</td>
    <td>01123545464</td>
    <td>
      <a class='btn btn-denger btn -sm' href='padampelajar.php'>delete</a>
    </td>
  </tr>
  <tr>
    <td>4</td>
    <td>23221132</td>
    <td>hanif faisal bin hasmazi</td>
    <td>20723081107</td>
    <td>lelaki</td>
    <td>011265635646</td>
    <td>
      <a class='btn btn-denger btn -sm' href='padampelajar.php'>delete</a>
    </td>
  </tr>
  <tr>
    <td>5</td>
    <td>23221100</td>
    <td>ishuaariyaa a/p krishnan</td>
    <td>30526141256</td>
    <td>perempuan</td>
    <td>01745563654</td>
    <td>
      <a class='btn btn-denger btn -sm' href='padampelajar.php'>delete</a>
    </td>
  </tr>
</table>



</head>
</body>
</html>