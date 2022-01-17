 <?php

include('index.php'); 

if(isset($_POST["sub"]))
{
  $conn=mysqli_connect("sql6.freesqldatabase.com","sql6466184","NkynqrJ36R","sql6466184");
  $Depname=$_POST["Deptname"];
  $item=$_POST["item"];
  $quan=$_POST["quantity"];
  $Add=$_POST["Address"];
  $sql="insert into items(department,item,quartity,address) 
  values('$Depname','$item',$quan,'$Add')";


if (mysqli_query($conn,$sql))
{

  echo ' <div class="alert alert-success" role="alert">
  Booking Successful 
</div> '; 
 
}
else{
  echo "not ok";
  echo mysqli_error($conn);
}
}


?>
