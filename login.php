<?php 
    session_start();
    if (isset($_SESSION['username'])) {
        header('Location:leave_request.php');
    }
 ?>
<!DOCTYPE html>
<html>  

    <head>
        <title>login</title>
        <meta charset="UTF-8">
         <link href="css/simple-view.css" rel="stylesheet">    
         <style type="text/css">
            body{
                margin: 0px;
                padding: 0px;
                font-family: sans-serif;
                height: 100vh;
                background-image: url(images/banner.jpg);
                background-size: cover;
                background-position: center;

            }          
            .box{
                width: 500px;
                padding: 50px;
                position: absolute;
                background: #191919;
                text-align: center;
                top: -14%;
                left: 50.3%;
                transform: translate(-50%,50%);
                box-sizing: border-box;
                background: rgba(4, 4, 4, 0.56);
                -webkit-box-shadow: 0px 35px 44px -22px rgba(0,0,0,0.72);
                -moz-box-shadow: 0px 35px 44px -22px rgba(0,0,0,0.72);
                box-shadow: 0px 35px 44px -22px #1f181b;
            }
            .box h1{
                color: white;
                text-transform: uppercase;
                font-weight: 500;
            }
            .box input[type ='text'], .box input[type='password']{
                border: 0;
                background: none;
                display: block;
                margin: 20px auto;
                text-align: center;
                border: 2px solid #3498db;
                padding: 14px 10px;
                width: 200px;
                outline: none;
                color: white;
                border-radius: 24px;
                transition: 0.25s;
            }
            .box input[type ='text']:focus , .box input[type='password']:focus{
                width: 280px;
                border-color: #7fff00;
            }
            .box input[type ='submit']:hover{
                background: #ff1493;
            }
            .box input[type= 'submit']{
                 border: 0;
                background: none;
                display: block;
                margin: 20px auto;
                text-align: center;
                border: 2px solid #3498db;
                padding: 14px 10px;
                outline: none;
                color: white;
                border-radius: 24px;
                transition: 0.25s;               
            }
            .rgter{
                color: white;
                text-align: right;
                padding: 0 10px;
            }
            .check{
                text-align: center;
                padding: 100px;
                font-size: 20px;
                color: red;
                text-decoration: none;
            }
            .c1{
                text-align: center;
                color: #FFCC99;
                font-size: 20px;
                padding: 135px;
            }
          .rgter1{
            color: #4169E1;
          }
          .dnhap{
            font-size: 40px;
          }
         </style>  

    </head>
    <body>        

            <?php
                include('inc/myconnect.php');              
                if($_SERVER['REQUEST_METHOD']=='POST'){        
                    if(empty($_POST['username']) or empty($_POST['passwords'])){          
                        echo "<p class='c1' >Vui lòng không để trống tài khoản và mật khẩu </p>";
                    }
                    else{
                        $username = $_POST['username'];
                        $passwords = $_POST['passwords'];     
                        $sql=("SELECT id,username,fullname,passwords,role FROM users WHERE username='{$username}' and passwords='{$passwords}'");
                         $query = mysqli_query($dbc , $sql);      
                        $num = mysqli_num_rows($query); 
                            if ($num == 1) {
                                list($id,$username,$fullname,$passwords,$role) = mysqli_fetch_array($query,MYSQLI_NUM);
                                $_SESSION['id']=$id;
                                $_SESSION['username']=$username;
                                $_SESSION['fullname']=$fullname;
                                $_SESSION['role']=$role;                               
                            }    
                            else{
                             echo "<p class='c1'> Tên tài khoản hoặc mật khẩu không đúng </p>";       
                            }
                        if ($num != 0 && $_SESSION['role'] == 0) {             
                             header('location:trangchu.php');
                         }
                         if($num != 0 && $_SESSION['role'] != 0){
                            header('Location: admin.php');
                         }
                        
                     } 
                }
        ?> 
        <div class="ctrl">    
        <form class="box" method='POST'>
            <h1 class='dnhap'>Đăng nhập </h1>
             <input type='text' name='username'  placeholder="Username"/ autocomplete="on">
             <input type='password' name='passwords'  placeholder="Password"/>  
             <input type='submit'name='submit' value='Đăng nhập' />  
             <p class="rgter"> Thành viên mới ? <a class='rgter1' href="dangky.php"> Đăng ký ngay </a></p>
        </form>
        </div>
    </body>
</html>