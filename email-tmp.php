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
                    <img src="<?= BASE_URL ?>/assets/images/Meridiene-logo.png" alt="Meridiene Logo" width="width: 100px;"  style="display: block; margin: 0 auto; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic;">
                
                </td>
            </tr>
            <tr>
                <td class="content-section" style="padding: 16px 40px 32px 40px; color: #4A4A4A; line-height: 1.5; font-size: 15px;">
                    <div style="background-color: #ffffff; padding: 20px;">
                        <h1 class="heading-text" style="color: #2D3748; font-size: 24px; font-weight: 600; margin-top: 0; margin-bottom: 10px;">New Inquiry Received from Website</h1>
                        <span style="color: #fff; border-top: 3px solid #DF5660;">Hello</span>
                        <p style="margin-top: 0; margin-bottom: 16px;">
                            Hi, <span class="name-highlight" style="font-weight: 600; color: #2D3748;">{{name}}</span>
                        </p>
                        <p style="margin-top: 0; margin-bottom: 5px;">
                            A new interest has just been submitted through the Meridiene website.
                        </p>
                        <h2 class="sub-heading" style="color: #2D3748; font-size: 18px; font-weight: 600; margin-top: 0; margin-bottom: 16px;">Below are the details:</h2>

                        <table class="summary-table" role="presentation" cellspacing="0" cellpadding="0" border="0" style="width: 100%; margin-bottom: 24px; font-size: 15px;">
                            <tr>
                                <td class="summary-label" style="color: #6B7280; font-weight: 500; width: 80px; min-width: 80px; white-space: nowrap; padding-right: 10px; padding-top: 6px; padding-bottom: 6px;">Company name:</td>
                                <td class="summary-value" style="color: #2D3748; font-weight: 600; padding-top: 6px; padding-bottom: 6px;">{{company}}</td>
                            </tr>
                            <tr>
                                <td class="summary-label" style="color: #6B7280; font-weight: 500; width: 80px; min-width: 80px; white-space: nowrap; padding-right: 10px; padding-top: 6px; padding-bottom: 6px;">Company size:</td>
                                <td class="summary-value" style="color: #2D3748; font-weight: 600; padding-top: 6px; padding-bottom: 6px;">{{companySize}}</td>
                            </tr>
                            <tr>
                                <td class="summary-label" style="color: #6B7280; font-weight: 500; width: 80px; min-width: 80px; white-space: nowrap; padding-right: 10px; padding-top: 6px; padding-bottom: 6px;">Name:</td>
                                <td class="summary-value" style="color: #2D3748; font-weight: 600; padding-top: 6px; padding-bottom: 6px;">{{name}}</td>
                            </tr>
                            <tr>
                                <td class="summary-label" style="color: #6B7280; font-weight: 500; width: 80px; min-width: 80px; white-space: nowrap; padding-right: 10px; padding-top: 6px; padding-bottom: 6px;">email:</td>
                                <td class="summary-value" style="color: #2D3748; font-weight: 600; padding-top: 6px; padding-bottom: 6px;">{{email}}</td>
                            </tr>
                            <tr>
                                <td class="summary-label" style="color: #6B7280; font-weight: 500; width: 80px; min-width: 80px; white-space: nowrap; padding-right: 10px; padding-top: 6px; padding-bottom: 6px;">Position:</td>
                                <td class="summary-value" style="color: #2D3748; font-weight: 600; padding-top: 6px; padding-bottom: 6px;">{{position}}</td>
                            </tr>
                            <tr>
                                <td class="summary-label" style="color: #6B7280; font-weight: 500; width: 80px; min-width: 80px; white-space: nowrap; padding-right: 10px; padding-top: 6px; padding-bottom: 6px;">Challenge:</td>
                                <td class="summary-value" style="color: #2D3748; font-weight: 600; padding-top: 6px; padding-bottom: 6px;">{{problems}}</td>
                            </tr>
                            <tr>
                                <td class="summary-label" style="color: #6B7280; font-weight: 500; width: 80px; min-width: 80px; white-space: nowrap; padding-right: 10px; padding-top: 6px; padding-bottom: 6px;">expectation:</td>
                                <td class="summary-value" style="color: #2D3748; font-weight: 600; padding-top: 6px; padding-bottom: 6px;">{{tools}}</td>
                            </tr>
                            <tr>
                                <td class="summary-label" style="color: #6B7280; font-weight: 500; width: 80px; min-width: 80px; white-space: nowrap; padding-right: 10px; padding-top: 6px; padding-bottom: 6px;">Interest modules:</td>
                                <td class="summary-value" style="color: #2D3748; font-weight: 600; padding-top: 6px; padding-bottom: 6px;">{{useCases}}</td>
                            </tr>
                        </table>

                        <p>
                            This interest has been successfully recorded in the system.
                        </p>
                        <p>
                            Prospect is expecting a Virtual meeting link, A follow-up email with a meeting link will need to be sent to the user shortly.
                        </p>
                        <p>
                            The session should be approximately 30 minutes, focused on showcasing how Meridiene can help address the user’s specific challenges.
                        </p>

                        <p style="margin-top: 0; margin-bottom: 5px;">
                            Best regards,<br>
                            Meridiene Web Notifications
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
                                            <img src="https://cdn-icons-png.flaticon.com/512/145/145807.png" alt="LinkedIn" style="vertical-align: middle;" />
                                            </a>
                                        </td>
                                        <td style="padding-right: 16px;">
                                            <a href="#" style="text-decoration: none; width: 25px; height: 25px; color: #fff; border: 1px solid #fff; border-radius: 100%; display: flex; justify-content: center; align-items: center;">
                                        <img src="<?= BASE_URL ?>/assets/images/x-twitter.png" alt="Twitter"  /> 
                                           
                                             
                                            </a>
                                        </td>
                                        <td>
                                            <a href="#" style="text-decoration: none; width: 25px; height: 25px; color: #fff; border: 1px solid #fff; border-radius: 100%; display: flex; justify-content: center; align-items: center;">
                                            <img src="https://cdn-icons-png.flaticon.com/512/145/145802.png"  alt="Facebook" />

                                        </a>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td align="right" class="footer-email-link" style="padding-top: 0px;">
                                <a href="mailto:info@txtech.co" class="footer-email" style="color: #ffffff; text-decoration: none; font-weight: 500; display: flex; justify-content: flex-end; align-items: center; gap: 15px;">
                                    <div >
                                    <img src="https://cdn-icons-png.flaticon.com/512/732/732200.png" width="20" height="20" alt="email icon" style="vertical-align: middle;"  alt="email icon">
                                    </div>&nbsp;
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
