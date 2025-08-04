const $mainContent = $('.hp-main-content'); // Assuming this refers to the main content area for general use
const $navItems = $('.hp-nav-item'); // Navigation items within the form (likely shared structure)
const $formModal = $('#formModal'); // The original form modal overlay
const isInline = $formModal.hasClass('hp-inline-form'); // Check if the original form is inline

// New elements for the Contact Modal
const $contactModal = $('#contactModal'); // The contact modal overlay
const isContactModalInline = $contactModal.hasClass('hp-inline-form'); // Check if contact modal is inline

let currentStep = 'company-size'; // Initial step for the main form
let currentContactModalStep = 'company-size'; // Initial step for the contact modal

// Function to display a custom message modal (for alerts) - Shared utility
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

// --- Functions for original Form Modal (#formModal) ---
function openFormModal() {
    if (!isInline) {
        $formModal.addClass('show');
    }
    renderStep('company-size', $formModal, $navItems, 'formModal'); // Pass relevant elements and a unique identifier
}

function closeFormModal() {
    if (!isInline) {
        $formModal.removeClass('show');
    }
    // Reset nav items for the formModal specifically
    $formModal.find('.hp-nav-item').each(function() {
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
    renderStep('company-size', $contactModal, $contactModal.find('.hp-nav-item'), 'contactModal'); // Pass specific elements
}

function closeContactModal() {
    if (!isContactModalInline) {
        $contactModal.removeClass('show');
    }
    // Reset nav items for the contactModal specifically
    $contactModal.find('.hp-nav-item').each(function() {
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
    } else if (stepName === 'final-checklist') {
        $currentStepContainer.find('.hp-form-footer .hp-back-button, .hp-form-footer .hp-continue-button').hide();
        $currentStepContainer.find('.hp-form-footer .hp-close-form-button').show();
    }
    
    // Attach event listeners for the specific modal
    attachEventListeners($modalElement, modalId);
}


// Generalized attachEventListeners function
function attachEventListeners($modalElement, modalId) {
    // Detach all listeners from buttons and inputs within any step container of this specific modal
    $modalElement.find('.hp-step-container').find('.hp-continue-button, .hp-back-button, .hp-close-button, .hp-option-card, .hp-use-case-card input, .hp-form-control, .hp-close-form-button').off();

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

        function checkRequirementsValidity() {
            const problemsFilled = $problemsTextarea.val().trim() !== '';
            const requirementsFilled = $requirementsTextarea.val().trim() !== '';
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
            showMessageModal('Requirements submitted! Further steps are currently disabled.');
            // Do NOT call renderStep('final-checklist');
        });

        $backButton.on('click', function() {
            console.log('Back button clicked from requirements.');
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
    // Initialize original Form Modal
    if (!isInline) {
        $('.hp-open-modal-button').on('click', openFormModal);
    } else {
        openFormModal();
    }

    // Initialize Contact Modal
    // This is the button in your header that will open the contact modal
    // You'll need to add a class like 'hp-open-contact-modal-button' to it
    $('.hp-open-contact-modal-button').on('click', openContactModal);

    // If the contact modal should be inline on the contact page
    if (isContactModalInline) {
        openContactModal(); // Directly open if it's an inline form on load
    }
});