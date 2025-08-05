<!DOCTYPE html>
<html lang="en">
<?php 
    $pageTitle = 'Pricing'; 
    include('header.php') 
?>
    <link rel="stylesheet" href="assets/css/organizational-tr.css" />
    <style>
        .bg-secondary { background-color: hsl(var(--secondary)); }
    </style>
    <body>
        <div id="root">
            <!-- Header menu start -->
            <?php include('menu.php') ?>
            <!-- Header menu end -->

            <!-- Site animation border start -->
            <div class="fixed inset-0 pointer-events-none overflow-hidden">
                <div class="animate-float absolute top-20 left-10 text-primary/10" style="animation-delay: 0s;">
                    <svg class="lucide lucide-circuit-board h-16 w-16" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                        <rect height="18" rx="2" width="18" x="3" y="3">
                        </rect>
                        <path d="M11 9h4a2 2 0 0 0 2-2V3">
                        </path>
                        <circle cx="9" cy="9" r="2">
                        </circle>
                        <path d="M7 21v-4a2 2 0 0 1 2-2h4">
                        </path>
                        <circle cx="15" cy="15" r="2">
                        </circle>
                    </svg>
                </div>
                <div class="animate-float absolute top-40 right-20 text-secondary/10" style="animation-delay: 1s;">
                    <svg class="lucide lucide-network h-12 w-12" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                        <rect height="6" rx="1" width="6" x="16" y="16">
                        </rect>
                        <rect height="6" rx="1" width="6" x="2" y="16">
                        </rect>
                        <rect height="6" rx="1" width="6" x="9" y="2">
                        </rect>
                        <path d="M5 16v-3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3">
                        </path>
                        <path d="M12 12V8">
                        </path>
                    </svg>
                </div>
                <div class="animate-float absolute bottom-40 left-20 text-primary/10" style="animation-delay: 2s;">
                    <svg class="lucide lucide-brain h-14 w-14" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 5a3 3 0 1 0-5.997.125 4 4 0 0 0-2.526 5.77 4 4 0 0 0 .556 6.588A4 4 0 1 0 12 18Z">
                        </path>
                        <path d="M12 5a3 3 0 1 1 5.997.125 4 4 0 0 1 2.526 5.77 4 4 0 0 1-.556 6.588A4 4 0 1 1 12 18Z">
                        </path>
                        <path d="M15 13a4.5 4.5 0 0 1-3-4 4.5 4.5 0 0 1-3 4">
                        </path>
                        <path d="M17.599 6.5a3 3 0 0 0 .399-1.375">
                        </path>
                        <path d="M6.003 5.125A3 3 0 0 0 6.401 6.5">
                        </path>
                        <path d="M3.477 10.896a4 4 0 0 1 .585-.396">
                        </path>
                        <path d="M19.938 10.5a4 4 0 0 1 .585.396">
                        </path>
                        <path d="M6 18a4 4 0 0 1-1.967-.516">
                        </path>
                        <path d="M19.967 17.484A4 4 0 0 1 18 18">
                        </path>
                    </svg>
                </div>
                <div class="animate-float absolute bottom-20 right-10 text-secondary/10" style="animation-delay: 0.5s;">
                    <svg class="lucide lucide-activity h-10 w-10" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2">
                        </path>
                    </svg>
                </div>
            </div>
            <!-- Site animation border end -->
            <!-- Site content start -->
            <br/><br/>
            <section class="pt-20 px-4 relative overflow-hidden">
                <div class="animate-float" style="animation-delay: 0s;">
                    <div class="absolute top-20 left-10 w-32 h-32 bg-primary/10 rounded-full blur-xl animate-float">
                    </div>
                </div>
                <div class="animate-float" style="animation-delay: 2000s;">
                    <div class="absolute bottom-20 right-10 w-24 h-24 bg-secondary/10 rounded-full blur-xl animate-float">
                    </div>
                </div>
                <div class="container mx-auto text-center relative z-10">
                    <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary text-primary-foreground hover:bg-primary/80 mb-6 animate-bounce-gentle">
                        <svg class="lucide lucide-trending-up h-4 w-4 mr-2" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <polyline points="22 7 13.5 15.5 8.5 10.5 2 17">
                            </polyline>
                            <polyline points="16 7 22 7 22 13">
                            </polyline>
                        </svg>
                        Flexible Pricing Plans
                    </div>
                    <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
                        <span class="bg-gradient-primary bg-clip-text text-transparent">
                        Choose Your
                        </span>
                        <br>
                        <span class="text-foreground relative" id="typewriter">
                            <!-- text will come here -->
                            <span class="animate-blink border-r-2 border-primary ml-1" id="cursor">
                            </span>
                        </span>
                        </br>
                    </h1>
                    <p class="text-xl text-muted-foreground mb-8 max-w-3xl mx-auto">
                        Transparent pricing designed to scale with your organization. From startup M&amp;A to enterprise-level transformations, we have the perfect plan for your needs.
                    </p>
                </div>
            </section>
            <section class="py-20 pt-10 px-4">
                <div class="container mx-auto px-6">
                    <div class="flex items-center justify-center gap-4 mb-12">
                        <span class="text-lg font-medium text-primary" id="monthlyText">
                        Monthly
                        </span>
                        <button class="relative w-16 h-8 bg-muted rounded-full transition-all duration-300 hover:shadow-glow focus:outline-none" id="toggleBtn">
                            <div class="absolute top-1 left-1 w-6 h-6 bg-primary rounded-full transition-transform duration-300 translate-x-0" id="toggleCircle">
                            </div>
                        </button>
                        <span class="text-lg font-medium text-muted-foreground" id="annualText">
                        Annual
                        </span>
                        <div class="custom_save hidden inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 bg-green-500 text-white animate-bounce-gentle" id="saveBadge">
                            Save 20%
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mx-auto">
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm relative p-6 transition-all duration-500 hover:scale-105 hover:shadow-hover animate-fade-in group" style="animation-delay: 0ms;">
                            <div class="flex flex-col space-y-1.5 p-6 relative z-10">
                                <div class="flex items-center justify-between mb-4">
                                    <svg class="lucide lucide-rocket h-8 w-8 text-muted-foreground" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z">
                                        </path>
                                        <path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z">
                                        </path>
                                        <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0">
                                        </path>
                                        <path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5">
                                        </path>
                                    </svg>
                                </div>
                                <h3 class="tracking-tight text-2xl font-bold">
                                    Starter
                                </h3>
                                <p class="text-muted-foreground mt-2">
                                    Perfect for small teams exploring organizational insights
                                </p>
                                <div class="mt-6">
                                    <div class="flex items-baseline gap-2">
                                        <span class="text-4xl font-bold">
                                        Contact Us
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6 pt-0 relative z-10">
                                <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground hover:shadow-elegant h-10 px-4 py-2 w-full mb-6 transition-all duration-300 hover:scale-105 group bg-secondary hover:bg-secondary/90">
                                    <svg class="lucide lucide-eye h-4 w-4 mr-2 group-hover:animate-pulse-glow" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                        </path>
                                        <circle cx="12" cy="12" r="3">
                                        </circle>
                                    </svg>
                                    Start Free Trial
                                    <svg class="lucide lucide-arrow-right h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 12h14">
                                        </path>
                                        <path d="m12 5 7 7-7 7">
                                        </path>
                                    </svg>
                                </button>
                                <div class="space-y-3">
                                    <div class="flex items-start gap-3">
                                        <svg class="lucide lucide-check h-5 w-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 6 9 17l-5-5">
                                            </path>
                                        </svg>
                                        <span class="text-sm">
                                            Limited Org Design functionality
                                        </span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <svg class="lucide lucide-check h-5 w-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 6 9 17l-5-5">
                                            </path>
                                        </svg>
                                        <span class="text-sm">
                                            Limited Org Transformation features
                                        </span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <svg class="lucide lucide-check h-5 w-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 6 9 17l-5-5">
                                            </path>
                                        </svg>
                                        <span class="text-sm">
                                            Basic Current State Analysis
                                        </span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <svg class="lucide lucide-check h-5 w-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 6 9 17l-5-5">
                                            </path>
                                        </svg>
                                        <span class="text-sm">
                                        Email support
                                        </span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <svg class="lucide lucide-check h-5 w-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 6 9 17l-5-5">
                                            </path>
                                        </svg>
                                        <span class="text-sm">
                                        Basic reporting dashboard
                                        </span>
                                    </div>
                                   
                                </div>
                                <div class="mt-4 pt-4 border-t border-border">
                                    <p class="text-xs text-muted-foreground mb-2">
                                        Not included:
                                    </p>
                                    <div class="flex items-start gap-3 mb-1">
                                        <svg class="lucide lucide-x h-4 w-4 text-red-500 flex-shrink-0 mt-0.5" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 6 6 18">
                                            </path>
                                            <path d="m6 6 12 12">
                                            </path>
                                        </svg>
                                        <span class="text-xs text-muted-foreground">
                                         AI analytics
                                        </span>
                                    </div>
                                    <div class="flex items-start gap-3 mb-1">
                                        <svg class="lucide lucide-x h-4 w-4 text-red-500 flex-shrink-0 mt-0.5" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 6 6 18">
                                            </path>
                                            <path d="m6 6 12 12">
                                            </path>
                                        </svg>
                                        <span class="text-xs text-muted-foreground">
                                            Market Benchmarking
                                        </span>
                                    </div>
                                    <div class="flex items-start gap-3 mb-1">
                                        <svg class="lucide lucide-x h-4 w-4 text-red-500 flex-shrink-0 mt-0.5" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 6 6 18">
                                            </path>
                                            <path d="m6 6 12 12">
                                            </path>
                                        </svg>
                                        <span class="text-xs text-muted-foreground">
                                            Use Case Survey Gathering
                                        </span>
                                    </div>
                                    <div class="flex items-start gap-3 mb-1">
                                        <svg class="lucide lucide-x h-4 w-4 text-red-500 flex-shrink-0 mt-0.5" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 6 6 18">
                                            </path>
                                            <path d="m6 6 12 12">
                                            </path>
                                        </svg>
                                        <span class="text-xs text-muted-foreground">
                                            Activity Analysis
                                        </span>
                                    </div>
                                    <div class="flex items-start gap-3 mb-1">
                                        <svg class="lucide lucide-x h-4 w-4 text-red-500 flex-shrink-0 mt-0.5" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 6 6 18">
                                            </path>
                                            <path d="m6 6 12 12">
                                            </path>
                                        </svg>
                                        <span class="text-xs text-muted-foreground">
                                            Advanced modules (e.g., M&A, Workforce Planning)
                                        </span>
                                    </div>
                                    <div class="flex items-start gap-3 mb-1">
                                        <svg class="lucide lucide-x h-4 w-4 text-red-500 flex-shrink-0 mt-0.5" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 6 6 18">
                                            </path>
                                            <path d="m6 6 12 12">
                                            </path>
                                        </svg>
                                        <span class="text-xs text-muted-foreground">
                                            Priority support
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm relative p-6 transition-all duration-500 hover:scale-105 border-primary shadow-glow animate-fade-in group" style="animation-delay: 200ms;">
                            <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                                <div class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 bg-gradient-primary text-white px-4 py-2 animate-pulse-glow">
                                    <svg class="lucide lucide-crown h-4 w-4 mr-1" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.562 3.266a.5.5 0 0 1 .876 0L15.39 8.87a1 1 0 0 0 1.516.294L21.183 5.5a.5.5 0 0 1 .798.519l-2.834 10.246a1 1 0 0 1-.956.734H5.81a1 1 0 0 1-.957-.734L2.02 6.02a.5.5 0 0 1 .798-.519l4.276 3.664a1 1 0 0 0 1.516-.294z">
                                        </path>
                                        <path d="M5 21h14">
                                        </path>
                                    </svg>
                                    Most Popular
                                </div>
                            </div>
                            <div class="absolute inset-0 bg-gradient-glow opacity-10 rounded-lg">
                            </div>
                            <div class="flex flex-col space-y-1.5 p-6 relative z-10">
                                <div class="flex items-center justify-between mb-4">
                                    <svg class="lucide lucide-target h-8 w-8 text-primary animate-pulse-glow" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12" cy="12" r="10">
                                        </circle>
                                        <circle cx="12" cy="12" r="6">
                                        </circle>
                                        <circle cx="12" cy="12" r="2">
                                        </circle>
                                    </svg>
                                    <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 animate-shimmer">
                                        Popular
                                    </div>
                                </div>
                                <h3 class="tracking-tight text-2xl font-bold">
                                    Professional
                                </h3>
                                <p class="text-muted-foreground mt-2">
                                    Advanced features for growing organizations
                                </p>
                                <div class="mt-6">
                                    <div class="flex items-baseline gap-2">
                                        <span class="text-4xl font-bold">
                                        Contact Us
                                        </span>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="p-6 pt-0 relative z-10">
                                <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full mb-6 transition-all duration-300 hover:scale-105 group bg-gradient-primary hover:shadow-hover">
                                    <svg class="lucide lucide-sparkles h-4 w-4 mr-2 group-hover:animate-pulse-glow" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z">
                                        </path>
                                        <path d="M20 3v4">
                                        </path>
                                        <path d="M22 5h-4">
                                        </path>
                                        <path d="M4 17v2">
                                        </path>
                                        <path d="M5 18H3">
                                        </path>
                                    </svg>
                                    Unlock Professional Features
                                    <svg class="lucide lucide-arrow-right h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 12h14">
                                        </path>
                                        <path d="m12 5 7 7-7 7">
                                        </path>
                                    </svg>
                                </button>
                                <div class="space-y-3">
                                    <div class="flex items-start gap-3">
                                        <svg class="lucide lucide-check h-5 w-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 6 9 17l-5-5">
                                            </path>
                                        </svg>
                                        <span class="text-sm">
                                            Full Org Design
                                        </span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <svg class="lucide lucide-check h-5 w-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 6 9 17l-5-5">
                                            </path>
                                        </svg>
                                        <span class="text-sm">
                                            Full Org Transformation
                                        </span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <svg class="lucide lucide-check h-5 w-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 6 9 17l-5-5">
                                            </path>
                                        </svg>
                                        <span class="text-sm">
                                            Comprehensive Current State Analysis
                                        </span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <svg class="lucide lucide-check h-5 w-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 6 9 17l-5-5">
                                            </path>
                                        </svg>
                                        <span class="text-sm">
                                            AI-Powered Insights
                                        </span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <svg class="lucide lucide-check h-5 w-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 6 9 17l-5-5">
                                            </path>
                                        </svg>
                                        <span class="text-sm">
                                            Market Benchmarking
                                        </span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <svg class="lucide lucide-check h-5 w-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 6 9 17l-5-5">
                                            </path>
                                        </svg>
                                        <span class="text-sm">
                                            Use Case Survey Gathering
                                        </span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <svg class="lucide lucide-check h-5 w-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 6 9 17l-5-5">
                                            </path>
                                        </svg>
                                        <span class="text-sm">
                                            Activity Analysis
                                        </span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <svg class="lucide lucide-check h-5 w-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 6 9 17l-5-5">
                                            </path>
                                        </svg>
                                        <span class="text-sm">
                                            Priority email & chat support
                                        </span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <svg class="lucide lucide-check h-5 w-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 6 9 17l-5-5">
                                            </path>
                                        </svg>
                                        <span class="text-sm">
                                            Risk assessment algorithms
                                        </span>
                                    </div>
                                </div>
                                <div class="mt-4 pt-4 border-t border-border">
                                    <p class="text-xs text-muted-foreground mb-2">
                                        Not included:
                                    </p>
                                    <div class="flex items-start gap-3 mb-1">
                                        <svg class="lucide lucide-x h-4 w-4 text-red-500 flex-shrink-0 mt-0.5" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 6 6 18">
                                            </path>
                                            <path d="m6 6 12 12">
                                            </path>
                                        </svg>
                                        <span class="text-xs text-muted-foreground">
                                            Strategic Workforce Planning
                                        </span>
                                    </div>
                                    <div class="flex items-start gap-3 mb-1">
                                        <svg class="lucide lucide-x h-4 w-4 text-red-500 flex-shrink-0 mt-0.5" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 6 6 18">
                                            </path>
                                            <path d="m6 6 12 12">
                                            </path>
                                        </svg>
                                        <span class="text-xs text-muted-foreground">
                                            M&A Module
                                        </span>
                                    </div>
                                    <div class="flex items-start gap-3 mb-1">
                                        <svg class="lucide lucide-x h-4 w-4 text-red-500 flex-shrink-0 mt-0.5" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 6 6 18">
                                            </path>
                                            <path d="m6 6 12 12">
                                            </path>
                                        </svg>
                                        <span class="text-xs text-muted-foreground">
                                            Succession Planning
                                        </span>
                                    </div>
                                    <div class="flex items-start gap-3 mb-1">
                                        <svg class="lucide lucide-x h-4 w-4 text-red-500 flex-shrink-0 mt-0.5" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 6 6 18">
                                            </path>
                                            <path d="m6 6 12 12">
                                            </path>
                                        </svg>
                                        <span class="text-xs text-muted-foreground">
                                            Dedicated account manager
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm relative p-6 transition-all duration-500 hover:scale-105 hover:shadow-hover animate-fade-in group" style="animation-delay: 400ms;">
                            <div class="flex flex-col space-y-1.5 p-6 relative z-10">
                                <div class="flex items-center justify-between mb-4">
                                    <svg class="lucide lucide-crown h-8 w-8 text-muted-foreground" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.562 3.266a.5.5 0 0 1 .876 0L15.39 8.87a1 1 0 0 0 1.516.294L21.183 5.5a.5.5 0 0 1 .798.519l-2.834 10.246a1 1 0 0 1-.956.734H5.81a1 1 0 0 1-.957-.734L2.02 6.02a.5.5 0 0 1 .798-.519l4.276 3.664a1 1 0 0 0 1.516-.294z">
                                        </path>
                                        <path d="M5 21h14">
                                        </path>
                                    </svg>
                                </div>
                                <h3 class="tracking-tight text-2xl font-bold">
                                    Enterprise
                                </h3>
                                <p class="text-muted-foreground mt-2">
                                    Complete solution for large-scale organizational planning
                                </p>
                                <div class="mt-6">
                                    <div class="flex items-baseline gap-2">
                                        <span class="text-4xl font-bold">
                                        Contact Us
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6 pt-0 relative z-10">
                                <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground hover:shadow-elegant h-10 px-4 py-2 w-full mb-6 transition-all duration-300 hover:scale-105 group bg-secondary hover:bg-secondary/90">
                                    <svg class="lucide lucide-brain h-4 w-4 mr-2 group-hover:animate-pulse-glow" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 5a3 3 0 1 0-5.997.125 4 4 0 0 0-2.526 5.77 4 4 0 0 0 .556 6.588A4 4 0 1 0 12 18Z">
                                        </path>
                                        <path d="M12 5a3 3 0 1 1 5.997.125 4 4 0 0 1 2.526 5.77 4 4 0 0 1-.556 6.588A4 4 0 1 1 12 18Z">
                                        </path>
                                        <path d="M15 13a4.5 4.5 0 0 1-3-4 4.5 4.5 0 0 1-3 4">
                                        </path>
                                        <path d="M17.599 6.5a3 3 0 0 0 .399-1.375">
                                        </path>
                                        <path d="M6.003 5.125A3 3 0 0 0 6.401 6.5">
                                        </path>
                                        <path d="M3.477 10.896a4 4 0 0 1 .585-.396">
                                        </path>
                                        <path d="M19.938 10.5a4 4 0 0 1 .585.396">
                                        </path>
                                        <path d="M6 18a4 4 0 0 1-1.967-.516">
                                        </path>
                                        <path d="M19.967 17.484A4 4 0 0 1 18 18">
                                        </path>
                                    </svg>
                                    Schedule Enterprise Demo
                                    <svg class="lucide lucide-arrow-right h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 12h14">
                                        </path>
                                        <path d="m12 5 7 7-7 7">
                                        </path>
                                    </svg>
                                </button>
                                <div class="space-y-3">
                                    <div class="flex items-start gap-3">
                                        <svg class="lucide lucide-check h-5 w-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 6 9 17l-5-5">
                                            </path>
                                        </svg>
                                        <span class="text-sm">
                                            All Professional features included
                                        </span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <svg class="lucide lucide-check h-5 w-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 6 9 17l-5-5">
                                            </path>
                                        </svg>
                                        <span class="text-sm">
                                            Strategic Workforce Planning
                                        </span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <svg class="lucide lucide-check h-5 w-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 6 9 17l-5-5">
                                            </path>
                                        </svg>
                                        <span class="text-sm">
                                            Mergers & Acquisitions module
                                        </span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <svg class="lucide lucide-check h-5 w-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 6 9 17l-5-5">
                                            </path>
                                        </svg>
                                        <span class="text-sm">
                                            Succession Planning
                                        </span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <svg class="lucide lucide-check h-5 w-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 6 9 17l-5-5">
                                            </path>
                                        </svg>
                                        <span class="text-sm">
                                            Custom AI model training
                                        </span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <svg class="lucide lucide-check h-5 w-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 6 9 17l-5-5">
                                            </path>
                                        </svg>
                                        <span class="text-sm">
                                            Advanced predictive analytics
                                        </span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <svg class="lucide lucide-check h-5 w-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 6 9 17l-5-5">
                                            </path>
                                        </svg>
                                        <span class="text-sm">
                                            White-label solutions
                                        </span>
                                    </div>
                                   
                                    <div class="flex items-start gap-3">
                                        <svg class="lucide lucide-check h-5 w-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 6 9 17l-5-5">
                                            </path>
                                        </svg>
                                        <span class="text-sm">
                                            24/7 dedicated AI support
                                        </span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <svg class="lucide lucide-check h-5 w-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 6 9 17l-5-5">
                                            </path>
                                        </svg>
                                        <span class="text-sm">
                                            Custom integrations & APIs
                                        </span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <svg class="lucide lucide-check h-5 w-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 6 9 17l-5-5">
                                            </path>
                                        </svg>
                                        <span class="text-sm">
                                            Advanced security & compliance
                                        </span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <svg class="lucide lucide-check h-5 w-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 6 9 17l-5-5">
                                            </path>
                                        </svg>
                                        <span class="text-sm">
                                            Dedicated account manager
                                        </span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <svg class="lucide lucide-check h-5 w-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 6 9 17l-5-5">
                                            </path>
                                        </svg>
                                        <span class="text-sm">
                                            Multi-company management
                                        </span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <svg class="lucide lucide-check h-5 w-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 6 9 17l-5-5">
                                            </path>
                                        </svg>
                                        <span class="text-sm">
                                            Advanced audit trails
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 px-4 bg-muted/30">
                <div class="container mx-auto px-6">
                    <div class="text-center mb-12">
                        <h2 class="text-4xl font-bold mb-4">
                            Why
                            <span class="bg-gradient-primary bg-clip-text text-transparent">
                            Meridiene
                            </span>
                            Leads the Market
                        </h2>
                        <p class="text-xl text-muted-foreground">
                            See how we compare against the competition
                        </p>
                    </div>
                    <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6">
                        <div class="overflow-x-auto">
                            <table class="w-full min-w-[800px] border-collapse">
                                <thead>
                                    <tr class="border-b border-border">
                                        <th class="text-left p-4 font-bold">
                                            Features
                                        </th>
                                        <th class="text-center p-4 font-bold bg-gradient-primary text-white rounded-t-lg">
                                            Meridiene
                                            <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 ml-2 bg-white text-primary">
                                                <svg class="lucide lucide-star h-3 w-3 mr-1" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                    </path>
                                                </svg>
                                                Best
                                            </div>
                                        </th>
                                        <th class="text-center p-4 font-bold">
                                            Competitor A
                                        </th>
                                        <th class="text-center p-4 font-bold">
                                            Competitor B
                                        </th>
                                        <th class="text-center p-4 font-bold">
                                            Competitor C
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b border-border hover:bg-muted/50 transition-colors">
                                        <td class="p-4 font-medium">
                                            Organization AI readiness
                                        </td>
                                        <td class="text-center p-4 bg-gradient-subtle">
                                            <svg class="lucide lucide-check h-5 w-5 text-green-500 mx-auto" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 6 9 17l-5-5">
                                                </path>
                                            </svg>
                                        </td>
                                        <td class="text-center p-4">
                                            <svg class="lucide lucide-x h-5 w-5 text-red-500 mx-auto" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18 6 6 18">
                                                </path>
                                                <path d="m6 6 12 12">
                                                </path>
                                            </svg>
                                        </td>
                                        <td class="text-center p-4">
                                            <svg class="lucide lucide-x h-5 w-5 text-red-500 mx-auto" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18 6 6 18">
                                                </path>
                                                <path d="m6 6 12 12">
                                                </path>
                                            </svg>
                                        </td>
                                        <td class="text-center p-4">
                                            <svg class="lucide lucide-x h-5 w-5 text-red-500 mx-auto" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18 6 6 18">
                                                </path>
                                                <path d="m6 6 12 12">
                                                </path>
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-border hover:bg-muted/50 transition-colors">
                                        <td class="p-4 font-medium">
                                            Market trends for job
                                        </td>
                                        <td class="text-center p-4 bg-gradient-subtle">
                                            <svg class="lucide lucide-check h-5 w-5 text-green-500 mx-auto" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 6 9 17l-5-5">
                                                </path>
                                            </svg>
                                        </td>
                                        <td class="text-center p-4">
                                            <svg class="lucide lucide-x h-5 w-5 text-red-500 mx-auto" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18 6 6 18">
                                                </path>
                                                <path d="m6 6 12 12">
                                                </path>
                                            </svg>
                                        </td>
                                        <td class="text-center p-4">
                                            <svg class="lucide lucide-x h-5 w-5 text-red-500 mx-auto" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18 6 6 18">
                                                </path>
                                                <path d="m6 6 12 12">
                                                </path>
                                            </svg>
                                        </td>
                                        <td class="text-center p-4">
                                            <svg class="lucide lucide-x h-5 w-5 text-red-500 mx-auto" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18 6 6 18">
                                                </path>
                                                <path d="m6 6 12 12">
                                                </path>
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-border hover:bg-muted/50 transition-colors">
                                        <td class="p-4 font-medium">
                                            Advance Activity analysis
                                        </td>
                                        <td class="text-center p-4 bg-gradient-subtle">
                                            <svg class="lucide lucide-check h-5 w-5 text-green-500 mx-auto" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 6 9 17l-5-5">
                                                </path>
                                            </svg>
                                        </td>
                                        <td class="text-center p-4">
                                            <svg class="lucide lucide-x h-5 w-5 text-red-500 mx-auto" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18 6 6 18">
                                                </path>
                                                <path d="m6 6 12 12">
                                                </path>
                                            </svg>
                                        </td>
                                        <td class="text-center p-4">
                                            <svg class="lucide lucide-check h-5 w-5 text-green-500 mx-auto" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 6 9 17l-5-5">
                                                </path>
                                            </svg>
                                        </td>
                                        <td class="text-center p-4">
                                            <svg class="lucide lucide-x h-5 w-5 text-red-500 mx-auto" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18 6 6 18">
                                                </path>
                                                <path d="m6 6 12 12">
                                                </path>
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-border hover:bg-muted/50 transition-colors">
                                        <td class="p-4 font-medium">
                                            Budget tracked scenario modeling
                                        </td>
                                        <td class="text-center p-4 bg-gradient-subtle">
                                            <svg class="lucide lucide-check h-5 w-5 text-green-500 mx-auto" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 6 9 17l-5-5">
                                                </path>
                                            </svg>
                                        </td>
                                        <td class="text-center p-4 bg-gradient-subtle">
                                            <svg class="lucide lucide-check h-5 w-5 text-green-500 mx-auto" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 6 9 17l-5-5">
                                                </path>
                                            </svg>
                                        </td>
                                        <td class="text-center p-4 bg-gradient-subtle">
                                            <svg class="lucide lucide-check h-5 w-5 text-green-500 mx-auto" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 6 9 17l-5-5">
                                                </path>
                                            </svg>
                                        </td>
                                        <td class="text-center p-4">
                                            <svg class="lucide lucide-x h-5 w-5 text-red-500 mx-auto" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18 6 6 18">
                                                </path>
                                                <path d="m6 6 12 12">
                                                </path>
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-border hover:bg-muted/50 transition-colors">
                                        <td class="p-4 font-medium">
                                            Easy to use Strategic workforce planning
                                        </td>
                                        <td class="text-center p-4 bg-gradient-subtle">
                                            <svg class="lucide lucide-check h-5 w-5 text-green-500 mx-auto" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 6 9 17l-5-5">
                                                </path>
                                            </svg>
                                        </td>
                                        <td class="text-center p-4">
                                            <svg class="lucide lucide-x h-5 w-5 text-red-500 mx-auto" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18 6 6 18">
                                                </path>
                                                <path d="m6 6 12 12">
                                                </path>
                                            </svg>
                                        </td>
                                        <td class="text-center p-4">
                                            <svg class="lucide lucide-check h-5 w-5 text-green-500 mx-auto" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 6 9 17l-5-5">
                                                </path>
                                            </svg>
                                        </td>
                                        <td class="text-center p-4">
                                            <svg class="lucide lucide-x h-5 w-5 text-red-500 mx-auto" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18 6 6 18">
                                                </path>
                                                <path d="m6 6 12 12">
                                                </path>
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-border hover:bg-muted/50 transition-colors">
                                        <td class="p-4 font-medium">
                                            True Customization of your charts
                                        </td>
                                        <td class="text-center p-4 bg-gradient-subtle">
                                            <svg class="lucide lucide-check h-5 w-5 text-green-500 mx-auto" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 6 9 17l-5-5">
                                                </path>
                                            </svg>
                                        </td>
                                        <td class="text-center p-4">
                                            <svg class="lucide lucide-x h-5 w-5 text-red-500 mx-auto" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18 6 6 18">
                                                </path>
                                                <path d="m6 6 12 12">
                                                </path>
                                            </svg>
                                        </td>
                                        <td class="text-center p-4">
                                            <svg class="lucide lucide-check h-5 w-5 text-green-500 mx-auto" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 6 9 17l-5-5">
                                                </path>
                                            </svg>
                                        </td>
                                        <td class="text-center p-4">
                                            <svg class="lucide lucide-x h-5 w-5 text-red-500 mx-auto" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18 6 6 18">
                                                </path>
                                                <path d="m6 6 12 12">
                                                </path>
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-border hover:bg-muted/50 transition-colors">
                                        <td class="p-4 font-medium">
                                            Dedicated Support team
                                        </td>
                                        <td class="text-center p-4 bg-gradient-subtle">
                                            <svg class="lucide lucide-check h-5 w-5 text-green-500 mx-auto" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 6 9 17l-5-5">
                                                </path>
                                            </svg>
                                        </td>
                                        <td class="text-center p-4 bg-gradient-subtle">
                                            <svg class="lucide lucide-check h-5 w-5 text-green-500 mx-auto" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 6 9 17l-5-5">
                                                </path>
                                            </svg>
                                        </td>
                                        <td class="text-center p-4 bg-gradient-subtle">
                                            <svg class="lucide lucide-check h-5 w-5 text-green-500 mx-auto" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 6 9 17l-5-5">
                                                </path>
                                            </svg>
                                        </td>
                                        <td class="text-center p-4 bg-gradient-subtle">
                                            <svg class="lucide lucide-check h-5 w-5 text-green-500 mx-auto" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 6 9 17l-5-5">
                                                </path>
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-border hover:bg-muted/50 transition-colors">
                                        <td class="p-4 font-medium">
                                            Personalized solution
                                        </td>
                                        <td class="text-center p-4 bg-gradient-subtle">
                                            <svg class="lucide lucide-check h-5 w-5 text-green-500 mx-auto" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 6 9 17l-5-5">
                                                </path>
                                            </svg>
                                        </td>
                                        <td class="text-center p-4">
                                            <svg class="lucide lucide-check h-5 w-5 text-green-500 mx-auto" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 6 9 17l-5-5">
                                                </path>
                                            </svg>
                                        </td>
                                        <td class="text-center p-4">
                                            <svg class="lucide lucide-x h-5 w-5 text-red-500 mx-auto" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18 6 6 18">
                                                </path>
                                                <path d="m6 6 12 12">
                                                </path>
                                            </svg>
                                        </td>
                                        <td class="text-center p-4 bg-gradient-subtle">
                                            <svg class="lucide lucide-check h-5 w-5 text-green-500 mx-auto" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 6 9 17l-5-5">
                                                </path>
                                            </svg>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
            
            /* ✅ Text Auto Type Effect */
            const phrases = ["Success Path", "Growth Strategy", "AI Advantage"];
            const typewriter = document.getElementById("typewriter");
            const cursor = document.getElementById("cursor");
            
            let phraseIndex = 0;
            let charIndex = 0;
            let isDeleting = false;
            
            function typeEffect() {
            const currentPhrase = phrases[phraseIndex];
            const currentText = currentPhrase.substring(0, charIndex);
            
            if (typewriter.childNodes[0]) {
               typewriter.childNodes[0].textContent = currentText;
            } else {
               typewriter.insertBefore(document.createTextNode(currentText), cursor);
            }
            
            if (!isDeleting && charIndex < currentPhrase.length) {
               charIndex++;
               setTimeout(typeEffect, 100);
            } else if (isDeleting && charIndex > 0) {
               charIndex--;
               setTimeout(typeEffect, 50);
            } else {
               isDeleting = !isDeleting;
               if (!isDeleting) {
               phraseIndex = (phraseIndex + 1) % phrases.length;
               }
               setTimeout(typeEffect, 2000);
            }
            }
            
            typeEffect();
            
            /* ✅ Monthly/Annual Toggle Button */
            const toggleBtns = document.getElementById("toggleBtn");
            const toggleCircle = document.getElementById("toggleCircle");
            const monthlyText = document.getElementById("monthlyText");
            const annualText = document.getElementById("annualText");
            const saveBadge = document.getElementById("saveBadge"); // 👈 Add this line
            
            let isAnnual = false;
            
            toggleBtns.addEventListener("click", () => {
            isAnnual = !isAnnual;
            
            toggleCircle.style.transform = isAnnual ? "translateX(32px)" : "translateX(0)";
            
            if (isAnnual) {
               monthlyText.classList.remove("text-primary");
               monthlyText.classList.add("text-muted-foreground");
               annualText.classList.remove("text-muted-foreground");
               annualText.classList.add("text-primary");
               saveBadge.classList.remove("hidden"); // 👈 Show Save 20%
            } else {
               annualText.classList.remove("text-primary");
               annualText.classList.add("text-muted-foreground");
               monthlyText.classList.remove("text-muted-foreground");
               monthlyText.classList.add("text-primary");
               saveBadge.classList.add("hidden"); // 👈 Hide Save 20%
            }
            });
            
        </script>
    </body>
</html>