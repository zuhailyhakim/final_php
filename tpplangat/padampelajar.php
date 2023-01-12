
<?php
 include('connection.php');
 $id = $_GET['id'];
 $sql = "DELETE FROM info_pelajar WHERE id= '$id'";
 $result = mysqli_query($samb, $sql);
 if ($result)
     echo "<script>alert('Berjaya padam rekod')</script>";
else 
   echo "<script>alert('Tidak berjaya padam rekod')</script>";
echo "<script>window.location='tambahpelajar.php'</script>";
?>
