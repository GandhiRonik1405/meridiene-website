<?php

require __DIR__ . '/config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


header('Content-Type: application/json');

$companySize = htmlspecialchars($_POST['companySize'] ?? 'Not Selected');
$name   = htmlspecialchars($_POST['name'] ?? '');
$position   = htmlspecialchars($_POST['position'] ?? '');
$company     = htmlspecialchars($_POST['company'] ?? '');
$email       = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
$phone       = htmlspecialchars($_POST['phone'] ?? '');
$problems    = htmlspecialchars($_POST['problems'] ?? '');
$useCases = $_POST['useCases'] ?? 'Not Selected';
if (is_array($useCases)) {
    $useCases = implode(', ', array_map('htmlspecialchars', $useCases));
} else {
    $useCases = htmlspecialchars($useCases);
}
$tools = $_POST['tools'] ?? '';
if (is_array($tools)) {
    $tools = implode(', ', array_map('htmlspecialchars', $tools));
} else {
    $tools = htmlspecialchars($tools);
}

// reCAPTCHA
$recaptchaSecret   = RECAPTCHA_SECRET_KEY;
$recaptchaResponse = $_POST['g-recaptcha-response'] ?? '';

$verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecret}&response={$recaptchaResponse}");
$response = json_decode($verify);

// Check reCAPTCHA
//  if ($response && $response->success) {
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
        $mail->Subject = 'Thank You for Contacting Meridiene';
        ob_start();
        include 'email-template.php'; 
        $htmlContent = ob_get_clean();

        $htmlContent = str_replace('{{name}}', htmlspecialchars($name), $htmlContent);
        $htmlContent = str_replace('{{email}}', htmlspecialchars($email), $htmlContent);
        $htmlContent = str_replace('{{message}}', nl2br(htmlspecialchars($problems.''.$tools)), $htmlContent);
    
        $mail->Body = $htmlContent;
    

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

// } else {
//     echo json_encode([
//         'status' => 'recaptcha_failed',
//         'message' => 'Please verify the CAPTCHA and try again.'
//     ]);
// }

exit;
?>
