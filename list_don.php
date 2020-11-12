
<?php include('include/header.php'); ?>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<h3> Đơn xin nghỉ phép của bạn</h3>
		<table class="table table-hover">
			<thead>
				<tr>
					<th> ID </th> 
					<th> Mã số nhân viên </th>
					<th> Họ tên</th>
					<th class="type"> Lý do xin nghỉ </th>
					<style type="text/css">
						.type{
							height:50px;
							width: 250px;
						}
					</style>
					<th> Ngày bắt đầu </th>
					<th> Ngày kết thúc </th> 
					<th> Người kiểm duyệt </th>
					<th> Trạng thái	 </th>
					
				</tr>		
			</thead>
			<tbody>
				<?php 
				include('inc/myconnect.php');
				$id = $_SESSION['id'];
				$sql ="SELECT * FROM donxin WHERE msnv={$id}";
				$query= mysqli_query($dbc, $sql);
				$num=mysqli_num_rows($query);
				if($num > 0){
					while ($row = mysqli_fetch_array($query)) {
				?>
						<tr>
							<td><?php echo $row['id'] ?> </td>
							<td><?php echo $row['msnv'] ?> </td>
							<td><?php echo $row['fullname'] ?> </td>
							<td><?php echo $row['lydo'] ?> </td>
							<td><?php echo date('d/m/Y',strtotime($row['ngaybatdau'])) ?> </td>
							<td><?php echo date('d/m/Y',strtotime($row['ngayketthuc'])) ?> </td> 
							<td><?php 
								switch ($row['nguoiduyet']) {
									case 1:
										echo "Giám đốc";
										break;
									case 0:
										echo "Trưởng phòng";
										break;								
									default :
										echo 'error';
										break;
									}
							 ?> 
							</td>
							<td> <?php
							if ($row['trangthai']==0) {
								echo "đang chờ";
								}
							if ($row['trangthai']==1) {
								echo "đã duyệt";
								}
							if ($row['trangthai']==2) {
								echo "không duyệt";
								}
							 ?> 	
							 </td>
							
						<?php
						
					}
				}
				?>
			</tbody>
		</table>


