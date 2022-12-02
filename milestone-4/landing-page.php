<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
    <title>Password generata</title>
</head>
<body>
    <div class="container d-flex h-100 flex-column align-items-center">
        <h2>
            LA PASSWORD GENERATA &Egrave; : <?php echo $_SESSION['nCharacters'] ?>
        </h2>
        <div>
            <a class="btn btn-primary" href="./index.php"> TORNA ALLA HOME</a>
        </div>
    </div>
</body>
</html>