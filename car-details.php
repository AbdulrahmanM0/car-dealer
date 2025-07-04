<?php // car-details.php - Car Details page (dynamic) ?>
<?php include 'db.php'; ?>
<?php
$car = null;
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $result = $conn->query("SELECT * FROM cars WHERE id = $id");
    if ($result && $result->num_rows > 0) {
        $car = $result->fetch_assoc();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <title>Car Details</title>
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
                    <a href="#" class="navbar-brand">Car Dealer Website</a>
               </div>
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="index.php">Home</a></li>
                         <li><a href="cars.php">Cars</a></li>
                         <li><a href="about-us.html">About Us</a></li>
                         <li><a href="contact.html">Contact Us</a></li>
                    </ul>
               </div>
          </div>
     </section>
     <section>
          <div class="container">
               <?php if ($car) { ?>
               <div class="row">
                    <div class="col-md-6 col-xs-12">
                         <div>
                              <img src="<?php echo htmlspecialchars($car['image']); ?>" alt="" class="img-responsive wc-image">
                         </div>
                         <br>
                    </div>
                    <div class="col-md-6 col-xs-12">
                         <form class="form">
                              <h2><?php echo htmlspecialchars($car['name']); ?></h2>
                              <p class="lead"><?php echo htmlspecialchars($car['description']); ?></p>
                              <p class="lead"><strong class="text-primary">$<?php echo number_format($car['price'],2); ?></strong></p>
                              <div class="row">
                                   <div class="col-md-4 col-sm-6">
                                        <p><span>Type</span><br><strong><?php echo htmlspecialchars($car['type'] ?? ''); ?></strong></p>
                                   </div>
                                   <div class="col-md-4 col-sm-6">
                                        <p><span>Model</span><br><strong><?php echo htmlspecialchars($car['model'] ?? ''); ?></strong></p>
                                   </div>
                                   <div class="col-md-4 col-sm-6">
                                        <p><span>Year</span><br><strong><?php echo htmlspecialchars($car['year']); ?></strong></p>
                                   </div>
                                   <div class="col-md-4 col-sm-6">
                                        <p><span>Mileage</span><br><strong><?php echo htmlspecialchars($car['mileage'] ?? ''); ?></strong></p>
                                   </div>
                                   <div class="col-md-4 col-sm-6">
                                        <p><span>Engine size</span><br><strong><?php echo htmlspecialchars($car['engine'] ?? ''); ?></strong></p>
                                   </div>
                                   <div class="col-md-4 col-sm-6">
                                        <p><span>Transmission</span><br><strong><?php echo htmlspecialchars($car['transmission'] ?? ''); ?></strong></p>
                                   </div>
                              </div>
                         </form>
                    </div>
               </div>
               <div class="row">
                    <div class="col-lg-8 col-xs-12">
                         <div class="panel panel-default">
                              <div class="panel-heading">
                                   <h4>Vehicle Description</h4>
                              </div>
                              <div class="panel-body">
                                   <p><?php echo nl2br(htmlspecialchars($car['description'])); ?></p>
                              </div>
                         </div>
                    </div>
                    <div class="col-lg-4 col-xs-12">
                         <div class="panel panel-default">
                              <div class="panel-heading">
                                   <h4>Contact Details</h4>
                              </div>
                              <div class="panel-body">
                                   <p><span>Name</span><br><strong>John Smith</strong></p>
                                   <p><span>Phone</span><br><strong><a href="tel:123-456-789">123-456-789</a></strong></p>
                                   <p><span>Mobile phone</span><br><strong><a href="tel:456789123">456789123</a></strong></p>
                                   <p><span>Email</span><br><strong><a href="mailto:john@carsales.com">john@carsales.com</a></strong></p>
                              </div>
                         </div>
                    </div>
               </div>
               <?php } else { ?>
               <div class="alert alert-danger">Car not found.</div>
               <?php } ?>
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
                                   <p>212 Barrington Court <br>New York, ABC 10001</p>
                              </address>
                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2020 Company Name</p>
                                   <p>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></p>
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
                                             <input type="email" class="form-control" placeholder="Enter your email" name="email" id="email" required>
                                             <input type="submit" class="form-control" name="submit" id="form-submit" value="Send me">
                                        </form>
                                        <span><sup>*</sup> Please note - we do not spam your email.</span>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </footer>
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>
</body>
</html> 