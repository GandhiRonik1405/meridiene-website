$(document).on('click', '.hp-continue-button:contains("Submit")', function () {  
    // Determine which modal the clicked submit button belongs to
    // Find the closest parent formModal or formModalInline
    const $currentModal = $(this).closest('#formModal, #formModalInline');

    // Get the instance of the modal that this button belongs to
    // This assumes that initializeFormModal returns an object with renderStep and closeFormModal
    // and that 'this' (the button) is within the scope of an initialized modal.
    // A more robust way might involve storing modal instances in a map by ID if you have many.
    // For now, we'll assume the click context implies the activeFormModal is the one to use.

    if (!window.activeFormModal) {
        console.error("No active form modal found to submit from.");
        // Potentially show an error message or prevent submission
        return;
    }

    var companySize = $currentModal.find('.hp-option-card.selected').data('value');
    var name = $currentModal.find('#yourName').val();
    var position = $currentModal.find('#yourPosition').val();
    var company = $currentModal.find('#companyName').val();
    var email = $currentModal.find('#companyEmail').val();
    var phone = $currentModal.find('#phoneNumber').val();
    var useCases = [];
    $currentModal.find('input[name="useCase"]:checked').each(function () {
        useCases.push($(this).val());
    });

    // Requirements
    var problems = $currentModal.find('#problemsFacing').val();
    var tools = $currentModal.find('#toolRequirements').val();

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
    $currentModal.find('.loader').removeClass('hidden'); // Use $currentModal to find the loader
    
    $.ajax({
        type: "POST",
        url: "send-mail.php",
        data: formData,
        dataType: 'json',
    
        success: function (response) {
            let $msgBox = $currentModal.find('#responseMsg'); // Use $currentModal to find the message box
    
            if (response.status === 'success') {

                $currentModal.find('.loader').addClass('hidden'); // Use $currentModal to hide the loader
                $msgBox.html('<div class="text-green-700 bg-green-50 border border-green-300 p-4 rounded">✅ ' + response.message + '</div>');
    
                // Call renderStep on the active modal instance
                if (window.activeFormModal && typeof window.activeFormModal.renderStep === 'function') {
                    window.activeFormModal.renderStep('final-checklist');
                } else {
                    console.error("activeFormModal or its renderStep method is not defined.");
                }

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
            // Use $currentModal to target elements within the specific modal
            $currentModal.find('.loader').addClass('hidden');
            $currentModal.find('#responseMsg').html('<div class="text-red-700 bg-red-50 border border-red-300 p-4 rounded">❌ Something went wrong: ' + error + '</div>');
        }
    });

});