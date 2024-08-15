<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng nhập</title>
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<style type="text/css">
		
		*{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

		body{
			background: url('http://localhost/web/logo5-removebg-preview.jpg') no-repeat;
			margin-bottom: 70px;
			background-size: 50%;
			background-position-y: -80px;
			font-size: 16px;
			background-position: center;

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


        nav .menu .left {
           
            list-style: none;
            left: -40%;
            transition: 0.5s;
            position: relative;
            display: inline-block;
            font-weight: bold;


        }
        
        nav .menu .left ::after{
            content: '';
            width: 10px;
            height: 100%;
            position: relative;
            top: 0;
            

        }
       
        nav .menu .left :last-child{
            border-bottom: none;
            margin: 0;
        }
        nav .menu .left :hover{
            background: #566475;
        }
        nav .menu .left  a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
            display: inline-block;
            font-size: 18px;
            border-radius: 10px;
            text-decoration-line: underline;
        }

          nav .menu .right {
           
            list-style: none;
            right: -40%;
            transition: 0.5s;
            position: relative;
            display: inline-block;
            font-weight: bold;


        }
        
        nav .menu right ::after{
            content: '';
            width: 10px;
            height: 100%;
            position: relative;
            top: 0;
            

        }
        
        nav .menu .right :last-child{
            border-bottom: none;
            margin: 0;
        }
        nav .menu .right :hover{
            background: #566475;
        }
        nav .menu .right  a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
            display: inline-block;
            font-size: 18px;
            border-radius: 10px;
        }

		#wrapper{
			min-height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
			
				
		}
		#form-login{
			max-width: 400px;
			background: transparent;
			flex-grow: 1;
			padding: 30px 30px 40px;
			box-shadow: 0px 0px 17px 2px rgba(255, 255, 255, 0.8);
			position: relative;
			backdrop-filter: blur(15px);
			color: #fff;
			border-radius: 20px;

		}
		.form-group i{
			position: absolute;
			right: 35px;
			font-size: 20px;


		}
		.form-heading{
			font-size: 25px;
			color: #f5f5f5;
			text-align: center;
			margin-bottom: 30px;

		}
		.form-group{
			border-bottom: 1px solid #fff;
			margin-top: 15px;
			margin-bottom: 20px;
			display: flex;
		}
		.form-input{
			background: transparent;
			border: 0;
			outline: 0;
			color: #f5f5f5;
			flex-grow: 1;
			font-size: 15px;
		}
		.form-input::placeholder{
			color: #f5f5f5;


		}
		.form-group a{ 
			position: absolute;
			right: 35px;
			font-size: 17px;
			text-decoration: none;

		}

		.form-submit{
			background: white;
			border: 1px solid #f5f5f5;
			color: black;
			width: 100%;
			text-transform: uppercase;
			padding: 6px 10px;
			transition: 0.25s;
			margin-top: 30px;
			border-radius: 40px;
			font-weight: 600;
		}
		.form-submit:hover{
			border: 3px solid #54a0ff;

		}
	</style>
</head>
<body>
	<nav>
    <div class="logo">
            <img src="http://localhost/web/logo4-removebg-preview.jpg" alt="Logo">

        </div>
    <div class="menu">
        	<div class="left">
            <a href="trangchu.php">Quay lại</a>
        </div>
        	<div class="right">
            <a href="dangky.php">Đăng ký</a>
        </div>
    </div>
</nav>
<div id="wrapper">

		<form action="" id="form-login">
			<h1 class="form-heading">Đăng nhập</h1>
			<div class="form-group">
				<input type="text" name="" class="form-input" placeholder="Tên đăng nhập">
				<i class='bx bx-user'></i>
			</div>
			<div class="form-group">
				<input type="password" name="" class="form-input" placeholder="Mật khẩu">
				<i class='bx bxs-lock-alt'></i>
			</div>

			<input type="submit" value="Đăng nhập" class="form-submit">

		</form>
	</div>

</body>
</html>



