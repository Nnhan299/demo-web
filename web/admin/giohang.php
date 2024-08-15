<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đặt hàng</title>
    <style type="text/css">

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
            
            }

        .boxcenter {
            width: 60%;
            margin: 0 auto;
        }

        .row {
            float: left;
            width: 100%;
        }

        .mb {
            margin-bottom: 20px;
        }

        .mb10 {
            margin-bottom: 10px;
        }

        .mr {
            margin-right: 2%;
        }

        .demo {
            background-color: antiquewhite;
            min-height: 100px;
        }

        .header {
            background-image: linear-gradient(#F90, #F60);
            border: 1px #F60 solid;
            color: #FFF;
            border-radius: 5px;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #055E43;
        }

        nav .logo {
            margin-left: 20px;
        }
        
        nav .menu {
            display: flex;
            justify-content: center;
            flex-grow: 1;
        }


            nav .menu ul li{
            
            list-style: none;
            margin: 0;
            transition: 0.5s;
            position: relative;
            display: inline-block;
            border-radius: 10px;
            right: 0;
            font-weight: bold;


        }
        
        nav .menu ul li::after{
            content: '';
            width: 10px;
            height: 100%;
            position: relative;
            top: 0;
            

        }
        
        nav .menu ul li:last-child{
            border-bottom: none;
            margin: 0;
        }
        nav .menu ul li:hover{
            background: #566475;
        }
        nav .menu ul li:hover .submenu{
            display: block;
        }
        nav .menu ul li a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
            display: inline-block;
            font-size: 18px;
   
        }

        nav .menu ul li .submenu{
            position: absolute;
            top: 100%; 
            background-color: #708090;
            width: 180px;
            display: none;
            border-radius: 10px;
            margin: 0;
            text-align: center;

        }


        nav .search {
            line-height: 35px;
            margin-right: 20px;
            width: fit-content; 
            float: none; 
        }

        nav .search input{
            border-radius: 20px  ;
            border: none; 
            width: 300px;
            height: 40px;
            margin-bottom: 20px;
            margin-top: 20px;
            border: 2px solid #708090;
        }
        
        nav .search button {
            background: #708090; 
            border: none; 
            color: white; 
            font-size: 15px;
            padding: 8px 16px; 
            border-radius: 10px; 
            cursor: pointer; 
            transition: background-color 0.3s;
            font-weight: bold; 
        }

        nav .search button:hover {
            background-color: #566475; 
        }

         nav .actions{
            display: flex;

        }
        nav .actions .item{
            margin-left: 10px;
            margin-right: 30px;
            font-size: 30px;
            
        }
         nav .actions .item a{
            color: #fff;
         }

        a {
            text-decoration: none;
        }

        .giohang {
            position: fixed;
            border-radius: 10px;
            right: 20px;
            top: 20px;
            height: 60px;
            background-image: linear-gradient(#F90, #F60);
            padding: 10px;
        }

        .giohang img {
            width: 40px;
            float: left;
            margin-right: 5px;
        }

        .giohang span {
            font-weight: bold;
            font-size: 2vw;
            color: yellow;
            height: 40px;
            line-height: 40px;
        }

        .footer {
            background-color: #F90;
            border: 1px #F60 solid;
            color: #FFF;
            font-size: 0.8vw;
            border-radius: 5px;
            padding: 20px;
        }


        h1 {
            margin: 20px 0px;
            font-size: 1.2vw;
            color: #F60;
        }



        .boxtrai {
            float: left;
            width: 74%;
        }

        .boxphai {
            float: left;
            width: 24%;
        }

        .boxcontent2 {
            border-left: 1px #CCC solid;
            border-right: 1px #CCC solid;
            background-color: #EEE;
        }

        .boxfooter {
            padding: 10px;
            background-color: #EEE;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
            border-left: 1px #CCC solid;
            border-right: 1px #CCC solid;
            border-bottom: 1px #CCC solid;
        }

        .banner {
            min-height: 300px;
            width: 100%;
            text-align: center;
        }

        .banner img {
            height: 300px;
        }

        .boxsp {
            float: left;
            width: calc(32% - 10px);
            min-height: 300px;
            border: 1px #EEE solid;
            border-radius: 5px;
            margin-bottom: 20px;
            position: relative;
            padding: 5px;
        }

        .boxsp input {
            width: 40px;
            position: absolute;
            right: 5px;
            bottom: 40px;
            border-radius: 5px;
            border: 1px #FC0 solid;
        }

        .boxsp button {
            width: 80px;
            position: absolute;
            right: 5px;
            bottom: 10px;
            background-color: #FF6600;
            border-radius: 5px;
            border: 1px #FC0 solid;
            padding: 5px 0px;
            color: #EEE;
        }

        .boxsp .img {
            min-height: 230px;
            text-align: center;
        }

        .img img {
            height: 220px;
            width: 100%;
            object-fit: cover;
        }




        /* giỏ hàng */

        table {
            width: 135%;
            border-collapse: collapse;
        }

        th {
            background-color: #999;
            padding: 10px;
        }

        th,
        td {
        border: 1px #CCC solid;
            text-align: center;
        }

        td div {
            width: calc(100% - 20px);
            padding: 0px 10px;
            text-align: right;
        }

        th div {
            width: calc(100% - 10px);
            padding: 0px 5px;
            text-align: right;
            font-size: 1.5rem;
        }

        td img {
            width: 100px;
        }

        /* menu dọc*/

        .menudoc ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }

        .menudoc ul li {
            padding: 10px 20px;
            background-color: #FFF;
            border-bottom: 1px #CCC solid;
        }

        .menudoc ul li a {
            color: #666;
            text-decoration: none;
        }

        .menudoc ul li:hover {
            background-color: #CCC;
        }

        .searbox input[type="text"] {
            width: 100%;
            padding: 5px 10px;
            background-color: #FFF;
            border: 1px #CCC solid;
            border-radius: 5px;
        }

        /* thong tin nhận hàng */

        .thongtinnhanhang tr td {
            text-align: left;
            padding: 10px;
        }

        .thongtinnhanhang input {
            width: 100%;
            border: 1px #CCC solid;
            padding: 5px;
            border-radius: 5px;
        }

        .dongy {
            width: 150px;
            border: 1px #F90 solid;
            background-image: linear-gradient(#F90, #F60);
            padding: 10px;
            border-radius: 5px;
            color: #FFF;
            font-weight: bold;
        }

        .dongy:hover {
            background-image: linear-gradient(#F30, #000);
        }
        .p1{
            font-weight: bold;
            font-size: 20px;
            padding-bottom: 10px;
            color: #ffffff;
        }


        .foot{
            background-color: #2F4F4F;
            display: flex;
            justify-content: space-between; 
            padding: 30px 100px 0 30px; 
            height: 230px;
            color: #ffffff;
        }

        ul{
            list-style: none;
            padding-left: 0;
            color: #fff;
        }

        ul li{
            padding: 5px 0;
        }

        ul li a{
            text-decoration: none;
            color: #ffffff;
        }
        



        .foot_fina{
            background-color: #111;
            width: auto;
            height: 70px;
        }

        .contact{
            float: right;
            height: 100%;
            margin-right: 15px;
        }

        .contact ul{
            margin-bottom: 15px;
            margin-top: 15px;
        }

        .contact ul li{
            display: inline-block;
            margin: 7px;  
        }

        .contact ul li a{
            font-size: 15px;
        }

        .contact .vert{
            border-right:3px solid #555;
            padding-right: 6px;
        }
        .foot4 .icon li{
            display: inline-block;
            margin-right: 15px;
        }
    </style>
</head>
<body>
    <nav>
    <div class="logo">
            <img src="http://localhost/web/logo4-removebg-preview.jpg" >

        </div>
    <div class="menu">
        <ul>
            <li><a href="trangchu.php">Trang chủ</a></li>
            <li><a href="sanpham.php">Sản phẩm</a></li>
            <li><a href="#">Đăng nhập/Đăng ký </a>
                <div class="submenu">
                    <ul>
                        <li><a href="dangnhap.php">Đăng nhập</a></li>
                        <li><a href="dangky.php">Đăng ký</a></li>
                    </ul>
                </div>
            </li>

        </ul>
    </div>
    

</nav>
        <div class="row mb ">
            <div class="boxtrai mr">
                <div class="row">
                    <h1>THÔNG TIN NHẬN HÀNG</h1>
                    <table class="thongtinnhanhang">
                        <tr>
                            <td width="20%">Họ tên</td>
                            <td><input type="text" name="hoten"></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><input type="text" name="diachi"></td>
                        </tr>
                        <tr>
                            <td>Điện thoại</td>
                            <td><input type="text" name="dienthoai"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email"></td>
                        </tr>
                    </table>
                </div>
                <div class="row mb">
                    <h1>GIỎ HÀNG</h1>
                    <table>
                        <tr>
                            <th>STT</th>
                            <th>Hình</th>
                            <th>Tên sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền ($)</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><img src="http://localhost/web/anh4.jpg" alt=""></td>
                            <td>Sữa Vinamilk CanxiPro</td>
                            <td>400.000 vnđ</td>
                            <td>1</td>
                            <td>
                                <div>400.000 vnđ</div>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="5">Tổng đơn hàng</th>
                            <th>
                                <div>1</div>
                            </th>

                        </tr>
                    </table>
                </div>
                <div class="row mb">
                    <button class="dongy">ĐỒNG Ý ĐẶT HÀNG</button>
                </div>
            </div>
        </div>
        <div class="foot">
            <div class="logo">
                <img src="http://localhost/web/logo4-removebg-preview.jpg" >
            </div>
        <div class="foot1">
            <p class="p1">SẢN PHẨM</p>
            <div class="foot1-1">
                <ul>
                    <li><a href="#"><p>PediaSure</p></a></li>
                    <li><a href="#"><p>Vinamilk Optimum</p></a></li>
                    <li><a href="#"><p>Ensure</p></a></li>
                    <li><a href="#"><p>Dialac Alpha</p></a></li>
                </ul>
            </div>
        </div>
        <div class="foot2">
            <p class="p1">HỖ TRỢ</p>
            <div class="foot2-1">
                <ul>
                    <li><a href="#"><p>Chương Trình Đổi Trả</p></a></li>
                    <li><a href="#"><p>Hướng Dẫn Sử Dụng</p></a></li>
                    <li><a href="#"><p></p>Tư Vấn</a></li>
                    <li><a href="#"><p>Giải Đáp Thắc Mắc Của KH</p></a></li>
                </ul>
            </div>
        </div>
        <div class="foot3">
             <p class="p1">CHƯƠNG TRÌNH</p>
             <div class="foot3-2">
                <ul>
                    <li><a href="#"><p>Sự Kiện</p></a></li>
                    <li><a href="#"><p>Tin Tức</p></a></li>
                    <li><a href="#"><p>Khuyến Mãi</p></a></li>
                    <li><a href="#"><p>Cửa Hàng</p></a></li>
                </ul>
            </div> 
        </div>
<div class="foot4">
            <p class="p1">FOLLOW US</p>
            <div class="icon">
                    <li><img src="http://localhost/web/face.jpg.jpg" width="25px"  alt="FACEBOOK"></li>

                    <li><img src="http://localhost/web/you.jpg.jpg" width="25px" alt="YOUTUBE"></li>

                    <li><img src="http://localhost/web/ig.jpg.jpg" width="25px" alt="INSTAGREAM"></li>

                    <li><img src="http://localhost/web/tik.jpg.jpg" width="25px" alt="TIKTOK"></li>
            </div>
            <div id="kenh">
                <p>Liên hệ (miễn phí): 1800.6229 (08h30-21h30)</p>
            </div>
            <div id="kenh">
                <p>Khiếu nại - Góp ý: 088.99.33 (08h30-21h00)</p>
            </div>
        </div>
    </div>
    <div class="foot_fina">
        <div class="logo">
        </div>
        <div class="contact">
            <ul class="p1">
                <li class="vert"><a href="#">LIÊN HỆ</a></li>
                <li class="vert"><a href="#">CHÍNH SÁCH BẢO MẬT</a></li>
                <li class="vert"><a href="#">ĐIỀU KHOẢN SỬ DỤNG</a></li>
            </ul>
        </div>
    </div>
    </div>

</body>

</html>