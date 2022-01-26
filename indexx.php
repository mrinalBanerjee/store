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

  echo "Booking Successful"; 
 
}
else{
  echo "not ok";
  echo mysqli_error($conn);
}
}


?>
