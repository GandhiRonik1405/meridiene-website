<?php 

require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// require 'PHPMailer/SMTP.php';
// require 'PHPMailer/Exception.php';
require __DIR__ . '/vendor/phpmailer/phpmailer/src/SMTP.php';
require __DIR__ . '/vendor/phpmailer/phpmailer/src/Exception.php';

$mail = new PHPMailer(true);

try {
    // SMTP settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';         // Gmail SMTP
    $mail->SMTPAuth   = true;
    $mail->Username   = 'ashvin.vadhaniya@txtech.co';    // 🔁 अपना Gmail डालें
    $mail->Password   = 'Ashvin@123';      // 🔁 App password (2FA enabled)
    $mail->SMTPSecure = 'tls';
    $mail->Port       = PHPMailer::ENCRYPTION_STARTTLS;

    // Email content
    $mail->setFrom('ashvin.vadhaniya@txtech.co', 'Meridiene Website');
    $mail->addAddress('vishnu.mevada@txtech.co');    // 🔁 जहाँ form data जाना चाहिए

    $mail->isHTML(true);
    $mail->Subject = 'New Inquiry from Website';
    $mail->Body    = '
        <h3>Contact Details</h3>
        <p><strong>First Name:</strong> ' ."Sdsdsdssds" . '</p>
      
    ';

    $mail->send();
    echo 'success';
    exit;

} catch (Exception $e) {
    echo "Mail sending failed. Error: {$mail->ErrorInfo}";
}


exit;

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