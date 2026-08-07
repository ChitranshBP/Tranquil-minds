document.addEventListener("DOMContentLoaded", () => {
  // Scroll Reveal Animation
  const observerOptions = {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px",
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  // Observe elements manually marked with fade-in-section
  document.querySelectorAll(".fade-in-section").forEach((el) => {
    observer.observe(el);
  });

  // Automatically add fade effect to main sections if not already handled
  document.querySelectorAll(".section").forEach((section) => {
    // If the section itself doesn't have the class, we add it primarily for older sections
    // However, if we have granular animations inside, adding it to parent might double fade or hide children if parent isn't observed correctly.
    // Strategy: Add it only if no children have it, or just add it and rely on cascading visibility.
    // Safer approach: Add it to section ONLY if it's not present.
    if (!section.classList.contains("fade-in-section")) {
      section.classList.add("fade-in-section");
      observer.observe(section);
    }
  });

  // Accordion Logic (Strict: One always open)
  const accordionHeaders = document.querySelectorAll(".accordion-header");

  if (accordionHeaders.length > 0) {
    // Helper to open an item
    const openItem = (header) => {
      const content = header.nextElementSibling;
      header.classList.add("active");
      content.style.maxHeight = content.scrollHeight + "px";
    };

    // Helper to close an item
    const closeItem = (header) => {
      const content = header.nextElementSibling;
      header.classList.remove("active");
      content.style.maxHeight = null;
    };

    // Open first item by default
    openItem(accordionHeaders[0]);

    accordionHeaders.forEach((header) => {
      header.addEventListener("click", () => {
        // If already active, do nothing (keep at least one open)
        if (header.classList.contains("active")) return;

        // Close currently active item
        const activeHeader = document.querySelector(".accordion-header.active");
        if (activeHeader) {
          closeItem(activeHeader);
        }

        // Open clicked item
        openItem(header);
      });
    });
  }

  // Mobile Menu Toggle (Updated IDs)
  const hamburger = document.getElementById("nav-hamburger");
  const mobileMenu = document.getElementById("mobile-menu-overlay");

  if (hamburger && mobileMenu) {
    const animatedItems = mobileMenu.querySelectorAll(
      ".mobile-link, .mobile-footer"
    );

    const openMenu = () => {
      mobileMenu.classList.add("is-open");
      hamburger.classList.add("toggle");
      hamburger.setAttribute("aria-expanded", "true");
      hamburger.setAttribute("aria-label", "Close menu");
      document.body.style.overflow = "hidden"; // Lock scrolling

      setTimeout(() => {
        animatedItems.forEach((el) => {
          el.classList.remove("opacity-0", "translate-y-8");
          el.classList.add("opacity-100", "translate-y-0");
        });
      }, 300);
    };

    const closeMenu = () => {
      mobileMenu.classList.remove("is-open");
      mobileMenu.scrollTop = 0;
      mobileMenu.querySelectorAll("details[open]").forEach((d) => {
        d.open = false;
      });
      hamburger.classList.remove("toggle");
      hamburger.setAttribute("aria-expanded", "false");
      hamburger.setAttribute("aria-label", "Open menu");
      document.body.style.overflow = ""; // Restore scrolling

      animatedItems.forEach((el) => {
        el.classList.remove("opacity-100", "translate-y-0");
        el.classList.add("opacity-0", "translate-y-8");
      });
    };

    window.closeMobileMenu = closeMenu;

    hamburger.addEventListener("click", () => {
      if (mobileMenu.classList.contains("is-open")) {
        closeMenu();
      } else {
        openMenu();
      }
    });

    // The hamburger is a div, so it needs keyboard activation of its own
    hamburger.addEventListener("keydown", (e) => {
      if (e.key === "Enter" || e.key === " ") {
        e.preventDefault();
        hamburger.click();
      }
    });

    const closeBtn = document.getElementById("mobile-menu-close");
    if (closeBtn) closeBtn.addEventListener("click", closeMenu);

    // Close on link click
    mobileMenu.querySelectorAll("a").forEach((link) => {
      link.addEventListener("click", closeMenu);
    });

    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape" && mobileMenu.classList.contains("is-open")) {
        closeMenu();
      }
    });

    // Never leave the menu open (and the page unscrollable) on a resize to desktop
    window.addEventListener("resize", () => {
      if (window.innerWidth >= 1024 && mobileMenu.classList.contains("is-open")) {
        closeMenu();
      }
    });
  }

  // Smooth Scrolling for Anchors
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute("href"));
      if (target) {
        target.scrollIntoView({ behavior: "smooth" });
        // Close menu
        if (typeof window.closeMobileMenu === "function") {
          window.closeMobileMenu();
        }
      }
    });
  });

  // Navbar Scroll Logic (Split Pill Design)
  const nav = document.getElementById("main-nav");
  const navBg = document.getElementById("nav-bg");

  const updateNavbar = () => {
    if (!nav || !navBg) return;

    if (window.scrollY > 20) {
      // SCROLLED STATE
      nav.classList.remove("py-6");
      nav.classList.add("py-4");

      // Show the Stacked Gradient Blur Background
      navBg.classList.remove("opacity-0");
      navBg.classList.add("opacity-100");
    } else {
      // TOP STATE
      nav.classList.add("py-6");
      nav.classList.remove("py-4");

      // Hide the Background
      navBg.classList.remove("opacity-100");
      navBg.classList.add("opacity-0");
    }
  };

  window.addEventListener("scroll", updateNavbar);
  updateNavbar(); // Init

  // Seamless looping for background videos
  const bgVideos = document.querySelectorAll("header video");
  bgVideos.forEach((video) => {
    // Explicit ended event listener to loop instantly in browsers that stutter
    video.addEventListener("ended", () => {
      video.currentTime = 0;
      video.play().catch(e => {});
    });
  });

  // Condition Cards Logic: Pre-populate contact form condition
  const conditionCards = document.querySelectorAll(".condition-card");
  const formConditionInput = document.getElementById("form-condition");

  if (conditionCards.length > 0 && formConditionInput) {
    conditionCards.forEach((card) => {
      card.addEventListener("click", () => {
        const condition = card.getAttribute("data-condition");
        if (condition) {
          formConditionInput.value = condition;
          
          // Add a subtle highlight animation to the input field
          formConditionInput.classList.add("ring-2", "ring-accent", "border-accent");
          
          // Temporarily scroll to and focus the field after smooth scroll completes
          setTimeout(() => {
            formConditionInput.focus();
          }, 800);

          // Remove the highlight ring when user starts typing or after 3.5 seconds
          const removeHighlight = () => {
            formConditionInput.classList.remove("ring-2", "ring-accent", "border-accent");
            formConditionInput.removeEventListener("input", removeHighlight);
            formConditionInput.removeEventListener("blur", removeHighlight);
          };
          
          formConditionInput.addEventListener("input", removeHighlight);
          formConditionInput.addEventListener("blur", removeHighlight);
          
          // Clear highlight after 3.5 seconds if no user interaction
          setTimeout(removeHighlight, 3500);
        }
      });
    });
  }
});

/* ===== Review cards: clamp long quotes, toggle with Read more ===== */
document.addEventListener("DOMContentLoaded", () => {
  const quotes = document.querySelectorAll(".review-text");
  if (!quotes.length) return;

  const syncButtons = () => {
    quotes.forEach((quote) => {
      const btn = quote.parentElement.querySelector(".review-more");
      if (!btn) return;
      const overflows = quote.scrollHeight > quote.clientHeight + 1;
      btn.classList.toggle("is-visible", overflows || quote.classList.contains("is-expanded"));
    });
  };

  quotes.forEach((quote) => {
    const btn = quote.parentElement.querySelector(".review-more");
    if (!btn) return;

    btn.addEventListener("click", () => {
      const expanded = quote.classList.toggle("is-expanded");
      btn.textContent = expanded ? "Read less" : "Read more";
      btn.setAttribute("aria-expanded", expanded ? "true" : "false");
      if (window.reviewsSwiper) window.reviewsSwiper.update();
    });
  });

  syncButtons();
  window.addEventListener("load", syncButtons);

  let resizeTimer;
  window.addEventListener("resize", () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(syncButtons, 150);
  });
});
