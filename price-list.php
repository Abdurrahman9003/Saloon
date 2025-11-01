<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Men Salon Management System || Home Page</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i%7cMontserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Style -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        /* Add fade-in border effect to the image */
        .image-container {
            position: relative;
            display: inline-block;
            overflow: hidden;
        }

        .image-container img {
            transition: transform 0.3s ease, border 0.3s ease;
            width: 100%;
            height: auto;
        }

        .image-container::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border: 5px solid transparent;
            background: rgba(0, 0, 0, 0);
            transition: background 0.3s ease, border-color 0.3s ease;
        }

        .image-container:hover img {
            transform: scale(1.1); /* Zoom effect */
        }

        .image-container:hover::after {
            background: rgba(0, 0, 0, 0.5); /* Black fade-in */
            border-color: #000; /* Solid black border on hover */
        }

        /* Scroll effect */
        .scroll-effect {
            transition: transform 0.2s ease-out;
        }

        
    </style>
</head>

<body>
    <?php include_once('includes/header.php'); ?>
    
    
<div class="row" style="background-color: rgb(245, 238, 231); padding: 60px 5%;">
    <center>
        <strong>
            <h6 style="color: grey; font-size: 18px; margin-bottom: 5px;">PRICING PLAN</h6>
        </strong><br>
        <strong>
            <h4 style="color: black; font-weight: bold; font-size: 42px; margin-bottom: 40px;">BARBER PRICING</h4>
        </strong>
    </center>
    
    <div style="display: flex; flex-wrap: wrap; justify-content: space-between;">
        <div style="flex: 1; padding: 20px; min-width: 300px;">
            <div style="margin-bottom: 30px;">
                <center>
                    <strong>
                        <h5 style="color: black; font-weight: bold; font-size: 22px;">WASH AND CUT — Rs.700</h5>
                    </strong>
                </center>
                <p style="font-style: italic; text-align: center; font-size: 18px; margin-top: 10px;">A refreshing wash followed by a precision cut tailored to your style.</p>
            </div>

            <div style="margin-bottom: 30px;">
                <center>
                    <strong>
                        <h5 style="color: black; font-weight: bold; font-size: 22px;">HEAD SHAVE WITH RAZOR — Rs.540</h5>
                    </strong>
                </center>
                <p style="font-style: italic; text-align: center; font-size: 18px; margin-top: 10px;">Experience a smooth and clean shave with a razor for a polished look.</p>
            </div>

            <div style="margin-bottom: 30px;">
                <center>
                    <strong>
                        <h5 style="color: black; font-weight: bold; font-size: 22px;">LONG HAIR —Rs.650</h5>
                    </strong>
                </center>
                <p style="font-style: italic; text-align: center; font-size: 18px; margin-top: 10px;">Expert care and styling for long hair to keep it looking healthy and chic.</p>
            </div>

            <div style="margin-bottom: 30px;">
                <center>
                    <strong>
                        <h5 style="color: black; font-weight: bold; font-size: 22px;">CHILDREN WASH & CUT — Rs.450</h5>
                    </strong>
                </center>
                <p style="font-style: italic; text-align: center; font-size: 18px; margin-top: 10px;">Gentle wash and a stylish cut for the little ones.</p>
            </div>
        </div>

        <div style="flex: 1; padding: 20px; min-width: 300px;">
            <div style="margin-bottom: 30px;">
                <center>
                    <strong>
                        <h5 style="color: black; font-weight: bold; font-size: 22px;">WASH AND STYLE — Rs.400</h5>
                    </strong>
                </center>
                <p style="font-style: italic; text-align: center; font-size: 18px; margin-top: 10px;">Quick wash and professional styling to refresh your look.</p>
            </div>

            <div style="margin-bottom: 30px;">
                <center>
                    <strong>
                        <h5 style="color: black; font-weight: bold; font-size: 22px;">SHORT BEARD TIDY — Rs.300</h5>
                    </strong>
                </center>
                <p style="font-style: italic; text-align: center; font-size: 18px; margin-top: 10px;">Neat trim and shape for a well-groomed short beard.</p>
            </div>

            <div style="margin-bottom: 30px;">
                <center>
                    <strong>
                        <h5 style="color: black; font-weight: bold; font-size: 22px;">LARGE BEARD TRIM — Rs.250</h5>
                    </strong>
                </center>
                <p style="font-style: italic; text-align: center; font-size: 18px; margin-top: 10px;">Detailed trim and shape for larger beards, ensuring a sharp look.</p>
            </div>

            <div style="margin-bottom: 30px;">
                <center>
                    <strong>
                        <h5 style="color: black; font-weight: bold; font-size: 22px;">LUXURY FULL SERVICE — Rs.1000</h5>
                    </strong>
                </center>
                <p style="font-style: italic; text-align: center; font-size: 18px; margin-top: 10px;">Indulge in the ultimate grooming experience with a full wash, cut, and shave.</p>
            </div>
        </div>
    </div>
</div>




    
    <?php include_once('includes/footer.php'); ?>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menumaker.js"></script>
    <!-- Sticky header -->
    <script src="js/jquery.sticky.js"></script>
    <script src="js/sticky-header.js"></script>

    <!-- Scroll Effect Script -->
    <script>
        window.addEventListener("scroll", function() {
            var scrollPosition = window.scrollY;
            var imageContainer = document.getElementById("salonImageContainer");

            // Adjusting the multiplier for slower effect and keep the image in left corner
            var translateXValue = scrollPosition * 0.05;  // Reduced multiplier to make the movement slower
            // Ensuring it doesn't go past a certain point (keeping it within limits)
            if (translateXValue > 100) translateXValue = 100; // Set maximum limit (100px)

            imageContainer.style.transform = "translateX(" + translateXValue + "px)";
        });
    </script>
</body>

</html>
