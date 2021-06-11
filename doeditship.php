<?include "conninfo.php";
 include "header.php";
 include "nav.php";
$shipid=$_POST["shipid"];
$shipname=$_POST["shipname"];
$shipdescription=$_POST["shipdescription"];
$shipimg=$_POST["shipimg"];
$shiptypeFK=$_POST["shiptypeFK"];
$shipsize=$_POST["shipsize"];
$shipclass=$_POST["shipclass"];
$shipcrewmin=$_POST["shipcrewmin"];
$shipcrewmax=$_POST["shipcrewmax"];
$cargocapacity=$_POST["cargocapacity"];

$query=
" UPDATE ships SET shipname='$shipname', shipdescription='$shipdescription', shipimg='$shipimg', shiptypeFK='$shiptypeFK', shipsize='$shipsize', shipclass='$shipclass', shipcrewmin='$shipcrewmin', shipcrewmax='$shipcrewmax', cargocapacity='$cargocapacity' WHERE shipid='$shipid' LIMIT 1 ";

//echo $query;

$result=mysqli_query($link,$query);

echo "<p class='center'>Record edited</p>";

echo $query;

header("Refresh: 2; url=viewshipinfo.php");

?>