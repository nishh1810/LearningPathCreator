<?php
include "connection.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $q = "INSERT INTO `crud2`(`name`, `email`, `phone`) VALUES ('$name', '$email', '$phone')";
    $query = mysqli_query($conn, $q);

    if ($query) {
        // Data insertion was successful
        header("Location: index1.php");
        exit();
    } else {
        // Data insertion failed
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
 <title>Add new Learning Path</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <style >
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
body{
  line-height: 1.5;
  font-family: 'Poppins', sans-serif;
}
*{
  margin:0;
  padding:0;
  box-sizing: border-box;
}
.container{
  max-width: 1170px;
  margin:auto;
}
.row{
  display: flex;
  flex-wrap: wrap;
}
ul{
  list-style: none;
}
.footer{
  background-color: #24262b;
padding: 50px 0;
}
.footer-col{
   width: 25%;
   padding: 0 15px;
}
.footer-col h4{
  font-size: 18px;
  color: #ffffff;
  text-transform: capitalize;
  margin-bottom: 35px;
  font-weight: 500;
  position: relative;
}
.footer-col h4::before{
  content: '';
  position: absolute;
  left:0;
  bottom: -10px;
  background-color: #e91e63;
  height: 2px;
  box-sizing: border-box;
  width: 50px;
}
.footer-col ul li:not(:last-child){
  margin-bottom: 10px;
}
.footer-col ul li a{
  font-size: 16px;
  text-transform: capitalize;
  color: #ffffff;
  text-decoration: none;
  font-weight: 300;
  color: #bbbbbb;
  display: block;
  transition: all 0.3s ease;
}
.footer-col ul li a:hover{
  color: #ffffff;
  padding-left: 8px;
}
.footer-col .social-links a{
  display: inline-block;
  height: 40px;
  width: 40px;
  background-color: rgba(255,255,255,0.2);
  margin:0 10px 10px 0;
  text-align: center;
  line-height: 40px;
  border-radius: 50%;
  color: #ffffff;
  transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
  color: #24262b;
  background-color: #ffffff;
}

/*responsive*/
@media(max-width: 767px){
  .footer-col{
    width: 50%;
    margin-bottom: 30px;
}
}
@media(max-width: 574px){
  .footer-col{
    width: 100%;
}
}

    </style>
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index1.php">Learning Path Management</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <!--<a class="nav-link active" aria-current="page" href="index1.php">Home</a>-->
              <a class="nav-link active" aria-current="page" href="index1.php">Home</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-primary">
 <h1 class="text-white text-center">  Learning Path Management </h1>
 </div><br>

 <label> Title: </label>
 <input type="text" name="name" class="form-control"> <br>

 <label> Description: </label>
 <input type="text" name="email" class="form-control"> <br>

 <label> Resource Url: </label>
 <input type="text" name="phone" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="index1.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
<footer>
    <p>&copy; 2023 Group project</p>
    <a href="readme.pdf" target="_blank">Readme PDF</a>
</footer>
</html>