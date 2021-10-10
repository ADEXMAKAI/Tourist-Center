
<!DOCTYPE html>
  <html lang="en">
                 <head>
                     <meta charset="UTF-8">
                     <meta name="viewport" content="width=device-width,initial-scale=1.0">
                     <meta name="author" content="adexmakai">
                     <link rel ="preconnect" href="https://fonts.gstatic.com">
		                 <link href="https://fonts.googleapis.com/css2?family=inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
                     <title>Tourist Center: Homepage</title>
                     <link rel="stylesheet" href="css/bootstrap.min.css">
                     <link rel="stylesheet" href="mycss/mystyle.css">

                      <style>
                       /* a:link, a:visited {
                          background-color: #ff0000;
                          color: white;
                          padding: 14px 25px;
                          text-align: center;
                          text-decoration: none;
                          display: inline-block;
                        }

                        a:hover, a:active {
                          background-color: #4CAF50;
                        } */
                      </style>


                 </head>
                 <body>

                 <?php
		                    require_once("dbcontroller.php");
			                  $db_handle = new DBController();
		              ?>
                     
                     <?php include('header.php'); ?>
                     
                     <div class="container-fluid">
                         <div class="row">
                             <div class="col-md-12">
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                      <div class="carousel-item active">
                                        <img src="images/GashakaGumtiNationalPark.jpg" class="d-block w-100" alt="...">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="images/GiantFootofUkhuseOke.jpg" class="d-block w-100" alt="...">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="images/KainjiLakenationalparks.jpg" class="d-block w-100" alt="...">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="images/ogbunikecave1200x800.jpg" class="d-block w-100" alt="...">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="images/ObuduCattleRanch1.jpg" class="d-block w-100" alt="...">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="images/AwhumWaterfalls.jpg" class="d-block w-100" alt="...">
                                      </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="visually-hidden">Next</span>
                                    </button>
                                  </div>
                                  </div>
                             </div>
                         </div>
                     </div>
                     </div>
                     <div class="container-fluid">
                         <div class="row">

                            <?php
                                $tour_array = $db_handle->runQuery("SELECT * FROM tours ORDER BY tourid ASC");
                                if (!empty($tour_array)) { 
                                  foreach($tour_array as $key=>$value){
                            ?>

                             <div class="col-md-4" id="details">

                                  <h2 style="color:grey;font-size:20px;margin-top:5px;"><?php echo $tour_array[$key]["tourname"]; ?></h2>
                                  <img src="images/<?php echo $tour_array[$key]["image"]; ?>" class="img-fluid" alt="<?php echo $tour_array[$key]["tourname"]; ?>" />
                                  
                                  <table border="0" width="100%">
                                  <tr>
                                      <td><h3 style="color:blue;font-size:18px;margin-top:5px;"><?php echo $tour_array[$key]["category"]; ?><h3></td>
                                    </tr>
                                    <tr>
                                      <td><h3 style="color:blue;font-size:18px;margin-top:5px;">&#8358;<?php echo $tour_array[$key]["price"]; ?><h3></td>
                                    </tr>
                                    <tr>
                                      <td><h3 style="color:green;font-size:18px;margin-top:5px;"><?php echo $tour_array[$key]["tourname"]; ?></h3></td>
                                    </tr>
                                    <tr>
                                      <td><h3 style="color:purple;font-size:18px;margin-top:5px;"><?php echo $tour_array[$key]["location"]; ?></h3></td>
                                    </tr>
                                    <tr>
                                      <td>						
                                      
                                      <a href="tourdetails.php?touimg=<?php echo $tour_array[$key]["image"]; ?>&touname=<?php echo $tour_array[$key]["tourname"]; ?>&price=<?php echo $tour_array[$key]["price"]; ?>&description=<?php echo $tour_array[$key]["description"]; ?>&location=<?php echo $tour_array[$key]["location"]; ?>&category=<?php echo $tour_array[$key]["category"]; ?>"> View Details </a>
                                      </td>
                                    </tr>
                                  </table>
                                  
                             </div>

                            <?php
                                  }
                                }
                            ?>

                          </div>
                     </div>


                    <?php include('footer.php'); ?>


                     <script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
                     <script src="js/bootstrap.min.js"></script>
                 </body>   
  </html>