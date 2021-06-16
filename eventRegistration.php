<!Doctype html>
<html>
    <head>
        <title>EventRegistrationForm</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
    </head>
    <body>
    <div class="container">
    <div class="row">
        <div class="col-sm-4" style="background-color:lavenderblush">LOGO
        </div>
        <div class="jumbotron col-sm-8 text-center" style="background-color:lavenderblush;">Resize this responsive page to see the effect!</div>
      </div>
    </div>
    <table bordercolor="#555555" bgcolor="#f5f5f5" align="center" width="400" height="650" cellspacing="0" cellpadding="0">
        <form action="eventRegistration_dataStored.php" method="post">
        <tr><th colspan="2">Event Registration Form</th></tr>
        <tr>
            <td align="right">First Name<span>*</span></td>
            <td align="center"><input type="text" name="firstname"/></td>
        </tr>
        <tr>
            <td align="right">Last Name</td>
            <td align="center"><input type="text" name="lastname"/></td>
        </tr>
        <tr>
            <td align="right">Occupation</td>
            <td align="center"><input type="text" name="occupation"/></td>
        </tr>
        <tr>
            <td align="right">Company Name</td>
            <td align="center"><input type="text" name="companyname"/></td>
        </tr>
        <tr>
            <td align="right">Email<span>*</span></td>
            <td align="center"><input type="email" name="email" placeholder="xxxxxx@xxxx.com"/></td>
        </tr>
        <tr>
            <td align="right">City</td>
            <td align="center"><input type="text" name="city"/></td>
        </tr>
        <tr>
            <td align="right" cellspacing="2" cellpadding="3">State</td>
            <td align="center"><input type="text" name="state"/></td>
        </tr>
        <tr>
            <td align="right">Suggestions</td>
            <td align="center"><input type="text" name="suggestions"/></td>
        </tr>
        <tr align="center">
            <td colspan="2"><input type="submit" value="Submit" name="submit"/></td>
        </tr>
        <tr align="center">
            <td colspan="2">Already Registered? <a href="eventRegistration_loginhere.php">Login here</a></td>
        <tr>
        </form>
    
    </table>
    </body>
</html>