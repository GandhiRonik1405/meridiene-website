<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meridiene - Thank You</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', Arial, sans-serif;
        }
    </style>
</head>
<body style="margin: 0; padding: 0; background-color: #f5f5f5; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;">
    <div class="main-wrapper" style="background-color: #ffffff; padding: 20px;">
        <table class="email-card" align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" style="background-color: #f5f5f5; border-radius: 25px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08); max-width: 600px; margin: 40px auto; overflow: hidden;">
            <tr>
                <td class="header-section" style="padding: 32px 24px 16px 24px; text-align: center;">
                    <img src="<?= BASE_URL ?>assets/images/Meridiene-logo.png" alt="Meridiene Logo" width="" style="display: block; margin: 0 auto; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic;">
                </td>
            </tr>
            <tr>
                <td class="content-section" style="padding: 16px 40px 32px 40px; color: #4A4A4A; line-height: 1.5; font-size: 15px;">
                    <div style="background-color: #ffffff; padding: 20px;">
                        <h1 class="heading-text" style="color: #2D3748; font-size: 24px; font-weight: 600; margin-top: 0; margin-bottom: 10px;">Your Demo Session is Being Scheduled</h1>
                        <span style="color: #fff; border-top: 3px solid #DF5660;">Hello</span>
                        <p style="margin-top: 0; margin-bottom: 16px;">
                            Hi, <span class="name-highlight" style="font-weight: 600; color: #2D3748;">{{name}}</span>
                        </p>
                        <p style="margin-top: 0; margin-bottom: 24px;">
                            Thank you for reaching out to Meridiene — your interest has been recorded.
                        </p>
                        <p>
                            We’re in the process of scheduling a tailored demo session just for you. This 30-minute session will walk you through a personalized solution, showing exactly how Meridiene can help you address your organizational challenges with clarity and confidence.
                        </p>
                        <p>
                            You’ll receive a meeting link from us shortly.
                        </p>
                        <p></p>

                        <h2 class="sub-heading" style="color: #2D3748; font-size: 18px; font-weight: 600; margin-top: 0; margin-bottom: 16px;">quick overview of your interest</h2>

                        <table class="summary-table" role="presentation" cellspacing="0" cellpadding="0" border="0" style="width: 100%; margin-bottom: 24px; font-size: 15px;">
                            <tr>
                                <td class="summary-label" style="color: #6B7280; font-weight: 500; width: 80px; min-width: 80px; white-space: nowrap; padding-right: 10px; padding-top: 6px; padding-bottom: 6px;">provided email:</td>
                                <td class="summary-value" style="color: #2D3748; font-weight: 600; padding-top: 6px; padding-bottom: 6px;">{{name}}</td>
                            </tr>
                            <tr>
                                <td class="summary-label" style="color: #6B7280; font-weight: 500; width: 80px; min-width: 80px; white-space: nowrap; padding-right: 10px; padding-top: 6px; padding-bottom: 6px;">Modules interested in:</td>
                                <td class="summary-value" style="color: #2D3748; font-weight: 600; padding-top: 6px; padding-bottom: 6px;">{{email}}</td>
                            </tr>
                            <tr>
                                <td class="summary-label" style="color: #6B7280; font-weight: 500; width: 80px; min-width: 80px; white-space: nowrap; padding-right: 10px; padding-top: 6px; padding-bottom: 6px;">Modules interested in:</td>
                                <td class="summary-value" style="color: #2D3748; font-weight: 600; padding-top: 6px; padding-bottom: 6px;">{{message}}</td>
                            </tr>
                        </table>

                        <p style="margin-top: 0; margin-bottom: 16px;">
                            If you have any urgent questions, feel free to contact us.
                        </p>
                        <div style="margin-bottom: 20px; display: flex; align-items: center; gap: 10px;">
                            <div style=" width: 25px; height: 25px; color: #DF5660; border: 1px solid #DF5660; border-radius: 100%; display: flex; justify-content: center; align-items: center;">
                                <i class="fa-solid fa-envelope" style="font-size: 13px;"></i>
                            </div>
                            <a href="mailto:info@txtech.co" class="contact-email" style="color: #000; text-decoration: none; font-weight: 500; word-break: break-all;">info@txtech.co</a>
                        </div>

                        <p style="margin-top: 0; margin-bottom: 32px;">
                            Looking forward to connecting soon!
                        </p>
                    </div>

                </td>
            </tr>
            <tr>
                <td style="text-align: center; padding-bottom: 30px;">
                    <p class="warm-regards" style="color: #4A4A4A; font-size: 15px; margin-top: 0; margin-bottom: 4px;">Warm regards,</p>
                    <p class="team-name" style="color: #2D3748; font-size: 18px; font-weight: 700; margin-top: 0; margin-bottom: 0;">The Meridiene Team</p>
                </td>
            </tr>
            <tr>
                <td class="footer-section" style="background-color: #4F297C; padding: 15px 40px; border-bottom-left-radius: 8px; border-bottom-right-radius: 8px; color: #ffffff; font-size: 14px;">
                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                        <tr>
                            <td align="left" class="social-icons-wrapper" style="padding-bottom: 0px;">
                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" style="display: inline-block;">
                                    <tr>
                                        <td style="padding-right: 16px;">
                                            <a href="#" style="text-decoration: none; width: 25px; height: 25px; color: #fff; border: 1px solid #fff; border-radius: 100%; display: flex; justify-content: center; align-items: center;">
                                                 <i class="fa-brands fa-linkedin-in" style="font-size: 13px;"></i>
                                            </a>
                                        </td>
                                        <td style="padding-right: 16px;">
                                            <a href="#" style="text-decoration: none; width: 25px; height: 25px; color: #fff; border: 1px solid #fff; border-radius: 100%; display: flex; justify-content: center; align-items: center;">
                                                <i class="fa-brands fa-twitter" style="font-size: 13px;"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="#" style="text-decoration: none; width: 25px; height: 25px; color: #fff; border: 1px solid #fff; border-radius: 100%; display: flex; justify-content: center; align-items: center;">
                                                <i class="fa-brands fa-facebook-f" style="font-size: 13px;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td align="right" class="footer-email-link" style="padding-top: 0px;">
                                <a href="mailto:info@txtech.co" class="footer-email" style="color: #ffffff; text-decoration: none; font-weight: 500; display: flex; justify-content: flex-end; align-items: center; gap: 15px;">
                                    <div style=" width: 25px; height: 25px; color: #fff; border: 1px solid #fff; border-radius: 100%; display: flex; justify-content: center; align-items: center;">
                                        <i class="fa-solid fa-envelope" style="font-size: 13px;"></i>
                                    </div>
                                    info@txtech.co
                                </a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
