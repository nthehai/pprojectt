<?php 
  session_start();
  if(!isset($_SESSION['username'])){
    header('Location: login.php');
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://code.jquery.com/jquery-latest.js"></script>
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
    .d-flex{
      display: none;
    }
      #sidebar-wrapper{
        display: none;
        
      }

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
         <button class="btn btn-info" id="menu-toggle">Tùy biến </button>        
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">          
          </button>
          <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>
    $(document).ready(function(){
    $("#menu-toggle").click(function() {
      $("#sidebar-wrapper").toggle(400);  
       });
    });
  </script>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">            
              <a class="nav-link" ><?php if(isset($_SESSION['fullname'])){
                echo "<b> Xin chào </b>".' '. $_SESSION['fullname'];
              } ?>
              <span class="sr-only">(current)</span></a>
              <a class="nav-link1" href="logout.php">Đăng xuất <span class="sr-only">(current)</span></a>
              <li class="nav-item dropdown">          
            </li>            
          </ul>
        </div>
      </nav>
      