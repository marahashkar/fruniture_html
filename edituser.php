<?php



session_start();
if ($_SESSION['type']!=0)
 header("Location:login.php");





 ?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="conn.php">
<title> edituser </title>
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
  
  <style type="text/css">
    * {box-sizing: border-box}

/* Full-width input fields */
  input[type=text] , input[type=text], input[type=password],input[type=phone]{
  width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus,  input[type=text]:focus, input[type=password]:focus , input[type=phone]:focus{
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
border-radius: 10px;
background-color: inherit;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  display: inline-block;
  color: green;
  margin: 5px 0 22px 0;
}

/* On mouse-over */
.cancelbtn:hover {background: #eee;}

.editbtn {
  border-radius: 10px;
  background-color: inherit;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  display: inline-block;
  color: green;
  margin: 5px 0 22px 0;
}

/* On mouse-over */
.editbtn:hover {background: #eee;}


/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
  }
}
</style>
<body>
 <?php 
include'conn.php';

  if(isset($_GET['id']))
   $x=$_GET['id'];
 $result=mysqli_query($con,"select * from users where id='$x' ");
 $row=mysqli_fetch_array($result);

 ?>
 <?php 
 $name=isset($_POST['name'])?$_POST['name']:'';
 $email=isset($_POST['email'])?$_POST['email']:'';
 $password=isset($_POST['pass'])?$_POST['pass']:'';
  $phone=isset($_POST['phone'])?$_POST['phone']:'';
 $type=isset($_POST['type'])?$_POST['type']:'';
 if(isset($_POST['edit'])){
 $res= mysqli_query($con,"update users set name='$name',
   email='$email',
   pass='$password',
   phone='$phone',
   type='$type' 
   where id='$x' ");
 if(isset($res)){
  echo '<script> alert("edit successfuly")</script>';
  header("Location:mangeuser.php");
 }
 }

 ?>


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
  
<div style="background-color: rgba(0,0,0,0.1); width: 75%;height: 75%; border-radius: 10px; padding: 10px; margin: 30px auto">
  
<form action="edituser.php?id=<?php echo $x; ?>" method="post"  style="border:1px solid #ccc; width: 75% padding: 20px; text-align: center;" >
      <h2>Edit User's Information</h2>  
      <hr>
     <label for="Name"><b>Name</b></label><br>
    <input type="text"   name="name" required id="name" value="<?php echo $row['name'] ?> " ><br>
        <label for="Email"><b>Email</b></label><br>

    <input type="text" name="email"  value="<?php echo $row['email'] ?> " required id email><br>

      <label for="Password"><b>Password</b></label><br>
    <input type="password"  name="pass" value="<?php echo $row['pass'] ?> " required id pass><br>

 <label for="Phone"><b>Phone</b></label><br>
    <input type="text" name="phone" required id="phone" value="<?php echo $row['phone'] ?> "  ><br>
    


         <label for="type"><b>Type</b></label><br>
    <input type="text" name="type" required id="type" value="<?php echo $row['type'] ?> "  ><br>


    

    


    <div class="clearfix">
      <a href="mangeusers.php">
      <button type="button" class="cancelbtn "> Cancel</a></button>

      </a>
      <button type="submit" class="editbtn" name="edit" style="margin-left: 30px; ">Save </button>
    </div>
</form>




 
</div>
</div>






<script type="text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html> 


