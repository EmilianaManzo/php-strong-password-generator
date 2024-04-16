<?php 
  session_start();
  if(!isset($_SESSION['newpassowrd'])){
    header('Location: ./index.php');
  }else {
    $newnewemail = $_SESSION['newpassowrd'];
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous'/>
  <title>Document</title>
</head>
<body>
<div class="container mt-5  h-100 ">
  <div class="row d-flex flex-column  justify-content-center align-items-center h-100   ">
    <div class="col mt-5  d-flex  justify-content-center align-items-center h-100 ">
      <h1 class=" ">LA TUA PASSWORD E':</h1>
    </div>
    <div class="col d-flex justify-content-center align-items-center h-100 ">
      <h1 class=" text-danger  "><?php echo $newnewemail ?></h1>
    </div>
  </div>
</div>

  
</body>
</html>