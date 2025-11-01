
<?php
include('includes/dbconnection.php');
session_start();
error_reporting(0);

if(isset($_POST['sub']))
  {
   
    $email=$_POST['email'];
 
     
    $query=mysqli_query($con, "insert into tblsubscriber(Email) value('$email')");
    if ($query) {
   echo "<script>alert('Your subscribe successfully!.');</script>";
echo "<script>window.location.href ='index.php'</script>";
  }
  else
    {
       echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

  
}
  ?>
<div class="footer">
        <!-- footer-->
        <div class="container">
            <div class="footer-block">
                <!-- footer block -->
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-widget">
                            <h2 class="widget-title">Salon Address</h2>
                            <ul class="listnone contact">
                                <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                <li><i class="fa fa-map-marker"></i> <?php  echo $row['PageDescription'];?> </li>
                                <li><i class="fa fa-phone"></i> +<?php  echo $row['MobileNumber'];?></li>
                               
                                <li><i class="fa fa-envelope-o"></i>  <?php  echo $row['Email'];?></li><?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-widget footer-social">
                            <!-- social block -->
                            <h2 class="widget-title">Social Feed</h2>
                            <ul class="listnone">
                                <li><a href="#"> <i class="fa fa-facebook"></i> Facebook </a></li>
                                <li>
                                    <a href="#" style="position: relative;left: 9px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 448 512" fill="currentColor" style="position: relative;right: 13px;">
                                            <path d="M448 209.9c-16.7 3.2-33.8 4.9-51.3 4.9-41.3 0-81.6-11.4-116.3-32.8v139.1c0 54.5-44.3 98.8-98.8 98.8-39.2 0-72.8-23.1-89-56.5a99.12 99.12 0 0 1-9.8-43.2c0-54.5 44.3-98.8 98.8-98.8 5.5 0 10.9 .5 16.1 1.5v55.6c-5.2-1.5-10.6-2.2-16.1-2.2-23.5 0-42.5 19.1-42.5 42.5 0 23.5 19.1 42.5 42.5 42.5 23.5 0 42.5-19.1 42.5-42.5V107h55.1c9.7 47.6 46.6 85.9 94.3 96.3V52.5h57.4c1.3 10.5 2 21.3 2 32.2 0 47.1-15.1 92.1-41.1 129.2z"/>
                                        </svg>
                                        TikTok
                                    </a>
                                </li>

                                <li><a href="#"><i class="fa fa-google-plus"></i> Google</a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i> Instagram</a></li>

                            </ul>
                        </div>
                        <!-- /.social block -->
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="footer-widget widget-newsletter">
                            <!-- newsletter block -->
                            <h2 class="widget-title">Newsletters</h2>
                            <p>Enter your email address to receive new patient information and other useful information right to your inbox.</p>
                            <form method="post">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter your email address" name="email">
                                <span class="input-group-btn">
                            <button class="btn btn-default" type="submit" value="submit" name="sub">Subscribe</button>
                            </span>
                            </div></form>
                            <!-- /input-group -->
                        </div>
                        <!-- newsletter block -->
                    </div>
                </div>
                <div class="tiny-footer">
                    <!-- tiny footer block -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="copyright-content">
                                <p> Cutting Club Salon </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.tiny footer block -->
            </div>
            <!-- /.footer block -->
        </div>
    </div>