<?PHP
require "connectDB.php";
$connect = connect();

if (connect()) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users_login . users WHERE username = " . "'$username'" . "AND password=" . "$password";
    $query = mysqli_query($connect, $sql);
    $array = mysqli_fetch_array($query);
    if ($username == $array[1] && $password == $array[2]) {
        return print "Contrasenia bien";
    }
}