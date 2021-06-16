<?php include("header.php");?>
</head>
    <body>
        <div class="container">
            <br>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8"><a href="registrationformpage.php">Back</a></div>
                <div class="col-sm-2"></div>
            </div>
            
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <img src="lib/background7.jpg" class="rounded" height="450" width="730">
                    
                    <table class="userbox rounded" bordercolor="" bgcolor="" width="400" height="250" cellspacing="0" cellpadding="0">
                    
                        <form action="eventRegistration_ans.php" method="post">
                            <tr class="registereduser">
                                <th colspan="2" class="text-center">Registered User</th>
                            </tr>
                            <tr class="firstname">
                                <td align="right">First Name</td>
                                <td align="center"><input type="text" name="firstname"/></td>
                            </tr>
                            <tr align="center">
                                <td colspan="2"><input type="submit" value="Submit" name="submit"/></td>
                            </tr>
                        </form> 
                    </table>
                    
                </div>
                <div class="col-sm-2"></div>
                
            </div>
        </div>
        <br>
        <?php include("footer.php");?>