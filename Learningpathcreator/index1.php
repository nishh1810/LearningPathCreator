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
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Admin Home Page</title>
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
        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        footer p {
            margin: 0;
        }

        footer a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            margin-left: 10px;
        }

        footer a:hover {
            text-decoration: underline;
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

     .shareable-link {
            font-size: 14px;
            color: #007bff;
            cursor: pointer;
        }

        .shareable-link:hover {
            text-decoration: underline;
        }
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

    <p><b>Welcome, <?php echo $username; ?>!</b> You Logged-In as Admin</p>

              <a type="button" class="btn btn-primary d-inline-block m-2 float-right" href="create.php">Add New</a>
           
    <div class="container my-4">
    <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Resource Url</th>
         <th>Shareable Link</th>
        <th>ACTIONS</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include "connection.php";
        $sql = "select * from crud2";
        $result = $conn->query($sql);
        if(!$result){
          die("Invalid query!");

        }

        while($row=$result->fetch_assoc()){
          $shareableLink = "http://localhost/crud100/index1.php/{$row['id']}";
          echo "
      <tr>
        <th>$row[id]</th>
        <td>$row[name]</td>
        <td>$row[email]</td>
        <td>$row[phone]</td>
        <td class='shareable-link' onclick='copyToClipboard(\"$shareableLink\")'>Copy Link</td>
        <td>    <a class='btn btn-success' href='edit1.php?id=$row[id]'>Edit</a>
                  <a class='btn btn-danger' href='delete.php?id=$row[id]'>Delete</a>
                </td>
        <td>
        </td>
      </tr>
      ";
        }
      ?>
    </tbody>
  </table>
      </div>
    
    <script>
        // Function to copy the shareable link to the clipboard
        function copyToClipboard(link) {
            var textField = document.createElement('textarea');
            textField.innerText = link;
            document.body.appendChild(textField);
            textField.select();
            document.execCommand('copy');
            textField.remove();
            alert('Link copied to clipboard: ' + link);
        }
    </script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
  <footer>
      <p>&copy; 2023 Group Project</p>
      <a href="readme.pdf" target="_blank">Readme PDF</a>
  </footer>
</html>