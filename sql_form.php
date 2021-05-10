<!DOCTYPE html>
<?php
session_start();?>
<html lang="en">
<head>
    
</head>
<style>
    .content {
    max-width: 500px;
    margin: auto;
}
</style>
<body class="content">
<form action="" method="post" enctype="multipart/form-data">
        <table>
            <tbody>
            <h1 align="center">Đăng Ký</h1>
                <tr>
                    <td><label>Tài khoản</label></td>
                    <td><input type="text" class="form-control" name="username" value=<?php  if(isset($_POST['username'])) echo $_POST['username']?>><br></td>
                </tr>
                <tr>
                <td><label>Mật khẩu</label></td>
                    <td><input type="text" class="form-control" name="password" value=<?php  if(isset($_POST['password'])) echo $_POST['password']?>><br></td>
                </tr>
                <tr>
                <td><label>Ghi chú</label></td>
                    <td><input type="text" class="form-control" name="note" value=<?php  if(isset($_POST['note'])) echo $_POST['note']?>><br></td>
                </tr>
                <tr>
                <td><label>Hình ảnh</label></td>
                    <td><input id="fileToUpload" type="file" name="hinh" ><br></td>
                </tr>
                <tr>
                    <td rowspan="2"><input type="submit" name ="btn" class="btn btn-success" value="Đăng Ký"></td>
                </tr>
            </tbody>
        </table>
    </form>
    <?php
            if(isset($_POST['username']))
            $username = $_POST['username'];
            if(isset($_POST['password']))
            $password = $_POST['password'];
            if(isset($_POST['note']))
            $note = $_POST['note'];
            if(isset($_FILES['hinh']))
            $file = $_FILES['hinh'];
            if(isset($_POST['btn'])){
                $conn=mysqli_connect('localhost','root','','test1');
                $sql = "select * from Users where username = '$username'";
                $kq=mysqli_query($conn,$sql);
                if(!$kq){
                    echo "lỗi câu truy vấn";
                }
                else{
                    $dem=mysqli_num_rows($kq);
                    if($dem>=1){
                        ?><div class="alert alert-warning">
                            <strong>Warning! </strong>Tài khoản đã tồn tại</a>
                        </div><?php
                    }
                    else{
                        if($file['name']!=''){
                            $image = $file['name'];
                            $sql = "INSERT INTO `users` (`username`, `password`, `note`, `avatar`) 
                                VALUES ('$username', '$password', '$note', '$image') ";
                        }
                        else{
                            $sql = "INSERT INTO `users` (`username`, `password`, `note`, `avatar`) 
                                VALUES ('$username', '$password', '$note', '') ";
                        }
                    if(mysqli_query($conn,$sql)){
                        if($file['name']!=''){
                            move_uploaded_file($file['tmp_name'],'IMAGE/'.$file['name']);
                            ?><div class="alert alert-success">
                                <strong>Success! </strong>Đăng ký thành công! Chuyển đến trang <a href="http://localhost/Long_19cntt1a/login.php" class="alert-link">Đăng Nhập</a>.
                            </div><?php
                            
                        }
                        elseif($file['name']==''){
                            ?><div class="alert alert-success">
                                <strong>Success! </strong>Đăng ký thành công! Chuyển đến trang <a href="http://localhost/Long_19cntt1a/login.php" class="alert-link">Đăng Nhập</a>.
                            </div><?php
                        }
                    }
                    else{
                        echo "Đăng ký thất bại";
                    }
                }    
            }
        }
    ?>
</body>
</html>