<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $rating = $_POST['rating'];

    // Email address to send the feedback to
    $to = "joyrobinson654@gmail.com";

    // Subject of the email
    $subject = "New Feedback from Ibomfoodie";

    // Compose the message
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Comment: $comment\n";
    $message .= "Rating: $rating\n";

    // Send email
    if (mail($to, $subject, $message)) {
        echo "Thank you for your feedback! We'll get back to you soon.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
