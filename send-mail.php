<?php 

require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    // SMTP settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.googlemail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'hitesh.vaghela@txtech.co';
    $mail->Password   = 'oacqmtprgtmqmmen'; // App password
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;

    // Email content
    $mail->setFrom('hitesh.vaghela@txtech.co', 'Website Contact');
    $mail->addAddress('vishnu.mevada@txtech.co');

    $mail->isHTML(true);
    $mail->Subject = 'Test Email from Website';
    $mail->Body    = '<h3>It works!</h3><p>This is a test message.</p>';

    $mail->send();
    echo '✅ Mail sent successfully';
} catch (Exception $e) {
    echo "❌ Mail sending failed. Error: {$mail->ErrorInfo}";
}


// exit;

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // 1. Collect form data safely
//     $firstName   = htmlspecialchars($_POST['firstName'] ?? '');
//     $lastName    = htmlspecialchars($_POST['lastName'] ?? '');
//     $email       = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
//     $phone       = htmlspecialchars($_POST['phone'] ?? '');
//     $company     = htmlspecialchars($_POST['company'] ?? '');
//     $companySize = htmlspecialchars($_POST['companySize'] ?? 'Not Selected');
//     $useCase     = htmlspecialchars($_POST['useCase'] ?? 'Not Selected');
//     $message     = htmlspecialchars($_POST['message'] ?? '');

    
//     // 2. Validate required fields
//     if (!$firstName || !$lastName || !$email || !$company || !$message) {
//         die("Please fill in all required fields.");
//     }

//     // 3. Set email details
//     $to = "ashvin.vadhaniya@txtech.co";  // ✅ Change this to your email
//     $subject = "New Contact Request from $firstName $lastName";
//     $body = "
//         You have received a new message from the contact form:\n\n
//         Name: $firstName $lastName\n
//         Email: $email\n
//         Phone: $phone\n
//         Company: $company\n
//         Company Size: $companySize\n
//         Use Case: $useCase\n
//         Message:\n$message
//     ";

//     $headers = "From: $email\r\n";
//     $headers .= "Reply-To: $email\r\n";

//     // 4. Send the email
//     if (mail($to, $subject, $body, $headers)) {
//         echo "Message sent successfully!";
//     } else {
//         echo "Sorry, the message could not be sent.";
//     }
// } else {
//     echo "Invalid request.";
// }

?>