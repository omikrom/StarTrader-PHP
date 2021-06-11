<?include "conninfo.php";
include "header.php";
include "nav.php";
$username=$_POST["username"];
$password=$_POST["pword"];
$email=$_POST["email"];

//PREPARED STATEMENT VERSION
$query="INSERT INTO users(username,pword,email)
VALUES(?,?,?)";

$stmt=mysqli_stmt_init($link);
mysqli_stmt_prepare($stmt,$query);

mysqli_stmt_bind_param($stmt,"sss",$username,$password,$email);
mysqli_stmt_execute($stmt);

mysqli_stmt_close($stmt);//close statement
mysqli_close($link);//close link to database

echo "New user added";


header("Refresh: 2; url=index.php");
?>