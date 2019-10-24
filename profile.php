<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
$conn = mysqli_connect("localhost", "root", "", "payments");
?>
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Status</th>
      <th scope="col">D.O.P</th>
      <th scope="col">Mileage</th>
    </tr>
  </thead>
  <?php
  $customers = mysqli_query($conn,"select * from customers");
  $cnt=1;
  while ($row = mysqli_fetch_array($customers)){
  ?>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $row['customer_name'];?></td>
      <td><?php echo $row['status'];?></td>
      <td><?php echo $row['due_date'];?></td>
      <td><?php echo $row['mileage'];?></td>
    </tr>
  </tbody>
<?php
$cnt=$cnt+1;
}
?>
</table>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>