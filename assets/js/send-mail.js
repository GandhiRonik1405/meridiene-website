// 🔁 Get page ID from body attribute
// const pageId = document.body.getAttribute("data-page-id");

// // 🔁 Get stored cookie data (JSON string)
// function getCookie(name) {
//   const value = "; " + document.cookie;
//   const parts = value.split("; " + name + "=");
//   if (parts.length === 2) return parts.pop().split(";").shift();
//   return null;
// }

// // 🔁 Parse cookie and get video URL for current page
// $(document).ready(function () {
//   const rawCookie = getCookie("contact_form_video_urls");
//   if (!rawCookie || !pageId) return;

//   try {
//     const videoMap = JSON.parse(rawCookie);
//     const videoUrl = videoMap[pageId];

//     if (videoUrl) {
//       const videoHtml = `
//         <div class="relative animate-scale-in">
//             <div style="transform: translateY(0px);">
//                 <div class="relative group">
//                     <video autoplay muted loop playsinline 
//                         class="rounded-3xl shadow-glow border border-border/20 transition-all duration-700 group-hover:shadow-hover group-hover:scale-[1.02]" 
//                         style="width: 642px; height: 361px;">
//                         <source src="${videoUrl}" type="video/mp4">
//                         Your browser does not support the video tag.
//                     </video>

//                     <div class="absolute inset-0 bg-gradient-primary opacity-5 rounded-3xl group-hover:opacity-10 transition-opacity duration-700"></div>

//                     <div class="absolute -top-4 -right-4 bg-background/90 backdrop-blur-sm border border-border rounded-xl p-4 shadow-elegant animate-bounce-gentle">
//                         <div class="text-sm text-muted-foreground">AI Insights</div>
//                         <div class="text-xl font-bold text-primary"><span class="animate-count-up">97%</span></div>
//                     </div>

//                     <div class="absolute -bottom-4 -left-4 bg-background/90 backdrop-blur-sm border border-border rounded-xl p-4 shadow-elegant animate-bounce-gentle" style="animation-delay: 1s;">
//                         <div class="text-sm text-muted-foreground">Cost Savings</div>
//                         <div class="text-xl font-bold text-primary">$<span class="animate-count-up">12</span>M</div>
//                     </div>
//                 </div>
//             </div>
//         </div>
//       `;

//       // 🔁 Append only video to #video-container (can vary per HTML)
//       $('#video-container').html(videoHtml).fadeIn();
//     }
//   } catch (e) {
//     console.error("Invalid cookie JSON:", e);
//   }
// });




$(document).on('click', '.hp-continue-button:contains("Submit")', function () {          
    var companySize = $('.hp-option-card.selected').data('value');
    var name = $('#yourName').val();
    var position = $('#yourPosition').val();
    var company = $('#companyName').val();
    var email = $('#companyEmail').val();
    var phone = $('#phoneNumber').val();
    var useCases = [];
    $('input[name="useCase"]:checked').each(function () {
        useCases.push($(this).val());
    });

    // Requirements
    var problems = $('#problemsFacing').val();
    var tools = $('#toolRequirements').val();

    // Basic validation (optional)
    if (!name || !position || !company || !email || !problems || !tools) {
        alert("Please fill all required fields.");
        return;
    }

    var formData = {
        companySize: companySize,
        name: name,
        position: position,
        company: company,
        email: email,
        phone: phone,
        useCases: useCases,
        problems: problems,
        tools: tools
    };

    $.ajax({
        type: "POST",
        url: "send-mail.php",
        data: formData,
        dataType: 'json',
    
        success: function (response) {
            let $msgBox = $('#responseMsg');
    
            if (response.status === 'success') {
                const d = new Date();
                d.setTime(d.getTime() + (7 * 24 * 60 * 60 * 1000));
                document.cookie = "contact_form_submitted=true; expires=" + d.toUTCString() + "; path=/";
    
                $msgBox.html('<div class="text-green-700 bg-green-50 border border-green-300 p-4 rounded">✅ ' + response.message + '</div>');
    
                renderStep('final-checklist');
    
                $('#video-trigger').remove();
    
                const page = $('source[data-video-id]').data('video-id'); // e.g., 'home', 'workforce', etc.
    
                const videoUrl = response.video_url[page];
    
                if (videoUrl) {
                    const $videoSource = $('source[data-video-id="' + page + '"]');
                    $videoSource.attr('src', videoUrl);
    
                    $('#dynamic-video')[0].load();
                    $('#video-container').fadeIn();
                } else {
                    console.warn('No matching video URL found for page:', page);
                }
    
                grecaptcha.reset();
    
            } else if (response.status === 'recaptcha_failed') {
                $msgBox.html('<div class="text-yellow-700 bg-yellow-50 border border-yellow-300 p-4 rounded">⚠️ ' + response.message + '</div>');
                console.warn('Form failed:', response.message);
    
            } else {
                $msgBox.html('<div class="text-red-700 bg-red-50 border border-red-300 p-4 rounded">❌ ' + response.message + '</div>');
            }
        },
    
        error: function (xhr, status, error) {
            $('#responseMsg').html('<div class="text-red-700 bg-red-50 border border-red-300 p-4 rounded">❌ Something went wrong: ' + error + '</div>');
        }
    });


});
