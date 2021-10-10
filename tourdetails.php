<?php session_start(); ?>

<!DOCTYPE html>
    <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width,initial-scale=1.0">
                <meta name="author" content="adexmakai">
                <link rel ="preconnect" href="https://fonts.gstatic.com">
		        <link href="https://fonts.googleapis.com/css2?family=inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
                <title>Tourist Center : Tour Details</title>
                <link rel="stylesheet" href="css/bootstrap.min.css">
                <link rel="stylesheet" href="mycss/mystyle.css">
            </head>
            <body>
                    <?php include('header.php'); ?>


                    <div class="container-fluid">
                                <h1 align="center"> <?php echo $_GET['touname']; ?> Details Information</h1>
                            <div class="row">
                                <div class="col-md-6">
                                        <img src="images/<?php echo $_GET['touimg']; $_SESSION['seimage']=$_GET['touimg']; ?>" class="img-fluid" alt="<?php echo $_GET['touname']; ?>" />
                                </div>
                                <div class="col-md-6">
                                        <div id="details">
                                        <h2 style="color:grey;font-size:32px;margin-top:5px;"><?php echo $_GET['touname']; $_SESSION['setourname']=$_GET['touname']; ?></h2>
                                        <h2 style="color:blue;font-size:18px;margin-top:5px;"><span>&#8358;</span><?php echo $_GET['price']; $_SESSION['seprice']=$_GET['price']; ?></h2>
                                        <h2 style="color:purple;font-size:18px;margin-top:5px;"><?php echo $_GET['location']; $_SESSION['selocation']=$_GET['location']; ?></h2>
                                        <h2 style="color:blue;font-size:18px;margin-top:5px;"><?php echo $_GET['category']; $_SESSION['secategory']=$_GET['category']; ?></h2>

                                        <hr width="100%" />
                                        <h2 align="center"><u>Tour Detail Description</u></h2>
                                        <p class="lead"><?php echo $_GET['description']; ?></p>

                                        <form name="bookingtour" action="bookingtour.php" method="post">
                                                <input type="submit" name="submit" value=" Booking Now " />
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