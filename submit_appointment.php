<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars(trim($_POST['name']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $service = htmlspecialchars(trim($_POST['service']));
    $date = htmlspecialchars(trim($_POST['date']));
    $time = htmlspecialchars(trim($_POST['time']));

    // Validate required fields
    if (empty($name) || empty($phone) || empty($service) || empty($date) || empty($time)) {
        echo "<h2>All fields are required. Please go back and complete the form.</h2>";
        exit();
    }

    // Email details
    $to = "appointments@titostireshop.com"; // Replace with your shop's email address
    $subject = "New Appointment Request from $name";
    $message = "
    You have received a new appointment request:

    Name: $name
    Phone: $phone
    Service: $service
    Preferred Date: $date
    Preferred Time: $time

    Please contact the customer to confirm the appointment.
    ";
    $headers = "From: no-reply@titostireshop.com\r\n";
    $headers .= "Reply-To: $name <$phone>\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "<h2>Your appointment request has been sent successfully!</h2>";
        echo "<p>Thank you, $name. We will contact you shortly to confirm your appointment.</p>";
        echo '<a href="index.html">Return to Home</a>';
    } else {
        echo "<h2>Sorry, there was an error sending your request. Please try again later.</h2>";
        echo '<a href="appointments.html">Return to Appointments Page</a>';
    }
} else {
    // If the form was not submitted, redirect to the appointment page
    header("Location: appointments.html");
    exit();
}
?>