function toggleMenu() {
      const nav = document.getElementById('nav');
      nav.classList.toggle('active');
    }

    function switchLanguage(lang) {
      // Update <html> lang attribute
      document.getElementById('html-tag').setAttribute('lang', lang);

      // Toggle visibility of elements with data-lang
      document.querySelectorAll('[data-lang]').forEach(el => {
        el.classList.toggle('d-none', el.getAttribute('data-lang') !== lang);
      });
    }

    let countdownInterval = null;

    function updateCountdown() {
      const countdownContainer = document.getElementById("countdown");
      if (!countdownContainer) return; // Exit if countdown element doesn't exist

      const daysEl = document.getElementById("days");
      const hoursEl = document.getElementById("hours");
      const minutesEl = document.getElementById("minutes");
      const secondsEl = document.getElementById("seconds");

      // Exit if any of the specific time elements are missing
      if (!daysEl || !hoursEl || !minutesEl || !secondsEl) {
        return;
      }

      const targetDate = new Date("2025-10-22T00:00:00").getTime();
      const now = new Date().getTime();
      const timeLeft = targetDate - now;

      if (timeLeft < 0) {
        countdownContainer.innerHTML = '<p class="display-6 text-success fw-bold">The event has started!</p>';
        clearInterval(countdownInterval); // Stop the timer
        return;
      }

      const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
      const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

      
      // Update the content of each time block
      daysEl.textContent = days;
      hoursEl.textContent = String(hours).padStart(2, '0');
      minutesEl.textContent = String(minutes).padStart(2, '0');
      secondsEl.textContent = String(seconds).padStart(2, '0');
    }

    // Run countdown every second
    countdownInterval = setInterval(updateCountdown, 1000);
    updateCountdown();

// Header scroll effect
document.addEventListener('DOMContentLoaded', function() {
  const header = document.querySelector('header');
  if (!header) return;

  const scrollThreshold = 50; // Pixels to scroll before shrinking header

  window.addEventListener('scroll', () => {
    if (window.scrollY > scrollThreshold) {
      header.classList.add('header-scrolled');
    } else {
      header.classList.remove('header-scrolled');
    }
  });
});
