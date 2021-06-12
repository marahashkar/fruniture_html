<?php



session_start();
if ($_SESSION['type']!=1)
 header("Location:login.php");





 ?>


<!DOCTYPE html>
<html>
<head>
  <title>user</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Amarante' rel='stylesheet'>

  <style >

    
.get {
  font-size: 50px;
  color: #fff;
  text-align: center;
  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}


/* Add a black background color to the top navigation */
.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Add an active class to highlight the current page */
.active {
  background-color: #4CAF50;
  color: white;
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
  display: none;
}

/* Dropdown container - needed to position the dropdown content */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Style the dropdown button to fit inside the topnav */
.dropdown .dropbtn {
  font-size: 17px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

/* Style the dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Style the links inside the dropdown */
.dropdown-content a {
  float: right;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a dark background on topnav links and the dropdown button on hover */
.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

/* Add a grey background to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

/* Show the dropdown menu when the user moves the mouse over the dropdown button */
.dropdown:hover .dropdown-content {
  display: block;
}

/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: right;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}

 @media screen and (max-width: 600px) {
  .topnav a{
    float: left;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc; float: right;
  }
  .search button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}
 .search button:hover {
  background: #ccc;
}


/* On smaller screens, decrease text size */
@media only screen and (max-width: 500px) {
  .text {font-size: 11px}
}


  </style>

</head>
<body style="background-image: url(images/8.jpg); background-repeat:no-repeat; background-size: cover; font-family: Arial, Helvetica, sans-serif; ">

  <div class="header">
  <h1 class="get">Get Your Dream House</h1>

<div class="topnav" id="myTopnav">
  <a href="index.html" class="active">Home</a>
  <a href="Login.php">Login</a>
  <a href="contact.php">Contact</a>
   <a href="about.html">About</a>

 


    
    </div>


<div class="container">
  
<div style="background-color: rgba(0,0,0,0.1); width: 100%;height: 1000%; border-radius: 10px; padding: 5px; margin: 5px auto">
  <div class="container" style="width: 100%; height: 100%; "  >
    <?php 
      include'conn.php';
      $r=mysqli_query($con,"select * from category");
      if (mysqli_num_rows($r)>0) {
        while($row=mysqli_fetch_array($r)){
          echo'
            <div class="col-md-4" >
            <div class="panel-warning" style=" border-radius:10px; border:1px soild; padding:1px; margin-bottom:2px; margin-top:2px;margin:2px;">

          <div class="pannel-header"> 

          <a href="product.php?name='.$row['name'].'">
  <img src="uploadimages/'.$row['image'].'"  style="width:200px;height:200px; margin:auto 5px; border-radius:180px;"     >
 </a>


          
           </div>
            <div class="pannel-body" > 


            
            <a href="product.php?name='.$row['name'].'"   style="margin:50px ; color:black; text-decoration:none; font-size: 22px;
              "> '.$row['name'].' </a> 


             </div>
          <div class="pannel-footer"> 

            
          </div>

          </div>



            </div>



          ';
        }
               }


    ?>


    </div>
 
</div>
</div>








<script type="text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript">

  
  function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
  
  


</body>
</html>