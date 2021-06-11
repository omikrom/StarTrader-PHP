<? include("conninfo.php");
   include("nav.php");
   include('shipeditnav.php')
?>
   

<?$query=("SELECT * from ships,shiptype WHERE ships.shiptypeFK=shiptype.shiptypeid");  

$result = mysqli_query($link,$query) or die("Couldn't execute query");?>
<html>

<body>

<?
while($r=mysqli_fetch_array($result))
{
?>
<div class="shipContainer">
    <div class="shipList">
        <div class="shipTitle">
        <h2 class="center"><?echo $r["shipname"];?></h2>
        </div>
        <div class="shipImage">
        <img class="respnsiveImg" src="<?echo $r["shipimg"];?>">
        </div>
        <div class="shipDescription">
        <p class="center"><?echo $r["shipdescription"];?></p>
        </div>
        <div class="shipDescContainer">
        <h3>Ship Specifications</h3> 
            <div class="twoColContainer">
                <div class="shipRole">
                    <h4 class="center">Ship Role</h4>
                    <p class="center"><?echo $r["shiprole"];?></p>
                </div>  
                <div class="shipClass">
                    <h4 class="center">Ship Class</h4>
                    <p class="center"><?echo $r["shipclass"];?></p>
                </div> 
            </div>
            <div class="twoColContainer">
                <div class="crewContainer">
                    <h4 class="center">Ship Crew Capacity</h4>
                    <p class="center">min/max<br><?echo $r["shipcrewmin"];?> &emsp; <?echo $r["shipcrewmax"];?></p>
                </div>
                <div class="cargoContainer">
                    <h4 class="center">Cargo capacity</h4>
                    <p class="center"><br><?echo $r["cargocapacity"];?> SCU</p>
                </div>
            </div>
            <? if (@$_SESSION["username"] != "")
            {?>
            <div class="twoColContainer">
                <div class="crewContainer center">
                    <form action="editship.php" method="post">
                        <input type="hidden" name="shipid" value="<?echo $r["shipid"];?>">
                        <input class="editshipbtn" type="submit" value="Edit">
                    </form>
                    <form action="deleteship.php" method="post">
                        <input type="hidden" name="shipid" value="<?echo $r["shipid"];?>">
                        <input class="editshipbtn" type="submit" value="Delete">
                    </form>
                </div>
            </div>
            <?}?>
        </div>
    </div>
</div>
<?
}
?>

</body>
