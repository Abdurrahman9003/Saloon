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

        /* Text Animation */
        .text-content {
            opacity: 0;
            transform: translateX(-50px);
            animation: slideIn 1s ease-in-out forwards;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Image Animation */
        .animated-img {
            opacity: 0;
            transform: scale(0.8);
            animation: fadeInZoom 1s ease-in-out forwards;
        }

        @keyframes fadeInZoom {
            from {
                opacity: 0;
                transform: scale(0.8);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        /* Benefits List */
        .benefits {
            margin-top: 20px;
            padding: 15px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
        }

        .benefits li {
            margin-bottom: 8px;
        }

        .zoom-wrapper {
        overflow: hidden;
        border-radius: 10px;
    }

    .zoom-wrapper img {
        transition: transform 0.3s ease-in-out;
    }

    .zoom-wrapper img:hover {
        transform: scale(1.1);
    }

       

        
    </style>
</head>

<body>
    <?php include_once('includes/header.php'); ?>

    <div class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <h1 class="hero-title" style="color: #ffffff;">Cutting Club Salon</h1>
                    <p class="hero-text" style="color: #ffffff;"><strong>GET YOUR STYLE YOU DESERVE</strong></p>
                    <div class="btn-group">
                        <a href="signup.php" class="btn btn-default">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- New Salon Description Section -->
    <div class="space-medium" style="background-color: rgb(20, 16, 12);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="image-container scroll-effect" id="salonImageContainer">
                        <img src="images/salonpic.jpg" alt="Salon Interior" class="img-responsive">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
                    <br><br><h1 style="color: #ffffff;"><strong>Welcome to Cutting Club Salon</strong></h1> <!-- This line is bold and now white -->
                    <p style="color: #ffffff;">
                        At Cutting Club Salon, we offer a premium grooming experience designed for modern men. Our expert stylists and barbers are committed to delivering the latest trends and classic styles, tailored to meet your unique needs. Whether you're here for a quick trim or a full makeover, we promise to deliver the highest quality services in a relaxing and stylish environment.
                    </p>
                </div>
            </div>
        </div>
    </div>
 <!-- New Salon Performance Section -->
    <div class="row" style="background-color: #f8f3eb; padding: 60px 10px; display: flex; justify-content: center; align-items: center; text-align: center;">
    <div class="col-4" style="flex: 1; padding: 20px;">
        <center>
            <strong>
                <h3 style="font-weight: bold; color: black; font-size: 1.8rem; display: flex; align-items: center; justify-content: center; gap: 10px;">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="35px" width="35px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.5 3.5c-.614-.884-.074-1.962.858-2.5L8 7.226 11.642 1c.932.538 1.472 1.616.858 2.5L8.81 8.61l1.556 2.661a2.5 2.5 0 1 1-.794.637L8 9.73l-1.572 2.177a2.5 2.5 0 1 1-.794-.637L7.19 8.61zm2.5 10a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0m7 0a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"></path>
                    </svg> CUTS
                </h3>
            </strong>
            <p style="font-size:large; color: #333; max-width: 90%; margin: auto;">
                Precision haircuts tailored to your style. From classic trims to the latest trends, our barbers craft the perfect look for you.
            </p>
        </center>
    </div>
    <div class="col-4" style="flex: 1; padding: 20px;">
        <center>
            <strong>
                <h3 style="font-weight: bold; color: black; font-size: 1.8rem; display: flex; align-items: center; justify-content: center; gap: 10px;">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="35px" width="35px" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 2V1h2v1h4V1h2v1h1v4h-2V4h-1v2H9V4H8v2H6V2h2zm4 20c-2.21 0-4-1.79-4-4V9h8v9c0 2.21-1.79 4-4 4zm-2-9v5c0 1.1.9 2 2 2s2-.9 2-2v-5h-4z"></path>
                </svg> FADES

                </h3>
            </strong>
            <p style="font-size: large; color: #333; max-width: 90%; margin: auto;">
                Seamlessly blended fades for a sharp, modern style. Choose from low, mid, or high fades to suit your preference.
            </p>
        </center>
    </div>
    <div class="col-4" style="flex: 1; padding: 20px;">
        <center>
            <strong>
                <h3 style="font-weight: bold; color: black; font-size: 1.8rem; display: flex; align-items: center; justify-content: center; gap: 10px;">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="35px" width="35px" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14 1h-4v2h4V1zM15 5H9c-1.1 0-2 .9-2 2v2h10V7c0-1.1-.9-2-2-2zM7 10v2h10v-2H7zM9 14v6h6v-6h-6zm2 2h2v2h-2v-2z"></path>
                </svg>SHAVES

                </h3>
            </strong>
            <p style="font-size: large; color: #333; max-width: 90%; margin: auto;">
                Luxurious shaves for a smooth, refreshed look. Enjoy a relaxing, close shave with premium techniques and products.
            </p>
        </center>
    </div>
</div>
<div class="row" style="background-color: rgb(20, 16, 12); padding: 60px 5%;">
    <div class="col-6" style="display: flex; justify-content: center; align-items: center; padding: 50px;">
        <center>
            <img src="/saloon/images/haircut.jpg" data-aos="fade-right" data-aos-offset="300" 
                 data-aos-easing="ease-in-sine" style="width: 500px; height: 400px; border-radius: 10px;" 
                 class="aos-init aos-animate" alt="About Banner">
        </center>
    </div>
    <div class="col-6" style="padding: 50px;">
        <strong>
            <h6 style="margin-top: 50px; color: rgb(206, 212, 218); font-size: 16px;">15 YEARS OF EXPERIENCE</h6>
        </strong><br>
        <strong>
            <h2 style="font-weight: bold; font-size: 50px; color: white; margin-bottom: 20px;">
                MAKING PEOPLE LOOK AWESOME
            </h2>
        </strong>
        <p style="color: rgb(206, 212, 218); font-size: 18px; line-height: 1.6;">
            Come experience a unique and edgy barbershop for all your hair and beard needs.
            Our expert barbers blend classic techniques with modern styles, ensuring you leave 
            with a look that's sharp and personalized just for you. Indulge in a relaxing atmosphere 
            where we prioritize your comfort and satisfaction, making every visit a refreshing and 
            stylish experience.
        </p>
        <strong>
            <h6 style="color: rgb(206, 212, 218); font-size: 16px; margin-top: 20px;">FOUNDER</h6>
        </strong>
        <strong>
            <h4 style="color: white; font-size: 24px;">DAVID JOHN</h4>
        </strong>
    </div>
</div>
<div class="row" style="background-color: rgb(245, 238, 231); padding: 60px 5%;">
    <center>
        <strong>
            <h6 style="color: black; font-size: 40px; margin-bottom: 5px;">PRICING PLAN</h6>
        </strong><br>
        <strong>
            <h4 style="color: black; font-weight: bold; font-size: 24px; margin-bottom: 40px;">BARBER PRICING</h4>
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

<div class="container-fluid bg-dark py-4" style="background: rgb(20, 16, 12);">
    <div class="container">
        <div class="text-center mb-4">
            <h2 style="color: #6c757d; font-weight: bold;">OUR BARBERS</h2>
            <h2 style="color: white; font-weight: bold;">HAIR STYLIST</h2>
        </div><br>
        <div class="row justify-content-center" style="margin: 0 -15px;">

            <!-- Barber 1 -->
            <div class="col-md-3 px-2 mb-3" style="display: flex; flex-direction: column; align-items: center;">
                <div class="card text-center aos-init" data-aos="fade-right" style="border: none; background: transparent;">
                    <div class="zoom-wrapper">
                        <img class="card-img-top rounded img-fluid" 
                             src="https://img.freepik.com/free-photo/male-hairdresser-barber-shop_155003-12122.jpg?ga=GA1.1.534833270.1731481846&amp;semt=ais_hybrid" 
                             alt="John Philip"
                             style="height: 250px; object-fit: cover; width: 100%;">
                    </div>
                    <div class="card-body" style="padding: 1rem;">
                        <h4 style="color: white; margin: 0;">JOHN PHILIP</h4>
                        <h6 style="color: #6c757d; margin: 0;">STYLIST</h6>
                    </div>
                </div>
            </div>

            <!-- Barber 2 -->
            <div class="col-md-3 px-2 mb-3" style="display: flex; flex-direction: column; align-items: center;">
                <div class="card text-center aos-init" data-aos="fade-up" style="border: none; background: transparent;">
                    <div class="zoom-wrapper">
                        <img class="card-img-top rounded img-fluid" 
                             src="/saloon/images/Roy.jpg" 
                             alt="Mark Antony"
                             style="height: 250px; object-fit: cover; width: 100%;">
                    </div>
                    <div class="card-body" style="padding: 1rem;">
                        <h4 style="color: white; margin: 0;">MARK ANTONY</h4>
                        <h6 style="color: #6c757d; margin: 0;">STYLIST</h6>
                    </div>
                </div>
            </div>

            <!-- Barber 3 -->
            <div class="col-md-3 px-2 mb-3" style="display: flex; flex-direction: column; align-items: center;">
                <div class="card text-center aos-init" data-aos="fade-left" style="border: none; background: transparent;">
                    <div class="zoom-wrapper">
                        <img class="card-img-top rounded img-fluid" 
                             src="https://img.freepik.com/free-photo/man-hair-salon-facing-camera_23-2148242763.jpg?ga=GA1.1.534833270.1731481846&amp;semt=ais_hybrid" 
                             alt="Alex Dan"
                             style="height: 250px; object-fit: cover; width: 100%;">
                    </div>
                    <div class="card-body" style="padding: 1rem;">
                        <h4 style="color: white; margin: 0;">ALEX DAN</h4>
                        <h6 style="color: #6c757d; margin: 0;">BARBER</h6>
                    </div>
                </div>
            </div>

            <!-- Barber 4 -->
            <div class="col-md-3 px-2 mb-3" style="display: flex; flex-direction: column; align-items: center;">
                <div class="card text-center aos-init" data-aos="fade-left" style="border: none; background: transparent;">
                    <div class="zoom-wrapper">
                        <img class="card-img-top rounded img-fluid" 
                             src="/saloon/images/author.jpg"  
                             alt="John"
                             style="height: 250px; object-fit: cover; width: 100%;">
                    </div>
                    <div class="card-body" style="padding: 1rem;">
                        <h4 style="color: white; margin: 0;">John moor</h4>
                        <h6 style="color: #6c757d; margin: 0;">BARBER</h6>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<br>
<div class="container-fluid bg-dark py-5" id="banner">
    <div class="row align-items-center">
        <!-- Left Side: Text Content -->
        <div class="col-md-6">
            <div class="text-left px-5 text-content" style="position:relative;left:30px;">
                <p class="fs-4 text-warning mb-2">
                    ★★★★★
                </p>
                <!-- Useful Content Below Ratings -->
                <div class="benefits mt-4">
                    <h5 class="text-warning">Why Choose Us?</h5><br>
                    <ul>
                        <li>💈 Professional and experienced barbers</li>
                        <li>✂️ Trendy haircuts and styling</li>
                        <li>🧼 Clean and hygienic environment</li>
                        <li>🕒 Convenient appointment scheduling</li>
                        <li>💰 Affordable pricing with great service</li>
                    </ul>
                </div>
                <h3 class="text-white fw-bold mb-3" style="color: #000000;font-weight: 500;">We Are Best Barbers & Hair Cutting<br>Salon at Cutting Club</h3><br>
                <h5 class="text-muted" style="color: #000000;font-weight: 500;">Your style, our passion!</h5><br>
                <div class="mt-3">
                    <a href="signup.php" class="btn btn-primary">Book My Appointment</a>
                </div>
            </div>
        </div>

        <!-- Right Side: Image -->
        <div class="col-md-6 text-center">
            <img src="/saloon/images/selfi.jpg" alt="Barber Image" class="img-fluid rounded animated-img" style="max-height: 400px;">
        </div>
    </div>
</div>
</div><br>
<!-- Chatbot UI -->
<div id="chatbot-container" style="position: fixed; bottom: 20px; right: 20px; width: 300px; z-index: 9999; font-family: Arial, sans-serif;">
    <div style="background-color: #aa9144; color: white; padding: 10px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
        <strong>Chat with us</strong>
        <span id="close-chat" style="float: right; cursor: pointer;">&times;</span>
    </div>
    <div id="chat-body" style="background: white; max-height: 300px; overflow-y: auto; padding: 10px; border: 1px solid #ccc;"></div>
    <form id="chat-form" style="display: flex; border: 1px solid #ccc; border-top: none;">
        <input type="text" id="user-input" placeholder="Type a message..." style="flex: 1; padding: 8px; border: none;">
        <button type="submit" style="background: #aa9144; color: white; border: none; padding: 8px 12px;">Send</button>
    </form>
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

        <!-- Chatbot JavaScript -->

        document.getElementById('close-chat').onclick = function () {
            document.getElementById('chatbot-container').style.display = 'none';
        };

        document.getElementById('chat-form').onsubmit = function (e) {
            e.preventDefault();
            const input = document.getElementById('user-input');
            const message = input.value.trim();
            if (message === '') return;

            const chatBody = document.getElementById('chat-body');
            chatBody.innerHTML += `<div style="text-align: right;"><strong>You:</strong> ${message}</div>`;

            fetch('chatbot.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: 'message=' + encodeURIComponent(message)
            })
            .then(response => response.text())
            .then(reply => {
                chatBody.innerHTML += `<div style="text-align: left;"><strong>Bot:</strong> ${reply}</div>`;
                chatBody.scrollTop = chatBody.scrollHeight;
            });

            input.value = '';
        };


    </script>
</body>

</html>