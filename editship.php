<?include "conninfo.php";
include 'header.php';
include 'nav.php';
$id=$_POST["shipid"];

$query="SELECT * FROM ships WHERE shipid=$id";
$result=mysqli_query($link,$query);
$r=mysqli_fetch_array($result);

?>
Edit record:<br><br>
<form action="doeditship.php" method="post">
<input type="hidden" name="shipid" value="<?echo $id;?>">

<label>Ship name:</label><input type="text" name="shipname" value="<?echo $r["shipname"];?>"><br>

Ship description: <input type="text" name="shipdescription" value="<?echo addslashes($r["shipdescription"]);?>"><br>

Ship img url:<input type="text" name="shipimg" value="<?echo $r["shipimg"];?>"><br>


Ship Type: <input type="text" name="shiptypeFK" value="<?echo $r["shiptypeFK"];?>"><br>

Ship Size: <input type="text" name="shipsize" value="<?echo $r["shipsize"];?>"><br>

Ship Class: <input type="text" name="shipclass" value="<?echo $r["shipclass"];?>"><br>

Ship Crew Minimum:<input type="text" name="shipcrewmin" value="<?echo $r["shipcrewmin"];?>"><br>

Ship Crew Maximum:<input type="text" name="shipcrewmax" value="<?echo $r["shipcrewmax"];?>"><br>

Cargo capacity:<input type="text" name="cargocapacity" value="<?echo $r["cargocapacity"];?>"><br>




<input type="submit" value="Edit"><br>
</form>