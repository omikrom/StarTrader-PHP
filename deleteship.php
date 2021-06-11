<?include "conninfo.php";
include 'header.php';
include 'nav.php';

$id=$_POST["shipid"];

//echo $id;


$query="DELETE FROM ships WHERE shipid=$id LIMIT 1";  //LIMIT 1 "belt and braces"

//echo $query;

$result=mysqli_query($link,$query);//run query

//header("location:showdatawithdelete.php");//redirect

echo "Ship deleted";
header("Refresh: 2; url=viewshipinfo.php");
?>
