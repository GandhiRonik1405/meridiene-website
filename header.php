<head>
    <!-- 1. Basic Page Needs -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Home'; ?></title>
    <!-- 2. SEO Meta Tags -->
    <meta name="description" content="<?php echo isset($metaDescription) ? $metaDescription : 'Default page description'; ?>" />
    <meta name="author" content="<?php echo isset($metaAuthor) ? $metaAuthor : 'BM TECHNOLOGIES'; ?>" />
    <!-- 3. Favicon -->
    <link rel="icon" type="image/svg+xml" href="assets/images/favicon.ico" />
    <!-- 4. Open Graph (for social media sharing) -->
    <meta property="og:title" content="<?php echo $pageTitle ?? 'Home'; ?>" />
    <meta property="og:description" content="<?php echo $metaDescription ?? 'Page description'; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://pub-bb2e103a32db4e198524a2e9ed8f35b4.r2.dev/473a7f6f-2458-44b1-95c8-4caff523bd8d/id-preview-3eec9659--72a35f65-ccde-4691-bf48-6671fc54cd49.lovable.app-1752472652091.png" />
    <!-- 5. Twitter Card Meta -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="https://pub-bb2e103a32db4e198524a2e9ed8f35b4.r2.dev/473a7f6f-2458-44b1-95c8-4caff523bd8d/id-preview-3eec9659--72a35f65-ccde-4691-bf48-6671fc54cd49.lovable.app-1752472652091.png" />
    <!-- 6. Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <!-- 7. Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- 8. CSS Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/main_styles.css" />
    <link rel="stylesheet" href="assets/css/common_style.css" />
    <link rel="stylesheet" href="assets/css/modal.css" />
    <!-- 9. JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/send-mail.js"></script>

</head>

    <?php
    $video_urls = [];

    if (isset($_COOKIE['contact_form_submitted']) && $_COOKIE['contact_form_submitted'] === 'true') {
        
        $video_urls = [
            'home' => 'assets/video/Meridiene Animation 001.mp4',
            'organizational' => 'assets/video/Meridiene Animation 001.mp4',
            'workforce' => 'assets/video/Plan Your Workforce with Foresight.mp4',
            'aireadiness' => 'assets/video/There is an AI for THIS.mp4',
            'skillgapone' => 'assets/video/Know Your Resource Spending, But Better.mp4',
            'skillgaptwo' => 'assets/video/Structure Your Effort.mp4',

        ];
    }
    ?>
<script>
    const videoURLs = <?php echo json_encode($video_urls); ?>;
</script>

<script>
    $(document).ready(function () {      
        function loadVideoForPage(page) {
            const videoUrl = videoURLs[page];
            if (videoUrl) {
                const $videoSource = $('source[data-video-id]');
                $videoSource.attr('src', videoUrl).attr('data-video-id', page);
                $('#dynamic-video')[0].load();
                $('#video-trigger').css('display', 'none');
                $('#video-container').show();
            } else {
                console.warn('No video URL for page:', page);
            }
        }

        // ✅ On page load (if cookie is set)
        if (document.cookie.includes("contact_form_submitted=true")) {
            const page = $('source[data-video-id]').data('video-id');
            loadVideoForPage(page);
        }         
    
    });
    
    $(document).on('click', '.custom_video', function () {
        if (document.cookie.includes("contact_form_submitted=true")) {

        $('.video-trigger_2').css('display', 'none');
        $('.video-container_2').show();

        $('.v_custom_2').empty();

        const newVideoHtml = `
        <video autoplay muted loop playsinline style="width: 642px; height: 361px;" class="rounded-3xl border shadow-lg">
            <source src="assets/video/Structure Your Effort.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        `;
        // 3. Append new video block inside wrapper
        $('.v_custom_2').append(newVideoHtml);

    }
    });
</script>
