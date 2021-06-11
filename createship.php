<?include "conninfo.php";
include "header.php";
include "nav.php";
$shipname=$_POST["shipname"];
$shipdescription=$_POST["shipdescription"];
$shipimg=$_POST["shipimg"];
$shiptypeFK=$_POST["shiptypeFK"];
$shipsize=$_POST["shipsize"];
$shipclass=$_POST["shipclass"];
$shipcrewmin=$_POST["shipcrewmin"];
$shipcrewmax=$_POST["shipcrewmax"];
$cargocapacity=$_POST["cargocapacity"];

$query="INSERT INTO ships(shipname,shipdescription,shipimg,shiptypeFK,shipsize,shipclass,shipcrewmin,shipcrewmax,cargocapacity)
VALUES(?,?,?,?,?,?,?,?,?)";

$stmt=mysqli_stmt_init($link);
mysqli_stmt_prepare($stmt,$query);

mysqli_stmt_bind_param($stmt,"sssissiii",$shipname,$shipdescription,$shipimg,$shiptypeFK,$shipsize,$shipclass,$shipcrewmin,$shipcrewmax,$cargocapacity);
mysqli_stmt_execute($stmt);

mysqli_stmt_close($stmt);//close statement
mysqli_close($link);//close link to database

echo "New ship added";

header("Refresh: 2; url=viewshipinfo.php");
?>