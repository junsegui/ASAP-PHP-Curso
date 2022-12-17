<?PHP
function connect()
{   //!Usuario maestro que se conecta a la DB
    $user = "root";
    $password = "110100";
    $bd = "log_in_schema";
    $server = "localhost"; //127.0.0.1
    return mysqli_connect($server, $user, $password, $bd);
}
function logOut($connect)
{
    mysqli_close($connect);
}