<?php



session_start();
if ($_SESSION['type']!=0)
 header("Location:login.php");





 ?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

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
<div class="container">
  
<div style="background-color: rgba(0,0,0,0.1); width: 100%;height: 1000%; border-radius: 10px; padding: 5px; margin: 5px auto;  ">
  <div class="container" style="width: 100%; height: 100%;   "  >
    <?php 
      include'conn.php';
      if(isset($_GET['name'])){
        $x=$_GET['name'];

      $r=mysqli_query($con,"select * from product where category='$x' ");
      if (mysqli_num_rows($r)>0){
        while ($row=mysqli_fetch_array($r)) {
           echo'
            <div class="col-md-4" style="border:5px;  padding:10px; " >
            <div class="panel-warning" style=" border-radius:10px; border:1px soild; padding:1px; margin:2px; width:300px; border-style: dashed; ">

          <div class="pannel-header" style="margin:auto; " > 
          <a target="_blank" href="uploadimages/'.$row['image'].'" >

                    
           <img src="uploadimages/'.$row['image'].'" style="width:200px;height:200px ; border-radius:20px; margin:50px;"

                >

              

           
           </div>


            <div class="pannel-body" > 
            <h2 class=" text-color:black text-center"> ' .$row['name'].'    </h2>   

             </div>




          <div class="pannel-footer">  
            <h2 class="text-center text-danger"> ' . $row['price'].'    </h2>   
            
          </div>

          </div>



            </div>



          ';
        
       }
        }
      }
       

  ?>


    </div>
 
</div>
</div>






<script type="text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html> 




