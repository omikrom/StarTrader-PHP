<!doctype html>
<?session_start();?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <? include 'header.php'; ?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Star Trader</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-darkgrey">
    <a class="navbar-brand" href="index.php">Star Trader</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mr-auto">
        <a class="nav-item nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="viewshipinfo.php">Ships</a>
        <a class="nav-item nav-link" href="location.php">Locations</a>
        <!--<a class="nav-item nav-link" href="#">Materials</a>-->
    </div>
    <div class="navbar-nav">
        <? if (@$_SESSION["username"] != "")
        {
            echo "<p class='uMessage'>Welcome Commander ".$_SESSION["username"]."</p><br>";
        } else {
            echo "<p class='uMessage'>Welcome Guest</p>";
        }?>
    </div>
    <div class="navbar-nav ml-auto">
        <?if(@$_SESSION["username"]!="")
        {
        echo "<a class='nav-item nav-link' href='secret.php'>Secret page</a>";	
        echo "<a class='nav-item nav-link' href='logout.php'>Log out</a>";	
        }
       else
        {
            echo "<p>Welcome Guest</p>";
            echo "<a class='nav-item nav-link' href='login.php'>Login</a><br>";
            echo "<a class='nav-item nav-link' href='register.php'>Register</a>";
        }
        ?>
    </div>
    </div>
    </nav>