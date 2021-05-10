<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Lê Xuân Long</h2>
          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Address</th>
      </tr>
    </thead>
    
  </table>
</div>

<?php
$conn = mysqli_connect('localhost', 'root', '', 'test') or die ('Không thể kết nối tới database');


$sql = 'SELECT * FROM users';

$result = mysqli_query($conn, $sql);
if (!$result){
die ('Câu truy vấn bị sai');
}
while ($row = mysqli_fetch_assoc($result)){ var_dump($row);
}
</body>
</html>