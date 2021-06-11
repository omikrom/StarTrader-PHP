<?session_start();//start or access session?>
<html>
<head>

</head>
<body>


<?if(@$_SESSION["username"]!="")//if exists, I know logged in
{
?>

<h3>Secret page</h3>

Welcome to the members only page.

<br><br>
Secret info: I like tea : )<br><br>

<a href="home.php">Back to home</a>
<?
}
else
{
	
	echo "Stop trying to hack!!!";
}
?>


</body>
</html>