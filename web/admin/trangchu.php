<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Trang chủ</title>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
            
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

 		 .p1{
            font-weight: bold;
            font-size: 20px;
            padding-bottom: 10px;
        }

        .foot{
            background-color: #2F4F4F;
            display: flex;
            justify-content: space-between; 
            padding: 30px 100px 0 30px; 
            height: 230px;
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
             color: #FFFFFF;
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


        #wrapper{
            max-width: 1170px;
            margin: 0 auto;
        }

        .headline{
            text-align: center;
            margin: 40px 0px;              
        }

        h3{

            font-size: 30px;
            color: #black;
            padding: 10px 20px;            
            border: 1px solid #555;
            display: inline-block;
            color: #555;
            background-color: #FFBF74;
            font-weight: 600;             
            border-radius: 20px;
        }

        .products{
            list-style: none;
            display: flex;                  
            flex-wrap: wrap;               
            justify-content: center; 
            
        }

        .products li{
            flex-basis: 20%;
            padding-top: 16px;
            padding-bottom: 28px;
            padding-left: 30px;
            padding-right: 0px;
            box-sizing: border-box;
            background:  #7D7D7D;
            margin-bottom: 20px;
            border-radius: 10px;
            margin-right: 30px;

        }

        .products li:last-child {
         margin-right: 0; 
}

        .products li img{
            margin-top: 15px;
            width: 90%;
            border-radius: 8px  ;
            border: 1px solid #555;
            color: #FFBF74;
*/
        }

        .products li .products-info{
            padding: 50px 0px;
        }

        .products li .products-info a{
            text-decoration: none;         

        }

        .products li .products-info a.products-discription{
            font-size: 10px;
            text-transform: uppercase;
            color: #9e9e9e;
            padding: 3px 0px;
        }

        .products li .products-info a.products-name{
            font-size: 20px;
            color: #334862;
            padding: 3px 0px;
        }
        .products li .products-info div.products-price{
            font-size: 30px;
            color: red;
            padding: 2px 0px;
            font-weight: 600;
        }

           
        .products li:hover a.buy-now{
            bottom: 0px;

        }

        .products li .products-top{
            position: relative;
            overflow: hidden;
        }

        .products li .products-top .products-thumb{
            display: block;
            margin-top: 20px;
        }

        .products li .products-top .products-thumb img{
            display: block;
        }

        .products li .products-top{
            position: relative;
        }

        .products li .products-top a.buy-now{
            text-decoration: none;
            text-align: center;
            display: block;
            background-color: #446084;
            color: white;
            padding: 10px 0px;
            position: absolute;
            width: 90%;
            transition: 0,25s ease-in-out;
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
    <div class="search">
        <input type="search" name="" placeholder="   Search...">
        <button>Tìm kiếm</button>
    </div>
    <div class="actions">
                <div class="item">
                    <a href="giohang.php"  class='bx bx-cart'></a>
                </div>
            </div>

</nav>


    <div class="slideshow-container">
	  <div class="mySlides fade">
	    <img src="http://localhost/web/hinhjpg.jpg" style="width:100%">
	    
	  </div>
	 
	  <div class="mySlides fade">
	    <img src="http://localhost/web/qc.jpg" style="width:100%">
	    
	  </div>
	 
	  <div class="mySlides fade">
	    <img src="http://localhost/web/r.jpg" style="width:100%">
	  </div>
</div>


<div style="text-align:center">
  <span class="dot" onclick="currentSlide(0)"></span> 
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
</div>

    <div id="wrapper">
        <div class="headline">
            <h1>SẢN PHẨM ĐÁNG CHÚ Ý</h1>
        </div>  

        <div class="products">

            <li>
                <div class="products-item">
                    <div class="products-top">
                        <a href="" class="products-thumb">
                            <img src="http://localhost/web/anh3.jpg" alt="">
                        </a>
                        <a href="" class="buy-now">MUA NGAY</a>
                    </div>
                    <div class="products-info">
                        <a href="" class="products-discription">Sữa Bột</a><br>
                        <a href="" class="products-name">Sữa Vinamilk Sure Prevent</a><br>
                        <div href="" class="products-price">350.000 vnđ</div>
                    </div>
                </div>
            </li>



            <li>
                <div class="products-item">
                    <div class="products-top">
                        <a href="" class="products-thumb">  
                            <img src="http://localhost/web/anh4.jpg" alt="">
                        </a>
                        <a href="" class="buy-now">MUA NGAY</a>
                    </div>
                    <div class="products-info">
                        <a href="" class="products-discription">Sữa Bột</a><br>
                        <a href="" class="products-name">Sữa Vinamilk CanxiPro</a><br>
                        <div href="" class="products-price">400.000 vnđ</div>
                    </div>
                </div>
            </li>



            <li>
                <div class="products-item">
                    <div class="products-top">
                        <a href="" class="products-thumb">  
                            <img src="http://localhost/web/anh2.jpg" alt="">
                        </a>
                        <a href="" class="buy-now">MUA NGAY</a>
                    </div>
                    <div class="products-info">
                        <a href="" class="products-discription">Sữa Bột</a><br>
                        <a href="" class="products-name">Sữa Glucerna 400g</a><br>
                        <div href="" class="products-price">500.000 vnđ</div>
                    </div>
                </div>
            </li>



            <li>
                <div class="products-item">
                    <div class="products-top">
                        <a href="" class="products-thumb">   
                            <img src="http://localhost/web/anh1.jpg" alt="">
                        </a>
                        <a href="" class="buy-now">MUA NGAY</a>
                    </div>
                    <div class="products-info">
                        <a href="" class="products-discription">Sữa Bột</a><br>
                        <a href="" class="products-name">Sữa PediaSure</a><br>
                        <div href="" class="products-price">450.000 vnđ</div>
                    </div>
                </div>
            </li>
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
    <script type="text/javascript">
  //khai báo biến slideIndex đại diện cho slide hiện tại
  var slideIndex;
  // KHai bào hàm hiển thị slide
  function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
         slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
 
      slides[slideIndex].style.display = "block";  
      dots[slideIndex].className += " active";
      //chuyển đến slide tiếp theo
      slideIndex++;
      //nếu đang ở slide cuối cùng thì chuyển về slide đầu
      if (slideIndex > slides.length - 1) {
        slideIndex = 0
      }    
      //tự động chuyển đổi slide sau 5s
      setTimeout(showSlides, 2000);
  }
  //mặc định hiển thị slide đầu tiên 
  showSlides(slideIndex = 0);
 
 
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
</script>
    </div>
</body>
</html>