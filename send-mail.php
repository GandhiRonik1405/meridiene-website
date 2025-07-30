<?php 

require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$firstName   = htmlspecialchars($_POST['firstName'] ?? '');
$lastName    = htmlspecialchars($_POST['lastName'] ?? '');
$email       = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
$phone       = htmlspecialchars($_POST['phone'] ?? '');
$company     = htmlspecialchars($_POST['company'] ?? '');
$companySize = htmlspecialchars($_POST['companySize'] ?? 'Not Selected');
$useCase     = htmlspecialchars($_POST['useCase'] ?? 'Not Selected');
$message     = htmlspecialchars($_POST['message'] ?? '');



$mail = new PHPMailer(true);

try {
    // SMTP settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.googlemail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'khushbu.lakhataria@txtech.co';
    $mail->Password   = 'hibtopadebpeeomk'; // App password
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;

    // Email content
    $mail->setFrom('khushbu.lakhataria@txtech.co', 'Website Contact');
    $mail->addAddress('ashvin.vadhaniya@txtech.co');

    $mail->isHTML(true);
    $mail->Subject = 'New Contact Form Submission';
    $mail->Body    = "
        <h3>Contact Details</h3>
        <p><strong>FirstName:</strong> {$firstName}</p>
        <p><strong>LastName:</strong> {$lastName}</p>
        <p><strong>Email:</strong><br>{$phone}</p>
        <p><strong>Phone:</strong><br>{$message}</p>
        <p><strong>Company:</strong><br>{$company}</p>
        <p><strong>CompanySize:</strong><br>{$companySize}</p>
        <p><strong>UseCase:</strong><br>{$useCase}</p>
        <p><strong>Message:</strong><br>{$message}</p>";

    $mail->send();
    echo '✅ Mail sent successfully';
} catch (Exception $e) {
    echo "❌ Mail sending failed. Error: {$mail->ErrorInfo}";
}

?>