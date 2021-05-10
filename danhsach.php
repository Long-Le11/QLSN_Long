<?php
session_start();?>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
            <?php
                $conn=mysqli_connect('localhost','root','','test1');
                $sql = 'select * from users';
                $kq=mysqli_query($conn,$sql);
            ?>
            <table class="table table-bordered">
            <tr>
                    <th>Username</th>
                    <th>PassWord</th></th>
                    <th>Note</th>                 
                    <th>Avatar</th>
                </tr>
                <?php
                    while($row=mysqli_fetch_assoc($kq)){
                        ?>
                         <tr>
                        <td><?php echo $row["username"] ?></td>   
                        <td><?php echo $row["password"] ?></td>
                        <td><?php echo $row["note"] ?></td>
                        <td><img src='<?php echo 'IMAGE/'.$row["avatar"] ?>' width=100 height=100 ></td>
                        <td><a href="delete.php ? masp=<?php echo $row['masp']?> && file= <?php echo $row['IMAGE']?>"> xóa</a>||
                        <a href="update.php ? masp=<?php echo $row['masp']?> && file= <?php echo $row['IMAGE']?>">Cập Nhật</a></td>
                        </tr>
                        <?php
               
                    }
                ?>
            </table>
                <input type="submit" name="btn" class="btn btn-info" value="quay lại">

                <?php
                    if(isset($_POST['btn']))
            {
                
               
                header('Location:http://localhost/thi/new.php');  
            }
            
                ?>
        </form>
    </body>
       
     </html>