<?php
    if(isset($_GET['Username'])){
        $user = $_GET['Username'];
        $conn = mysqli_connect('localhost','root','','test1');
        $sql = "Delete from users where Username = '$username'";
        if(mysqli_query($conn,$sql))
            header('location:http://localhost/Long_19cntt1a/danhsach.php');
            else{
                echo "Error";
            }
    }
?>