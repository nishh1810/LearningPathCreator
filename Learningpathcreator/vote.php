<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit;
}

// Display the username
$username = $_SESSION['fname'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>User Home Page</title>

    <!-- Your custom styles -->
    <style>
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
position:fixed;
bottom:0px;
width:100%;
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
.fa {
  font-size: 50px;
  cursor: pointer;
  user-select: none;
}

.fa:hover {
  color: darkblue;
}

    </style>
</head>

<body>
    <!-- Navbar code -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="vote.php">Learning Path Management</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <!--<a class="nav-link active" aria-current="page" href="index1.php">Home</a>-->
              <a class="nav-link active" aria-current="page" href="vote.php">Home</a>
            </li>
           
            <li class="nav-item">
              <!--<a class="nav-link active" aria-current="page" href="index1.php">Home</a>-->
              <a class="nav-link active" aria-current="page" href="home.php">EditProfile</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Logout</a>

            </li>
            
          </ul>
        </div>
      </div>
    </nav>

    <!-- Display the username -->

    <p><b>Welcome, <?php echo $username; ?>!</b> You Logged-In as User</p>

    <form class="form-inline" action="search.php" method="get">
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Search..</span>
        </div>
        <input type="text" class="form-control" name="query" placeholder="Search by Title or Description" aria-label="Search" aria-describedby="basic-addon1">
        <button type="submit" class="btn btn-primary">Search</button>
    </div>
</form>


    <div class="container my-4">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Resource Url</th>
                    <th>ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "connection.php";
                $sql = "SELECT * FROM crud2";
                $result = $conn->query($sql);
                if (!$result) {
                    die("Invalid query!");
                }
                while ($row = $result->fetch_assoc()) {
                    echo "
                        <tr>
                            <th>{$row['id']}</th>
                            <td>{$row['name']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['phone']}</td>
                            <td>
                                <button class='btn btn-link' onclick='toggleLikeDislike(this)'><i class='fa fa-thumbs-up'></i></button>
                            </td>
                        </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
    </div>
<script>
    function toggleLikeDislike(button) {
        // Toggle between "like" and "dislike" by changing the button text and class
        if (button.innerText === ' Like') {
            button.innerHTML = '<i class="fa fa-thumbs-down"></i> Dislike';
            button.classList.add('text-danger'); // Optionally add a red color for dislike
        } else {
            button.innerHTML = '<i class="fa fa-thumbs-up"></i> Like';
            button.classList.remove('text-danger'); // Remove red color for like
        }
    }
</script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        function myFunction(x) {
  x.classList.toggle("fa-thumbs-down");
}
    </script>


</body>
<footer>
    <p>&copy; 2023 Group project</p>
    <a href="readme.pdf" target="_blank">Readme PDF</a>
</footer>

</html>
