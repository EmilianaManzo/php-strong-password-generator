<?php
include __DIR__ . '/data/function.php';
$password='';

if (!isset($_GET['length'])){
  $error_mess= 'La lunghezzza della password è troppo corta';
}else{
  $length = $_GET['length'];
  $password = randomPass($length);
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous'/>
  <title>PHP Strong Password Generator</title>
</head>
<body>
  <div class="container">
    <div class="row d-flex justify-content-center align-items-center ">
      <div class="col">
        <form action="index.php" method="GET">
          <div>
            <label for="">Lunghezza password:</label>
            <input type="text" id="length" name="length" placeholder="Inserisci lunghezza">
          
          </div>
          <div>
            <button type="submit" class="btn btn-danger">Genera</button>
            <button type="submit" class="btn btn-secondary">Annulla</button>
          </div>
        </form>
        <div><?php echo $password ?></div>
      </div>
    </div>
    <div class="row">
      <div class="col"></div>
    </div>
  </div>
</body>
</html>