<?php
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $occupation = $_REQUEST['occupation']; 
    $companyname = $_REQUEST['companyname'];
    $email = $_REQUEST['email'];
    $address = $_REQUEST['address'];
    $city = $_REQUEST['city'];
    $state = $_REQUEST['state'];
    $suggestions = $_REQUEST['suggestions'];
    $con = mysqli_connect("localhost","root","","eventregistrationform");
    $qry = mysqli_query($con, "INSERT INTO event_registrationform(Firstname,Lastname,Occupation,CompanyName,Email,City,State,Suggestions) VALUES('$firstname','$lastname','$occupation','$companyname','$email','$city','$state','$suggestions')");                                
    header("location:registrationformpage.php");
    ?>