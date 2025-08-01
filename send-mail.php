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
$useCases = is_array($useCases) ? implode(', ', array_map('htmlspecialchars', $useCases)) : htmlspecialchars($useCases);

$tools = $_POST['tools'] ?? '';
$tools = is_array($tools) ? implode(', ', array_map('htmlspecialchars', $tools)) : htmlspecialchars($tools);

$recaptchaSecret   = RECAPTCHA_SECRET_KEY;
$recaptchaResponse = $_POST['g-recaptcha-response'] ?? '';
$verify            = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecret}&response={$recaptchaResponse}");
$response          = json_decode($verify);

// if ($response && $response->success) {
    try {
        // ---------- Send to Admin ----------
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = MAIL_HOST;
        $mail->SMTPAuth   = true;
        $mail->Username   = MAIL_USERNAME;
        $mail->Password   = MAIL_PASSWORD;
        $mail->SMTPSecure = MAIL_ENCRYPTION;
        $mail->Port       = MAIL_PORT;

        $mail->setFrom(MAIL_USERNAME, MAIL_FROM_NAME);
        $mail->addAddress($email);

        $mail->isHTML(true);
        $mail->Subject = 'Thank You for Contacting Meridiene';

        ob_start();
        include 'email-template.php'; // Admin template
        $htmlContent = ob_get_clean();

        $htmlContent = str_replace('{{name}}', $name, $htmlContent);
        $htmlContent = str_replace('{{email}}', $email, $htmlContent);
        $htmlContent = str_replace('{{message}}', nl2br($problems . "\n" . $tools), $htmlContent);

        $mail->Body = $htmlContent;
        $mail->send();

        // ---------- Send Thank You Email to User ----------
        $userMail = new PHPMailer(true);
        $userMail->isSMTP();
        $userMail->Host       = MAIL_HOST;
        $userMail->SMTPAuth   = true;
        $userMail->Username   = MAIL_USERNAME;
        $userMail->Password   = MAIL_PASSWORD;
        $userMail->SMTPSecure = MAIL_ENCRYPTION;
        $userMail->Port       = MAIL_PORT;

        $userMail->setFrom(MAIL_USERNAME, MAIL_FROM_NAME);
        $userMail->addAddress(MAIL_TO); 

        $userMail->isHTML(true);
        $userMail->Subject = 'Thank You from Meridiene';

        ob_start();
        include 'email-tmp.php'; 

        $thankYouHtml = ob_get_clean();
        $thankYouHtml = str_replace('{{company}}', $company, $thankYouHtml);
        $thankYouHtml = str_replace('{{companySize}}', $companySize, $thankYouHtml);
        $thankYouHtml = str_replace('{{name}}', $name, $thankYouHtml);
        $thankYouHtml = str_replace('{{email}}', $email, $thankYouHtml);
        $thankYouHtml = str_replace('{{position}}', $position, $thankYouHtml);
        // $thankYouHtml = str_replace('{{phone}}', $phone, $thankYouHtml);
        $thankYouHtml = str_replace('{{problems}}', $problems, $thankYouHtml);
        $thankYouHtml = str_replace('{{useCases}}', $useCases, $thankYouHtml);
        $thankYouHtml = str_replace('{{tools}}', $tools, $thankYouHtml);

      
        $userMail->Body = $thankYouHtml;
        $userMail->send();

        $video_urls = [
            'home' => 'assets/video/Meridiene Animation 001.mp4',
            'organizational' => 'assets/video/Meridiene Animation 001.mp4',
            'workforce' => 'assets/video/Plan Your Workforce with Foresight.mp4',
            'aireadiness' => 'assets/video/There is an AI for THIS.mp4',
            'skillgapone' => 'assets/video/Know Your Resource Spending, But Better.mp4',
            'skillgaptwo' => 'assets/video/Structure Your Effort.mp4',

        ];

        echo json_encode([
            'status' => 'success',
            'message' => 'Thank you for reaching out to us. A confirmation email has also been sent.',
            'video_url' => $video_urls

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
