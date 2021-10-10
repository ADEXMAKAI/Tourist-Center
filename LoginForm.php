<!DOCTYPE html>
    <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width,initial-scale=1.0">
                <meta name="author" content="adexmakai">
                <link rel ="preconnect" href="https://fonts.gstatic.com">
		        <link href="https://fonts.googleapis.com/css2?family=inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
                <title>Tourist Center : LoginForm</title>
                <link rel="stylesheet" href="css/bootstrap.min.css">
                <link rel="stylesheet" href="mycss/mystyle.css">
            </head>
            <body>
                    <?php include('header.php'); ?>


                    <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4">
                                        <img src="images/KainjiLakenationalparks.jpg" class="img-fluid" alt="image1"/>
                                </div>
                                <div class="col-md-8">
                                        <form name="LoginForm" method="post" action="#">
                                                <div class="table-responsive">
                                                    <table class="table table-borderless">
                                                        <caption class="text-center text-underline caption-top" id="adex">Login Details</caption>

                                                        <tr>
                                                                <td align="right">
                                                                        <label for="username">USERNAME:</label>
                                                                </td>
                                                                <td align="left">
                                                                        <input type="text" name="username" id="username" max-width="500px" required/>
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                                <td align="right">
                                                                        <label for="password">PASSWORD:</label>
                                                                </td>
                                                                <td align="left">
                                                                        <input type="password" name="password" id="password" required />
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                                <td></td>
                                                                <td align="left">
                                                                        <input type='submit' name='submitbutton' id='submitbutton' value='Login'/>
                                                                </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                        </form>
                                </div>
                            </div>
                    </div>
                
                
                    <?php include('footer.php'); ?>
                
                
                
                
                <script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
                <script src="js/bootstrap.min.js"></script>
            </body>
    
    
    
    
    
    
    
    
    
    
    
    
    </html>