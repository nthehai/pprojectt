<?php 
  session_start();
  if(!isset($_SESSION['username'])){
    header('Location: login.php');
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

  <style type="text/css">
    .nav-link{
      display: inline-block;

    }
    .nav-link1{
      color: blue;
    }
    /*.hom3{
        text-align: left;
       
       font-family: sans-serif;
       font-size: 25px;
    }*/
  </style>
</head>

<body>

  <div class="d-flex" id="wrapper">

    
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Tùy chọn </div>
      <div class="list-group list-group-flush">
        <a href="add_don.php" class="list-group-item list-group-item-action bg-light">Tạo đơn xin nghỉ</a>
        <a href="list_don.php" class="list-group-item list-group-item-action bg-light">Đơn xin nghỉ phép của bạn</a>
     
     
        
      </div>        
    </div>
   

    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
             
              <a class="nav-link" ><?php if(isset($_SESSION['fullname'])){
                echo "<b> Xin chào </b>".' '. $_SESSION['fullname'];
              } ?>
              <span class="sr-only">(current)</span></a>
              
              <a class="nav-link1" href="logout.php">Đăng xuất <span class="sr-only">(current)</span></a>
             
             <!--  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li> -->
            </li>
            
          </ul>
        </div>

      </nav>
      