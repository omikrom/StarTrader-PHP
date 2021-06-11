<?include 'header.php';
include 'nav.php';?>


<body>

<form action="createship.php" method="post">

Ship name: <input type="text" name="shipname"><br>

Ship description: <input type="text" name="shipdescription"><br>

Ship img url:<input type="text" name="shipimg"><br>


Ship Type:
<?include "conninfo.php";
$query="SELECT * FROM shiptype ORDER BY shiprole";
$result=mysqli_query($link,$query);?>

<select name="shiptypeFK">
<?while ($r=mysqli_fetch_array($result))
{?>
<option value="<?echo $r["shiptypeid"];?>">
<?echo $r["shiprole"];?>
</option>
<?}?>

<select></br>

Ship Size: <input type="text" name="shipsize"><br>

Ship Class:<input type="text" name="shipclass"><br>

Ship Crew Minimum:<input type="text" name="shipcrewmin"><br>

Ship Crew Maximum:<input type="text" name="shipcrewmax"><br>

Cargo capacity:<input type="text" name="cargocapacity"><br>
<input type="submit" value="Submit">


</form>





</body>
</html>