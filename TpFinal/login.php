<?PHP
require "connectDB.php";
$connect = connect();

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
    <div class="container">


        <?PHP
        if (connect()) {
            $EMAIL = $_POST["username"];
            $PASSWORD = $_POST["password"];
            $hash = md5($PASSWORD);
            $sql = "SELECT * FROM log_in_schema. users_log_in WHERE email =" . "'$EMAIL'" . "AND password=" . "'$hash'";
            $query = mysqli_query($connect, $sql);
            $resp = mysqli_fetch_object($query);

            if ($resp->password === $hash) {
                print "bien";
            } else {
                print "mal";
            }
        }
        ?>
    </div>
</body>

</html>