<!DOCTYPE html>
<html lang="en">
<?php 
    $pageTitle = 'Pricing'; 
    include('header.php') 
?>
   
    <body>
        <div id="root">
            <!-- Header menu start -->
            <?php include('menu.php') ?>
            <!-- Header menu end -->

           
        
                              
        
         
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