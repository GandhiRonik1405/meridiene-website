// Global variables - ensure these are defined once at the top of your main JS file
const $mainContent = $('.hp-main-content'); // This might not be directly used for the contact modal but is good to keep if used elsewhere
const $navItems = $('.hp-nav-item'); // This will target ALL nav items by default if not scoped
const $formModal = $('#formModal'); // The modal overlay for the primary form (if any)
const isInline = $formModal.hasClass('hp-inline-form'); // Check if it's an inline form

const $contactModal = $('#contactModal'); // The contact modal overlay
const isContactModalInline = $contactModal.hasClass('hp-inline-form'); // Check if contact modal is inline

let currentStep = 'company-size'; // Initial step for the primary form
let currentContactModalStep = 'company-size'; // Initial step for the contact modal

// Function to display a custom message modal (for alerts)
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

// --- Functions for Primary Form Modal (#formModal) ---
// (Keeping these as is, assuming they work for your non-contact form modal)
function openFormModal() {
    if (!isInline) {
        $formModal.addClass('show');
    }
    renderStep('company-size', $formModal, $navItems, 'formModal'); // Ensure correct parameters for renderStep
}

function closeFormModal() {
    if (!isInline) {
        $formModal.removeClass('show');
    }
    $navItems.each(function() { // This should ideally be specific to $formModal nav items
        const $navItem = $(this);
        const $icon = $navItem.find('i.fas');
        const originalIconClass = $icon.data('original-icon');
        $navItem.removeClass('active completed');
        $icon.attr('class', 'fas ' + originalIconClass);
    });
}

// --- Functions for Contact Modal (#contactModal) ---
function openContactModal() {
    // For an inline form, we don't typically add/remove a 'show' class for an overlay.
    // Instead, we ensure its display property is correct.
    // Your HTML has `class="hp-inline-form flex justify-center formModal_contact"`.
    // The `flex` class might already make it visible.
    // This line ensures it's shown if CSS initially hides `.hp-inline-form`.
    $contactModal.css('display', 'flex'); // Ensure it's visible as a flex container

    // Always start at the first step when opening/initializing the contact form
    renderStep('company-size', $contactModal, $contactModal.find('.hp-nav-item'), 'contactModal');
}

function closeContactModal() {
    // For an inline form, "closing" typically means resetting its state or
    // making it disappear entirely if that's the desired UX for "closing" an inline form.
    // If you want it to disappear, uncomment the next line and ensure your CSS supports it.
    // $contactModal.css('display', 'none');

    // Reset nav items for the contactModal specifically
    $contactModal.find('.hp-nav-item').each(function() {
        const $navItem = $(this);
        const $icon = $navItem.find('i.fas');
        const originalIconClass = $icon.data('original-icon');
        $navItem.removeClass('active completed');
        $icon.attr('class', 'fas ' + originalIconClass);
    });
    // Optionally, reset form fields here when "closing" an inline form
    // $contactModal.find('input, textarea').val('');
    // $contactModal.find('.hp-option-card').removeClass('selected');
    // $contactModal.find('input[type="checkbox"]').prop('checked', false);
}

// Helper function to determine if a step is completed
function isStepCompleted(navStep, currentStep) {
    const stepOrder = ['company-size', 'contact-information', 'use-cases', 'requirements', 'final-checklist'];
    const navIndex = stepOrder.indexOf(navStep);
    const currentIndex = stepOrder.indexOf(currentStep);
    return navIndex < currentIndex;
}

// Generalized renderStep function to work with any modal
function renderStep(stepName, $modalElement, $modalNavItems, modalId) {
    // Determine which currentStep variable to update based on modalId
    if (modalId === 'formModal') {
        currentStep = stepName;
    } else if (modalId === 'contactModal') {
        currentContactModalStep = stepName;
    }

    // Hide all step containers within the specific modal
    $modalElement.find('.hp-step-container').hide();
    // Show the target step container within the specific modal
    $modalElement.find(`#${stepName}-step`).css('display', 'flex');

    // Reset all nav items for the specific modal
    $modalNavItems.each(function() {
        const $navItem = $(this);
        const $icon = $navItem.find('i.fas');
        const originalIconClass = $icon.data('original-icon');
        $navItem.removeClass('active completed');
        $icon.attr('class', 'fas ' + originalIconClass);
    });

    // Apply active/completed states based on current step for the specific modal
    $modalNavItems.each(function() {
        const $navItem = $(this);
        const navStep = $navItem.data('step');
        const $icon = $navItem.find('i.fas');
        const originalIconClass = $icon.data('original-icon');

        // Determine the active step based on which modal is being rendered
        const activeStep = (modalId === 'formModal') ? currentStep : currentContactModalStep;

        if (navStep === activeStep) {
            $navItem.addClass('active');
            $icon.attr('class', 'fas ' + originalIconClass);
        } else if (isStepCompleted(navStep, activeStep)) {
            $navItem.addClass('completed');
            $icon.attr('class', 'fas fa-check-circle');
        }
    });

    // Handle button states for the specific modal
    $modalElement.find(`.hp-button`).prop('disabled', false);
    $modalElement.find(`.hp-form-footer .hp-back-button, .hp-form-footer .hp-continue-button, .hp-form-footer .hp-close-form-button`).show();

    // Select the current step container within the specific modal
    const $currentStepContainer = $modalElement.find(`#${stepName}-step`);

    if (stepName === 'company-size') {
        $currentStepContainer.find('.hp-back-button').prop('disabled', true);
        $currentStepContainer.find('.hp-continue-button').prop('disabled', true);
    } else if (stepName === 'contact-information') {
        $currentStepContainer.find('.hp-continue-button').prop('disabled', true);
    } else if (stepName === 'use-cases') {
        $currentStepContainer.find('.hp-continue-button').prop('disabled', true);
    } else if (stepName === 'requirements') {
        $currentStepContainer.find('.hp-continue-button').prop('disabled', true);
        // Special handling for the submit button text and loader for requirements step
        $currentStepContainer.find('.hp-continue-button').text('Submit'); // Change button text
        $currentStepContainer.find('.loader').removeClass('hidden'); // Show loader
    } else if (stepName === 'final-checklist') {
        $currentStepContainer.find('.hp-form-footer .hp-back-button, .hp-form-footer .hp-continue-button').hide();
        $currentStepContainer.find('.hp-form-footer .hp-close-form-button').show();
        $currentStepContainer.find('.loader').addClass('hidden'); // Hide loader on final step
    }
    
    // Attach event listeners for the specific modal
    attachEventListeners($modalElement, modalId);
}

// Generalized attachEventListeners function
function attachEventListeners($modalElement, modalId) {
    // Detach all listeners from buttons and inputs within any step container of this specific modal
    // This is important to prevent multiple event listeners being attached on re-render.
    $modalElement.find('.hp-step-container').find('.hp-continue-button, .hp-back-button, .hp-close-button, .hp-option-card, .hp-use-case-card input, .hp-form-control, .hp-close-form-button').off();

    // Determine the currently active step based on which modal is being handled
    const currentActiveStep = (modalId === 'formModal') ? currentStep : currentContactModalStep;

    const $currentStepContainer = $modalElement.find(`#${currentActiveStep}-step`);
    const $continueButton = $currentStepContainer.find('.hp-continue-button');
    const $backButton = $currentStepContainer.find('.hp-back-button');
    const $headerCloseButton = $currentStepContainer.find('.hp-close-button');

    // Universal header close button listener
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
                if (modalId === 'formModal') {
                    renderStep('contact-information', $formModal, $navItems, 'formModal');
                } else if (modalId === 'contactModal') {
                    renderStep('contact-information', $contactModal, $contactModal.find('.hp-nav-item'), 'contactModal');
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
        checkContactFormValidity();

        $continueButton.on('click', function() {
            const contactData = {
                yourName: $currentStepContainer.find('#yourName').val(),
                yourPosition: $currentStepContainer.find('#yourPosition').val(),
                companyName: $currentStepContainer.find('#companyName').val(),
                companyEmail: $currentStepContainer.find('#companyEmail').val(),
                phoneNumber: $currentStepContainer.find('#phoneNumber').val(),
            };
            console.log('Contact Information:', contactData);
            if (modalId === 'formModal') {
                renderStep('use-cases', $formModal, $navItems, 'formModal');
            } else if (modalId === 'contactModal') {
                renderStep('use-cases', $contactModal, $contactModal.find('.hp-nav-item'), 'contactModal');
            }
        });

        $backButton.on('click', function() {
            console.log('Back button clicked from contact information.');
            if (modalId === 'formModal') {
                renderStep('company-size', $formModal, $navItems, 'formModal');
            } else if (modalId === 'contactModal') {
                renderStep('company-size', $contactModal, $contactModal.find('.hp-nav-item'), 'contactModal');
            }
        });
    } else if (currentActiveStep === 'use-cases') {
        const $useCaseCheckboxes = $currentStepContainer.find('.hp-use-case-card input[type="checkbox"]');

        function checkUseCasesValidity() {
            let isAnySelected = false;
            $useCaseCheckboxes.each(function() {
                if ($(this).prop('checked')) {
                    isAnySelected = true;
                    return false;
                }
            });
            $continueButton.prop('disabled', !isAnySelected);
        }

        $useCaseCheckboxes.on('change', checkUseCasesValidity);
        checkUseCasesValidity();

        $continueButton.on('click', function() {
            const selectedUseCases = $useCaseCheckboxes.filter(':checked').map(function() {
                return $(this).val();
            }).get();
            console.log('Selected Use Cases:', selectedUseCases);
            if (modalId === 'formModal') {
                renderStep('requirements', $formModal, $navItems, 'formModal');
            } else if (modalId === 'contactModal') {
                renderStep('requirements', $contactModal, $contactModal.find('.hp-nav-item'), 'contactModal');
            }
        });

        $backButton.on('click', function() {
            console.log('Back button clicked from use cases.');
            if (modalId === 'formModal') {
                renderStep('contact-information', $formModal, $navItems, 'formModal');
            } else if (modalId === 'contactModal') {
                renderStep('contact-information', $contactModal, $contactModal.find('.hp-nav-item'), 'contactModal');
            }
        });
    } else if (currentActiveStep === 'requirements') {
        const $problemsTextarea = $currentStepContainer.find('#problemsFacing');
        const $requirementsTextarea = $currentStepContainer.find('#toolRequirements');
        const $recaptchaContainer = $currentStepContainer.find('.g-recaptcha');
        const $responseMsg = $currentStepContainer.find('#responseMsg');
        const $loader = $currentStepContainer.find('.loader'); // Get the loader element

        function checkRequirementsValidity() {
            const problemsFilled = $problemsTextarea.val().trim() !== '';
            const requirementsFilled = $requirementsTextarea.val().trim() !== '';
            // For reCAPTCHA, we'll assume it's handled on submission, not for initial button state.
            $continueButton.prop('disabled', !(problemsFilled && requirementsFilled));
        }

        $problemsTextarea.on('input', checkRequirementsValidity);
        $requirementsTextarea.on('input', checkRequirementsValidity);

        checkRequirementsValidity();

        $continueButton.on('click', function() {
            const requirementsData = {
                problems: $problemsTextarea.val().trim(),
                toolRequirements: $requirementsTextarea.val().trim()
            };
            console.log('Requirements Data:', requirementsData);

            // Handle reCAPTCHA validation here before proceeding with submission
            const recaptchaResponse = grecaptcha.getResponse();

            if (!recaptchaResponse) {
                $responseMsg.text('Please complete the reCAPTCHA.').css('color', 'red');
                showMessageModal('Please complete the reCAPTCHA to submit.');
                return;
            }

            // Show loader, disable button
            $loader.removeClass('hidden');
            $continueButton.prop('disabled', true);

            // Simulate API call for submission
            // In a real application, you'd send requirementsData and recaptchaResponse to your backend
            setTimeout(() => {
                // Assuming successful submission
                console.log('Form data submitted via AJAX:', requirementsData);
                $responseMsg.text('Form submitted successfully!').css('color', 'green');
                $loader.addClass('hidden'); // Hide loader

                // Proceed to final checklist after successful submission
                if (modalId === 'formModal') {
                    renderStep('final-checklist', $formModal, $navItems, 'formModal');
                } else if (modalId === 'contactModal') {
                    renderStep('final-checklist', $contactModal, $contactModal.find('.hp-nav-item'), 'contactModal');
                }
                
                // Reset reCAPTCHA after submission
                grecaptcha.reset();

            }, 2000); // Simulate network delay
        });

        $backButton.on('click', function() {
            console.log('Back button clicked from requirements.');
            // Reset recaptcha if moving back
            grecaptcha.reset();
            $responseMsg.text(''); // Clear any reCAPTCHA messages
            $loader.addClass('hidden'); // Ensure loader is hidden
            if (modalId === 'formModal') {
                renderStep('use-cases', $formModal, $navItems, 'formModal');
            } else if (modalId === 'contactModal') {
                renderStep('use-cases', $contactModal, $contactModal.find('.hp-nav-item'), 'contactModal');
            }
        });
    } else if (currentActiveStep === 'final-checklist') {
        const $closeFormButton = $currentStepContainer.find('.hp-close-form-button');

        if ($closeFormButton.length) {
            $closeFormButton.on('click', function() {
                console.log('Form Close button clicked from final checklist.');
                showMessageModal('Form submission complete!');
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
    // Initialize primary form modal (if applicable)
    if (!isInline) {
        $('.hp-open-modal-button').on('click', openFormModal);
    } else {
        // If the *main* form is inline, open it
        openFormModal();
    }

    // Initialize Contact Modal
    // Since it has 'hp-inline-form', it should be displayed by default.
    // No button click is needed.
    if (isContactModalInline) {
        openContactModal(); // Directly open the contact form on page load
    }

    // FAQ Accordion functionality (from your HTML)
    $('.faq-question').on('click', function() {
        const $answer = $(this).next('.faq-answer');
        const $icon = $(this).find('svg'); // Assuming your SVG is the icon

        // Toggle visibility of the answer
        $answer.slideToggle(300);

        // Toggle rotate class for the icon
        $icon.toggleClass('rotate-180');

        // Close other open FAQ items in the same group
        $('.faq-answer').not($answer).slideUp(300);
        $('.faq-question').find('svg').not($icon).removeClass('rotate-180');
    });
});