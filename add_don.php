<?php include('include/header.php'); ?>
<div class="row">
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <style type="text/css">
            .add1{
             color: red;
            font-size: 20px;
            text-align: center;
            }
            .done{
             color: blue;
             text-align: center;
             font-size: 20px;
            text-decoration: none;
            }
        </style>
            <?php
                include ('inc/myconnect.php');
                if(($_SERVER['REQUEST_METHOD'])=='POST'){
                    if(empty($_POST['lydo']) || empty($_POST['ngaybatdau']) || empty($_POST['ngayketthuc'])){
                        echo "<p class='add1'> Vui lòng không để trống </p> ";
                    }
                        else{         
                            $msnv = $_SESSION['id']; 
                             $fullname = $_SESSION['fullname'];          
                             $lydo = $_POST['lydo'];   
                             $ngaybatdau=$_POST['ngaybatdau'];             
                             $ngayketthuc=$_POST['ngayketthuc'];
                             $trangthai = 0;
                             $nguoiduyet=$_POST['nguoiduyet'];
                             if($nguoiduyet == 2){
                                echo "<p class='add1'> Vui lòng chọn người duyệt </p>";
                             }
                        else{
                             $query1 = "INSERT INTO donxin(msnv,fullname,lydo,ngaybatdau,ngayketthuc,trangthai,nguoiduyet) VALUES
                        ('{$msnv}','{$fullname}','{$lydo}','{$ngaybatdau}','{$ngayketthuc}','{$trangthai}','{$nguoiduyet}')"; 
                        $them = mysqli_query($dbc, $query1);
                             if($them){
                                echo " <p class='done'> Gửi đơn thành công </p>";
                             }
                             else{
                                echo "<p class='add1'> Gửi đơn không thành công </p>";
                            }

                        }
                    }
                }
            ?>
            <form name='add_don' method="POST" class="name">             
            <div class="form-gr">
           <label><b class="ak1">Lý do</b></label><br>
              <div class="md-form">
     <!-- <label for="form7"><b>Lý do</b></label> -->
  <textarea id="form7" class="form-control" rows="5" name="lydo"></textarea>
 
</div>
            </div>             
              <div class="form-gr">
             <label><b>Ngày bắt đầu</b></label><br>
              <input class="form-control" type="date"name="ngaybatdau">          
            </div>
            <div class="form-gr">
              <label><b>Ngày kết thúc</b></label><br>
               <input class="form-control" type="date"name="ngayketthuc">         
            </div>
              <div class="form-gr">
             <label><B>Người phê duyệt</B></label><br>
                  <select name='nguoiduyet'>
                      <option value="2"></option>
                      <option value="1"> Giám đốc </option>
                      <option value="0"> Trưởng phòng  </option>
                    </select> 
             </div>
             <div class="form-gr">
             <input type="submit" name="" value="Hoàn thành">
            </div>                
            </form> 
          </div>
        </div>