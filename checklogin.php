<? include 'header.php';
include 'nav.php'; // start or access existing session
include "conninfo.php"; // connection info
//print_r($_POST);

$un=$_POST["uname"];
$pw=$_POST["pword"];
    
$query="SELECT * FROM users WHERE username like '$un' AND pword like '$pw' ";

$result=mysqli_query($link,$query);

$rows=mysqli_num_rows($result);

if ($rows == 1) // check rows if 1, user&pass is correct
{
    $_SESSION["username"] = $un;
    echo $un . " is logged in: <br>";
    header("Refresh: 2; url=index.php");
}
else // wrong username or password
{
    echo "Wrong username or password<br>";
    header("Refresh: 2; url=login.php");
}


    
?>