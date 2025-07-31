<?php

require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Sanitize form input
$firstName   = htmlspecialchars($_POST['firstName'] ?? '');
$lastName    = htmlspecialchars($_POST['lastName'] ?? '');
$email       = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
$phone       = htmlspecialchars($_POST['phone'] ?? '');
$company     = htmlspecialchars($_POST['company'] ?? '');
$companySize = htmlspecialchars($_POST['companySize'] ?? 'Not Selected');
$useCase     = htmlspecialchars($_POST['useCase'] ?? 'Not Selected');
$message     = htmlspecialchars($_POST['message'] ?? '');

// reCAPTCHA validation
$recaptchaSecret   = '6Lc0NhgqAAAAALUMwxlm13nf6CCF46OCjXPan02q'; // ✅ Your secret key
$recaptchaResponse = $_POST['g-recaptcha-response'] ?? '';

$verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecret}&response={$recaptchaResponse}");
$response = json_decode($verify);

// Check reCAPTCHA
if ($response && $response->success) {

    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host       = 'smtp.googlemail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'khushbu.lakhataria@txtech.co';       // ✅ Your Gmail
        $mail->Password   = 'hibtopadebpeeomk';                   // ✅ App password (not Gmail login pass)
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;

        // Email content
        $mail->setFrom('khushbu.lakhataria@txtech.co', 'Website Contact');
        $mail->addAddress('ashvin.vadhaniya@txtech.co');

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
        echo '
        <div class="mt-4 flex items-start space-x-2 rounded-lg border border-green-300 bg-green-50 p-4 text-sm text-green-700 shadow-sm">
            <svg class="h-5 w-5 mt-0.5 shrink-0 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M5 13l4 4L19 7" />
            </svg>
            <div>
                <strong class="font-semibold">Success:</strong>
                <span class="block sm:inline">Mail sent successfully.</span>
            </div>
        </div>';
        

    } catch (Exception $e) {
        echo '
        <div class="mt-4 flex items-start space-x-2 rounded-lg border border-red-300 bg-red-50 p-4 text-sm text-red-700 shadow-sm">
            <svg class="h-5 w-5 mt-0.5 shrink-0 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M6 18L18 6M6 6l12 12" />
            </svg>
            <div>
                <strong class="font-semibold">Error:</strong>
                <span class="block sm:inline">Mail sending failed. ' . htmlspecialchars($mail->ErrorInfo) . '</span>
            </div>
        </div>';
            }

} else {
    echo '
<div class="mt-4 flex items-start space-x-2 rounded-lg border border-red-300 bg-red-50 p-4 text-sm text-red-700 shadow-sm">
    <svg class="h-5 w-5 mt-0.5 shrink-0 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M12 8v4m0 4h.01M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9 9 4.03 9 9z"/>
    </svg>
    <div>
        <strong class="font-semibold">reCAPTCHA Failed:</strong>
        <span class="block sm:inline"> Please verify the CAPTCHA and try again.</span>
    </div>
</div>';

    exit;
}
?>
