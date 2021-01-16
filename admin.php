
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
  <!--<![endif]-->
  <!-- BEGIN HEAD -->
  <head>
    <meta charset="utf-8" />
    <title>Metronic | Extra - Search Results</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link
      href="assets/plugins/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="assets/plugins/bootstrap/css/bootstrap-responsive.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="assets/plugins/font-awesome/css/font-awesome.css"
      rel="stylesheet"
      type="text/css"
    />
    
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link
      href="assets/css/style-responsive.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="assets/css/themes/default.css"
      rel="stylesheet"
      type="text/css"
      id="style_color"
    />
   
    
  </head>
  <!-- END HEAD -->
  <!-- BEGIN BODY -->
  <body class="page-header-fixed">
    <!-- BEGIN HEADER -->
    <?php include("quanli.php"); ?>
		  <div class="row-fluid" >
      <h1>Danh sách hàng hóa</h1>
<table class="table table-striped" border = "3px">
<tr>
  <th width = "50px">ID</th>
  <th width = "50px">TÊN HÀNG</th>
  <th width = "50px">SỐ LƯỢNG</th>
  <th width = "50px">ĐƠN GIÁ</th>
  <th width = "50px">LINK ẢNH</th>
  <th width = "50px">Mô tả</th>
  <th width = "50px">XÓA</th>
  <th width = "50px">SỬA</th>
  
 </TR>

 <?php
 $conn = mysqli_connect("localhost","root","","webca2");
     $sql = "SELECT * FROM hanghoa";
     $ketqua = mysqli_query($conn,$sql);
     while($row = mysqli_fetch_assoc($ketqua)){
      echo '<tr>';
      echo '<td>' .$row['id'].'</td>';
      echo '<td>' .$row['tenhang'].'</td>';

      echo '<td>' .$row['soluong'].'</td>';
      echo '<td>' .$row['gia'].'</td>';
      echo "<td>
      <img src=".$row['anh']." style = width:80px;height:80px;>
        </td>";
      echo '<td>' .$row['mota'].'</td>';
      echo '<td ><a href = "delete.php?id='.$row['id'].'"><img src = "./images/icondelete.jpg" style = "width:30px;"></a></td>';
      echo '<td><a href = "updateitem.php?id='.$row['id'].'"><img src = "./images/iconrepair.jpg" style = "width:30px;"></a></td>';
     
      
      echo '</tr>';
     }
     ?> 
</table><br><br>
<h1 style = "text-align:center;">Danh sách danh mục</h1>
<table class="table table-striped" border = "3px" >
<tr>
  <th width = "50px">ID</th>
  <th width = "50px">TÊN DANH MỤC</th>
  <th width = "50px">XÓA</th>
  <th width = "50px">UPDATE</th>
  
 

 </TR>

 <?php
     $sql = "SELECT * FROM danhmuc";
     $ketqua = mysqli_query($conn,$sql);
     while($row = mysqli_fetch_assoc($ketqua)){
      echo '<tr>';
      echo '<td>' .$row['id'].'</td>';
      echo '<td>' .$row['tendanhmuc'].'</td>';
      echo '<td><a href = "xoadanhmuc.php?id='.$row['id'].'"><img src = "./images/icondelete.jpg" style = "width:30px;"></a></td>';
      echo '<td><a href = "updatedm.php?id='.$row['id'].'"><img src = "./images/iconrepair.jpg" style = "width:30px;"></a></td>';
      echo '</tr>';
     }
     ?> 




</table><br><br>




		   </div>
        </div>
        <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->

    <!-- END FOOTER -->
    <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- BEGIN CORE PLUGINS -->
    <script
      src="assets/plugins/jquery-1.10.1.min.js"
      type="text/javascript"
    ></script>
    
    <!--[if lt IE 9]>
      <script src="assets/plugins/excanvas.min.js"></script>
      <script src="assets/plugins/respond.min.js"></script>
    <![endif]-->
    
    
    
    <!-- END CORE PLUGINS -->
    >
    
    <script src="assets/scripts/app.js"></script>
    <script src="assets/scripts/search.js"></script>
    <script>
      jQuery(document).ready(function () {
        App.init();
        Search.init();
      });
    </script>
    <!-- END JAVASCRIPTS -->
  </body>
  <!-- END BODY -->
</html>
