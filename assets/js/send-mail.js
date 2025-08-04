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
    $('.loader').removeClass('hidden');
    
    $.ajax({
        type: "POST",
        url: "send-mail.php",
        data: formData,
        dataType: 'json',
    
        success: function (response) {
            let $msgBox = $('#responseMsg');
    
            if (response.status === 'success') {

                $('.loader').addClass('hidden');
                $msgBox.html('<div class="text-green-700 bg-green-50 border border-green-300 p-4 rounded">✅ ' + response.message + '</div>');
    
                renderStep('final-checklist');
                if (response.send_video === 'send_v_url') {
                   
                    const d = new Date();
                    d.setTime(d.getTime() + (7 * 24 * 60 * 60 * 1000));
                    document.cookie = "contact_form_submitted=true; expires=" + d.toUTCString() + "; path=/";

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
