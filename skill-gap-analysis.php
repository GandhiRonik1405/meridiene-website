<!DOCTYPE html>
<html lang="en">
    <?php 
        $pageTitle = 'Skill Gap Analysis'; 
        include('header.php') 
    ?>
    <style>
    .bg-secondary { background-color: hsl(var(--secondary)); }
    </style>    
    <body>
     
        <div id="root">
            <div aria-label="Notifications (F8)" role="region" style="pointer-events: none;" tabindex="-1">
                <ol class="fixed top-0 z-[100] flex max-h-screen w-full flex-col-reverse p-4 sm:bottom-0 sm:right-0 sm:top-auto sm:flex-col md:max-w-[420px]" tabindex="-1">
                </ol>
            </div>
            
             <!-- Header menu start -->
             <?php include('menu.php') ?>
            <!-- Header menu end -->

            <!-- Site animation border start -->
            <div class="fixed inset-0 pointer-events-none overflow-hidden">
                <div class="animate-float absolute top-20 left-10 text-primary/10" style="animation-delay: 0s;">
                    <svg class="lucide lucide-brain h-16 w-16" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
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
                <div class="animate-float absolute top-40 right-20 text-secondary/10" style="animation-delay: 1s;">
                    <svg class="lucide lucide-chart-column h-12 w-12" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 3v16a2 2 0 0 0 2 2h16"></path>
                        <path d="M18 17V9"></path>
                        <path d="M13 17V5"></path>
                        <path d="M8 17v-3"></path>
                    </svg>
                </div>
                <div class="animate-float absolute bottom-40 left-20 text-primary/10" style="animation-delay: 2s;">
                    <svg class="lucide lucide-target h-14 w-14" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12" cy="12" r="10"></circle>
                        <circle cx="12" cy="12" r="6"></circle>
                        <circle cx="12" cy="12" r="2"></circle>
                    </svg>
                </div>
            </div>
            <!-- Site animation border end -->
            <!-- Site content start -->
            <br><br>
            <section class="relative pt-24 pb-16 overflow-hidden">
                <div class="" style="transform: translateY(0px);">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary/5 via-transparent to-secondary/5"></div>
                </div>
                <div class="container mx-auto px-6 relative z-10">
                    <div class="text-center max-w-4xl mx-auto space-y-8">
                        <div class="inline-flex items-center gap-2 bg-primary/10 text-primary px-4 py-2 rounded-full">
                            <svg class="lucide lucide-search h-4 w-4" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11" cy="11" r="8"></circle>
                                <path d="m21 21-4.3-4.3"></path>
                            </svg>
                            <span class="text-sm font-medium">Skill Gap Analysis</span>
                        </div>
                        <h1 class="text-5xl lg:text-6xl font-bold">Identify &amp; Bridge<span class="bg-gradient-primary bg-clip-text text-transparent"> Critical Skills</span></h1>
                        <p class="text-xl text-muted-foreground max-w-3xl mx-auto leading-relaxed">Uncover hidden skill gaps, assess workforce capabilities, and create data-driven strategies to close critical competency shortfalls with precision and confidence.</p>
                        <div class="flex flex-wrap justify-center gap-4">
                          
                            <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-12 rounded-lg px-8 text-base group">
                                <svg class="lucide lucide-play mr-2 h-4 w-4" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                </svg>
                                Watch Demo
                            </button>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-16">
                <div class="container mx-auto px-6">
                    <div class="space-y-8" dir="ltr">
                        <div class="flex items-center justify-between">
                            <div aria-orientation="horizontal" class="h-10 items-center justify-center rounded-md bg-muted p-1 text-muted-foreground grid w-fit grid-cols-3" role="tablist" style="outline: none;" tabindex="0">
                                <button aria-controls="radix-:r0:-content-survey" aria-selected="true" class="tab-button justify-center whitespace-nowrap rounded-sm px-3 py-1.5 text-sm font-medium ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 data-[state=active]:bg-background data-[state=active]:text-foreground data-[state=active]:shadow-sm flex items-center gap-2" id="radix-:r0:-trigger-survey" role="tab" tabindex="-1" type="button">
                                    <svg class="lucide lucide-book-open h-4 w-4" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 7v14"></path>
                                        <path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"></path>
                                    </svg>
                                    Survey
                                </button>
                                <button aria-controls="radix-:r0:-content-insights" aria-selected="false" class="tab-button justify-center whitespace-nowrap rounded-sm px-3 py-1.5 text-sm font-medium ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 data-[state=active]:bg-background data-[state=active]:text-foreground data-[state=active]:shadow-sm flex items-center gap-2" id="radix-:r0:-trigger-insights" role="tab" tabindex="-1" type="button">
                                    <svg class="lucide lucide-brain h-4 w-4" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
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
                                    Insights
                                </button>
                                <button aria-controls="radix-:r0:-content-reports" aria-selected="false" class="tab-button justify-center whitespace-nowrap rounded-sm px-3 py-1.5 text-sm font-medium ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 data-[state=active]:bg-background data-[state=active]:text-foreground data-[state=active]:shadow-sm flex items-center gap-2 custom_video" id="radix-:r0:-trigger-reports" role="tab" tabindex="-1" type="button">
                                    <svg class="lucide lucide-file-text h-4 w-4" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                        <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                        <path d="M10 9H8"></path>
                                        <path d="M16 13H8"></path>
                                        <path d="M16 17H8"></path>
                                    </svg>
                                    Reports
                                </button>
                            
                            </div>
                            
                        </div>
                        <div aria-labelledby="radix-:r0:-trigger-survey" class="mt-2 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 space-y-8" id="radix-:r0:-content-survey" role="tabpanel" style="animation-duration: 0s;" tabindex="0">
                            <div class="grid lg:grid-cols-3 gap-6">
                                <div class="rounded-lg border bg-card text-card-foreground shadow-sm hover-scale">
                                    <div class="flex flex-col space-y-1.5 p-6">
                                        <h3 class="text-2xl font-semibold leading-none tracking-tight flex items-center gap-2">
                                            <svg class="lucide lucide-users h-5 w-5 text-primary" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="9" cy="7" r="4"></circle>
                                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                            </svg>
                                            Survey Responses
                                        </h3>
                                    </div>
                                    <div class="p-6 pt-0">
                                        <div class="text-3xl font-bold text-primary"><span class="animate-count-up" id="count-1247">1,247</span></div>
                                        <p class="text-muted-foreground">92% response rate</p>
                                    </div>
                                </div>
                                <div class="rounded-lg border bg-card text-card-foreground shadow-sm hover-scale">
                                    <div class="flex flex-col space-y-1.5 p-6">
                                        <h3 class="text-2xl font-semibold leading-none tracking-tight flex items-center gap-2">
                                            <svg class="lucide lucide-triangle-alert h-5 w-5 text-yellow-500" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"></path>
                                                <path d="M12 9v4"></path>
                                                <path d="M12 17h.01"></path>
                                            </svg>
                                            Critical Gaps
                                        </h3>
                                    </div>
                                    <div class="p-6 pt-0">
                                        <div class="text-3xl font-bold text-yellow-500"><span class="animate-count-up" id="count-6">6</span></div>
                                        <p class="text-muted-foreground">Require immediate attention</p>
                                    </div>
                                </div>
                                <div class="rounded-lg border bg-card text-card-foreground shadow-sm hover-scale">
                                    <div class="flex flex-col space-y-1.5 p-6">
                                        <h3 class="text-2xl font-semibold leading-none tracking-tight flex items-center gap-2">
                                            <svg class="lucide lucide-dollar-sign h-5 w-5 text-green-500" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <line x1="12" x2="12" y1="2" y2="22"></line>
                                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                            </svg>
                                            Investment Needed
                                        </h3>
                                    </div>
                                    <div class="p-6 pt-0">
                                        <div class="text-3xl font-bold text-green-500">$<span class="animate-count-up" id="count-410">410</span>K</div>
                                        <p class="text-muted-foreground">Estimated training cost</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
                                <div class="flex flex-col space-y-1.5 p-6">
                                    <h3 class="text-2xl font-semibold leading-none tracking-tight">Skills Gap Analysis</h3>
                                    <p class="text-muted-foreground">Current vs Required skill levels across key competencies</p>
                                </div>
                                <div class="p-6 pt-0">
                                    <div class="space-y-6">
                                        <div class="space-y-3">
                                            <div class="flex items-center justify-between">
                                                <h4 class="font-medium">Data Analysis</h4>
                                                <div class="flex items-center gap-4">
                                                    <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary text-primary-foreground hover:bg-primary/80">20% gap</div>
                                                    <span class="text-sm text-muted-foreground">$45,000 training cost</span>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-2 gap-4">
                                                <div>
                                                    <div class="flex justify-between text-sm mb-1"><span>Current Level</span><span>65%</span></div>
                                                    <div aria-valuemax="100" aria-valuemin="0" class="relative w-full overflow-hidden rounded-full bg-secondary h-2" role="progressbar">
                                                        <div class="h-full w-full flex-1 bg-primary transition-all" style="transform: translateX(-35%);"></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="flex justify-between text-sm mb-1"><span>Required Level</span><span>85%</span></div>
                                                    <div aria-valuemax="100" aria-valuemin="0" class="relative w-full overflow-hidden rounded-full bg-secondary h-2 [&amp;&gt;div]:bg-primary" role="progressbar">
                                                        <div class="h-full w-full flex-1 bg-primary transition-all" style="transform: translateX(-15%);"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space-y-3">
                                            <div class="flex items-center justify-between">
                                                <h4 class="font-medium">AI/ML</h4>
                                                <div class="flex items-center gap-4">
                                                    <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-destructive text-destructive-foreground hover:bg-destructive/80">40% gap</div>
                                                    <span class="text-sm text-muted-foreground">$120,000 training cost</span>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-2 gap-4">
                                                <div>
                                                    <div class="flex justify-between text-sm mb-1"><span>Current Level</span><span>35%</span></div>
                                                    <div aria-valuemax="100" aria-valuemin="0" class="relative w-full overflow-hidden rounded-full bg-secondary h-2" role="progressbar">
                                                        <div class="h-full w-full flex-1 bg-primary transition-all" style="transform: translateX(-65%);"></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="flex justify-between text-sm mb-1"><span>Required Level</span><span>75%</span></div>
                                                    <div aria-valuemax="100" aria-valuemin="0" class="relative w-full overflow-hidden rounded-full bg-secondary h-2 [&amp;&gt;div]:bg-primary" role="progressbar">
                                                        <div class="h-full w-full flex-1 bg-primary transition-all" style="transform: translateX(-25%);"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space-y-3">
                                            <div class="flex items-center justify-between">
                                                <h4 class="font-medium">Cloud Computing</h4>
                                                <div class="flex items-center gap-4">
                                                    <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">25% gap</div>
                                                    <span class="text-sm text-muted-foreground">$75,000 training cost</span>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-2 gap-4">
                                                <div>
                                                    <div class="flex justify-between text-sm mb-1"><span>Current Level</span><span>55%</span></div>
                                                    <div aria-valuemax="100" aria-valuemin="0" class="relative w-full overflow-hidden rounded-full bg-secondary h-2" role="progressbar">
                                                        <div class="h-full w-full flex-1 bg-primary transition-all" style="transform: translateX(-45%);"></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="flex justify-between text-sm mb-1"><span>Required Level</span><span>80%</span></div>
                                                    <div aria-valuemax="100" aria-valuemin="0" class="relative w-full overflow-hidden rounded-full bg-secondary h-2 [&amp;&gt;div]:bg-primary" role="progressbar">
                                                        <div class="h-full w-full flex-1 bg-primary transition-all" style="transform: translateX(-20%);"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space-y-3">
                                            <div class="flex items-center justify-between">
                                                <h4 class="font-medium">Cybersecurity</h4>
                                                <div class="flex items-center gap-4">
                                                    <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-destructive text-destructive-foreground hover:bg-destructive/80">45% gap</div>
                                                    <span class="text-sm text-muted-foreground">$95,000 training cost</span>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-2 gap-4">
                                                <div>
                                                    <div class="flex justify-between text-sm mb-1"><span>Current Level</span><span>45%</span></div>
                                                    <div aria-valuemax="100" aria-valuemin="0" class="relative w-full overflow-hidden rounded-full bg-secondary h-2" role="progressbar">
                                                        <div class="h-full w-full flex-1 bg-primary transition-all" style="transform: translateX(-55%);"></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="flex justify-between text-sm mb-1"><span>Required Level</span><span>90%</span></div>
                                                    <div aria-valuemax="100" aria-valuemin="0" class="relative w-full overflow-hidden rounded-full bg-secondary h-2 [&amp;&gt;div]:bg-primary" role="progressbar">
                                                        <div class="h-full w-full flex-1 bg-primary transition-all" style="transform: translateX(-10%);"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space-y-3">
                                            <div class="flex items-center justify-between">
                                                <h4 class="font-medium">Digital Marketing</h4>
                                                <div class="flex items-center gap-4">
                                                    <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary text-primary-foreground hover:bg-primary/80">15% gap</div>
                                                    <span class="text-sm text-muted-foreground">$35,000 training cost</span>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-2 gap-4">
                                                <div>
                                                    <div class="flex justify-between text-sm mb-1"><span>Current Level</span><span>70%</span></div>
                                                    <div aria-valuemax="100" aria-valuemin="0" class="relative w-full overflow-hidden rounded-full bg-secondary h-2" role="progressbar">
                                                        <div class="h-full w-full flex-1 bg-primary transition-all" style="transform: translateX(-30%);"></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="flex justify-between text-sm mb-1"><span>Required Level</span><span>85%</span></div>
                                                    <div aria-valuemax="100" aria-valuemin="0" class="relative w-full overflow-hidden rounded-full bg-secondary h-2 [&amp;&gt;div]:bg-primary" role="progressbar">
                                                        <div class="h-full w-full flex-1 bg-primary transition-all" style="transform: translateX(-15%);"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space-y-3">
                                            <div class="flex items-center justify-between">
                                                <h4 class="font-medium">Project Management</h4>
                                                <div class="flex items-center gap-4">
                                                    <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary text-primary-foreground hover:bg-primary/80">15% gap</div>
                                                    <span class="text-sm text-muted-foreground">$40,000 training cost</span>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-2 gap-4">
                                                <div>
                                                    <div class="flex justify-between text-sm mb-1"><span>Current Level</span><span>75%</span></div>
                                                    <div aria-valuemax="100" aria-valuemin="0" class="relative w-full overflow-hidden rounded-full bg-secondary h-2" role="progressbar">
                                                        <div class="h-full w-full flex-1 bg-primary transition-all" style="transform: translateX(-25%);"></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="flex justify-between text-sm mb-1"><span>Required Level</span><span>90%</span></div>
                                                    <div aria-valuemax="100" aria-valuemin="0" class="relative w-full overflow-hidden rounded-full bg-secondary h-2 [&amp;&gt;div]:bg-primary" role="progressbar">
                                                        <div class="h-full w-full flex-1 bg-primary transition-all" style="transform: translateX(-10%);"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div aria-labelledby="radix-:r0:-trigger-insights" class="mt-2 ring-offset-background focus-visible:outline-none        focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 space-y-8" hidden="" id="radix-:r0:-content-insights" role="tabpanel" tabindex="0">
                            <div class="space-y-8 mt-2">
                                <!-- Skills Distribution Org Chart -->
                                <div class="rounded-lg border bg-card text-card-foreground shadow-sm bg_video_c">
                                    <section class="py-20 bg-secondary/20">
                                        <div class="container mx-auto px-6">
                                            <div class="grid lg:grid-cols-2 gap-16 items-center">
                                                <div>
                                                    <h2 class="text-4xl font-bold mb-6">
                                                        Unlock Deeper Workforce Intelligence
                                                    </h2>
                                                    <p class="text-lg text-muted-foreground mb-8">
                                                        Meridiene’s Activity Analysis Insights give you a powerful lens into how teams operate—highlighting trends, engagement shifts, and workflow inefficiencies in real time. Turn raw activity data into strategic decisions that drive transformation success.
                                                    </p>
                                                    <div class="space-y-6">
                                                        <div class="flex items-start space-x-4">
                                                            <div class="bg-primary/20 rounded-lg p-2">
                                                                <svg class="lucide lucide-zap h-5 w-5 text-primary" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <h3 class="font-semibold mb-2">
                                                                    Behavioral Trend Detection
                                                                </h3>
                                                                <p class="text-muted-foreground">
                                                                    Track how daily activities align with productivity goals and reveal key performance drivers.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="flex items-start space-x-4">
                                                            <div class="bg-primary/20 rounded-lg p-2">
                                                                <svg class="lucide lucide-triangle-alert h-5 w-5 text-primary" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3">
                                                                    </path>
                                                                    <path d="M12 9v4">
                                                                    </path>
                                                                    <path d="M12 17h.01">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <h3 class="font-semibold mb-2">
                                                                    Engagement Pulse Monitoring
                                                                </h3>
                                                                <p class="text-muted-foreground">
                                                                    Continuously measure team engagement levels based on real-time activity signals.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="flex items-start space-x-4">
                                                            <div class="bg-primary/20 rounded-lg p-2">
                                                                <svg class="lucide lucide-target h-5 w-5 text-primary" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
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
                                                                    Workflow Optimization Insights
                                                                </h3>
                                                                <p class="text-muted-foreground">
                                                                    Uncover inefficiencies and recommend smarter workflows to boost team output.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-8 space-y-4">
                                                        <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-gradient-primary text-white hover:shadow-glow hover:scale-[1.02] font-semibold border-0 h-12 rounded-lg px-8 text-base group">
                                                            <svg class="lucide lucide-play mr-2 h-5 w-5 group-hover:scale-110 transition-transform" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                                <polygon points="6 3 20 12 6 21 6 3">
                                                                </polygon>
                                                            </svg>
                                                            Watch Demo Video
                                                            <svg class="lucide lucide-arrow-right ml-2 h-5 w-5 group-hover:translate-x-1 transition-transform" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
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
                                                                <video id="dynamic-video" autoplay muted loop playsinline class="rounded-3xl shadow-glow border border-border/20 transition-all duration-700 group-hover:shadow-hover group-hover:scale-[1.02]" style="width: 642px; height: 361px;">
                                                                    <source id="video-source" src="" data-video-id="skillgapone" type="video/mp4">
                                                                    Your browser does not support the video tag.
                                                                </video>
                                                                 
                                                                </div>
                                                            </div>
                                                            <h3 class="text-xl font-semibold mb-2">
                                                            Know Your Resource Spending, But Better
                                                            </h3>
                                                            <p class="text-muted-foreground">
                                                            Meridiene’s Time and Resource Allocation Survey helps leadership define activities, collect time data directly from teams, and connect that input to real employee costs giving you clear visibility into where time and money are truly going

                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="absolute -top-4 -right-4 bg-background/90 backdrop-blur-sm border border-border rounded-xl p-4 shadow-elegant animate-bounce-gentle">
                                                        <div class="text-sm text-muted-foreground">
                                                            Success Rate
                                                        </div>
                                                        <div class="text-xl font-bold text-green-500">
                                                            <span class="animate-count-up" id="count-94">94%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <!-- Cost Analysis and Timeline Impact -->
                                <div class="grid lg:grid-cols-2 gap-6">
                                    <!-- Cost Analysis Card -->
                                    <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
                                        <div class="flex flex-col space-y-1.5 p-6">
                                            <h3 class="text-2xl font-semibold leading-none tracking-tight flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="lucide lucide-chart-pie h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                                    <path d="M21 12c.552 0 1.005-.449.95-.998a10 10 0 0 0-8.953-8.951c-.55-.055-.998.398-.998.95v8a1 1 0 0 0 1 1z" />
                                                    <path d="M21.21 15.89A10 10 0 1 1 8 2.83" />
                                                </svg>
                                                Cost Analysis
                                            </h3>
                                        </div>
                                        <div class="p-6 pt-0 space-y-4">
                                            <div class="flex justify-between items-center">
                                                <span>Training & Development</span>
                                                <span class="font-semibold">$285K</span>
                                            </div>
                                            <div class="flex justify-between items-center">
                                                <span>External Hiring</span>
                                                <span class="font-semibold">$125K</span>
                                            </div>
                                            <div class="flex justify-between items-center">
                                                <span>Lost Productivity</span>
                                                <span class="font-semibold text-red-500">$180K</span>
                                            </div>
                                            <hr />
                                            <div class="flex justify-between items-center font-bold">
                                                <span>Total Investment</span>
                                                <span>$590K</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Timeline Impact Card -->
                                    <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
                                        <div class="flex flex-col space-y-1.5 p-6">
                                            <h3 class="text-2xl font-semibold leading-none tracking-tight flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="lucide lucide-clock h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                                    <circle cx="12" cy="12" r="10" />
                                                    <polyline points="12 6 12 12 16 14" />
                                                </svg>
                                                Timeline Impact
                                            </h3>
                                        </div>
                                        <div class="p-6 pt-0 space-y-4">
                                            <div class="flex items-center gap-3">
                                                <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                                <span>Immediate Risk: 3 critical gaps</span>
                                            </div>
                                            <div class="flex items-center gap-3">
                                                <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                                                <span>6 months: Medium impact gaps</span>
                                            </div>
                                            <div class="flex items-center gap-3">
                                                <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                                                <span>12 months: Future skill needs</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                        <div aria-labelledby="radix-:r0:-trigger-reports" class="mt-2 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 space-y-8" hidden="" id="radix-:r0:-content-reports" role="tabpanel" tabindex="0">
                            <div class="mt-2 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 space-y-8">
                              
                                <!-- Product Demo Section -->
                                <div class="rounded-lg border bg-card text-card-foreground shadow-sm bg_video_c">
                                    <section class="py-20 bg-secondary/20">
                                        <div class="container mx-auto px-6">
                                            <div class="grid lg:grid-cols-2 gap-16 items-center">
                                                <div>
                                                    <h2 class="text-4xl font-bold mb-6">
                                                        Connect the Dots Between Perception and Performance
                                                    </h2>
                                                    <p class="text-lg text-muted-foreground mb-8">
                                                        Meridiene combines real-time activity data with employee survey insights to give a 360° view of your organization’s health. Spot alignment gaps, measure sentiment against action, and drive smarter transformation strategies.
                                                    </p>
                                                    <div class="space-y-6">
                                                        <div class="flex items-start space-x-4">
                                                            <div class="bg-primary/20 rounded-lg p-2">
                                                                <svg class="lucide lucide-zap h-5 w-5 text-primary" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <h3 class="font-semibold mb-2">
                                                                    Sentiment-Behavior Correlation
                                                                </h3>
                                                                <p class="text-muted-foreground">
                                                                    Cross-analyze survey responses with activity trends to uncover where perceptions and behaviors diverge.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="flex items-start space-x-4">
                                                            <div class="bg-primary/20 rounded-lg p-2">
                                                                <svg class="lucide lucide-triangle-alert h-5 w-5 text-primary" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3">
                                                                    </path>
                                                                    <path d="M12 9v4">
                                                                    </path>
                                                                    <path d="M12 17h.01">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <h3 class="font-semibold mb-2">
                                                                    Pulse Survey Integration
                                                                </h3>
                                                                <p class="text-muted-foreground">
                                                                    Layer in quick, targeted surveys to gather real-time feedback and compare it with live operational data.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="flex items-start space-x-4">
                                                            <div class="bg-primary/20 rounded-lg p-2">
                                                                <svg class="lucide lucide-target h-5 w-5 text-primary" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
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
                                                                    Dynamic Insight Reports
                                                                </h3>
                                                                <p class="text-muted-foreground">
                                                                    Generate comprehensive reports that blend qualitative and quantitative insights—ready for leadership action.

                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-8 space-y-4">
                                                        <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-gradient-primary text-white hover:shadow-glow hover:scale-[1.02] font-semibold border-0 h-12 rounded-lg px-8 text-base group">
                                                            <svg class="lucide lucide-play mr-2 h-5 w-5 group-hover:scale-110 transition-transform" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                                <polygon points="6 3 20 12 6 21 6 3">
                                                                </polygon>
                                                            </svg>
                                                            Watch Demo Video
                                                            <svg class="lucide lucide-arrow-right ml-2 h-5 w-5 group-hover:translate-x-1 transition-transform" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5 12h14">
                                                                </path>
                                                                <path d="m12 5 7 7-7 7">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                      
                                                    </div>
                                                </div>
                                                <div class="relative group w-fit cursor-pointer video-trigger_2" id="video-trigger" >
                                                    <img src="assets/images/download.jpeg" alt="Video Thumbnail" class="rounded-3xl shadow-glow border border-border/20 transition-all duration-500 group-hover:shadow-hover group-hover:scale-[1.02]" style="width: 642px; height: 361px; object-fit: cover;" />

                                                    <!-- Play Button Overlay -->
                                                    <div class="absolute inset-0 flex items-center justify-center">
                                                        <button class="bg-white bg-opacity-80 hover:bg-opacity-100 rounded-full p-4 shadow-md transition hp-open-modal-button">▶️</button>
                                                    </div>
                                                </div>
                                                <div class="relative video-container_2" id="video-container" class="relative animate-scale-in" style="display: none;">
                                                <div class="rounded-lg border bg-card text-card-foreground shadow-sm bg-gradient-to-br from-card to-card/50 shadow-glow">
                                                        <div class="p-8">
                                                            <div class="aspect-video bg-muted rounded-lg flex items-center justify-center mb-6">
                                                                <div class="text-center v_custom_2">
                                                                    <video id="dynamic-video" autoplay muted loop playsinline class="rounded-3xl shadow-glow border border-border/20 transition-all duration-700 group-hover:shadow-hover group-hover:scale-[1.02]" style="width: 642px; height: 361px;">
                                                                    <source id="video-source" src="" data-video-id="skillgaptwo" type="video/mp4">
                                                                    Your browser does not support the video tag.
                                                                </video>
                                                                 
                                                                </div>
                                                            </div>
                                                            <h3 class="text-xl font-semibold mb-2">
                                                            Structure Your Effort
                                                            </h3>
                                                            <p class="text-muted-foreground">
                                                            Meridiene transforms survey data into a visual activity map of your organization highlighting time gaps, resource overlaps, and inefficiencies. It helps leaders realign effort with strategy, all from a single, centralized workspace.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="absolute -top-4 -right-4 bg-background/90 backdrop-blur-sm border border-border rounded-xl p-4 shadow-elegant animate-bounce-gentle">
                                                        <div class="text-sm text-muted-foreground">
                                                            Success Rate
                                                        </div>
                                                        <div class="text-xl font-bold text-green-500">
                                                            <span class="animate-count-up" id="count-94">94%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                 
                                </div>
                                <div class="grid lg:grid-cols-2 gap-6">
                                    <!-- Executive Summary Card -->
                                    <div class="rounded-lg border bg-card text-card-foreground shadow-sm hover-scale">
                                        <div class="flex flex-col space-y-1.5 p-6">
                                            <h3 class="text-2xl font-semibold leading-none tracking-tight">Executive Summary</h3>
                                            <p class="text-muted-foreground">High-level overview for leadership</p>
                                        </div>
                                        <div class="p-6 pt-0">
                                            <div class="space-y-4">
                                                <div class="flex items-center justify-between">
                                                    <span>Overall Skill Readiness</span>
                                                    <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">68%</div>
                                                </div>
                                                <div class="relative h-4 w-full overflow-hidden rounded-full bg-secondary">
                                                    <div class="h-full w-full flex-1 bg-primary transition-all" style="transform: translateX(-32%);"></div>
                                                </div>
                                              
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Detailed Analysis Card -->
                                    <div class="rounded-lg border bg-card text-card-foreground shadow-sm hover-scale">
                                        <div class="flex flex-col space-y-1.5 p-6">
                                            <h3 class="text-2xl font-semibold leading-none tracking-tight">Detailed Analysis</h3>
                                            <p class="text-muted-foreground">Comprehensive skills breakdown</p>
                                        </div>
                                        <div class="p-6 pt-0">
                                            <div class="space-y-4">
                                                <div class="flex items-center justify-between">
                                                    <span>Skills Assessed</span>
                                                    <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors border-transparent bg-primary text-primary-foreground hover:bg-primary/80">47 categories</div>
                                                </div>
                                                <div class="relative h-4 w-full overflow-hidden rounded-full bg-secondary">
                                                    <div class="h-full w-full flex-1 bg-primary transition-all" style="transform: translateX(0%);"></div>
                                                </div>
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </section>
           
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
                        <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-secondary text-secondary-foreground hover:bg-secondary/80 h-14 rounded-lg group hover:scale-110 hover:shadow-hover transition-all duration-500 text-lg px-12 py-6 animate-bounce-gentle relative overflow-hidden hp-open-modal-button">
                            <div class="absolute inset-0 bg-gradient-primary opacity-0 group-hover:opacity-10 transition-opacity duration-500">
                            </div>
                            <svg class="lucide lucide-eye mr-3 h-6 w-6 group-hover:rotate-12 transition-transform duration-300" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                </path>
                                <circle cx="12" cy="12" r="3">
                                </circle>
                            </svg>
                            <span class="relative z-10">
                            Navigate Your AI Journey
                            </span>
                            <svg class="lucide lucide-arrow-right ml-3 h-6 w-6 group-hover:translate-x-2 transition-transform duration-300" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
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
            <!-- Site content end -->
        </div>

           <!-- Footer start -->
           <?php include('footer.php') ?>
         <!-- Footer end -->

        <script>
            
            // ✅ Tab functionality using `data-tab` and `data-state`
            const tabButtons = document.querySelectorAll('.tab-button');
            const dataTabPanels = document.querySelectorAll('.tab-panel');
            
            tabButtons.forEach(btn => {
            btn.addEventListener('click', () => {
            // Remove active state from all buttons
            tabButtons.forEach(b => b.removeAttribute('data-state'));
            dataTabPanels.forEach(p => p.classList.add('hidden'));
            
            // Activate clicked tab
            btn.setAttribute('data-state', 'active');
            const tab = btn.getAttribute('data-tab');
            const panel = document.querySelector(`.tab-panel[data-tab="${tab}"]`);
            if (panel) panel.classList.remove('hidden');
            });
            });
            
            // ✅ Automatically activate the first tab by default
            if (tabButtons.length > 0) {
            tabButtons[0].click();
            }
            
        </script>
    </body>
</html>