<?php   
   $conn = mysqli_connect("localhost","root","","webca2");
   $sql = "DELETE FROM hanghoa  WHERE id =".$_GET['id'];
   $ketqua = mysqli_query($conn,$sql);
   echo '<script language="javascript">alert("Xóa thành công"); window.location="quanli.php";</script>';
   ?>
  