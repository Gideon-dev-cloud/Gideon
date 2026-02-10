<?php
session_start();

// Configuration
$to_email = "chimaobi.gideon01@gmail.com"; // REPLACE THIS with your email
$subject_prefix = "[Portfolio Contact] ";

// 1. Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 2. Sanitize and Validate Input
    $email = filter_var(trim($_POST["user_email"]), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST["user_message"]));

    // Basic validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        redirect_back("error", "Invalid email address.");
        exit;
    }
    if (empty($message)) {
        redirect_back("error", "Please write a message.");
        exit;
    }

    // 3. Prepare Email Content
    $subject = $subject_prefix . "New message from " . $email;
    $body = "You received a new message from your portfolio website:\n\n";
    $body .= "From: $email\n";
    $body .= "Message:\n$message\n";
    $headers = "From: noreply@portfolio.com"; 

    // 4. ATTEMPT TO SEND EMAIL
    // Note: This often fails on Localhost (XAMPP) without SMTP config.
    $mailSent = @mail($to_email, $subject, $body, $headers);

    // 5. BACKUP LOGGING (Crucial for Localhost/Dev)
    // This saves the message to a text file so you never lose data.
    $logEntry = "--- NEW MESSAGE [" . date('Y-m-d H:i:s') . "] ---\n";
    $logEntry .= "Email: $email\n";
    $logEntry .= "Message: $message\n";
    $logEntry .= "---------------------------------------------\n\n";
    
    file_put_contents('contact_logs.txt', $logEntry, FILE_APPEND);

    // 6. Success Feedback
    if ($mailSent) {
        redirect_back("success", "Message sent successfully!");
    } else {
        // On localhost, we say success because we saved it to the log file
        redirect_back("success", "Message saved! (Check contact_logs.txt if no email received)");
    }

} else {
    // If someone tries to open send_mail.php directly
    header("Location: index.php");
    exit();
}

// Helper function to redirect back to index.php with a status message
function redirect_back($type, $msg) {
    // We store the message in a session to display it on the main page
    $_SESSION['alert_type'] = $type; // 'success' or 'error'
    $_SESSION['alert_msg'] = $msg;
    header("Location: index.php#contact");
    exit();
}
?>