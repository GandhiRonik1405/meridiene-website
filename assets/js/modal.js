
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

// Global variable to store the currently active modal's functions
// This is a common pattern for scenarios where external code needs to interact
// with the active instance of a component.
window.activeFormModal = null;

// Main function to initialize a form modal
function initializeFormModal($formModalElement) {
    const isInline = $formModalElement.hasClass('hp-inline-form');
    let currentStep = 'company-size'; // Initial step for this specific modal

    // Select elements specific to this modal
    const $navItems = $formModalElement.find('.hp-nav-item');
    const $mainContent = $formModalElement.find('.hp-main-content'); // Adjusted to be specific to the modal

    function openFormModal() {
        if (!isInline) {
            $formModalElement.addClass('show');
        }
        renderStep('company-size');
        window.activeFormModal = this; // Set the current modal instance as active
    }

    function closeFormModal() {
        if (!isInline) {
            $formModalElement.removeClass('show');
        }
        $navItems.each(function() {
            const $navItem = $(this);
            const $icon = $navItem.find('i.fas');
            const originalIconClass = $icon.data('original-icon');
            $navItem.removeClass('active completed');
            $icon.attr('class', 'fas ' + originalIconClass);
        });
        window.activeFormModal = null; // Clear active modal when closed
    }

    function isStepCompleted(navStep, currentStep) {
        const stepOrder = ['company-size', 'contact-information', 'use-cases', 'requirements', 'final-checklist'];
        const navIndex = stepOrder.indexOf(navStep);
        const currentIndex = stepOrder.indexOf(currentStep);
        return navIndex < currentIndex;
    }

    function renderStep(stepName) {
        // Hide all step containers within this specific modal
        $formModalElement.find('.hp-step-container').hide();
        // Show the target step container within this specific modal
        $formModalElement.find(`#${stepName}-step`).css('display', 'flex');

        // Reset all nav items specific to this modal
        $navItems.each(function() {
            const $navItem = $(this);
            const $icon = $navItem.find('i.fas');
            const originalIconClass = $icon.data('original-icon');
            $navItem.removeClass('active completed');
            $icon.attr('class', 'fas ' + originalIconClass);
        });

        // Apply active/completed states based on current step for this modal
        $navItems.each(function() {
            const $navItem = $(this);
            const navStep = $navItem.data('step');
            const $icon = $navItem.find('i.fas');
            const originalIconClass = $icon.data('original-icon');

            if (navStep === stepName) {
                $navItem.addClass('active');
                $icon.attr('class', 'fas ' + originalIconClass);
            } else if (isStepCompleted(navStep, stepName)) {
                $navItem.addClass('completed');
                $icon.attr('class', 'fas fa-check-circle');
            }
        });

        // Handle button states specific to this modal
        $formModalElement.find(`.hp-button`).prop('disabled', false);
        $formModalElement.find(`.hp-form-footer .hp-back-button, .hp-form-footer .hp-continue-button, .hp-form-footer .hp-close-form-button`).show();


        if (stepName === 'company-size') {
            $formModalElement.find(`#${stepName}-step`).find('.hp-back-button').prop('disabled', true);
            $formModalElement.find(`#${stepName}-step`).find('.hp-continue-button').prop('disabled', true);
        } else if (stepName === 'contact-information') {
            $formModalElement.find(`#${stepName}-step`).find('.hp-continue-button').prop('disabled', true);
        } else if (stepName === 'use-cases') {
            $formModalElement.find(`#${stepName}-step`).find('.hp-continue-button').prop('disabled', true);
        } else if (stepName === 'requirements') {
            $formModalElement.find(`#${stepName}-step`).find('.hp-continue-button').prop('disabled', true);
        } else if (stepName === 'final-checklist') {
            $formModalElement.find(`#${stepName}-step`).find('.hp-form-footer .hp-back-button, .hp-form-footer .hp-continue-button').hide();
            $formModalElement.find(`#${stepName}-step`).find('.hp-form-footer .hp-close-form-button').show();
        }
        currentStep = stepName;
        attachEventListeners();
    }

    function attachEventListeners() {
        // Detach all listeners from buttons and inputs within THIS specific step container
        $formModalElement.find('.hp-step-container').find('.hp-continue-button, .hp-back-button, .hp-close-button, .hp-option-card, .hp-use-case-card input, .hp-form-control, .hp-close-form-button').off();

        const $currentStepContainer = $formModalElement.find(`#${currentStep}-step`);
        const $continueButton = $currentStepContainer.find('.hp-continue-button');
        const $backButton = $currentStepContainer.find('.hp-back-button');
        const $headerCloseButton = $currentStepContainer.find('.hp-close-button');

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
                renderStep('requirements');
            });

            $backButton.on('click', function() {
                console.log('Back button clicked from use cases.');
                renderStep('contact-information');
            });
        } else if (currentStep === 'requirements') {
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

            // The 'Submit' button for requirements step now relies on the global event listener
            // within send-mail.js. We remove the direct click handler here.
            // $continueButton.on('click', function() { ... });

            $backButton.on('click', function() {
                console.log('Back button clicked from requirements.');
                renderStep('use-cases');
            });
        } else if (currentStep === 'final-checklist') {
            const $closeFormButton = $currentStepContainer.find('.hp-close-form-button');

            if ($closeFormButton.length) {
                $closeFormButton.on('click', function() {
                    console.log('Form Close button clicked from final checklist.');
                    showMessageModal('Form submission complete!');
                    closeFormModal();
                });
            }
        }
    }

    // Return the necessary functions for external interaction
    return {
        open: openFormModal,
        renderStep: renderStep, // Expose renderStep
        closeFormModal: closeFormModal // Expose closeFormModal
    };
}


$(document).ready(function() {
    // Initialize the primary modal if it exists
    const $primaryFormModal = $('#formModal');
    if ($primaryFormModal.length) {
        const primaryModalInstance = initializeFormModal($primaryFormModal);
        // Attach event listener for the button that opens the primary modal
        $('.hp-open-modal-button').on('click', function() {
            primaryModalInstance.open();
            window.activeFormModal = primaryModalInstance; // Set active modal when opened
        });
    }

    // Initialize the inline modal if it exists
    const $inlineFormModal = $('#formModalInline');
    if ($inlineFormModal.length) {
        const inlineModalInstance = initializeFormModal($inlineFormModal);
        // Since it's an inline form, directly call its open method to render the first step
        inlineModalInstance.open();
        window.activeFormModal = inlineModalInstance; // Set active modal if it's the only one/default
    }
});