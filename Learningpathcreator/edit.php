<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
include "db_conn.php";
include 'php/User.php';

$user = getUserById($_SESSION['id'], $conn);

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Profile</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="vote.php">Learning Path Management</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="vote.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php" style="margin-right: 10px">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <?php if ($user) { ?>

    <div class="d-flex justify-content-center align-items-center vh-100">
        
        <form class="shadow w-450 p-3" 
              action="php/edit.php" 
              method="post"
              enctype="multipart/form-data">

            <h4 class="display-4  fs-1">Edit Profile</h4><br>
            <!-- error -->
            <?php if(isset($_GET['error'])){ ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $_GET['error']; ?>
            </div>
            <?php } ?>
            
            <!-- success -->
            <?php if(isset($_GET['success'])){ ?>
            <div class="alert alert-success" role="alert">
              <?php echo $_GET['success']; ?>
            </div>
            <?php
               if (isset($_GET['success'])) {
        
               header("Location: vote.php");
               exit();
              } else {
        // Data insertion failed
        echo "Error: " . mysqli_error($conn);
    }
             } ?>
          <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" 
                   class="form-control"
                   name="fname"
                   value="<?php echo $user['fname']?>">
          </div>

          <div class="mb-3">
            <label class="form-label">User name</label>
            <input type="text" 
                   class="form-control"
                   name="uname"
                   value="<?php echo $user['username']?>">
          </div>

          <div class="mb-3">
            <label class="form-label">Profile Picture</label>
            <input type="file" 
                   class="form-control"
                   name="pp">
            <img src="upload/<?=$user['pp']?>"
                 class="rounded-circle"
                 style="width: 70px">
            <input type="text"
                   hidden="hidden" 
                   name="old_pp"
                   value="<?=$user['pp']?>" >
          </div>
          
          <button type="submit" class="btn btn-primary">Update</button>
          
        </form>
    </div>
    <?php }else{ 
        header("Location: home.php");
        exit;

    } ?>
</body>
<footer>
    <p>&copy; 2023 Your Company</p>
    <a href="path/to/readme.pdf" target="_blank">Readme PDF</a>
</footer>
</html>

<?php }else {
	header("Location: login.php");
	exit;
} ?>