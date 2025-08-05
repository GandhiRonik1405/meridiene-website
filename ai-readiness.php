<!DOCTYPE html>
<html lang="en">
    <?php 
        $pageTitle = 'AI Readiness Assessment'; 
        include('header.php') 
    ?>
    <link rel="stylesheet" href="assets/css/ai-readiness.css" />
    <body>
        <div id="root">
        <div role="region" aria-label="Notifications (F8)" tabindex="-1" style="pointer-events: none;">
            <ol tabindex="-1" class="fixed top-0 z-[100] flex max-h-screen w-full flex-col-reverse p-4 sm:bottom-0 sm:right-0 sm:top-auto sm:flex-col md:max-w-[420px]"></ol>
        </div>
      
          <!-- Header menu start -->
          <?php include('menu.php') ?>
         <!-- Header menu end -->

        <!-- Site content start -->
        <br><br><br>
        <div class="min-h-screen bg-background">
            <div class="container mx-auto px-6 py-8">
                <div class="mb-8">
                    <h1 class="text-4xl font-bold bg-gradient-to-r from-brand-red to-brand-purple bg-clip-text text-transparent mb-4">AI Readiness Assessment</h1>
                    <p class="text-lg text-muted-foreground">Analyze market trends, skill gaps, and AI impact across your organization</p>
                </div>
                <div class="mb-12">
                    <h2 class="text-3xl font-bold mb-6">See Your AI Transformation in Action</h2>
                    <p class="text-lg text-muted-foreground mb-8 max-w-3xl">Watch how Meridiene's AI models analyze organizational readiness in real-time, providing predictive insights and impact assessments to ensure successful AI transformations.</p>
                    <div class="grid md:grid-cols-3 gap-6 mb-8">
                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-lg bg-brand-red/10 flex items-center justify-center flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-brain h-4 w-4 text-brand-red">
                                    <path d="M12 5a3 3 0 1 0-5.997.125 4 4 0 0 0-2.526 5.77 4 4 0 0 0 .556 6.588A4 4 0 1 0 12 18Z"></path>
                                    <path d="M12 5a3 3 0 1 1 5.997.125 4 4 0 0 1 2.526 5.77 4 4 0 0 1-.556 6.588A4 4 0 1 1 12 18Z"></path>
                                    <path d="M15 13a4.5 4.5 0 0 1-3-4 4.5 4.5 0 0 1-3 4"></path>
                                    <path d="M17.599 6.5a3 3 0 0 0 .399-1.375"></path>
                                    <path d="M6.003 5.125A3 3 0 0 0 6.401 6.5"></path>
                                    <path d="M3.477 10.896a4 4 0 0 1 .585-.396"></path>
                                    <path d="M19.938 10.5a4 4 0 0 1 .585.396"></path>
                                    <path d="M6 18a4 4 0 0 1-1.967-.516"></path>
                                    <path d="M19.967 17.484A4 4 0 0 1 18 18"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold mb-2">Real-Time Skills Analysis</h3>
                                <p class="text-sm text-muted-foreground">Visualize how organizational skill gaps compare to market standards and AI requirements</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-lg bg-brand-purple/10 flex items-center justify-center flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up h-4 w-4 text-brand-purple">
                                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                    <polyline points="16 7 22 7 22 13"></polyline>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold mb-2">AI Impact Forecasting</h3>
                                <p class="text-sm text-muted-foreground">Identify potential challenges and opportunities before they occur with predictive modeling</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-lg bg-green-500/10 flex items-center justify-center flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-target h-4 w-4 text-green-600">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <circle cx="12" cy="12" r="6"></circle>
                                    <circle cx="12" cy="12" r="2"></circle>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold mb-2">Success Probability Scoring</h3>
                                <p class="text-sm text-muted-foreground">Get AI-driven confidence scores for transformation scenarios and tool adoption outcomes</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-12">
                    <section class="py-20 bg-secondary/20">
                        <div class="grid lg:grid-cols-2 gap-16 items-center">
                            <div>
                                <h2 class="text-4xl font-bold mb-6">
                                    Transform Your Workforce Planning Process
                                </h2>
                                <p class="text-lg text-muted-foreground mb-8">
                                    Stop working with outdated spreadsheets. Start making data-driven workforce decisions with real-time insights and predictive analytics.
                                </p>
                                <div class="space-y-6">
                                    <div class="flex items-start space-x-4">
                                        <div class="bg-primary/20 rounded-lg p-2">
                                            <svg class="lucide lucide-calculator h-5 w-5 text-primary" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <rect height="20" rx="2" width="16" x="4" y="2">
                                                </rect>
                                                <line x1="8" x2="16" y1="6" y2="6">
                                                </line>
                                                <line x1="16" x2="16" y1="14" y2="18">
                                                </line>
                                                <path d="M16 10h.01">
                                                </path>
                                                <path d="M12 10h.01">
                                                </path>
                                                <path d="M8 10h.01">
                                                </path>
                                                <path d="M12 14h.01">
                                                </path>
                                                <path d="M8 14h.01">
                                                </path>
                                                <path d="M12 18h.01">
                                                </path>
                                                <path d="M8 18h.01">
                                                </path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">
                                                Assumption Management
                                            </h3>
                                            <p class="text-muted-foreground">
                                                Centralize all cost, demand, and supply assumptions in one intelligent platform
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start space-x-4">
                                        <div class="bg-primary/20 rounded-lg p-2">
                                            <svg class="lucide lucide-database h-5 w-5 text-primary" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="12" cy="5" rx="9" ry="3">
                                                </ellipse>
                                                <path d="M3 5V19A9 3 0 0 0 21 19V5">
                                                </path>
                                                <path d="M3 12A9 3 0 0 0 21 12">
                                                </path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">
                                                Real Data Integration
                                            </h3>
                                            <p class="text-muted-foreground">
                                                Automatically sync with HR systems to ensure accuracy and eliminate manual work
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start space-x-4">
                                        <div class="bg-primary/20 rounded-lg p-2">
                                            <svg class="lucide lucide-target h-5 w-5 text-primary" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="12" cy="12" r="10">
                                                </circle>
                                                <circle cx="12" cy="12" r="6">
                                                </circle>
                                                <circle cx="12" cy="12" r="2">
                                                </circle>
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-2">
                                                Gap Identification
                                            </h3>
                                            <p class="text-muted-foreground">
                                                Instantly see where you have workforce gaps and what it will cost to fill them
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-8 space-y-4">
                                    <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-gradient-primary text-white hover:shadow-glow hover:scale-[1.02] font-semibold border-0 h-12 rounded-lg px-8 text-base group hp-open-modal-button">
                                        <svg class="lucide lucide-play mr-2 h-5 w-5 group-hover:scale-110 transition-transform" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <polygon points="6 3 20 12 6 21 6 3">
                                            </polygon>
                                        </svg>
                                        See SWP Module Demo
                                        <svg class="lucide lucide-arrow-right ml-2 h-5 w-5 group-hover:translate-x-1 transition-transform" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5 12h14">
                                            </path>
                                            <path d="m12 5 7 7-7 7">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="relative group w-fit cursor-pointer" id="video-trigger" >
                                <img src="assets/images/download.jpeg" alt="Video Thumbnail" class="rounded-3xl shadow-glow border border-border/20 transition-all duration-500 group-hover:shadow-hover group-hover:scale-[1.02]" style="width: 642px; height: 361px; object-fit: cover;" />

                                <!-- Play Button Overlay -->
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <button class="bg-white bg-opacity-80 hover:bg-opacity-100 rounded-full p-4 shadow-md transition hp-open-modal-button">▶️</button>
                                </div>
                            </div>

                         <div class="relative" id="video-container" class="relative animate-scale-in" style="display: none;">
                                <div class="rounded-lg border bg-card text-card-foreground shadow-sm bg-gradient-to-br from-card to-card/50 shadow-glow">
                                    <div class="p-8">
                                        <div class="aspect-video bg-muted rounded-lg flex items-center justify-center mb-6">
                                            <div class="text-center">
                                                <video id="dynamic-video"  autoplay="" muted="" loop="" playsinline="" class="rounded-3xl shadow-glow border border-border/20 transition-all duration-700 group-hover:shadow-hover group-hover:scale-[1.02]" style="width: 642px; height: 361px;">
                                                <source id="video-source" src="" data-video-id="aireadiness" type="video/mp4">
                                                Your browser does not support the video tag.
                                                </video>
                                            </div>
                                        </div>
                                        <h3 class="text-xl font-semibold mb-2">
                                        There is an AI for THIS?
                                        </h3>
                                        <p class="text-muted-foreground">
                                        Revealed!! how Meridiene analyzes your org structure to show automation potential by role, compares employee readiness with market standards, and uncovers the exact AI tools reshaping the future of work, task by task.
                                        </p>
                                    </div>
                                </div>
                                <div class="absolute -top-4 -right-4 bg-background/90 backdrop-blur-sm border border-border rounded-xl p-4 shadow-elegant animate-bounce-gentle">
                                    <div class="text-sm text-muted-foreground">
                                        Hassel decreased
                                    </div>
                                    <div class="text-xl font-bold text-secondary">
                                        <span class="s-count-up" id="count-87">
                                        70%
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div dir="ltr" data-orientation="horizontal" class="space-y-6">
                    <div role="tablist" class="grid grid-cols-4 gap-2 bg-gray-100 p-1 rounded-md" id="tablist">
                        <button class="tab-btn px-3 py-2 rounded text-sm font-medium bg-white text-black shadow" data-target="tab1">Interactive Org Chart</button>
                        <button class="tab-btn px-3 py-2 rounded text-sm font-medium text-gray-500" data-target="tab2">Market Trends</button>
                        <button class="tab-btn px-3 py-2 rounded text-sm font-medium text-gray-500" data-target="tab3">AI Tool Recommendations</button>
                        <button class="tab-btn px-3 py-2 rounded text-sm font-medium text-gray-500" data-target="tab4">Organizational Reports</button>
                      </div>
                      
                      <div class="mt-4">
                        <div id="tab1" class="tab-content">
                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
                                <div class="flex flex-col space-y-1.5 p-6">
                                    <h3 class="text-2xl font-semibold leading-none tracking-tight flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users h-5 w-5">
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="9" cy="7" r="4"></circle>
                                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                        </svg>
                                        Interactive Organization Chart
                                    </h3>
                                    <p class="text-sm text-muted-foreground">Click on any role to see AI impact analysis and skill comparison</p>
                                </div>
                                <div class="p-6 pt-0">
                                    <div class="grid grid-cols-3 gap-4 mb-6">
                                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm cursor-pointer transition-all hover:shadow-lg">
                                            <div class="p-4">
                                                <div class="flex items-center justify-between mb-2">
                                                    <h3 class="font-semibold">Data Analyst</h3>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up h-4 w-4 text-green-500">
                                                        <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                                        <polyline points="16 7 22 7 22 13"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="space-y-2">
                                                    <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground">L3</div>
                                                    <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-destructive text-destructive-foreground hover:bg-destructive/80">AI Impact: High</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm cursor-pointer transition-all hover:shadow-lg">
                                            <div class="p-4">
                                                <div class="flex items-center justify-between mb-2">
                                                    <h3 class="font-semibold">Project Manager</h3>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chart-column h-4 w-4 text-yellow-500">
                                                        <path d="M3 3v16a2 2 0 0 0 2 2h16"></path>
                                                        <path d="M18 17V9"></path>
                                                        <path d="M13 17V5"></path>
                                                        <path d="M8 17v-3"></path>
                                                    </svg>
                                                </div>
                                                <div class="space-y-2">
                                                    <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground">L4</div>
                                                    <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">AI Impact: Medium</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm cursor-pointer transition-all hover:shadow-lg">
                                            <div class="p-4">
                                                <div class="flex items-center justify-between mb-2">
                                                    <h3 class="font-semibold">Software Engineer</h3>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up h-4 w-4 text-green-500">
                                                        <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                                        <polyline points="16 7 22 7 22 13"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="space-y-2">
                                                    <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground">L3</div>
                                                    <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-destructive text-destructive-foreground hover:bg-destructive/80">AI Impact: Very High</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm cursor-pointer transition-all hover:shadow-lg">
                                            <div class="p-4">
                                                <div class="flex items-center justify-between mb-2">
                                                    <h3 class="font-semibold">HR Specialist</h3>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-down h-4 w-4 text-red-500">
                                                        <polyline points="22 17 13.5 8.5 8.5 13.5 2 7"></polyline>
                                                        <polyline points="16 17 22 17 22 11"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="space-y-2">
                                                    <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground">L2</div>
                                                    <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">AI Impact: Medium</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm cursor-pointer transition-all hover:shadow-lg">
                                            <div class="p-4">
                                                <div class="flex items-center justify-between mb-2">
                                                    <h3 class="font-semibold">Marketing Manager</h3>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up h-4 w-4 text-green-500">
                                                        <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                                        <polyline points="16 7 22 7 22 13"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="space-y-2">
                                                    <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground">L4</div>
                                                    <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-destructive text-destructive-foreground hover:bg-destructive/80">AI Impact: High</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab2" class="tab-content hidden">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
                                    <div class="flex flex-col space-y-1.5 p-6">
                                        <h3 class="text-2xl font-semibold leading-none tracking-tight flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up h-5 w-5">
                                                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                                <polyline points="16 7 22 7 22 13"></polyline>
                                            </svg>
                                            Growing Job Roles
                                        </h3>
                                    </div>
                                    <div class="p-6 pt-0">
                                        <div class="space-y-3">
                                            <div class="flex justify-between items-center">
                                                <span>AI Specialist</span>
                                                <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 bg-green-100 text-green-700">+45%</div>
                                            </div>
                                            <div class="flex justify-between items-center">
                                                <span>Data Scientist</span>
                                                <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 bg-green-100 text-green-700">+32%</div>
                                            </div>
                                            <div class="flex justify-between items-center">
                                                <span>AI Product Manager</span>
                                                <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 bg-green-100 text-green-700">+28%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
                                    <div class="flex flex-col space-y-1.5 p-6">
                                        <h3 class="text-2xl font-semibold leading-none tracking-tight flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-down h-5 w-5">
                                                <polyline points="22 17 13.5 8.5 8.5 13.5 2 7"></polyline>
                                                <polyline points="16 17 22 17 22 11"></polyline>
                                            </svg>
                                            At-Risk Job Roles
                                        </h3>
                                    </div>
                                    <div class="p-6 pt-0">
                                        <div class="space-y-3">
                                            <div class="flex justify-between items-center">
                                                <span>Data Entry Clerk</span>
                                                <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-destructive text-destructive-foreground hover:bg-destructive/80">-65%</div>
                                            </div>
                                            <div class="flex justify-between items-center">
                                                <span>Basic Analyst</span>
                                                <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-destructive text-destructive-foreground hover:bg-destructive/80">-45%</div>
                                            </div>
                                            <div class="flex justify-between items-center">
                                                <span>Manual Tester</span>
                                                <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-destructive text-destructive-foreground hover:bg-destructive/80">-35%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div id="tab3" class="tab-content hidden">
                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
                                <div class="flex flex-col space-y-1.5 p-6">
                                    <h3 class="text-2xl font-semibold leading-none tracking-tight flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-brain h-5 w-5">
                                            <path d="M12 5a3 3 0 1 0-5.997.125 4 4 0 0 0-2.526 5.77 4 4 0 0 0 .556 6.588A4 4 0 1 0 12 18Z"></path>
                                            <path d="M12 5a3 3 0 1 1 5.997.125 4 4 0 0 1 2.526 5.77 4 4 0 0 1-.556 6.588A4 4 0 1 1 12 18Z"></path>
                                            <path d="M15 13a4.5 4.5 0 0 1-3-4 4.5 4.5 0 0 1-3 4"></path>
                                            <path d="M17.599 6.5a3 3 0 0 0 .399-1.375"></path>
                                            <path d="M6.003 5.125A3 3 0 0 0 6.401 6.5"></path>
                                            <path d="M3.477 10.896a4 4 0 0 1 .585-.396"></path>
                                            <path d="M19.938 10.5a4 4 0 0 1 .585.396"></path>
                                            <path d="M6 18a4 4 0 0 1-1.967-.516"></path>
                                            <path d="M19.967 17.484A4 4 0 0 1 18 18"></path>
                                        </svg>
                                        Recommended AI Tools for Your Organization
                                    </h3>
                                    <p class="text-sm text-muted-foreground">Curated AI tools based on your team composition and needs</p>
                                </div>
                                <div class="p-6 pt-0">
                                    <div class="grid gap-4">
                                        <div class="flex items-center justify-between p-4 border rounded-lg">
                                            <div>
                                                <h3 class="font-semibold">GitHub Copilot</h3>
                                                <p class="text-sm text-muted-foreground">Development</p>
                                            </div>
                                            <div class="flex items-center gap-3">
                                                <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary text-primary-foreground hover:bg-primary/80">High Priority</div>
                                                <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3">Learn More</button>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-between p-4 border rounded-lg">
                                            <div>
                                                <h3 class="font-semibold">ChatGPT Enterprise</h3>
                                                <p class="text-sm text-muted-foreground">General</p>
                                            </div>
                                            <div class="flex items-center gap-3">
                                                <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary text-primary-foreground hover:bg-primary/80">High Priority</div>
                                                <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3">Learn More</button>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-between p-4 border rounded-lg">
                                            <div>
                                                <h3 class="font-semibold">Tableau AI</h3>
                                                <p class="text-sm text-muted-foreground">Analytics</p>
                                            </div>
                                            <div class="flex items-center gap-3">
                                                <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">Medium Priority</div>
                                                <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3">Learn More</button>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-between p-4 border rounded-lg">
                                            <div>
                                                <h3 class="font-semibold">Salesforce Einstein</h3>
                                                <p class="text-sm text-muted-foreground">CRM</p>
                                            </div>
                                            <div class="flex items-center gap-3">
                                                <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">Medium Priority</div>
                                                <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3">Learn More</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab4" class="tab-content hidden">
                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
                                <div class="flex flex-col space-y-1.5 p-6">
                                    <h3 class="text-2xl font-semibold leading-none tracking-tight flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-target h-5 w-5">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <circle cx="12" cy="12" r="6"></circle>
                                            <circle cx="12" cy="12" r="2"></circle>
                                        </svg>
                                        Organizational AI Readiness Report
                                    </h3>
                                    <p class="text-sm text-muted-foreground">Key metrics and insights for strategic decision making</p>
                                </div>
                                <div class="p-6 pt-0">
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-6">
                                        <div class="text-center">
                                            <div class="text-2xl font-bold text-brand-red mb-1">72</div>
                                            <div class="text-sm text-muted-foreground mb-1">AI Readiness Score</div>
                                            <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground text-xs">+8%</div>
                                        </div>
                                        <div class="text-center">
                                            <div class="text-2xl font-bold text-brand-red mb-1">23</div>
                                            <div class="text-sm text-muted-foreground mb-1">Roles at Risk</div>
                                            <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground text-xs">-5%</div>
                                        </div>
                                        <div class="text-center">
                                            <div class="text-2xl font-bold text-brand-red mb-1">156</div>
                                            <div class="text-sm text-muted-foreground mb-1">Training Required</div>
                                            <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground text-xs">+12%</div>
                                        </div>
                                        <div class="text-center">
                                            <div class="text-2xl font-bold text-brand-red mb-1">45</div>
                                            <div class="text-sm text-muted-foreground mb-1">Tool Adoption Rate</div>
                                            <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground text-xs">+15%</div>
                                        </div>
                                    </div>
                                    <div class="space-y-4">
                                        <div>
                                            <h4 class="font-semibold mb-2">Key Recommendations</h4>
                                            <ul class="space-y-2 text-sm">
                                                <li>• Prioritize AI training for high-impact roles (Data Analysts, Software Engineers)</li>
                                                <li>• Implement GitHub Copilot for development teams within Q2</li>
                                                <li>• Create AI governance framework for responsible adoption</li>
                                                <li>• Establish centers of excellence for AI tool evaluation</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>                    
                </div>
            </div>
            <!-- Site content end -->
            <section class="py-20 bg-gradient-primary text-white relative overflow-hidden">
                <div class="absolute inset-0" style="transform: translateY(0px);">
                    <div class="w-full h-full bg-gradient-glow opacity-20">
                    </div>
                </div>
                <div class="container mx-auto px-6 text-center relative z-10">
                    <h2 class="text-5xl lg:text-6xl font-bold mb-8 animate-fade-in">
                        Ready to Chart Your Course to a Future-Ready Organization?
                    </h2>
                    <p class="text-xl lg:text-2xl mb-12 opacity-90 max-w-4xl mx-auto leading-relaxed animate-slide-up">
                        See exactly how Meridiene's AI can solve your specific workforce challenges. Book a personalized demo with one of our strategists today.
                    </p>
                    <div class="space-y-6">
                        <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-secondary text-secondary-foreground hover:bg-secondary/80 h-14 rounded-lg group hover:scale-110 hover:shadow-hover transition-all duration-500 text-lg px-12 py-6 animate-bounce-gentle relative overflow-hidden add_bg_color_c hp-open-modal-button add_c_color">
                            <div class="absolute inset-0 bg-gradient-primary opacity-0 group-hover:opacity-10 transition-opacity duration-500">
                            </div>
                            <svg class="lucide lucide-eye mr-3 h-6 w-6 group-hover:rotate-12 transition-transform duration-300" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                </path>
                                <circle cx="12" cy="12" r="3">
                                </circle>
                            </svg>
                            <span class="relative z-10">
                            Navigate Your AI Journey
                            </span>
                            <svg class="lucide lucide-arrow-right ml-3 h-6 w-6 group-hover:translate-x-2 transition-transform duration-300" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 12h14">
                                </path>
                                <path d="m12 5 7 7-7 7">
                                </path>
                            </svg>
                        </button>
                        <p class="text-sm opacity-80 animate-slide-in-right">
                            In just 30 minutes, you'll see a tailored demonstration of how Meridiene can provide immediate value. Limited strategic consultation slots are available each month.
                        </p>
                    </div>
                </div>
            </section>
        </div>

        <!-- Footer start -->
        <?php include('footer.php') ?>
        <!-- Footer end -->

        <script>
            /* ✅ Tab System for Platform Sidebar */
            const buttons = document.querySelectorAll(".sidebar button");
            const mainPanel = document.getElementById("main-panel");
            
            // Define tab content
            const tabContent = {
              analytics: `
                <h3>Real-time Organizational Insights</h3>
                <div class="score-box">
                  <div style="text-align: right; font-size: 0.9rem; color: #00c896;">
                    <i class="fas fa-arrow-up"></i> +12% this quarter
                  </div>
                  <h1>87%</h1>
                  <div>Collaboration Score</div>
                </div>
                <div class="metrics">
                  <div class="metric"><strong>156</strong> Active Projects</div>
                  <div class="metric"><strong>92%</strong> Employee Engagement</div>
                </div>
              `,
              org: `
                <h3>Organizational Structure Overview</h3>
                <div class="score-box">
                  <h1>12</h1>
                  <div>Departments Mapped</div>
                </div>
                <div class="metrics">
                  <div class="metric"><strong>68</strong> Teams</div>
                  <div class="metric"><strong>200+</strong> Employees Listed</div>
                </div>
              `,
              people: `
                <h3>People Analytics</h3>
                <div class="score-box">
                  <h1>74%</h1>
                  <div>Retention Rate</div>
                </div>
                <div class="metrics">
                  <div class="metric"><strong>32</strong> Promotions</div>
                  <div class="metric"><strong>14</strong> Exits</div>
                </div>
              `,
              scenarios: `
                <h3>Scenario Planning</h3>
                <div class="score-box">
                  <h1>5</h1>
                  <div>Simulated Outcomes</div>
                </div>
                <div class="metrics">
                  <div class="metric"><strong>3</strong> Hiring Freeze</div>
                  <div class="metric"><strong>2</strong> Expansion Models</div>
                </div>
              `
            };
            
            // Handle tab click
            buttons.forEach(btn => {
              btn.addEventListener("click", () => {
                // Remove active class from all buttons
                buttons.forEach(b => b.classList.remove("active"));
            
                // Add active class to clicked button
                btn.classList.add("active");
            
                // Load corresponding tab content
                const tabKey = btn.getAttribute("data-tab");
                mainPanel.innerHTML = tabContent[tabKey] || "<p>No content</p>";
              });
            });
            
            const tabs = document.querySelectorAll('.tab-btn');
            const contents = document.querySelectorAll('.tab-content');

            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                // remove active styles
                tabs.forEach(t => t.classList.remove('bg-white', 'text-black', 'shadow'));
                tab.classList.add('bg-white', 'text-black', 'shadow');

                // hide all content
                contents.forEach(c => c.classList.add('hidden'));

                // show current
                const targetId = tab.getAttribute('data-target');
                document.getElementById(targetId).classList.remove('hidden');
                });
            });
        </script>
    </body>
</html>