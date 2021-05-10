
<html><?php session_start() ?>
<head>
<title>Animate Login Form</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css2.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
        <body><center>
        <form action="" method="post">
        
        
<div class="loginbox" >
    <h1 > Đăng Nhập </h1>
<div class="icon">
		<a class='btn' href='https://www.facebook.com/'>
		<i class="fab fa-facebook"></i>
		</a>
		<a class='btn' href='https://www.instagram.com/'>
		<i class="fab fa-instagram"></i>
		</a>
		<a class='btn' href='https://contacts.google.com/'>
		<i class="fab fa-google"></i>
		</a>
		<a class='btn' href='https://twitter.com/login'>
		<i class="fab fa-twitter"></i>
		</a>
		</div><br>
       <div class="textbox">
            <input type="text" class="buscar-txt" name="username" placeholder="Username" id="fileToUpload"/><br>
            </div>
            <div class="textbox">
             <input type="password" class="buscar-txt" name="pass" placeholder="PassWord" id="fileToUpload"/><br>
            </div>
             <input type="submit" value="Đăng nhập" name="login">
             <input type="submit" value="Đăng ký" name="back"><br>
             <div align="center"> 
             <?php
	if(isset($_POST['username']))
    $id = $_POST['username'];
    if(isset($_POST['password']))
    $pass = $_POST['password'];
    if(isset($_POST['login']))
    { 
        
        echo "$username " ; $conn=mysqli_connect('localhost','root','','test1');
        $sql="select * from user where id='$id'";
        $ketqua = mysqli_query($conn,$sql);
        $dem = mysqli_num_rows($ketqua);
        if($username=='' && $password=='')
        {
            echo "Hãy Nhập !!!";
            return 0;
        }
        if ($dem==0){
         echo "Tài Khoản không tồn tại";
        return 0;
    }

        else {
            $row=mysqli_fetch_assoc($ketqua);
        }
        if($pass==$row['pass']){
            echo "Đăng nhập thành công, hãy vào ";
         ?>         
        <center><a href="http://localhost/Long_19cntt1a/danhsach.php"><h2>trang chủ<h2></a></center>
        <?php
        }
        else {
         echo "sai pass";
    }

    $_SESSION['taikhoan']=$id;
}
?>
            </div>
            
</div>

        </form>
        


        </center>

</body>


    </html>