<?
include 'header.php';
include 'nav.php';

$_SESSION["username"]="";//removes contents of variable

session_destroy();//remove session completely

?>

<body>
You have logged out<br><br>
<a href="home.php">Back to home</a>
</body>
</html>