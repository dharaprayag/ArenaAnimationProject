<?php include("header.php");?>
    </head>
    <body>
        <br>
          <div class="container">
              <div class="row">
                <div class="col-sm-4">
                    <img src="lib/background7.jpg" class="rounded" height="800" width="360"> 
                    <div class="text-block">
                        <p class="font-weight-bold">welcome</p>  
                        <div class="welcometext">
                          <p class="text-center">To keep connected with us please</p>
                          <p class="text-center">login with your personal info</p>
                        </div>                      
                    </div>  
                    <p class="existinguser">Existing user click here</p>
                  <div class="signinbutton">
                    
                    <button type="button" class="btn btn-link btn-outline-light text-light"><a href="registeredsigninpage.php">Sign in</a></button>
                    
                  </div>               
                </div>
                <div class="col-sm-8">
                    <img src="lib/background8.jpg" class="rounded" height="800" width="733" >
                        <div class="signupform" >
                            <p class="eventregistrationform" style=" margin: 10px;">Event Registration Form</p>
                            <div class="tableform">
                                <table width="400" height="650" cellspacing="0" cellpadding="0" style=" margin: 15px; margin-left: 50px;">
                                    <form action="eventRegistration_dataStored.php" method="post" align="center">
                                        <tr>
                                            <td>First Name<span>*</span></td>
                                            <td><input type="text" name="firstname"/></td>
                                        </tr>
                                        <tr>
                                            <td>Last Name</td>
                                            <td><input type="text" name="lastname"/></td>
                                        </tr>
                                        <tr>
                                            <td>Occupation</td>
                                            <td><input type="text" name="occupation"/></td>
                                        </tr>
                                        <tr>
                                            <td>Company Name</td>
                                            <td><input type="text" name="companyname"/></td>
                                        </tr>
                                        <tr>
                                            <td>Email<span>*</span></td>
                                            <td><input type="email" name="email" placeholder="xxxxxx@xxxx.com"/></td>
                                        </tr>
                                        <tr>
                                            <td>City</td>
                                            <td><input type="text" name="city"/></td>
                                        </tr>
                                        <tr>
                                            <td cellspacing="2" cellpadding="3">State</td>
                                            <td><input type="text" name="state"/></td>
                                        </tr>
                                        <tr>
                                            <td>Suggestions</td>
                                            <td><input type="text" name="suggestions"/></td>
                                        </tr>
                                        <tr align="center">
                                            <td colspan="2"><input type="submit" value="Submit" name="submit"/></td>
                                        </tr>
                                        
                                    </form>
                                </table>

                            </div>

                        </div>
                </div>


              </div>
              
          </div>
          <br>
          <?php include("footer.php");?>