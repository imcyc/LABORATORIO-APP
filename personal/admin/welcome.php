<style>
    a.btn.alert { background: #cc0000; color: #ffffff; float: right;}
</style>
<?php
session_start();
include "admin/dbconfig.php";
$user = $_SESSION["login_user"];
$password = $_SESSION["password_user"];
$result = "SELECT * FROM clients WHERE login='$user' ORDER BY id DESC LIMIT 1";
//$result = "SELECT clients.*, reports.* FROM clients INNER JOIN reports ON clients.id=reports.client_id WHERE clients.login='$user'";
$query = mysql_query($result);
?>
<!DOCTYPE html>
<html lang="en">
 <?php include 'includes/head.php'; ?>
<body id="page-top" class="index">
    <!-- Navigation -->
    <?php include 'includes/menu.php'; ?>
    <!-- Services Section -->
    <section id="services" style="background: url(img/bg.jpg);">
        <div class="container" style="background: rgba(224, 224, 224, 0.9); box-shadow: 0 0 5px #000000; padding-bottom: 20px;">
            <div class="row">
                
                <div class="col-md-9">
                    
                    <?php
                    while($row = mysql_fetch_array( $query )) {
                    ?>
                    <!--<h3 style="color: #333333;">Client id: <?php echo $row['id']; ?></h3>-->
                    <h3 style="color: #333333;">Username: <?php echo $user; ?></h3>
                    <h3 style="color: #333333;">Password: <?php echo $password; ?></h3>
                    <iframe id="fred" style="border:1px solid #666CCC" title="GRIFFIN INSPECTIONS" src="/_PDF/<?php echo $row['file']; ?>" frameborder="0" scrolling="auto" height="1100" width="100%" ></iframe>
                    <?php
                    }
                    ?>
                    <h2><a class="btn alert" href="logout.php">Sign Out</a></h2>
                </div>
                
                
                <div class="col-md-3" style="background: #ffffff;">
                    <h3 style="font-size: 15px;">Proudly a Member of:</h3>
                    <div align="center" style="margin-bottom: 15px;">
                        <a href="http://www.cahpi.bc.ca">
                            <img src="img/cahpil_ogo.jpg" class="img-responsive" alt="" title="" />
                        </a>
                    </div>
                    <div align="center" style="margin-bottom: 15px;">
                        <a href="http://www.wettinc.ca/search.html">
                            <img src="img/WETT_logo2.jpg" class="img-responsive" alt="" title="" />
                        </a>
                    </div>
                    <div align="center" style="margin-bottom: 15px;">
                        <a href="http://www.ahit.com/team.htm">
                            <img src="img/ahit_logo.jpg" class="img-responsive" alt="" title="" />
                        </a>
                    </div>
                    <div align="center" style="margin-bottom: 15px;">
                        <a href="http://www.consumerprotectionbc.ca/consumers-home-inspections/confirm-an-inspectors-license?business_name=Griffin+Home+Inspection+Services+Inc.&license_number=&first_name=Gordon&last_name=Kay&region=any&association=any&Submit.x=16&Su">
                            <img src="img/consumer_protect.jpg" class="img-responsive" alt="" title="" />
                        </a>
                    </div>
                    <div align="center" style="margin-bottom: 15px;">
                        <a href="http://www.red-seal.ca/c.4nt.2nt@-eng.jsp?cid=29">
                            <img src="img/redseallogo.jpg" class="img-responsive" alt="" title="" />
                        </a>
                    </div>
                    <div align="center" style="margin-bottom: 15px;">
                        <a href="http://www.thinkpermit.ca/permits">
                            <img src="img/logo-safetyauthority.png" class="img-responsive" alt="" title="" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include 'includes/service.php'; ?>
    
    <?php include 'includes/opinion.php'; ?>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <span class="copyright" style="color: #ffffff;">Copyright © 2005 - 2013 Griffin Home Inspection Services Inc.</span>
                </div>
                <div class="col-md-3">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>

</html>
