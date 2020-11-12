<?php 
	session_start();
	if(isset($_SESSION['role'])){
		if ($_SESSION['role'] != 1) {
			header('Location: login.php');
		}
	} else {
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

  </style>
</head>

<body>
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" ><?php if(isset($_SESSION['fullname'])){
              	 echo "<b> Xin chào </b>".' '. $_SESSION['fullname'];
              } ?>  
              <span class="sr-only">(current)</span></a>
              <a class="nav-link" href="logout.php">Đăng xuất <span class="sr-only">(current)</span></a>
            </li>
            
          </ul>
        </div>
      </nav>

    <div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<h3> Danh sách đơn xin nghỉ </h3>
		<table class="table table-hover">
			<thead>
				<tr>
					<th> ID</th>
					<th class="ms"> Mã số nhân viên </th>
					<!-- <style type="text/css">
						.ms{
							width: 150px;
						}
					</style> -->
					<th> Họ tên</th>
					<th class="type"> Lý do </th>
					<style type="text/css">
						.type{
							height: 50px;
							width: 250px;
						}
					</style>
					<th> Ngày bắt đầu </th>
					<th> Ngày kết thúc </th>
					<th> Người kiểm duyệt </th>
					<th> Trạng thái </th>
					<th> Xử lý</th>
				</tr>		
			</thead>
			<tbody>
				<?php 
				include('inc/myconnect.php');
				$id1 = $_SESSION['id'];
				$sql ="SELECT * FROM donxin";
				$query=mysqli_query($dbc, $sql);
				$num=mysqli_num_rows($query);
				if($num > 0){
					while ($row = mysqli_fetch_array($query)) {
						?>
						<tr>
							<td><?php echo $row['id'] ?> </td>
							<td><?php echo $row['msnv'] ?> </td>
							<td><?php echo $row['fullname'] ?> </td>
							<td><?php echo $row['lydo'] ?> </td>
							<td><?php echo date('d-m-Y',strtotime($row['ngaybatdau'])) ?> </td>
							<td><?php echo date('d-m-Y',strtotime($row['ngayketthuc'])) ?> </td> 
							<td><?php 
								switch ($row['nguoiduyet']) {
									case 1:
										echo "Giám đốc";
										break;
									
									default:
										echo "Trưởng phòng";	
										break;
								}
							 ?> </td>
							<td><?php

							if ($row['trangthai']==0) {
								echo "đang chờ";
								}
							if ($row['trangthai']==1) {
								echo "đã duyệt";
								}
							if ($row['trangthai']==2) {
								echo "không duyệt";
								}

							 ?></td>
							
							<td><?php
								if ($row['trangthai'] != '0') {
									echo "Xong";
								} 
								else{
									?>
									<a class="btn btn-success" name="duyet" href="duyet.php?id=<?php echo $row['id'];?>">Duyệt</a>|<a class="btn btn-success" name="khongduyet" href="khongduyet.php?id=<?php echo $row['id'];?>">Không duyệt</a>
								<?php 
							} 
							?>
							</td>
						<?php			
					}
				}

				?>

			</tbody>
		</table>