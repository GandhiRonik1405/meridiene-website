const $mainContent = $('.hp-main-content'); // Main content (general use, not directly modified)

// Original Form Modal variables
const $formModal = $('#formModal'); // The modal overlay
const isFormModalInline = $formModal.hasClass('hp-inline-form'); // Check if it's an inline form

// New Contact Modal variables
const $contactModal = $('#contactModal'); // The contact modal overlay
const isContactModalInline = $contactModal.hasClass('hp-inline-form'); // Check if contact modal is inline

// Navigation items for the ORIGINAL form modal (assume these are specific to #formModal)
const $formModalNavItems = $formModal.find('.hp-nav-item');

// Navigation items for the CONTACT form modal (these must be inside #contactModal)
const $contactModalNavItems = $contactModal.find('.hp-nav-item');

// Separate current step tracking for each modal
let currentFormModalStep = 'company-size'; // Initial step for the ORIGINAL form
let currentContactModalStep = 'company-size'; // Initial step for the CONTACT form

// Function to display a custom message modal (shared utility)
function showMessageModal(message) {
    const $modalOverlay = $(`
        <div class="hp-modal-overlay">
            <div class="hp-modal-content-message">
                <p>${message}</p>
                <button type="button" class="hp-button hp-button-danger">OK</button>
            </div>
        </div>
    `);
    $('body').append($modalOverlay);
    $modalOverlay.find('.hp-button').on('click', function() {
        $modalOverlay.remove();
    });
}

// --- Functions for Original Form Modal (#formModal) ---
function openFormModal() {
    if (!isFormModalInline) {
        $formModal.addClass('show');
    }
    // Call renderStep, specifying the formModal, its nav items, and its unique ID
    renderStep('company-size', $formModal, $formModalNavItems, 'formModal');
}

function closeFormModal() {
    if (!isFormModalInline) {
        $formModal.removeClass('show');
    }
    // Reset nav items for the ORIGINAL form modal
    $formModalNavItems.each(function() {
        const $navItem = $(this);
        const $icon = $navItem.find('i.fas');
        const originalIconClass = $icon.data('original-icon');
        $navItem.removeClass('active completed');
        $icon.attr('class', 'fas ' + originalIconClass);
    });
}

// --- Functions for Contact Modal (#contactModal) ---
function openContactModal() {
    if (!isContactModalInline) {
        $contactModal.addClass('show');
    }
    // Call renderStep, specifying the contactModal, its nav items, and its unique ID
    renderStep('company-size', $contactModal, $contactModalNavItems, 'contactModal');
}

function closeContactModal() {
    if (!isContactModalInline) {
        $contactModal.removeClass('show');
    }
    // Reset nav items for the CONTACT form modal
    $contactModalNavItems.each(function() {
        const $navItem = $(this);
        const $icon = $navItem.find('i.fas');
        const originalIconClass = $icon.data('original-icon');
        $navItem.removeClass('active completed');
        $icon.attr('class', 'fas ' + originalIconClass);
    });
}

// Helper function to determine if a step is completed (can be shared)
function isStepCompleted(navStep, currentStep) {
    const stepOrder = ['company-size', 'contact-information', 'use-cases', 'requirements', 'final-checklist'];
    const navIndex = stepOrder.indexOf(navStep);
    const currentIndex = stepOrder.indexOf(currentStep);
    return navIndex < currentIndex;
}

// GENERALIZED function to render a step for ANY modal
function renderStep(stepName, $modalElement, $modalNavItems, modalId) {
    // Update the correct current step variable based on the modal being used
    if (modalId === 'formModal') {
        currentFormModalStep = stepName;
    } else if (modalId === 'contactModal') {
        currentContactModalStep = stepName;
    }

    // Hide all step containers within the SPECIFIC modal ($modalElement)
    $modalElement.find('.hp-step-container').hide();
    // Show the target step container within the SPECIFIC modal
    $modalElement.find(`#${stepName}-step`).css('display', 'flex');

    // Reset all nav items for the SPECIFIC modal ($modalNavItems)
    $modalNavItems.each(function() {
        const $navItem = $(this);
        const $icon = $navItem.find('i.fas');
        const originalIconClass = $icon.data('original-icon');

        $navItem.removeClass('active completed');
        $icon.attr('class', 'fas ' + originalIconClass); // Restore original icon
    });

    // Apply active/completed states based on the current step for the SPECIFIC modal
    $modalNavItems.each(function() {
        const $navItem = $(this);
        const navStep = $navItem.data('step');
        const $icon = $navItem.find('i.fas');
        const originalIconClass = $icon.data('original-icon'); // Re-fetch as it might have changed

        // Get the currently active step for THIS specific modal
        const activeStep = (modalId === 'formModal') ? currentFormModalStep : currentContactModalStep;

        if (navStep === activeStep) {
            $navItem.addClass('active');
            $icon.attr('class', 'fas ' + originalIconClass);
        } else if (isStepCompleted(navStep, activeStep)) {
            $navItem.addClass('completed');
            $icon.attr('class', 'fas fa-check-circle');
        }
    });

    // Handle button states for the SPECIFIC modal
    $modalElement.find(`.hp-button`).prop('disabled', false); // Re-enable all by default
    $modalElement.find(`.hp-form-footer .hp-back-button, .hp-form-footer .hp-continue-button, .hp-form-footer .hp-close-form-button`).show();


    // Select the current step container WITHIN THE SPECIFIC MODAL
    const $currentStepContainer = $modalElement.find(`#${stepName}-step`);

    if (stepName === 'company-size') {
        $currentStepContainer.find('.hp-back-button').prop('disabled', true);
        $currentStepContainer.find('.hp-continue-button').prop('disabled', true); // Initially disabled
    } else if (stepName === 'contact-information') {
        $currentStepContainer.find('.hp-continue-button').prop('disabled', true); // Initially disabled
    } else if (stepName === 'use-cases') {
        $currentStepContainer.find('.hp-continue-button').prop('disabled', true); // Initially disabled
    } else if (stepName === 'requirements') {
        $currentStepContainer.find('.hp-continue-button').prop('disabled', true); // Initially disabled
    } else if (stepName === 'final-checklist') {
        // No back/continue, only close button
        $currentStepContainer.find('.hp-form-footer .hp-back-button, .hp-form-footer .hp-continue-button').hide();
        $currentStepContainer.find('.hp-form-footer .hp-close-form-button').show();
    }

    // Attach event listeners for THIS specific modal
    attachEventListeners($modalElement, modalId);
}

// GENERALIZED function to attach event listeners for ANY modal
function attachEventListeners($modalElement, modalId) {
    // Detach all listeners from buttons and inputs within any step container of THIS specific modal
    $modalElement.find('.hp-step-container').find('.hp-continue-button, .hp-back-button, .hp-close-button, .hp-option-card, .hp-use-case-card input, .hp-form-control, .hp-close-form-button').off();

    // Determine the currently active step for THIS specific modal
    const currentActiveStep = (modalId === 'formModal') ? currentFormModalStep : currentContactModalStep;

    const $currentStepContainer = $modalElement.find(`#${currentActiveStep}-step`);
    const $continueButton = $currentStepContainer.find('.hp-continue-button');
    const $backButton = $currentStepContainer.find('.hp-back-button');
    const $headerCloseButton = $currentStepContainer.find('.hp-close-button'); // Top right close button

    // Universal header close button listener (closes the respective modal)
    if ($headerCloseButton.length) {
        $headerCloseButton.on('click', function() {
            if (modalId === 'formModal') {
                closeFormModal();
            } else if (modalId === 'contactModal') {
                closeContactModal();
            }
        });
    }

    if (currentActiveStep === 'company-size') {
        const $optionCards = $currentStepContainer.find('.hp-option-card');
        let selectedOption = null;

        $optionCards.on('click', function() {
            $optionCards.removeClass('selected');
            $(this).addClass('selected');
            selectedOption = $(this).data('value');
            $continueButton.prop('disabled', false);
        });

        $continueButton.on('click', function() {
            if (selectedOption) {
                // Render next step within the SAME modal
                if (modalId === 'formModal') {
                    renderStep('contact-information', $formModal, $formModalNavItems, 'formModal');
                } else if (modalId === 'contactModal') {
                    renderStep('contact-information', $contactModal, $contactModalNavItems, 'contactModal');
                }
            } else {
                showMessageModal('Please select a company size to continue.');
            }
        });

    } else if (currentActiveStep === 'contact-information') {
        const $contactInputs = $currentStepContainer.find('.hp-form-fields input');

        function checkContactFormValidity() {
            let isValid = true;
            const yourName = $currentStepContainer.find('#yourName').val().trim();
            const yourPosition = $currentStepContainer.find('#yourPosition').val().trim();
            const companyName = $currentStepContainer.find('#companyName').val().trim();
            const companyEmail = $currentStepContainer.find('#companyEmail').val().trim();

            if (!yourName || !yourPosition || !companyName || !companyEmail) {
                isValid = false;
            }

            if (companyEmail && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(companyEmail)) {
                isValid = false;
            }

            $continueButton.prop('disabled', !isValid);
        }

        $contactInputs.on('input', checkContactFormValidity);
        checkContactFormValidity(); // Run on initial load to set button state

        $continueButton.on('click', function() {
            const contactData = {
                yourName: $currentStepContainer.find('#yourName').val(),
                yourPosition: $currentStepContainer.find('#yourPosition').val(),
                companyName: $currentStepContainer.find('#companyName').val(),
                companyEmail: $currentStepContainer.find('#companyEmail').val(),
                phoneNumber: $currentStepContainer.find('#phoneNumber').val(),
            };
            console.log('Contact Information:', contactData);
            // Render next step within the SAME modal
            if (modalId === 'formModal') {
                renderStep('use-cases', $formModal, $formModalNavItems, 'formModal');
            } else if (modalId === 'contactModal') {
                renderStep('use-cases', $contactModal, $contactModalNavItems, 'contactModal');
            }
        });

        $backButton.on('click', function() {
            console.log('Back button clicked from contact information.');
            // Render previous step within the SAME modal
            if (modalId === 'formModal') {
                renderStep('company-size', $formModal, $formModalNavItems, 'formModal');
            } else if (modalId === 'contactModal') {
                renderStep('company-size', $contactModal, $contactModalNavItems, 'contactModal');
            }
        });
    } else if (currentActiveStep === 'use-cases') {
        const $useCaseCheckboxes = $currentStepContainer.find('.hp-use-case-card input[type="checkbox"]');

        function checkUseCasesValidity() {
            let isAnySelected = false;
            $useCaseCheckboxes.each(function() {
                if ($(this).prop('checked')) {
                    isAnySelected = true;
                    return false; // Break out of each loop
                }
            });
            $continueButton.prop('disabled', !isAnySelected);
        }

        $useCaseCheckboxes.on('change', checkUseCasesValidity);
        checkUseCasesValidity(); // Initial check on load

        $continueButton.on('click', function() {
            const selectedUseCases = $useCaseCheckboxes.filter(':checked').map(function() {
                return $(this).val();
            }).get();
            console.log('Selected Use Cases:', selectedUseCases);
            // Render next step within the SAME modal
            if (modalId === 'formModal') {
                renderStep('requirements', $formModal, $formModalNavItems, 'formModal');
            } else if (modalId === 'contactModal') {
                renderStep('requirements', $contactModal, $contactModalNavItems, 'contactModal');
            }
        });

        $backButton.on('click', function() {
            console.log('Back button clicked from use cases.');
            // Render previous step within the SAME modal
            if (modalId === 'formModal') {
                renderStep('contact-information', $formModal, $formModalNavItems, 'formModal');
            } else if (modalId === 'contactModal') {
                renderStep('contact-information', $contactModal, $contactModalNavItems, 'contactModal');
            }
        });
    }
    else if (currentActiveStep === 'requirements') {
        const $problemsTextarea = $currentStepContainer.find('#problemsFacing');
        const $requirementsTextarea = $currentStepContainer.find('#toolRequirements');

        function checkRequirementsValidity() {
            const problemsFilled = $problemsTextarea.val().trim() !== '';
            const requirementsFilled = $requirementsTextarea.val().trim() !== '';
            $continueButton.prop('disabled', !(problemsFilled && requirementsFilled));
        }

        $problemsTextarea.on('input', checkRequirementsValidity);
        $requirementsTextarea.on('input', checkRequirementsValidity);

        checkRequirementsValidity(); // Initial check on load

        // --- IMPORTANT: Submit Button Logic Integration ---
        // This specific listener for "Submit" needs to be attached here,
        // within the context of the current modal.
        if ($continueButton.text().trim() === 'Submit') {
            $continueButton.on('click', function() {
                const companySize = $currentStepContainer.find('.hp-option-card.selected').data('value');
                const name = $currentStepContainer.find('#yourName').val();
                const position = $currentStepContainer.find('#yourPosition').val();
                const company = $currentStepContainer.find('#companyName').val();
                const email = $currentStepContainer.find('#companyEmail').val();
                const phone = $currentStepContainer.find('#phoneNumber').val();
                const useCases = [];
                // It's important to scope this to the current modal's step containers
                $modalElement.find('input[name="useCase"]:checked').each(function () {
                    useCases.push($(this).val());
                });

                // Requirements
                const problems = $currentStepContainer.find('#problemsFacing').val();
                const tools = $currentStepContainer.find('#toolRequirements').val();

                // Basic validation
                if (!name || !position || !company || !email || !problems || !tools) {
                    showMessageModal("Please fill all required fields.");
                    return;
                }

                const formData = {
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
                $modalElement.find('.loader').removeClass('hidden'); // Scope loader to the current modal

                $.ajax({
                    type: "POST",
                    url: "send-mail.php",
                    data: formData,
                    dataType: 'json',

                    success: function (response) {
                        // Scope message box to the current modal's context
                        let $msgBox = $modalElement.find('#responseMsg');

                        if (response.status === 'success') {
                            $modalElement.find('.loader').addClass('hidden');
                            $msgBox.html('<div class="text-green-700 bg-green-50 border border-green-300 p-4 rounded">✅ ' + response.message + '</div>');

                            // Call renderStep for 'final-checklist' with the correct modal context
                            if (modalId === 'formModal') {
                                renderStep('final-checklist', $formModal, $formModalNavItems, 'formModal');
                            } else if (modalId === 'contactModal') {
                                renderStep('final-checklist', $contactModal, $contactModalNavItems, 'contactModal');
                            }

                            if (response.send_video === 'send_v_url') {
                                const d = new Date();
                                d.setTime(d.getTime() + (7 * 24 * 60 * 60 * 1000));
                                document.cookie = "contact_form_submitted=true; expires=" + d.toUTCString() + "; path=/";

                                $('#video-trigger').remove(); // This assumes a global video trigger element

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
                            grecaptcha.reset(); // Assuming reCAPTCHA is global or handled appropriately
                        } else if (response.status === 'recaptcha_failed') {
                            $msgBox.html('<div class="text-yellow-700 bg-yellow-50 border border-yellow-300 p-4 rounded">⚠️ ' + response.message + '</div>');
                            console.warn('Form failed:', response.message);
                        } else {
                            $msgBox.html('<div class="text-red-700 bg-red-50 border border-red-300 p-4 rounded">❌ ' + response.message + '</div>');
                        }
                    },
                    error: function (xhr, status, error) {
                        // Scope message box to the current modal's context
                        $modalElement.find('#responseMsg').html('<div class="text-red-700 bg-red-50 border border-red-300 p-4 rounded">❌ Something went wrong: ' + error + '</div>');
                    }
                });
            });
        }

        $backButton.on('click', function() {
            console.log('Back button clicked from requirements.');
            // Render previous step within the SAME modal
            if (modalId === 'formModal') {
                renderStep('use-cases', $formModal, $formModalNavItems, 'formModal');
            } else if (modalId === 'contactModal') {
                renderStep('use-cases', $contactModal, $contactModalNavItems, 'contactModal');
            }
        });
    }
    else if (currentActiveStep === 'final-checklist') {
        // This screen has no "Back" button, and "Continue" is replaced by "Close"
        const $closeFormButton = $currentStepContainer.find('.hp-close-form-button');

        if ($closeFormButton.length) {
            $closeFormButton.on('click', function() {
                console.log('Form Close button clicked from final checklist.');
                showMessageModal('Form submission complete!');
                // Close the respective modal after submission message
                if (modalId === 'formModal') {
                    closeFormModal();
                } else if (modalId === 'contactModal') {
                    closeContactModal();
                }
            });
        }
    }
}

$(document).ready(function() {
    // Initialize Original Form Modal
    if (!isFormModalInline) { // Check the specific inline flag for formModal
        $('.hp-open-modal-button').on('click', openFormModal);
    } else {
        // If it's an inline form, directly render the first step on page load
        openFormModal();
    }

    // Initialize Contact Modal
    // This button will likely be in your header on the contact page
    $('.hp-open-contact-modal-button').on('click', openContactModal);

    // If the contact modal should be inline on the contact page, open it by default
    if (isContactModalInline) {
        openContactModal();
    }
});