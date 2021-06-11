

<?include "conninfo.php";
 include "header.php";
 include "nav.php";
//connection
$search=$_POST["mysearch"];//get from form

$query="SELECT * FROM pointofinterest,locationtbl,planet,systemtbl WHERE pointofinterest.location_id=locationtbl.locationid AND locationtbl.planet_id=planet.planetid AND planet.system_id=systemtbl.systemid AND pointname like '$search'";

$result=mysqli_query($link,$query)or die(mysqli_error());

$numrows=mysqli_num_rows($result);//how many rows found?

echo "Records found: ".$numrows."<br><br>";

if($numrows>0)//if there were some rows, print out
{?>
<div class="container">
<?
    echo "<div class='row'>";
?>

<?	while($r=mysqli_fetch_array($result))
	{
    ?>
    <div class="card col-xs-12 col-md-6">
        <div class="card-body">
            <h5 class="card-title" style="margin-left:20px;">
            <?echo "Point of interest: ".$r["pointname"]."<br>";?>
            </h5>
        <ul class="list-group list-group-flush">
        <?
        echo "<li class='list-group-item '>Type: ".$r["pointtype"]."</li>";
        echo "<li class='list-group-item'>Location : ".$r["locationname"]."</li>";
        echo "<li class='list-group-item'>Type: ".$r["locationtype"]."</li>";
        echo "<li class='list-group-item'>Planet: ".$r["planetname"]."</li>";
        echo "<li class='list-group-item'>".$r["planetdescription"]."</li>";
        echo "<li class='list-group-item'>System name: ".$r["systemname"]."</li>";
        echo "<li class='list-group-item'>".$r["systemdescription"]."</li>";
        ?>
        </ul>
        </div>
    </div>
    <?}
    ?>
</div>
</div>    

    <?
}
else
{
	echo "Sorry! Try again!";
}?>