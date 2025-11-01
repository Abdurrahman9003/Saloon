<?php
session_start();
error_reporting(0);

// Function to handle simple responses
function getBotResponse($userMessage) {
    // Simple predefined responses based on user input
    $responses = [
        'hello' => 'Hi there! How can I help you today?',
        'what services do you offer?' => 'We offer haircuts, shaves, fades, and other grooming services. Would you like to book an appointment?',
        'pricing' => 'Our pricing includes: Hair Cut - Rs.300, Style Hair Cut - Rs.550, Deluxe Menicure - Rs.500, Body Spa - Rs.1500, Wash and Cut - Rs.700, Head Shave with Razor - Rs.540, and more. Feel free to ask for more details.',
        'hours' => 'We are open every day from 9 AM to 9 PM.',
        'location' => 'We are located at Cutting Club Salon, No.89, Gall road, Colombo.',
        'book appointment' => 'To book an appointment, please visit our booking page or call us at +94775643200.',
        'thanks' => 'You\'re welcome! Feel free to reach out if you have more questions.',
        'contact' => 'You can contact us at +94775643200 or email us at info@cuttingclubsalon.com.',
        'offer' => 'We currently have a special offer: Get 10% off on your first haircut!',
        'specials' => 'Check our website for ongoing promotions and special offers!',
        'help' => 'I can help you with pricing, services, booking, and location. How can I assist you further?',
        'bye' => 'Goodbye! Have a great day!',
    ];

    // Convert message to lowercase for better matching
    $userMessage = strtolower(trim($userMessage));

    // Check if we have a predefined response for the message
    if (array_key_exists($userMessage, $responses)) {
        return $responses[$userMessage];
    } else {
        // If the message doesn't match, send a default response
        return 'Sorry, I didn\'t understand that. Can you please ask something else?';
    }
}

// Check if a message was posted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['message'])) {
        $userMessage = $_POST['message'];

        // Get the bot's response
        $botResponse = getBotResponse($userMessage);

        // Return the response
        echo $botResponse;
    } else {
        echo 'No message received.';
    }
} else {
    echo 'Invalid request method.';
}
?>
