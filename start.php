<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trang chủ</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <style>
 
html, body {
  height: 100%;
}
* {
  box-sizing: border-box;
    margin: 0;
    padding: 0;
}
body {
   font-family: 'Roboto Condensed', sans-serif;
  line-height: 1.7;
  perspective-origin: 0% 50%;
  perspective: 800px;
  background: #21212d;
    
}
nav, main {
  transition: transform 150ms ease-out;
}
nav {
  z-index: 100;
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  width: 16em;
  background-color: #353441;
  transform: translateX(-16em);
}
nav.menu-active {
  transform: translateX(0);
}
nav.menu-hover {
  transform: translateX(-15em);
}
nav h1 {
  z-index: 100;
  display: block;
  position: absolute;
  top: 0;
  right: -65px;
  height: 60px;
  width: 65px;
  line-height: 60px;
  font-size: 0.8em;
  font-weight: 300;
  letter-spacing: 1px;
  color: #fff;
  text-transform: uppercase;
  text-align: center;
  background-color: #353441;
  cursor: pointer;
}
nav h1:hover {
  color: #353441;
  background: #fff;
}
nav ul {
  margin: 0;
  padding: 0;
}
nav li {
  display: inline-block;
  padding: 0 1em;
  width: 100%;
  height: 60px;
  color: #9dc6d1;
  line-height: 60px;
  background-color: #353441;
    transition: all 0.5s ease-in;
}
nav li:nth-of-type(2n) {
  background-color: #3a3947;
}
nav li:hover {
  background: ORANGERED;
    color: white;
     
}
main {
  z-index: 0;
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  display: flex;
  align-items: center;
  overflow: hidden;
  background-image: url(images/anh12.jpg);
  transform-origin: 0% 50%;
    background-size: cover;
    background-position: center;
    height: 100vh;
    width: 100%;
}
main:after {
  content: '';
  display: block;
  position: absolute;
  z-index: 1;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background: linear-gradient(to right, transparent, rgba(33, 33, 45, .5));
  visibility: hidden;
  opacity: 0;
  transition: opacity 150ms ease-out, visibility 0s 150ms;
}
main.menu-active {
  border-radius: 0.001px;
  transform: translateX(16em) rotateY(15deg);
}
main.menu-active:after {
  visibility: visible;
  opacity: 1;
  transition: opacity 150ms ease-out, visibility 0s;
}
main.menu-hover {
  border-radius: 0.001px;
  transform: translateX(1em) rotateY(1deg);
}
main section {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  margin: auto;
  padding: 1em 4em;
  max-width: 680px;
  overflow: auto;
  background-color: rgba(255, 255, 255, .5);
}
section h1 {
  font-weight: 800;
  text-transform: uppercase;
  font-size: 2em;
}
section p {
  display: inline-block;
  margin: 16px 0;
}

    
    </style>
</head>
<body>
    <nav class="menu-activea">
  <h1>menu</h1>

  <ul>
    <a class="nav-link"> </a>
    <a href="start.php"><li>Trang chủ</li></a>
    <a href="login.php"><li>Đăng nhập/Đăng ký</li></a>
   <a href="info.php"><li>Thông tin</li></a>
    
  </ul>
</nav>
<main>
  <section>
   <br><br><br>
    <h2 class="h2"> LinxHQ, công ty số 1 về giải pháp phần mềm </h2>
    <style type="text/css">
        .h2{
            text-align: center;
        }
    </style>
    <br>
    <p> Chúng tôi tự tin là đơn vị hàng đầu Việt Nam cung cấp giải pháp phần mềm, web application một cách toàn diện nhất</p>
     
     <p>Có rất nhiều sản phẩm tuyệt vời được tạo ra bởi đội ngũ tài năng của LinxHQ, như công cụ quản lý dự án,LinxBook, LinxCloud,.. và hệ thống xin nghỉ phép online(LeaveRequest) cũng là 1 công cụ như vậy</p> 

     Trong doanh nghiệp, đặc biệt là đối với những dự án quan trọng, mỗi nhân viên luôn phải làm việc theo quy trình và đưa ra thời hạn thực hiện để đảm bảo khối lượng và mục tiêu công việc được hoàn thành đúng tiến độ. Vì vậy, việc họ xin nghỉ phép vì bất kỳ lý do gì, nên luôn nằm trong tầm kiểm soát và điều hướng kịp thời của nhà quản lý.

Tuy nhiên, theo cách quản lý truyền thống, quy trình xin nghỉ phép cũng như cách quản lý lịch nghỉ phép của mỗi nhân viên khá rườm rà và xảy ra một vài vấn đề thường gặp: <br>

• Đơn nghỉ phép viết tay dẫn đến khó khăn khi lưu trữ.<br>
• Bộ phận nhân sự quản lý, tính toán ngày nghỉ phép bằng phương thức thủ công.<br>
• Các thành viên trong nhóm không nắm rõ lịch nghỉ của thành viên xin nghỉ, làm ảnh hưởng đến tiến độ mục tiêu, công việc.<br>
<b>Phương thức quản trị nhân sự hiện đại mà chúng ta đang áp dụng sẽ đem lại những lợi ích gì? </b> <br>

Một trong những điểm khác biệt của công cụ này với những công cụ quản trị khác ấy chính là tính năng cho phép nhân viên ghi lịch nghỉ ngay trên phần mềm mọi lúc, mọi nơi trên mọi thiết bị: máy tính bàn, máy tính xách tay, điện thoại thông minh và máy tính bảng. Tính năng này mang đến những lợi ích trực tiếp cho từng vai trò trong doanh nghiệp:<br>

<b>Đối với Tổ chức, Doanh nghiệp:<br></b>

• Thiết lập một hệ thống duy nhất để áp dụng cho việc quản lý thời gian, vắng mặt xuyên suốt cả tổ chức.<br>
• Tăng tốc và sắp xếp hợp lý hóa toàn bộ quá trình quản lý nghỉ phép và vắng mặt.<br>
• Giảm đáng kể thời gian cho nhân viên và bộ phận quản lý nghỉ đã sử dụng cho việc lập đơn, phê duyệt và quản lý thông tin nghỉ.<br>
• Loại bỏ các lỗi phát sinh khi quản lý nghỉ bằng giấy.<br>
• Ghi nhận chính xác và giám sát tất cả các loại phép của nhân viên bao gồm nghỉ phép, không phép, ngày lễ, ngày đào tạo và những ngày bị ốm.<br>
• Thiết lập luồng phê duyệt đơn xin nghỉ, hỗ trợ thiết lập xử lý, xét duyệt các đơn này mọi lúc, mọi nơi theo thời gian thực.<br>
• Đơn xin nghỉ phép của một cá nhân sẽ được gửi qua email đến những người thường xuyên làm việc cùng nhân viên đó.
Xin nghỉ phép đơn giản chỉ với một click <br>

Quy trình xin nghỉ phép và duyệt nghỉ phép đơn giản và thuận tiện.<br>

<b>Đối với nhân viên:<br></b>

• Giúp tuân thủ đúng các quy định trong Luật Lao động và của Tổ chức, Doanh nghiệp.<br>
• Không phải in đơn từ, không phải gặp cấp quản lý để xin chữ ký. Công việc chỉ là thao tác đơn giản: điền thông tin lịch nghỉ trên phần mềm và 1 lần click chuột “Cập nhật”. Đơn nghỉ phép sẽ được gửi đến quản lý trực tiếp phê duyệt.<br>
• Tạo mới Đơn xin nghỉ phép và gửi phê duyệt online.<br>
• Xem được thông tin Danh sách lịch nghỉ, Tổng hợp lịch nghỉ cá nhân.<br>
• Theo dõi được tình trạng giải quyết đơn xin nghỉ phép.<br>
• Nhận được email thông báo tình trạng xét duyệt đơn xin nghỉ.<br>
<b>Đối với Bộ phận Nhân sự, quản lý nghỉ:<br></b>

• Dễ dàng quản lý, xét duyệt các đơn nghỉ phép của nhân viên trong Danh sách lịch nghỉ trên phần mềm.<br>
• Tổng hợp một cách tập trung đầy đủ thông tin và xu hướng vắng mặt của tất cả nhân viên.<br>
     
  </section>
</main>
<script>
    (function() {

  var nav = $('nav'),
    menu = $('nav h1'),
    main = $('main'),
    open = false,
    hover = false;

  menu.on('click', function() {
        open = !open ? true : false;
    nav.toggleClass('menu-active');
    main.toggleClass('menu-active');
    nav.removeClass('menu-hover');
    main.removeClass('menu-hover');
    console.log(open);
  });
  menu.hover( 
    function() {
      if (!open) {
        nav.addClass('menu-hover');
        main.addClass('menu-hover');
      }
    }, function() {
      nav.removeClass('menu-hover');
      main.removeClass('menu-hover');
    }
  );

})();
    
</script>
</body>
</html>