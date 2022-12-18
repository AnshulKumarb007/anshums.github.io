<!DOCTYPE html>
<html lang="en">
<head>
  <title>Magic_squre</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
	<form action="index.php" method="post" >
	<label>date of birth</label>
	<div class="form-group">
		<input type="text" name="dd" class="form-control"/><br>
		<input type="text" name="mm" class="form-control"/><br>
		<input type="text" name="cc" class="form-control"/><br>
		<input type="text" name="yy" class="form-control"/><br>
		<input type="submit" name="submit" value="submit">
	</div>
</form>
</div>
<div class="col-md-4">
	
	<?php 
if(isset($_POST['submit']))
{
	
	$dd=$_POST['dd'];
	$mm=$_POST['mm'];
	$cc=$_POST['cc'];
	$yy=$_POST['yy'];
	
}

 ?>
 <br><Br>
 <table border="1" width="100%">
 	<tr>
 		<td><?php echo $dd;?></td>
 		<td><?php echo $mm;?></td>
 		<td><?php echo $cc;?></td>
 		<td><?php echo $yy;?></td>
 	</tr>
 	<tr>
 		<td><?php echo $yy+1;?></td>
 		<td><?php echo $cc-1;?></td>
 		<td><?php echo $mm-3;?></td>
 		<td><?php echo $dd+3;?></td>
 	</tr>
 	<tr>
 		<td><?php echo $mm-2;?></td>
 		<td><?php echo $dd+2;?></td>
 		<td><?php echo $yy+2;?></td>
 		<td><?php echo $cc-2;?></td>
 	</tr>
 	<tr>
 		<td><?php echo $cc+1;?></td>
 		<td><?php echo $yy-1;?></td>
 		<td><?php echo $dd+1;?></td>
 		<td><?php echo $mm-1;?></td>
 	</tr>
 </table>
</div>
</div>
</div>


</body>
</html>
