<?php
    // Added input sanitizing to prevent injection

    // Only process POST requests.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
                $name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(@$_POST["email"], FILTER_SANITIZE_EMAIL );
        $message = trim($_POST["message"]);

        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Your mail $email is incomplete";

            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "godyutaru@gmail.com";

        // Set the email subject.
        $subject = "Yutaru.net - $name has sent you a message";

        // Build the email content.
        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Message:\n$message\n";

        // Build the email headers.
        $email_headers = "From: $name <$email>";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank you $name, your message has been sent, we'll be in touch very soon";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            //$mensaje2="Oops! Algo anda mal, su mensaje no se envió";
            echo "Sorry $name, there has been an issue sending the message :(";

        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "Please check your internet connection";
        
    }
?>