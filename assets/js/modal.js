
const $mainContent = $('.hp-main-content');
    const $navItems = $('.hp-nav-item');
    const $formModal = $('#formModal'); // The modal overlay
    const isInline = $formModal.hasClass('hp-inline-form'); // Check if it's an inline form

    let currentStep = 'company-size'; // Initial step

    
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


function openFormModal() {
    if (!isInline) { // Only add 'show' class if it's not an inline form
        $formModal.addClass('show');
    }
    renderStep('company-size'); // Always start at the first step when opening
}

function closeFormModal() {
    if (!isInline) { // Only remove 'show' class if it's not an inline form
        $formModal.removeClass('show');
    }
    $navItems.each(function() {
        const $navItem = $(this);
        const $icon = $navItem.find('i.fas');
        const originalIconClass = $icon.data('original-icon');
        $navItem.removeClass('active completed');
        $icon.attr('class', 'fas ' + originalIconClass); // Restore original icon
    });
}

// Helper function to determine if a step is completed
function isStepCompleted(navStep, currentStep) {
    const stepOrder = ['company-size', 'contact-information', 'use-cases', 'requirements', 'final-checklist'];
    const navIndex = stepOrder.indexOf(navStep);
    const currentIndex = stepOrder.indexOf(currentStep);
    return navIndex < currentIndex;
}

function renderStep(stepName) {
    // Hide all step containers
    $('.hp-step-container').hide();
    // Show the target step container
    $(`#${stepName}-step`).css('display', 'flex'); // Use flex to maintain layout

    // Reset all nav items: remove active/completed, restore original icon
    $navItems.each(function() {
        const $navItem = $(this);
        const $icon = $navItem.find('i.fas'); // Select the Font Awesome icon
        const originalIconClass = $icon.data('original-icon'); // Get original icon class

        $navItem.removeClass('active completed');
        // Ensure the correct original icon class is present before adding others
        $icon.attr('class', 'fas ' + originalIconClass); // Restore original icon class
    });

    // Apply active/completed states based on current step
    $navItems.each(function() {
        const $navItem = $(this);
        const navStep = $navItem.data('step');
        const $icon = $navItem.find('i.fas');
        const originalIconClass = $icon.data('original-icon'); // Re-fetch as it might have changed

        if (navStep === stepName) {
            $navItem.addClass('active');
            // For active, keep the original icon, CSS will handle its white color
            $icon.attr('class', 'fas ' + originalIconClass);
        } else if (isStepCompleted(navStep, stepName)) {
            $navItem.addClass('completed');
            // For completed, change to checkmark icon
            $icon.attr('class', 'fas fa-check-circle');
        }
    });

    // Handle button states
    $(`.hp-button`).prop('disabled', false); // Re-enable all by default
    $(`.hp-form-footer .hp-back-button, .hp-form-footer .hp-continue-button, .hp-form-footer .hp-close-form-button`).show();


    if (stepName === 'company-size') {
        $(`#${stepName}-step`).find('.hp-back-button').prop('disabled', true);
        $(`#${stepName}-step`).find('.hp-continue-button').prop('disabled', true); // Initially disabled
    } else if (stepName === 'contact-information') {
        $(`#${stepName}-step`).find('.hp-continue-button').prop('disabled', true); // Initially disabled
    } else if (stepName === 'use-cases') {
        $(`#${stepName}-step`).find('.hp-continue-button').prop('disabled', true); // Initially disabled
    } else if (stepName === 'requirements') {
        $(`#${stepName}-step`).find('.hp-continue-button').prop('disabled', true); // Initially disabled
    } else if (stepName === 'final-checklist') {
        // No back/continue, only close button
        $(`#${stepName}-step`).find('.hp-form-footer .hp-back-button, .hp-form-footer .hp-continue-button').hide();
        $(`#${stepName}-step`).find('.hp-form-footer .hp-close-form-button').show();
    }
    currentStep = stepName;
    attachEventListeners();
}

function attachEventListeners() {
    // Detach all listeners from buttons and inputs within any step container
    $('.hp-step-container').find('.hp-continue-button, .hp-back-button, .hp-close-button, .hp-option-card, .hp-use-case-card input, .hp-form-control, .hp-close-form-button').off();

    const $currentStepContainer = $(`#${currentStep}-step`);
    const $continueButton = $currentStepContainer.find('.hp-continue-button');
    const $backButton = $currentStepContainer.find('.hp-back-button');
    const $headerCloseButton = $currentStepContainer.find('.hp-close-button'); // Top right close button

    // Universal header close button listener (closes the modal)
    if ($headerCloseButton.length) {
        $headerCloseButton.on('click', function() {
            closeFormModal();
        });
    }

    if (currentStep === 'company-size') {
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
                renderStep('contact-information');
            } else {
                showMessageModal('Please select a company size to continue.');
            }
        });

    } else if (currentStep === 'contact-information') {
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
            renderStep('use-cases');
        });

        $backButton.on('click', function() {
            console.log('Back button clicked from contact information.');
            renderStep('company-size');
        });
    } else if (currentStep === 'use-cases') {
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
            renderStep('requirements');
        });

        $backButton.on('click', function() {
            console.log('Back button clicked from use cases.');
            renderStep('contact-information');
        });
    } 
   
 else if (currentStep === 'requirements') {
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

    $continueButton.on('click', function() {
        const requirementsData = {
            problems: $problemsTextarea.val().trim(),
            toolRequirements: $requirementsTextarea.val().trim()
        };
        console.log('Requirements Data:', requirementsData);
        // Temporarily stop flow here
        showMessageModal('Requirements submitted! Further steps are currently disabled.');
        // Do NOT call renderStep('final-checklist');
    });

    $backButton.on('click', function() {
        console.log('Back button clicked from requirements.');
        renderStep('use-cases');
    });
}
     else if (currentStep === 'final-checklist') {
        // This screen has no "Back" button, and "Continue" is replaced by "Close"
        const $closeFormButton = $currentStepContainer.find('.hp-close-form-button');

        if ($closeFormButton.length) {
            $closeFormButton.on('click', function() {
                console.log('Form Close button clicked from final checklist.');
                showMessageModal('Form submission complete!');
                closeFormModal(); // Close the modal after submission message
            });
        }
    }
}

$(document).ready(function() {
       if (!isInline) {
            $('.hp-open-modal-button').on('click', openFormModal);
        } else {
            // If it's an inline form, directly render the first step on page load
            openFormModal(); // This will effectively just call renderStep('company-size')
        }

});