<?php

require __DIR__ . '/config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: application/json');

// Sanitize input
$firstName   = htmlspecialchars($_POST['firstName'] ?? '');
$lastName    = htmlspecialchars($_POST['lastName'] ?? '');
$email       = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
$phone       = htmlspecialchars($_POST['phone'] ?? '');
$company     = htmlspecialchars($_POST['company'] ?? '');
$companySize = htmlspecialchars($_POST['companySize'] ?? 'Not Selected');
$useCase     = htmlspecialchars($_POST['useCase'] ?? 'Not Selected');
$message     = htmlspecialchars($_POST['message'] ?? '');

// reCAPTCHA
$recaptchaSecret   = RECAPTCHA_SECRET_KEY;
$recaptchaResponse = $_POST['g-recaptcha-response'] ?? '';

$verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecret}&response={$recaptchaResponse}");
$response = json_decode($verify);

// Check reCAPTCHA
if ($response && $response->success) {
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = MAIL_HOST;
        $mail->SMTPAuth   = true;
        $mail->Username   = MAIL_USERNAME;
        $mail->Password   = MAIL_PASSWORD;
        $mail->SMTPSecure = MAIL_ENCRYPTION;
        $mail->Port       = MAIL_PORT;

        $mail->setFrom(MAIL_USERNAME, MAIL_FROM_NAME);
        $mail->addAddress(MAIL_TO);

        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body    = "
            <h3>Contact Details</h3>
            <p><strong>First Name:</strong> {$firstName}</p>
            <p><strong>Last Name:</strong> {$lastName}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Phone:</strong> {$phone}</p>
            <p><strong>Company:</strong> {$company}</p>
            <p><strong>Company Size:</strong> {$companySize}</p>
            <p><strong>Use Case:</strong> {$useCase}</p>
            <p><strong>Message:</strong><br>{$message}</p>
        ";

        $mail->send();

        echo json_encode([
            'status' => 'success',
            'message' => 'Thank you for reaching out to us. We’ll get back to you shortly.'
        ]);
    } catch (Exception $e) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Mail sending failed.',
            'error' => $mail->ErrorInfo
        ]);
    }

} else {
    echo json_encode([
        'status' => 'recaptcha_failed',
        'message' => 'Please verify the CAPTCHA and try again.'
    ]);
}

exit;
?>
