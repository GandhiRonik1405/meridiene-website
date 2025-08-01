// ✅ Hide Lovable Badge for Puppeteer or iframe
if (window.self !== window.top || navigator.userAgent.includes('puppeteer')) {
    const badge = document.getElementById('lovable-badge');
    if (badge) {
      badge.style.display = 'none';
    }
  }
  
  const closeButton = document.getElementById('lovable-badge-close');
  if (closeButton) {
    closeButton.addEventListener('click', function (event) {
      event.preventDefault();
      event.stopPropagation();
      const badge = document.getElementById('lovable-badge');
      if (badge) {
        badge.style.display = 'none';
      }
    });
  }
  
   // ✅ Home Page FAQ Toggle (Questions, Answered) (home page)
  
document.addEventListener('DOMContentLoaded', () => {
  const faqButtons = document.querySelectorAll('.faq-question button');

  faqButtons.forEach(button => {
    button.addEventListener('click', () => {
      const clickedItem = button.closest('.faq-item');
      const clickedAnswer = clickedItem.querySelector('.faq-answer');
      const isOpen = !clickedAnswer.classList.contains('hidden');

      // First: close all
      document.querySelectorAll('.faq-answer').forEach(answer => answer.classList.add('hidden'));
      document.querySelectorAll('.faq-question button').forEach(btn => {
        btn.setAttribute('data-state', 'closed');
        btn.setAttribute('aria-expanded', 'false');
        btn.querySelector('svg')?.classList.remove('rotate-180');
      });

      // If it was closed, open it
      if (!isOpen) {
        clickedAnswer.classList.remove('hidden');
        button.setAttribute('data-state', 'open');
        button.setAttribute('aria-expanded', 'true');
        button.querySelector('svg')?.classList.add('rotate-180');
      }
    });
  });
});
  
  // ✅ Auto Typing Text Animation
  // Home page text auto write code start  (home page)
  
  document.addEventListener("DOMContentLoaded", function () {
    const phrases = [
      "Design Your AI-Ready Organization",
      "Build Your Future-Proof Workforce",
      "Navigate Your Strategic Transformation",
      "Chart Your Competitive Advantage",
      "Architect Your Intelligent Enterprise"
    ];
    const target = document.getElementById("auto-type");
    let phraseIndex = 0;
    let charIndex = 0;
    let currentPhrase = "";
  
    function typeText() {
      if (!target) return;
  
      if (charIndex < phrases[phraseIndex].length) {
        currentPhrase += phrases[phraseIndex].charAt(charIndex);
        target.textContent = currentPhrase;
        charIndex++;
        setTimeout(typeText, 50);
      } else {
        setTimeout(() => {
          currentPhrase = "";
          charIndex = 0;
          phraseIndex = (phraseIndex + 1) % phrases.length;
          target.textContent = "";
          typeText();
        }, 2000);
      }
    }
  
    typeText();
  });
  
  // ✅ Service Box Toggle Highlight
  //Home page Visualize with Certainty box code start (Home page)
  
  function toggleService(el) {
    const buttons = document.querySelectorAll('#service-grid button');
  
    buttons.forEach(btn => {
      btn.classList.remove('bg-gradient-primary', 'text-white', 'shadow-glow', 'animate-tilt');
      btn.classList.add('bg-card', 'border', 'border-border');
  
      // remove text-white from inner elements
      btn.querySelectorAll('*').forEach(child => {
        child.classList.remove('text-white');
      });
    });
  
    el.classList.remove('bg-card', 'border-border');
    el.classList.add('bg-gradient-primary', 'text-white', 'shadow-glow', 'animate-tilt');
  
    // add text-white to inner elements
    el.querySelectorAll('*').forEach(child => {
      child.classList.add('text-white');
    });
  }
  

      // ✅ COunting first image (home page)

      function animateCountUp(id, endValue, duration = 2000) {
        const el = document.getElementById(id);
        if (!el) return;
    
        let start = 0;
        const startTime = performance.now();
    
        function update(currentTime) {
          const progress = Math.min((currentTime - startTime) / duration, 1);
          const value = Math.floor(progress * endValue);
          el.textContent = id === "count-12" ? value : value + "%";
    
          if (progress < 1) {
            requestAnimationFrame(update);
          }
        }
    
        requestAnimationFrame(update);
      }
    
      // Run after page is loaded
      window.addEventListener("DOMContentLoaded", () => {
        animateCountUp("count-97", 97);       // For 97%
        animateCountUp("count-12", 12);       // For $12M
        animateCountUp("count-94", 94); // ✅ add this line

      });
  	
/* ✅ Loader Hide on Page Load Start */

window.addEventListener("load", function () {
	setTimeout(function () {
	const loader = document.getElementById("loader");
	if (loader) {
		loader.style.display = "none";
	}
	}, 1000); // 3000 milliseconds = 3 seconds
	});  

/* ✅ Loader Hide on Page Load end */

// ✅ Count-Up Animation on organizational Page Load (organizational-transformation page)

document.addEventListener("DOMContentLoaded", () => {
	const counters = document.querySelectorAll(".animate-count-up");

	counters.forEach((counter) => {
	const id = counter.id;
	let targetText = "";

	// Assign value based on ID
	switch (id) {
		case "count-78":
		targetText = "78%";
		break;
		case "count-24":
		targetText = "24/month";
		break;
		case "count-92":
		targetText = "92%";
		break;
		case "count-156":
		targetText = "156%";
		break;
		default:
		targetText = "0";
	}

	const target = parseInt(targetText); // number part
	const suffix = targetText.replace(/[0-9]/g, "").trim(); // suffix (e.g. %, /month)

	let count = 0;
	const duration = 1500; // total animation time in ms
	const stepTime = Math.max(Math.floor(duration / target), 15); // step duration

	const interval = setInterval(() => {
		count++;
		counter.textContent = count + suffix;

		if (count >= target) {
		clearInterval(interval);
		}
	}, stepTime);
	});
    });


// ✅ Tab functionality for content switching (ARIA roles)  (skill-gap-analys page)
document.addEventListener("DOMContentLoaded", function () {
const tabs = document.querySelectorAll('[role="tab"]');
const tabPanels = document.querySelectorAll('[role="tabpanel"]');

tabs.forEach((tab) => {
tab.addEventListener("click", () => {
	// Deselect all tabs
	tabs.forEach(t => t.setAttribute("aria-selected", "false"));
	// Hide all tab panels
	tabPanels.forEach(p => p.hidden = true);

	// Activate the clicked tab
	tab.setAttribute("aria-selected", "true");

	// Show the related panel
	const panelId = tab.getAttribute("aria-controls");
	const panel = document.getElementById(panelId);
	if (panel) panel.hidden = false;
});
});
});

