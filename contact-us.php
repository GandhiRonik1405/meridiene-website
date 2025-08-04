<!DOCTYPE html>
<html lang="en">
<?php 
    $pageTitle = 'Contact Us'; 
    include('header.php') 
?>
<link rel="stylesheet" href="assets/css/about-us.css" />
    <body>
       
        <div id="root">
            <div aria-label="Notifications (F8)" role="region" style="pointer-events: none;" tabindex="-1">
                <ol class="fixed top-0 z-[100] flex max-h-screen w-full flex-col-reverse p-4 sm:bottom-0 sm:right-0 sm:top-auto sm:flex-col md:max-w-[420px]" tabindex="-1">
                </ol>
            </div>
          
            <!-- Header menu start -->
           <?php include('menu.php') ?>
            <!-- Header menu end -->

            <!-- Site content start -->
            <br><br>
            <div class="min-h-screen bg-background">
                <div class="max-w-6xl mx-auto px-4 py-10">
                    <div class="text-center mb-20 animate-fade-in-up">
                     <h1 class="text-5xl md:text-6xl font-bold mb-6 bg-gradient-to-r from-brand-red to-brand-purple bg-clip-text text-transparent">About Meridiene</h1>
                       
                        <p class="text-xl text-muted-foreground max-w-3xl mx-auto leading-relaxed">Ready to transform your organization with AI-powered solutions? Let's discuss how Meridiene can navigate your business through the complex modern marketplace.</p>
                    </div>

                    <div id="contactModal" class="hp-inline-form flex justify-center formModal_contact">
                        <div class="hp-form-container">
                            <div class="hp-sidebar">
                                <div class="hp-sidebar-header">
                                    <h2>Meridiene</h2>
                                    <p>Organizational Planning Software</p>
                                </div>
                                <nav class="hp-sidebar-nav">
                                    <div id="nav-company-size" class="hp-nav-item" data-step="company-size">
                                        <div class="hp-sidebar-icon"><i class="fas fa-building" data-original-icon="fa-building"></i></div>
                                        <span>Company Size</span>
                                    </div>
                                    <div id="nav-contact-info" class="hp-nav-item" data-step="contact-information">
                                        <div class="hp-sidebar-icon"><i class="fas fa-address-book" data-original-icon="fa-address-book"></i></div>
                                        <span>Contact Information</span>
                                    </div>
                                    <div id="nav-use-cases" class="hp-nav-item" data-step="use-cases">
                                        <div class="hp-sidebar-icon"><i class="fas fa-lightbulb" data-original-icon="fa-lightbulb"></i></div>
                                        <span>Use Cases</span>
                                    </div>
                                    <div id="nav-requirements" class="hp-nav-item" data-step="requirements">
                                        <div class="hp-sidebar-icon"><i class="fas fa-clipboard-list" data-original-icon="fa-clipboard-list"></i></div>
                                        <span>Requirements</span>
                                    </div>
                                    <div id="nav-final-checklist" class="hp-nav-item" data-step="final-checklist">
                                        <div class="hp-sidebar-icon"><i class="fas fa-file-invoice" data-original-icon="fa-file-invoice"></i></div>
                                        <span>Final Checklist</span>
                                    </div>
                                </nav>
                                <div></div>
                            </div>
                
                            <div class="hp-main-content">
                                <div id="company-size-step" class="hp-step-container">
                                    <div class="hp-main-content-header">
                                        <div>
                                            <h1>What's your company size?</h1>
                                            <p>This helps us understand your organizational complexity.</p>
                                        </div>
                                        <button type="button" class="hp-close-button" aria-label="Close form">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    <div class="hp-options-grid">
                                        <div class="hp-option-card selected" data-value="1000-2000">
                                            <i class="fas fa-users"></i>
                                            <h3>1000 - 2000</h3>
                                            <p>Growing Enterprise</p>
                                            <i class="fas fa-check-circle hp-selected-icon"></i>
                                        </div>
                                        <div class="hp-option-card" data-value="2000-5000">
                                            <i class="fas fa-building"></i>
                                            <h3>2000 - 5000</h3>
                                            <p>Large Corporation</p>
                                            <i class="fas fa-check-circle hp-selected-icon"></i>
                                        </div>
                                        <div class="hp-option-card" data-value="5000-10000">
                                            <i class="fas fa-briefcase"></i>
                                            <h3>5000 - 10000</h3>
                                            <p>Enterprise Scale</p>
                                            <i class="fas fa-check-circle hp-selected-icon"></i>
                                        </div>
                                        <div class="hp-option-card" data-value="10k-plus">
                                            <i class="fas fa-city"></i>
                                            <h3>10k or more</h3>
                                            <p>Global Enterprise</p>
                                            <i class="fas fa-check-circle hp-selected-icon"></i>
                                        </div>
                                    </div>
                                    <div class="hp-form-footer">
                                        <button type="button" class="hp-button hp-button-outline-secondary hp-back-button" disabled>Back</button>
                                        <button type="button" class="hp-button hp-button-danger hp-continue-button inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-gradient-primary text-white font-semibold border-0 rounded-lg px-10 text-lg group hover:scale-105 hover:shadow-hover transition-all duration-500 relative overflow-hidden animate-pulse-glow" disabled>Continue</button>
                                    </div>
                                </div>
                
                                <div id="contact-information-step" class="hp-step-container">
                                    <div class="hp-main-content-header">
                                        <div>
                                            <h1>Contact Information</h1>
                                            <p>Help us personalize our approach to your needs.</p>
                                        </div>
                                        <button type="button" class="hp-close-button" aria-label="Close form">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    <div class="hp-form-fields">
                                        <div class="hp-form-group">
                                            <label for="yourName" class="hp-label">Your Name *</label>
                                            <input type="text" class="hp-form-control" id="yourName" placeholder="John Doe">
                                        </div>
                                        <div class="hp-form-group">
                                            <label for="yourPosition" class="hp-label">Your Position *</label>
                                            <input type="text" class="hp-form-control" id="yourPosition" placeholder="HR Director">
                                        </div>
                                        <div class="hp-form-group hp-full-width">
                                            <label for="companyName" class="hp-label">Company Name *</label>
                                            <input type="text" class="hp-form-control" id="companyName" placeholder="Acme Corporation">
                                        </div>
                                        <div class="hp-form-group">
                                            <label for="companyEmail" class="hp-label">Company Email *</label>
                                            <input type="email" class="hp-form-control" id="companyEmail" placeholder="john@acme.com">
                                        </div>
                                        <div class="hp-form-group">
                                            <label for="phoneNumber" class="hp-label">Phone Number</label>
                                            <input type="tel" class="hp-form-control" id="phoneNumber" placeholder="+1 (555) 123-4567">
                                        </div>
                                    </div>
                                    <div class="hp-form-footer">
                                        <button type="button" class="hp-button hp-button-outline-secondary hp-back-button">Back</button>
                                        <button type="button" class="hp-button hp-button-danger hp-continue-button inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-gradient-primary text-white font-semibold border-0 rounded-lg px-10 text-lg group hover:scale-105 hover:shadow-hover transition-all duration-500 relative overflow-hidden animate-pulse-glow" disabled>Continue</button>
                                    </div>
                                </div>
                
                                <div id="use-cases-step" class="hp-step-container">
                                    <div class="hp-main-content-header">
                                        <div>
                                            <h1>Use Cases</h1>
                                            <p>Select the areas you might be interested in exploring.</p>
                                        </div>
                                        <button type="button" class="hp-close-button" aria-label="Close form">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    <div class="hp-use-cases-grid">
                                        <label class="hp-use-case-card">
                                            <input type="checkbox" name="useCase" value="Strategic workforce planning">
                                            <span>Strategic workforce planning</span>
                                        </label>
                                        <label class="hp-use-case-card">
                                            <input type="checkbox" name="useCase" value="Org design">
                                            <span>Org design</span>
                                        </label>
                                        <label class="hp-use-case-card">
                                            <input type="checkbox" name="useCase" value="Org transformation">
                                            <span>Org transformation</span>
                                        </label>
                                        <label class="hp-use-case-card">
                                            <input type="checkbox" name="useCase" value="Current state analysis">
                                            <span>Current state analysis</span>
                                        </label>
                                        <label class="hp-use-case-card">
                                            <input type="checkbox" name="useCase" value="Activity analysis">
                                            <span>Activity analysis</span>
                                        </label>
                                        <label class="hp-use-case-card">
                                            <input type="checkbox" name="useCase" value="Organizational Survey">
                                            <span>Organizational Survey</span>
                                        </label>
                                    </div>
                                    <div class="hp-form-footer">
                                        <button type="button" class="hp-button hp-button-outline-secondary hp-back-button">Back</button>
                                        <button type="button" class="hp-button hp-button-danger hp-continue-button inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-gradient-primary text-white font-semibold border-0 rounded-lg px-10 text-lg group hover:scale-105 hover:shadow-hover transition-all duration-500 relative overflow-hidden animate-pulse-glow" disabled>Continue</button>
                                    </div>
                                </div>
                
                                <div id="requirements-step" class="hp-step-container">
                                    <div class="hp-main-content-header">
                                        <div>
                                            <h1>Define Your Requirements</h1>
                                            <p>Help us understand your specific challenges and what you're looking for.</p>
                                        </div>
                                        <button type="button" class="hp-close-button" aria-label="Close form">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    <div class="hp-form-fields">
                                        <div class="hp-form-group hp-full-width">
                                            <label for="problemsFacing" class="hp-label">What problems is your organization facing? *</label>
                                            <textarea class="hp-form-control" id="problemsFacing" rows="5" placeholder="Describe the organizational challenges you're experiencing..."></textarea>
                                        </div>
                                        <div class="hp-form-group hp-full-width">
                                            <label for="toolRequirements" class="hp-label">What are you looking for in an organizational planning tool? *</label>
                                            <textarea class="hp-form-control" id="toolRequirements" rows="5" placeholder="Tell us about your requirements, expectations, and desired outcomes..."></textarea>
                                        </div>
                                    </div><br>
                                        <div class="g-recaptcha" data-sitekey="6Lc0NhgqAAAAAIvuDy-iRGY6FLzLWk_zHbtzpRk9"></div>
                                        <br>
                                        <div id="responseMsg"></div>
                                    <div class="hp-form-footer">
                                        <button type="button" class="hp-button hp-button-outline-secondary hp-back-button">Back</button>
                                        <button type="button" class="hp-button hp-button-danger hp-continue-button inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-gradient-primary text-white font-semibold border-0 rounded-lg px-10 text-lg group hover:scale-105 hover:shadow-hover transition-all duration-500 relative overflow-hidden animate-pulse-glow" disabled>Submit</button>
                                    </div>
                                </div>
                
                                <div id="final-checklist-step" class="hp-step-container">
                                    <div class="hp-main-content-header">
                                        <div></div>
                                        <button type="button" class="hp-close-button" aria-label="Close form">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    <div class="hp-thank-you-content">
                                        <div class="hp-checkmark-circle">
                                            <i class="fas fa-check"></i>
                                        </div>
                                        <h1>Thank you for choosing Meridiene!</h1>
                                        <p>Your interest has been recorded and we will soon be in touch. An email will find you with meeting details.</p>
                
                                        <div class="hp-info-card">
                                            <div class="hp-icon-wrapper">
                                                <i class="fas fa-clock"></i>
                                                <h2>Time required</h2>
                                            </div>
                                            <p>We'll schedule a 30-45 minute consultation</p>
                                        </div>
                
                                        <div class="hp-info-card">
                                            <div class="hp-icon-wrapper">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <h2>Have questions?</h2>
                                            </div>
                                            <p>Contact us at <a href="mailto:info@txtech.co">info@txtech.co                                            </a></p>
                                        </div>
                                    </div>
                                    <div class="hp-form-footer hp-text-center-footer">
                                        <button type="button" class="hp-button hp-button-danger hp-close-form-button">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="max-w-4xl mx-auto px-4 py-10">
                    <div class="rounded-lg text-card-foreground shadow-[0_4px_20px_hsl(var(--brand-red)/0.08)] border border-border/50 bg-card/80 backdrop-blur-sm hover:shadow-[0_8px_30px_hsl(var(--brand-red)/0.12)] transition-all duration-500 animate-fade-in-up">
                        <div class="flex flex-col space-y-1.5 p-6 text-center pb-10">
                            <h3 class="tracking-tight text-4xl font-bold bg-gradient-to-r from-brand-red to-brand-purple bg-clip-text text-transparent mb-6">Frequently Asked Questions</h3>
                            <p class="text-lg text-muted-foreground leading-relaxed max-w-2xl mx-auto">Get answers to common questions about Meridiene and how it can transform your organization</p>
                        </div>
                        <div class="p-6 pt-0 px-8">
                            <div class="w-full space-y-6" data-orientation="vertical">
                                <div class="faq-item border border-gray-300 rounded-xl px-6 mb-4">
                                    <div class="faq-question text-lg font-semibold cursor-pointer">
                                        <h3 class="flex">
                                            <button aria-controls="radix-:r1:" aria-expanded="false" class="flex flex-1 items-center justify-between hover:underline [&amp;[data-state=open]&gt;svg]:rotate-180 text-left text-lg font-semibold hover:text-primary transition-colors duration-300 py-6" id="radix-:r0:" type="button">
                                                What makes Meridiene different from other organizational planning tools?
                                                <svg class="lucide lucide-chevron-down h-4 w-4 shrink-0 transition-transform duration-200" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="m6 9 6 6 6-6">
                                                    </path>
                                                </svg>
                                            </button>
                                        </h3>
                                    </div>
                                    <div class="faq-answer text-gray-600 leading-relaxed pb-6 hidden">
                                        Meridiene combines AI-powered analytics with personalized use case solutions, specifically designed to navigate the complex modern marketplace. Our platform adapts to your organization's unique challenges and provides comprehensive strategies for AI integration and digital transformation.

                                    </div>
                                </div>
                             
                                <div class="faq-item border border-gray-300 rounded-xl px-6 mb-4">
                                    <div class="faq-question text-lg font-semibold cursor-pointer">
                                        <h3 class="flex">
                                            <button aria-controls="radix-:r1:" aria-expanded="false" class="flex flex-1 items-center justify-between hover:underline [&amp;[data-state=open]&gt;svg]:rotate-180 text-left text-lg font-semibold hover:text-primary transition-colors duration-300 py-6" id="radix-:r0:" type="button">
                                                How quickly can we implement Meridiene in our organization?
                                                <svg class="lucide lucide-chevron-down h-4 w-4 shrink-0 transition-transform duration-200" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="m6 9 6 6 6-6">
                                                    </path>
                                                </svg>
                                            </button>
                                        </h3>
                                    </div>
                                    <div class="faq-answer text-gray-600 leading-relaxed pb-6 hidden">
                                        Implementation timelines vary based on your organization size and complexity. Typically, our Starter plan can be deployed within 1-2 weeks, Professional within 2-4 weeks, and Enterprise solutions within 4-8 weeks. We provide dedicated support throughout the entire process.
                                    </div>
                                </div>
                                <div class="faq-item border border-gray-300 rounded-xl px-6 mb-4">
                                    <div class="faq-question text-lg font-semibold cursor-pointer">
                                        <h3 class="flex">
                                            <button aria-controls="radix-:r1:" aria-expanded="false" class="flex flex-1 items-center justify-between hover:underline [&amp;[data-state=open]&gt;svg]:rotate-180 text-left text-lg font-semibold hover:text-primary transition-colors duration-300 py-6" id="radix-:r0:" type="button">
                                                Do you offer training and support for our team?
                                                <svg class="lucide lucide-chevron-down h-4 w-4 shrink-0 transition-transform duration-200" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="m6 9 6 6 6-6">
                                                    </path>
                                                </svg>
                                            </button>
                                        </h3>
                                    </div>
                                    <div class="faq-answer text-gray-600 leading-relaxed pb-6 hidden">
                                        Yes! All plans include comprehensive training programs. Professional and Enterprise plans include dedicated account managers, priority support, and custom training sessions. We ensure your team is fully equipped to maximize Meridiene's potential.
                                    </div>
                                </div>
                                <div class="faq-item border border-gray-300 rounded-xl px-6 mb-4">
                                    <div class="faq-question text-lg font-semibold cursor-pointer">
                                        <h3 class="flex">
                                            <button aria-controls="radix-:r1:" aria-expanded="false" class="flex flex-1 items-center justify-between hover:underline [&amp;[data-state=open]&gt;svg]:rotate-180 text-left text-lg font-semibold hover:text-primary transition-colors duration-300 py-6" id="radix-:r0:" type="button">
                                                Can Meridiene integrate with our existing systems?
                                                <svg class="lucide lucide-chevron-down h-4 w-4 shrink-0 transition-transform duration-200" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="m6 9 6 6 6-6">
                                                    </path>
                                                </svg>
                                            </button>
                                        </h3>
                                    </div>
                                    <div class="faq-answer text-gray-600 leading-relaxed pb-6 hidden">
                                        Absolutely. Meridiene is built with integration in mind. We support APIs and have pre-built connectors for major enterprise systems. Our Enterprise plan includes custom integrations and dedicated technical support for seamless system integration.
                                    </div>
                                </div>
                                <div class="faq-item border border-gray-300 rounded-xl px-6 mb-4">
                                    <div class="faq-question text-lg font-semibold cursor-pointer">
                                        <h3 class="flex">
                                            <button aria-controls="radix-:r1:" aria-expanded="false" class="flex flex-1 items-center justify-between hover:underline [&amp;[data-state=open]&gt;svg]:rotate-180 text-left text-lg font-semibold hover:text-primary transition-colors duration-300 py-6" id="radix-:r0:" type="button">
                                                What kind of AI capabilities does Meridiene offer?
                                                <svg class="lucide lucide-chevron-down h-4 w-4 shrink-0 transition-transform duration-200" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="m6 9 6 6 6-6">
                                                    </path>
                                                </svg>
                                            </button>
                                        </h3>
                                    </div>
                                    <div class="faq-answer text-gray-600 leading-relaxed pb-6 hidden">
                                        Meridiene features advanced AI for predictive analytics, strategic planning automation, risk assessment algorithms, and intelligent decision support. Our AI adapts to your industry and organizational patterns to provide increasingly accurate insights over time.
                                    </div>
                                </div>
                                <div class="faq-item border border-gray-300 rounded-xl px-6 mb-4">
                                    <div class="faq-question text-lg font-semibold cursor-pointer">
                                        <h3 class="flex">
                                            <button aria-controls="radix-:r1:" aria-expanded="false" class="flex flex-1 items-center justify-between hover:underline [&amp;[data-state=open]&gt;svg]:rotate-180 text-left text-lg font-semibold hover:text-primary transition-colors duration-300 py-6" id="radix-:r0:" type="button">
                                                Is my organization's data secure with Meridiene?
                                                <svg class="lucide lucide-chevron-down h-4 w-4 shrink-0 transition-transform duration-200" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="m6 9 6 6 6-6">
                                                    </path>
                                                </svg>
                                            </button>
                                        </h3>
                                    </div>
                                    <div class="faq-answer text-gray-600 leading-relaxed pb-6 hidden">
                                        Data security is our top priority. We employ enterprise-grade encryption, comply with SOC 2 Type II standards, and offer white-label solutions for maximum security. Enterprise plans include advanced security features and compliance certifications.
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Site content end -->
        </div>
       
<!-- Footer start -->
    <?php include('footer.php') ?>
<!-- Footer end -->

<script>
    
    document.addEventListener('DOMContentLoaded', () => {
    const tabButtons = document.querySelectorAll('[role="tab"]');
    
    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
        // Reset all tabs
        tabButtons.forEach(btn => {
            btn.setAttribute('data-state', 'inactive');
            btn.setAttribute('aria-selected', 'false');
        });
    
        // Activate the clicked tab
        button.setAttribute('data-state', 'active');
        button.setAttribute('aria-selected', 'true');
        });
    });
    });
</script>
<!-- <script src="assets/js/contacts.js"></script> -->
</body>
</html>