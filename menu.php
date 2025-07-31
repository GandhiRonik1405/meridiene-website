<!-- Site loader start -->
<div class="fixed inset-0 flex items-center justify-center bg-white z-50" id="loader">
    <div class="w-12 h-12 animate-spin">
        <img src="assets/images/gradient-logo-animation-1.gif"/>
    </div>
</div>
<!-- Site loader end -->
 
<nav class="fixed top-0 w-full z-50 transition-all duration-500 bg-transparent rm_color_blur_header">
    <div class="container mx-auto px-6">
        <div class="flex items-center justify-between h-20">
            <a class="transition-colors duration-200 flex items-center space-x-2 group" href="index.php">
            <span class="">
            <img alt="Meridiene AI Dashboard" class="" src="assets/images/Meridiene-logo.png" style="width: 175px; height: 46px;"/>
            </span>
            </a>
            <div class="hidden md:flex items-center space-x-8">
                <div>
                    <div class="relative group">
                        <button id="usecase-toggle" class="flex items-center space-x-1 text-foreground hover:text-primary transition-colors py-2 px-3 rounded-lg hover:bg-muted/50">
                            <span class="font-medium">Use Cases</span>
                            <svg id="usecase-arrow" class="lucide lucide-chevron-down h-4 w-4 transition-transform duration-300" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="absolute top-full left-0 mt-2 w-80 bg-background border border-border rounded-xl shadow-elegant transition-all duration-300 z-50 opacity-0 invisible -translate-y-2" id="sub_menu_c">
                            <div class="p-4 space-y-2">
                                <a class="block p-3 rounded-lg hover:bg-muted/50 transition-all duration-200 group/item" href="#" style="display: none;">
                                    <div class="font-medium text-foreground group-hover/item:text-primary transition-colors">
                                        M&amp;A Integration
                                    </div>
                                    <div class="text-sm text-muted-foreground mt-1">
                                        AI-driven synergy identification and risk assessment
                                    </div>
                                </a>
                                <a class="block p-3 rounded-lg hover:bg-muted/50 transition-all duration-200 group/item" href="organizational-transformation.php">
                                    <div class="font-medium text-foreground group-hover/item:text-primary transition-colors">
                                        Organizational Transformation
                                    </div>
                                    <div class="text-sm text-muted-foreground mt-1">
                                        Navigate change with predictive insights
                                    </div>
                                </a>
                                <a class="block p-3 rounded-lg hover:bg-muted/50 transition-all duration-200 group/item" href="workforce-planning.php">
                                    <div class="font-medium text-foreground group-hover/item:text-primary transition-colors">
                                        Strategic Workforce Planning
                                    </div>
                                    <div class="text-sm text-muted-foreground mt-1">
                                        Align talent strategy with business goals
                                    </div>
                                </a>
                                <a class="block p-3 rounded-lg hover:bg-muted/50 transition-all duration-200 group/item" href="ai-readiness.php">
                                    <div class="font-medium text-foreground group-hover/item:text-primary transition-colors">
                                        AI Readiness Assessment
                                    </div>
                                    <div class="text-sm text-muted-foreground mt-1">
                                        Future-proof your organization for AI adoption
                                    </div>
                                </a>
                                <a class="block p-3 rounded-lg hover:bg-muted/50 transition-all duration-200 group/item" href="skill-gap-analysis.php">
                                    <div class="font-medium text-foreground group-hover/item:text-primary transition-colors">
                                        Skill Gap Analysis
                                    </div>
                                    <div class="text-sm text-muted-foreground mt-1">
                                        Identify and close critical capability gaps
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="transition-colors duration-200 text-foreground hover:text-primary transition-colors font-medium" href="about-us.php">
                About Us
                </a>
                <a class="transition-colors duration-200 text-foreground hover:text-primary transition-colors font-medium" href="pricing.php">
                Pricing
                </a>
                <a class="transition-colors duration-200 text-foreground hover:text-primary transition-colors font-medium" href="contact-us.php">
                Contact Us
                </a>
            </div>
            <div class="flex items-center space-x-4">
                <button class="items-center justify-center gap-2 whitespace-nowrap ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-gradient-primary text-white hover:shadow-glow font-semibold h-12 rounded-lg px-8 text-base hidden md:inline-flex group hover:scale-105 transition-all duration-300 relative overflow-hidden hp-open-modal-button">
                    <div class="absolute inset-0 bg-gradient-glow opacity-0 group-hover:opacity-100 animate-shimmer transition-opacity duration-300">
                    </div>
                    <svg class="lucide lucide-sparkles mr-2 h-5 w-5 group-hover:rotate-12 transition-transform duration-300" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
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
                    <span class="relative z-10">
                    Discover Your True North
                    </span>
                    <svg class="lucide lucide-arrow-right ml-2 h-5 w-5 group-hover:translate-x-1 transition-transform duration-300 relative z-10" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 12h14">
                        </path>
                        <path d="m12 5 7 7-7 7">
                        </path>
                    </svg>
                </button>
                <button class="md:hidden p-2 rounded-lg hover:bg-muted transition-colors">
                    <svg class="lucide lucide-menu h-6 w-6" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                        <line x1="4" x2="20" y1="12" y2="12">
                        </line>
                        <line x1="4" x2="20" y1="6" y2="6">
                        </line>
                        <line x1="4" x2="20" y1="18" y2="18">
                        </line>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>
<script>
    /* ✅ Use Case Menu Toggle Start */
        const toggleBtn = document.getElementById("usecase-toggle");
        const submenu = document.getElementById("sub_menu_c");
        const arrowIcon = document.getElementById("usecase-arrow");

        toggleBtn.addEventListener("click", function (e) {
            submenu.classList.toggle("opacity-0");
            submenu.classList.toggle("invisible");
            submenu.classList.toggle("-translate-y-2");

            submenu.classList.toggle("opacity-100");
            submenu.classList.toggle("visible");
            submenu.classList.toggle("translate-y-0");

            // 🔄 Arrow rotate
            arrowIcon.classList.toggle("rotate-180");
        });

        // 🧭 Close submenu on outside click
        document.addEventListener("click", function (e) {
            if (!submenu || !toggleBtn) return;

            if (submenu.contains(e.target) || toggleBtn.contains(e.target)) return;

            if (submenu.classList.contains("visible")) {
                submenu.classList.remove("opacity-100", "visible", "translate-y-0");
                submenu.classList.add("opacity-0", "invisible", "-translate-y-2");

                // 🔄 Remove arrow rotate
                arrowIcon.classList.remove("rotate-180");
            }
        });

    /* ✅ Use Case Menu Toggle End */
    
      /* ✅ Sticky Header Style on Scroll */
      const header = document.querySelector("nav");
            
            window.addEventListener("scroll", () => {
              if (window.scrollY > 10) {
                header.classList.add(
                  "bg-background/95",
                  "backdrop-blur-lg",
                  "border-b",
                  "border-border",
                  "shadow-elegant"
                );
              } else {
                header.classList.remove(
                  "bg-background/95",
                  "backdrop-blur-lg",
                  "border-b",
                  "border-border",
                  "shadow-elegant"
                );
              }
            });
    
</script>

