<?php include("header.php");?>
<div class="container">

<br>

    <div class="row">
      
                <div class="col-sm-2" style="background-color:laveder;"></div>
                <div class="col-sm-8">
                    <img src="lib/background7.jpg" class="rounded" height="400" width="625">       
                        
                  <div class="signinbutton">  
                                             
   <h2> Welcome to                

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
            echo "".$_SESSION['firstname']; 
        }
    }
    ?>
    </h2>
    
    </br>
    <br>
    <div class="text-center">
        <button type="button" class="btn btn-link btn-outline-light text-light"><a href="eventRegistrationlogout.php">Logout</a></button>
    </div>
                 </div>               
                  </div>
  
                  <div class="col-sm-2"></div>
    
    </div>
</div>
<br>
    <?php include("footer.php");?>
