<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>


<?php
    $kq="";$a="";$b="";

        if(isset($_POST['giai']))
		{
			$a=isset($_POST['a'])?(int)$_POST['a']:'';
			$b=isset($_POST['b'])?(int)$_POST['b']:'';
			
			if($a==0)
			
				if($b==0)
					
					$kq = "phương trình vô số nghiệm";
				else
                   				
					$kq = "phương trình vô nghiệm";
			else{
				$x=-$b/$a;
				$kq = "phương trình có nghiệm x=".$x;
			}
		    
		}
	

				

?>
<div align = center>
<h2>Giải Phương Trình Bậc 1</h2>
<form action="giaiptbac1.php" method="post">
  <label for="fname">a:</label>
  <input type="text" name="a" value="<?php if(isset($_POST['a'])) echo $_POST['a']?>">
  <label for="lname">b:</label>
  <input type="text" name="b" value="<?php if(isset($_POST['b'])) echo $_POST['b']?>">
  <br>
  <input type="submit" class="btn btn-primary" name="giai" value="Giải">
</form> 
<?php
echo"".$kq ;
?>
</div>

</body>
</html>