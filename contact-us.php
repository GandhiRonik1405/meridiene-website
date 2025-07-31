<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- 1. Character Set and Viewport -->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>meridiene-navigator-blueprint</title>
        <!-- 2. Favicon -->
        <link rel="icon" type="image/svg+xml" href="assets/images/favicon.ico" />
        <!-- 3. Meta Info -->
        <meta name="description" content="Lovable Generated Project" />
        <meta name="author" content="Lovable" />
        <!-- 4. Open Graph (for social sharing) -->
        <meta property="og:title" content="meridiene-navigator-blueprint" />
        <meta property="og:description" content="Lovable Generated Project" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="https://pub-bb2e103a32db4e198524a2e9ed8f35b4.r2.dev/473a7f6f-2458-44b1-95c8-4caff523bd8d/id-preview-3eec9659--72a35f65-ccde-4691-bf48-6671fc54cd49.lovable.app-1752472652091.png" />
        <!-- 5. Twitter Card -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@lovable_dev" />
        <meta name="twitter:image" content="https://pub-bb2e103a32db4e198524a2e9ed8f35b4.r2.dev/473a7f6f-2458-44b1-95c8-4caff523bd8d/id-preview-3eec9659--72a35f65-ccde-4691-bf48-6671fc54cd49.lovable.app-1752472652091.png" />
        <!-- 6. External Stylesheets -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/main_styles.css" />
        <link rel="stylesheet" href="assets/css/about-us.css" />
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script src="assets/js/custom.js"></script>


    </head>
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
                <div class="max-w-6xl mx-auto px-4 py-20">
                    <div class="text-center mb-20 animate-fade-in-up">
                     <h1 class="text-5xl md:text-6xl font-bold mb-6 bg-gradient-to-r from-brand-red to-brand-purple bg-clip-text text-transparent">About Meridiene</h1>
                       
                        <p class="text-xl text-muted-foreground max-w-3xl mx-auto leading-relaxed">Ready to transform your organization with AI-powered solutions? Let's discuss how Meridiene can navigate your business through the complex modern marketplace.</p>
                    </div>
                    <div class="grid lg:grid-cols-3 gap-8">
                        <div class="lg:col-span-2 animate-scale-in">
                            <div class="rounded-lg text-card-foreground shadow-[0_4px_20px_hsl(var(--brand-red)/0.08)] border border-border/50 bg-card/80 backdrop-blur-sm hover:shadow-[0_8px_30px_hsl(var(--brand-red)/0.12)] transition-all duration-500">
                                <div class="p-8">
                                    <div dir="ltr" data-orientation="horizontal" class="w-full">
                                        <div role="tablist" aria-orientation="horizontal" class="h-10 items-center justify-center text-muted-foreground grid w-full grid-cols-3 mb-8 bg-muted/20 p-1 rounded-lg" tabindex="0" data-orientation="horizontal" style="outline: none;">
                                            <button type="button" role="tab" aria-selected="true" aria-controls="radix-:r0:-content-sales" data-state="active" id="radix-:r0:-trigger-sales" class="inline-flex items-center justify-center whitespace-nowrap rounded-sm px-3 py-1.5 text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 data-[state=active]:bg-background data-[state=active]:bg-gradient-to-r data-[state=active]:from-brand-red data-[state=active]:to-brand-purple data-[state=active]:text-white transition-all duration-300 data-[state=active]:shadow-lg" tabindex="-1" data-orientation="horizontal" data-radix-collection-item="">Sales Inquiry</button>
                                          
                                            
                                        </div>
                                        <div data-state="active" data-orientation="horizontal" role="tabpanel" aria-labelledby="radix-:r0:-trigger-sales" id="radix-:r0:-content-sales" tabindex="0" class="mt-2 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 animate-fade-in" style="animation-duration: 0s;">
                                            <form class="space-y-8" method="POST" id="contactForm"> 
                                                 <!--<form class="space-y-8" method="POST">-->
                                                <div class="grid md:grid-cols-2 gap-4">
                                                    <div class="space-y-2"><label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="firstName">First Name *</label><input class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" name="firstName" id="firstName" placeholder="John" required=""></div>
                                                    <div class="space-y-2"><label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="lastName">Last Name *</label><input class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" name="lastName" id="lastName" placeholder="Doe" required=""></div>
                                                </div>
                                                <div class="grid md:grid-cols-2 gap-4">
                                                    <div class="space-y-2"><label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="email">Business Email *</label><input type="email" name="email" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" id="email" placeholder="john@company.com" required=""></div>
                                                    <div class="space-y-2"><label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="phone">Phone Number</label><input type="tel" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" name="phone" id="phone" placeholder="+1 (555) 123-4567"></div>
                                                </div>
                                                <div class="grid md:grid-cols-2 gap-4">
                                                    <div class="space-y-2"><label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="company">Company Name *</label><input class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" name="company" id="company" placeholder="Your Company" required=""></div>
                                                    <div class="space-y-2">
                                                        <label class="text-sm font-medium leading-none" for="companySize">Company Size</label>
                                                        <select name="companySize" id="companySize" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm text-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2">
                                                          <option value="">Select company size</option>
                                                          <option value="Startup (1-10 employees)">Startup (1-10 employees)</option>
                                                          <option value="Small (11-50 employees)">Small (11-50 employees)</option>
                                                          <option value="Medium (51-200 employees)">Medium (51-200 employees)</option>
                                                          <option value="Large (201-1000 employees)">Large (201-1000 employees)</option>
                                                          <option value="Enterprise (1000+ employees)">Enterprise (1000+ employees)</option>
                                                        </select>
                                                      </div>
                                                      
                                                
                                                </div>
                                                <div class="space-y-2">
                                                    <label for="useCase" class="text-sm font-medium leading-none">Primary Use Case *</label>
                                                    <select name="useCase" id="useCase" required
                                                      class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm text-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2">
                                                      <option value="">What challenges are you looking to solve?</option>
                                                      <option value="Strategic Planning AI Integration">Strategic Planning &amp; AI Integration</option>
                                                      <option value="Operations Optimization">Operations Optimization</option>
                                                      <option value="Digital Transformation">Digital Transformation</option>
                                                      <option value="Predictive Analytics">Predictive Analytics</option>
                                                      <option value="Process Automation">Process Automation</option>
                                                      <option value="Other">Other</option>
                                                    </select>
                                                  </div>
                                                  

                                                <div class="space-y-2"><label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="message">Tell us about your needs *</label><textarea class="flex w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 min-h-[120px]" name="message" id="message" placeholder="Describe your current challenges and what you hope to achieve with Meridiene..." required=""></textarea></div>
                                                <div class="g-recaptcha" data-sitekey="6Lc0NhgqAAAAAIvuDy-iRGY6FLzLWk_zHbtzpRk9"></div>

                                                <button type="submit" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-gradient-to-r from-brand-red to-brand-purple text-white hover:shadow-[0_6px_20px_hsl(var(--brand-red)/0.4)] hover:scale-105 h-11 rounded-md px-8 w-full" type="submit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-send w-4 h-4 mr-2">
                                                        <path d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z"></path>
                                                        <path d="m21.854 2.147-10.94 10.939"></path>
                                                    </svg>
                                                    Request Demo &amp; Consultation
                                                </button>
                                                
                                            </form>
                                            <br>
                                            <div id="responseMsg"></div>
                                        </div>
                                      
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="max-w-4xl mx-auto px-4 py-20">
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
    
        <script>
            $('#contactForm').on('submit', function(e) {
            e.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                type: 'POST',
                url: 'send-mail.php',
                data: formData,
                dataType: 'json', // expecting JSON response
                success: function(response) {
                let $msgBox = $('#responseMsg');

                if (response.status === 'success') {
                    $msgBox.html('<div class="text-green-700 bg-green-50 border border-green-300 p-4 rounded">✅ ' + response.message + '</div>');
                    $('#contactForm')[0].reset();
                    grecaptcha.reset(); // reset reCAPTCHA if needed
                } else if (response.status === 'recaptcha_failed') {
                    $msgBox.html('<div class="text-yellow-700 bg-yellow-50 border border-yellow-300 p-4 rounded">⚠️ ' + response.message + '</div>');
                } else {
                    $msgBox.html('<div class="text-red-700 bg-red-50 border border-red-300 p-4 rounded">❌ ' + response.message + '</div>');
                }
                },
                error: function(xhr, status, error) {
                $('#responseMsg').html('<div class="text-red-700 bg-red-50 border border-red-300 p-4 rounded">❌ Something went wrong: ' + error + '</div>');
                }
            });
            });

        </script>
        
    </body>
</html>