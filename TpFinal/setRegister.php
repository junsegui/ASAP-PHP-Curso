<?PHP
require "connectDB.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>

<body>
    <?PHP
    $connect = connect();
    if (connect()) {
        $EMAIL = $_POST['username'];
        $PASSWORD = $_POST['password'];
        $encryptedPassword = md5($PASSWORD);
        $sql = "INSERT INTO `log_in_schema`.`users_log_in` (`email`, `password`) VALUES (" . "'$EMAIL'" . ", '$encryptedPassword');";
        $query = mysqli_query($connect, $sql) or die(mysqli_error($connect));
        $exito = "Contrasenia creada con exito";
        print $exito;
    } else {
        print "fallo";
    }
    ?>
</body>

</html>