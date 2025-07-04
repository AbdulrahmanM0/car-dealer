<?php  ?>
<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
     <title>SELL CAR</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/style.css">
</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section>
     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">
               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">SELL CAR</a>
               </div>
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="index.php">Home</a></li>
                         <li class="active"><a href="cars.php">Cars</a></li>
                         <li><a href="about-us.html">About Us</a></li>
                         <li><a href="contact.php">Contact Us</a></li>
                    </ul>
               </div>
          </div>
     </section>
     <section>
          <div class="container">
               <div class="text-center">
                    <h1>Car Listing</h1>
                    <br>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, alias.</p>
               </div>
          </div>
     </section>
     <section class="section-background">
          <div class="container">
               <div class="row">
                    <div class="col-lg-3 col-xs-12">
                         <div class="form">
                              <form action="#">
                                   <div class="form-group">
                                        <label>Used/New:</label>
                                        <select class="form-control">
                                             <option value="">All</option>
                                             <option value="new">New vehicle</option>
                                             <option value="used">Used vehicle</option>
                                        </select>
                                   </div>
                                   <div class="form-group">
                                        <label>Vehicle Type:</label>
                                        <select class="form-control">
                                             <option value="">--All --</option>
                                             <option value="">option 1</option>
                                             <option value="">option 2</option>
                                             <option value="">option 3</option>
                                             <option value="">option 4</option>
                                        </select>
                                   </div>
                                   <div class="form-group">
                                        <label>Model:</label>
                                        <select class="form-control">
                                             <option value="">-- All --</option>
                                             <option value="">option 1</option>
                                             <option value="">option 2</option>
                                             <option value="">option 3</option>
                                             <option value="">option 4</option>
                                        </select>
                                   </div>
                                   <div class="form-group">
                                        <label>Price:</label>
                                        <select class="form-control">
                                             <option value="">-- All --</option>
                                             <option value="">option 1</option>
                                             <option value="">option 2</option>
                                             <option value="">option 3</option>
                                             <option value="">option 4</option>
                                        </select>
                                   </div>
                                   <button type="submit" class="section-btn btn btn-primary btn-block">Search</button>
                              </form>
                         </div>
                    </div>
                    <div class="col-lg-9 col-xs-12">
                         <div class="row">
                              <?php
                              $sql = "SELECT * FROM cars";
                              $result = $conn->query($sql);
                              if ($result->num_rows > 0) {
                                  while($car = $result->fetch_assoc()) {
                              ?>
                              <div class="col-lg-6 col-md-4 col-sm-6">
                                   <div class="courses-thumb courses-thumb-secondary">
                                        <div class="courses-top">
                                             <div class="courses-image">
                                                  <img src="<?php echo htmlspecialchars($car['image']); ?>" class="img-responsive" alt="">
                                             </div>
                                             <div class="courses-date">
                                                  <span title="Mileage"><i class="fa fa-dashboard"></i> <?php echo htmlspecialchars($car['mileage']); ?></span>
                                                  <span title="Engine"><i class="fa fa-cube"></i> <?php echo htmlspecialchars($car['engine'] ?? ''); ?></span>
                                                  <span title="Transmission"><i class="fa fa-cog"></i> <?php echo htmlspecialchars($car['transmission'] ?? ''); ?></span>
                                             </div>
                                        </div>
                                        <div class="courses-detail">
                                             <h3><a href="car-details.php?id=<?php echo $car['id']; ?>"><?php echo htmlspecialchars($car['name']); ?></a></h3>
                                             <p class="lead"><strong>$<?php echo number_format($car['price'],2); ?></strong></p>
                                             <p><?php echo htmlspecialchars($car['description']); ?></p>
                                        </div>
                                        <div class="courses-info">
                                             <a href="car-details.php?id=<?php echo $car['id']; ?>" class="section-btn btn btn-primary btn-block">View More</a>
                                        </div>
                                   </div>
                              </div>
                              <?php
                                  }
                              } else {
                                  echo "<p>No cars found.</p>";
                              }
                              ?>
                         </div>
                    </div>
               </div>
          </div>
     </section>
     <!-- FOOTER -->
     <footer id="footer">
          <div class="container">
               <div class="row">
                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Headquarter</h2>
                              </div>
                              <address>
                                   <p>212 Barrington Court <br>Suadi abc 10001</p>
                              </address>
                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                              <div class="copyright-text">
                                   <p>Copyright &copy; 2020 Sell Car</p>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Contact Info</h2>
                              </div>
                              <address>
                                   <p>+1 333 4040 5566</p>
                                   <p><a href="mailto:contact@company.com">contact@company.com</a></p>
                              </address>
                              <div class="footer_menu">
                                   <h2>Quick Links</h2>
                                   <ul>
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about-us.php">About Us</a></li>
                                        <li><a href="terms.php">Terms & Conditions</a></li>
                                        <li><a href="contact.php">Contact Us</a></li>
                                   </ul>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                         <div class="footer-info newsletter-form">
                              <div class="section-title">
                                   <h2>Newsletter Signup</h2>
                              </div>
                              <div>
                                   <div class="form-group">
                                        <form action="#" method="get">
                                             <input type="email" class="form-control" placeholder="Enter your email"
                                                  name="email" id="email" required>
                                             <input type="submit" class="form-control" name="submit" id="form-submit"
                                                  value="Send me">
                                        </form>
                                        <span><sup>*</sup> Please note - we do not spam your email.</span>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </footer>
     <div class="modal fade bs-example-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
               <div class="modal-content">
                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                   aria-hidden="true">&times;</span></button>
                         <h4 class="modal-title" id="gridSystemModalLabel">Book Now</h4>
                    </div>
                    <div class="modal-body">
                         <form action="#" id="contact-form">
                              <div class="row">
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Pick-up location" required>
                                   </div>
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Return location" required>
                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Pick-up date/time"
                                             required>
                                   </div>
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Return date/time" required>
                                   </div>
                              </div>
                              <input type="text" class="form-control" placeholder="Enter full name" required>
                              <div class="row">
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Enter email address"
                                             required>
                                   </div>
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Enter phone" required>
                                   </div>
                              </div>
                         </form>
                    </div>
                    <div class="modal-footer">
                         <button type="button" class="section-btn btn btn-primary">Book Now</button>
                    </div>
               </div>
          </div>
     </div>
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>
</body>
</html> 