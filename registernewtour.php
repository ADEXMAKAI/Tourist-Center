<!DOCTYPE html>
  <html lang="en">
                 <head>
                     <meta charset="UTF-8">
                     <meta name="viewport" content="width=device-width,initial-scale=1.0">
                     <meta name="author" content="adexmakai">
                     <link rel ="preconnect" href="https://fonts.gstatic.com">
		             <link href="https://fonts.googleapis.com/css2?family=inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
                     <title>Tourist Center: TourRegisterForm</title>
                     <link rel="stylesheet" href="css/bootstrap.min.css">
                     <link rel="stylesheet" href="mycss/mystyle.css">
                 </head>
                 <body>
                     
                     <?php include('header.php'); ?>
                     
                     <div class="container-fluid">
                         <div class="row">
                             <div class="col-md-4">
                                 <div>
                                     <img src="images/NokSettlement1.jpg" class="img-fluid"  alt="image2"/>
                                 </div>
                             </div>
                             <div class="col-md-4">
                             <form name="tour" method="post" action="saveregistertour.php" enctype="multipart/form-data">
                                 <div class="table-responsive">
                                    <table class="table table-borderless">
                                     <caption class="text-center text-underline caption-top">Tour Form</caption>
                                     <tr>
                                         <td align='right'>
                                             <label for="tourname">TOUR NAME:</label>
                                         </td>
                                         <td align='left'>
                                             <input type="text" name="tourname" id="tourname"  required>
                                         </td>
                                     </tr>
                                     <tr>
                                         <td align='right'>
                                             <label for="tourcode">TOUR CODE:</label>
                                         </td>
                                         <td align='left'>
                                             <input type="text" name="tourcode" id="tourcode"  required />
                                         </td>
                                     </tr>
                                     <tr>
                                         <td align='right'>
                                             <label for="location">LOCATION:</label>
                                         </td>
                                         <td align='left'>
                                             <input type="text" name="location" id="location"  required />
                                         </td>
                                     </tr>
                                     <tr>
                                         <td align='right'>
                                            <label for="description">DESCRIPTION:</label>
                                         </td> 
                                         <td align='left'>
                                            <textarea rows="5" cols="40"  name="description" id="description" required /></textarea>
                                         </td>
                                     </tr>
                                     <tr>
                                         <td align='right'>
                                             <label for="price">PRICE:</label>
                                         </td>
                                         <td align='left'>
                                             <input type="text" name="price" id="price"  required />
                                         </td>
                                     </tr>
                                     <tr>
                                         <td align='right'>
                                             <label for="category">CATEGORY:</label>
                                         </td>
                                         <td align='left'>
                                             <input type="text" name="category" id="category"  required />
                                         </td>
                                     </tr>
                                     <tr>
                                         <td align='right'>
                                             <label for="image">UPLOAD IMAGE:</label>
                                         </td>
                                         <td align='left'>
                                             <input type="file" name="myFile" id="myFile" />
                                         </td>
                                     </tr>
                                     <tr>
                                         <td></td>
                                         <td>
                                                <button type='submit' name='submitbutton' id='submitbutton' value='submit' class='btn btn-success'>Submit</button>
                                                <button type='reset' name='resetbutton' id='resetbutton' value='reset' class='btn btn-danger'>Clear</button>
                                         </td>
                                     </tr>
                                 </table>
                                 </div>
                                 </form>
                             </div>
                             <div class="col-md-4">
                             <div>
                                     <img src="images/PortHarcourtTouristBeach.jpeg"  class="img-fluid"/>
                                 </div>
                             </div>
                         </div>
                     </div>
                    <?php include('footer.php'); ?>









                     
                     <script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
                     <script src="js/bootstrap.min.js"></script>
                 </body>  
  
  </html>