<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the "email" field is set and not empty
    if (isset($_POST["email"]) && !empty($_POST["email"])) {
        // Sanitize and validate the email address
        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // The email is valid, you can process it as needed
            // For example, you can send an email
            $to = "eecfiltersindia@gmail.com";
            $subject = "Form Submission";
            $message = "Email: " . $email;

            // Additional headers (optional)
            $headers = "From: Your Website <noreply@yourwebsite.com>" . "\r\n";

            // Send the email
            if (mail($to, $subject, $message, $headers)) {
                echo "Thank you for your inquiry. We will get in touch with you shortly.";
            } else {
                echo "Error sending email. Please try again later.";
            }
        } else {
            // Invalid email address
            echo "Invalid email address. Please enter a valid email address.";
        }
    } else {
        // Email field is empty
        echo "Email address is required.";
    }
} else {
    // Form was not submitted
    echo "Form submission failed.";
}
?>
