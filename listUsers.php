<?php
  $conn = mysqli_connect("localhost","root","","webca2");
   $sql = "SELECT * FROM hanghoa";
   $ketqua = mysqli_query($conn,$sql);
   $row = mysqli_fetch_assoc($ketqua)
?>

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
    <script src="ckeditor/ckeditor.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
   
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    
    
    
    
    <!-- END PAGE LEVEL STYLES -->
  
  </head>
  <!-- END HEAD -->
  <!-- BEGIN BODY -->
  <body class="page-header-fixed">
  <?php include("quanli.php"); ?>
    <!-- BEGIN HEADER -->
   
		  <div class="row-fluid">
          <table class="table table-striped" border = "3px" >
<tr>
  <th width = "50px">ID</th>
  <th width = "50px">Username</th>
  <th width = "80px">Email</th>
  <th width = "70px">Quyền Hạn</th>
  <th width = "50px">Xóa</th>
  
  
 </TR>

 <?php
     $sql = "SELECT * FROM user";
     $ketqua = mysqli_query($conn,$sql);
     while($row = mysqli_fetch_assoc($ketqua)){
      echo '<tr>';
      echo '<td>' .$row['id'].'</td>';
      echo '<td>' .$row['username'].'</td>';

      echo '<td>' .$row['email'].'</td>';
      echo '<td>' .$row['phanquyen'].'</td>';
      echo '<td><a href = "deleteuser.php?id='.$row['id'].'"> <span class="glyphicon glyphicon-trash"></span></a></td>';
     
     
      
      echo '</tr>';
     }
     ?> 
</table>

		   </div>
       
        <!-- END PAGE CONTAINER-->
     -->

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
