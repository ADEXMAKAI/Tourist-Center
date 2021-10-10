<?php session_start(); ?>

<!DOCTYPE html>
   <html lang="en">
                    <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width,initial-scale=1.0">
                            <meta name="author" content="adexmakai">
                            <link rel ="preconnect" href="https://fonts.gstatic.com">
		                    <link href="https://fonts.googleapis.com/css2?family=inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
                            <title>Tourist Center : Booking Form</title>
                            <link rel="stylesheet" href="css/bootstrap.min.css">
                            <link rel="stylesheet" href="mycss/mystyle.css">
                    </head>
                    <body>

                    

                            <?php include('header.php'); ?>

                            <div class="container-fluid">
                                                <h1 align="center">Booking Form</h1>
                                <div class="row">
                                <div class="col-md-6">
                                        <img src="images/GashakaGumtiNationalPark.jpg" class="img-fluid" alt="image1"/>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="center">
                                                <form name="bookingdetails" action="savebookingdetails.php" method="post">
                                                    <div class="table-responsive">
                                                        <table class="table table-borderless">
                                                                <caption class="text-center text-underline caption-top">Booking Form</caption>
                                                                <tr>
                                                                <td align="right">
                                                                        <label for="firstname">FIRST NAME:</label>
                                                                </td>
                                                                <td align="left">
                                                                        <input type="text" name="firstname" id="firstname"  required/>
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                                <td align="right">
                                                                        <label for="lastname">LAST NAME:</label>
                                                                </td>
                                                                <td align="left">
                                                                        <input type="text" name="lastname" id="lastname"  required/>
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                                <td align="right">
                                                                        <label for="email">E-MAIL:</label>
                                                                </td>
                                                                <td align="left">
                                                                        <input type="email" name="email" id="email"  required/>
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                                <td align="right">
                                                                        <label for="phonenumber">PHONE NUMBER:</label>
                                                                </td>
                                                                <td align="left">
                                                                        <input type="text" name="phonenumber" id="phonenumber"  required/>
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                                <td align="right">
                                                                        <label for="numberofpeople">NUMBER OF PEOPLE:</label>
                                                                </td>
                                                                <td align="left">
                                                                        <input type="number" name="numberofpeople" id="numberofpeople"  required/>
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                                <td align="right">
                                                                        <label for="tourdate">TOUR DATE:</label>
                                                                </td>
                                                                <td align="left">
                                                                        <input type="date" name="tourdate" id="tourdate"  required/>
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                                <td align="right">
                                                                        <label for="tourname">TOUR NAME:</label>
                                                                </td>
                                                                <td align="left">
                                                                        <input type="text" name="tourname" id="tourname" value="<?php echo $_SESSION['setourname']; ?>"  readonly/>
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                                <td align="right">
                                                                        <label for="tourcategory">TOUR CATEGORY:</label>
                                                                </td>
                                                                <td align="left">
                                                                        <input type="text" name="tourcategory" id="tourcategory" value="<?php echo $_SESSION['secategory']; ?>"  readonly/>
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                                <td align="right">
                                                                        <label for="location">LOCATION:</label>
                                                                </td>
                                                                <td align="left">
                                                                        <input type="text" name="location" id="location" value="<?php echo $_SESSION['selocation']; ?>" readonly/>
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                                <td align="right">
                                                                        <label for="price">PRICE (PER PERSON):</label>
                                                                </td>
                                                                <td align="left">
                                                                        <input type="text" name="price" id="price" value="<?php echo $_SESSION['seprice']; ?>"  readonly/>
                                                                </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                                <td align="right">
                                                                        <label for="totalprice">TOTAL PRICE:</label>
                                                                </td>
                                                                <td align="left">
                                                                        <input type="text" name="totalprice" id="totalprice" value="0000" readonly/>
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                                <td></td>
                                                                <td align="left">
                                                                    <input type='submit' name='submitbutton' id='submitbutton' value='submit'/>
                                                                </td>
                                                        </tr>
                                                        </table>
                                                    </div>
                                                </form>
                                            </div>
                                    </div>
                                </div>
                            </div>











                            <?php include('footer.php'); ?>


                            <script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
                            <script src="js/bootstrap.min.js"></script>
                    </body>






























  </html>