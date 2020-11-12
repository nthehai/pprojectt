
<!DOCTYPE html>
<html>
    <head>
        <title>ĐĂNG KÝ</title>
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
                top: -35%;
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
                width: 300px;
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
           .check{
            text-align: center;
            color: #FFFACD;
            padding: 50px;
            font-size: 20px;

           }
           .rgt1{
            text-align: center;
            color: #48D1CC;
            padding: 50px;
            font-size: 22px;
           }
            .rgter1{
                text-align: center;
                color: white;
            }
            .rgter12{
                color: #4169E1;
            }
            .dki{
                font-size: 40x;
            }
         </style>  

    </head>
    <body>     
            <?php
               include('inc/myconnect.php');
            if($_SERVER['REQUEST_METHOD']=='POST'){             
                if(empty($_POST['username']) or empty($_POST['fullname']) or empty($_POST['passwords'])){
                    echo "<p class='check'> Vui lòng không để trống </p>";              
                 } 
                else {                  
                    $username = $_POST['username'];
                    $fullname= $_POST['fullname'];
                    $passwords = $_POST['passwords'];
                    $passwords2 = $_POST['passwords2'];
                    if(strlen($username) <5 or strlen($passwords) <5 or strlen($fullname) <6 ){
                        echo "<p class='check'>Tài khoản,mật khẩu và họ tên phải nhiều hơn 5 ký tự </p>";   
                    }
                    else{
                        if( $passwords != $passwords2){
                            echo "<p class='check'> Hai mật khẩu không trùng nhau </p>";
                        }else{
                            $sql = ("SELECT username,fullname,passwords FROM users WHERE username='$username'");
                            $query = mysqli_query($dbc, $sql);
                            $num= mysqli_num_rows($query);
                            if($num == 0){
                                $query2="INSERT INTO users(username,fullname,passwords) VALUES ('{$username}','{$fullname}','{$passwords}')";  
                                $add =  mysqli_query($dbc,$query2);
                                if($add){
                                    echo "<p class='rgt1'>Đăng ký thành công  </p";
                                } else{
                                    echo"<p class='check'>Đăng ký thất bại </p>"; 
                                  }
                             }
                             else{
                                echo"<p class='check'>Tài khoản đã tồn tại </p>";
                            }
                        }
                    }
                }          
            }
           ?>
        <div class="ctrl">    
        <form class="box" method='POST'>
            <h1 class='dki'>Đăng ký </h1>
 <input type='text' name='fullname'  placeholder="Yourname" autocomplete="off" />
    <input type='text' name='username'  placeholder="Username" autocomplete="off" />
        <input type='password' name='passwords'  placeholder="Password"/>     
           <input type="password" name='passwords2' placeholder="Nhập lại password" />
             <input type='submit'name='' value='Đăng ký' />  
              <p class="rgter1"> Bạn đã có tài khoản ? <a class='rgter12' href="login.php">  Đăng nhập tại đây </a></p>
        </form>
        </div>
    </body>
</html>