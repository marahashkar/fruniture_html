<?php



session_start();
ob_start();
if ($_SESSION['type']!=0)
 header("Location:login.php");





 ?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title> admin dashboard</title>
<style>
body {font-family: Arial, Helvetica, sans-serif; background-image: url(images/8.jpg); background-repeat:no-repeat; background-size:cover;  }

.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #000;
}

.active {
  background-color: #4CAF50;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}
</style>
<body>


<div class="container-fluid" >
  
<div class="navbar " >
 <a class="active" href="admin.php"><i class="fa fa-fw fa-home"></i> Home</a> 
   <a href="addproduct.php"><i class="glyphicon glyphicon-plus"></i> Add Product </a> 
  <a href="addcategory.php"><i class="glyphicon glyphicon-plus"></i> Add Category </a> 

    <a href="mangeuser.php"><i class="fa fa-fw fa-"></i> Mange Users</a> 
  <a href="mangecategory.php"><i class="fa fa-fw fa-"></i> Mange Category</a>

  <a href="mangeproduct.php"><i class="fa fa-fw fa-"></i> Mange Product</a>
 
  <a href="productrating.php"><i class="glyphicon glyphicon-rate"></i> Product Rating</a> 
      <a href="orders.php"><i class="glyphicon glyphicon-rate"></i>User's Orders </a> 
 
      
          <a href="index.html" style="float: right;"><i class="glyphicon glyphicon-log-out"></i>LogOut </a>

</div>

</div>
<div class="container  " style="width: 90%">
    
  
  <h2 class=" text-danger text-center "> All Orders Data</h2> <hr>
  <table class="table table-striped table-bordered">
    <tr>
      <th>Name</th>
      <th>Lastname</th>
      <th>Email</th>
       <th>Phone</th>
      <th>Country</th>
      <th>Subject</th>
      <th>Delete</th>




    </tr>
    <?php
    include'conn.php';
    $r=mysqli_query($con,"select * from usersc");
    while($row=mysqli_fetch_array($r))
    {
      echo'
      
      <tr>
      <td>'.$row['name'].'</td> 

      <td>'.$row['lname'].'</td> 

      <td>'.$row['email'].'</td> 
      


      <td>'.$row['phone'].'</td> 

      <td>'.$row['country'].'</td>
      <td>'.$row['subject'].'</td> 



      <td> <a href="orders.php?m='.$row['id'].'" class="btn btn-info btn-s "> 
      <i class="glyphicon glyphicon-trash "></i> </a> </td> 


      

      </tr>
     ';

    }

   if (isset($_GET['m'])) {
   $x=$_GET['m'];
   mysqli_query($con,"delete from users where id='$x'");
   header("Location:orders.php");
   }




    ?>
    
  </table>

</div>
</div>





<script type="text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html> 

<?php
ob_end_flush();
?>
