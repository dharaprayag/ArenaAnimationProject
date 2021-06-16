<!DOCTYPE html>
<html lang="en">
    <head>
        <title>RegisteredUser</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <style>
                .container
                {
                    position: relative;
                    margin-top: 30px;
                }
                .userbox
                {
                    position: absolute;
                    margin-left: 325px;
                    margin-top: 200px;
                }
                .registereduser
                {
                    font-size: 35px;
                    color: #182A38;
                }
                .firstname
                {
                    font-size: 20px;
                    color: black;
                    font-weight: bold;
                }
            </style>
    </head>
    <body>
        <div class="container">
            <div class="row col-sm-12">
                <img src="C://xampp/htdocs/bootstrapeventRegistration/lib/background6.jpg" class="rounded" height="650" width="1100">
                <table class="userbox rounded" bordercolor="#555555" bgcolor="#C6CDD3" align="center" width="400" height="250" cellspacing="0" cellpadding="0">
                    <form action="eventRegistration_ans.php" method="post">
                    <?php

session_start();
$link=mysqli_connect("localhost","root","","eventregistrationform") or die("can not connect");
extract($_REQUEST);
$qry=mysqli_query($link,"SELECT * FROM event_registrationform where Firstname='$firstname'");
$raw = mysqli_fetch_array($qry);
$_SESSION['firstname']=$firstname;
    if($_SESSION['firstname']==null or $raw[0]== null)
    {
        header("location:eventRegistration_dataStored.php");
    }
    else
    {
        
        if($_SESSION['firstname']!=null)
        {
            echo "Welcome to ".$_SESSION['firstname'];
        }
    }
    ?>
    </br>
    <a href="eventRegistrationlogout.php">Logout</a>

                    </form>
                </table>
            </div>
        </div>
    </body>
</html>