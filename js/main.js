/* ChicAttireWay - Main Interactive JavaScript */
document.addEventListener('DOMContentLoaded', () => {
  // Mobile menu toggle
  const mobileToggle = document.querySelector('.mobile-toggle');
  const navLinks = document.querySelector('.nav-links');

  if (mobileToggle && navLinks) {
    mobileToggle.addEventListener('click', () => {
      navLinks.classList.toggle('active');
      mobileToggle.setAttribute('aria-expanded', navLinks.classList.contains('active'));
    });
  }

  // Sticky Navbar shadow on scroll
  const navbar = document.querySelector('.navbar');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      navbar?.classList.add('scrolled');
    } else {
      navbar?.classList.remove('scrolled');
    }
  });

  // Animated metric counters
  const counters = document.querySelectorAll('.metric-number');
  if (counters.length > 0) {
    const observerOptions = { threshold: 0.5 };
    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const target = +entry.target.getAttribute('data-target');
          let count = 0;
          const speed = target / 50;
          const updateCount = () => {
            count += speed;
            if (count < target) {
              entry.target.innerText = Math.ceil(count);
              setTimeout(updateCount, 25);
            } else {
              entry.target.innerText = target;
            }
          };
          updateCount();
          obs.unobserve(entry.target);
        }
      });
    }, observerOptions);

    counters.forEach(counter => observer.observe(counter));
  }

  // Interactive Capsule Wardrobe & Outfit Builder Explorer
  const capsuleButtons = document.querySelectorAll('.capsule-btn');
  const capsuleDisplay = document.getElementById('capsule-detail');

  if (capsuleButtons.length > 0 && capsuleDisplay) {
    capsuleButtons.forEach(btn => {
      btn.addEventListener('click', function() {
        capsuleButtons.forEach(b => b.classList.remove('active-capsule'));
        this.classList.add('active-capsule');
        const capName = this.getAttribute('data-cap');
        const description = this.getAttribute('data-desc');
        const versatility = this.getAttribute('data-versatility');

        capsuleDisplay.innerHTML = `
          <div class="style-card" style="border-left: 4px solid var(--accent-rose); margin-top: 1.5rem;">
            <h3 style="color: var(--accent-rose); font-size: 1.5rem; margin-bottom: 0.5rem;">${capName} Outfit Architecture</h3>
            <p style="color: var(--text-secondary); margin-bottom: 1rem;">${description}</p>
            <strong style="color: var(--accent-burgundy); font-size: 0.95rem;">Empirical Versatility Rating: ${versatility}</strong>
          </div>
        `;
      });
    });
  }

  // Personal Style & Silhouette Diagnostic Quiz
  const styleQuizButtons = document.querySelectorAll('.style-quiz-btn');
  const styleQuizResult = document.getElementById('style-quiz-result');

  if (styleQuizButtons.length > 0 && styleQuizResult) {
    styleQuizButtons.forEach(btn => {
      btn.addEventListener('click', function() {
        styleQuizButtons.forEach(b => b.style.opacity = '0.7');
        this.style.opacity = '1';
        const recommendation = this.getAttribute('data-rec');
        styleQuizResult.innerHTML = `
          <div class="style-card" style="background: var(--bg-secondary); margin-top: 1rem; border-color: var(--accent-rose);">
            <h4 style="color: var(--accent-rose); margin-bottom: 0.5rem;">Your Curated Chic Silhouette Profile</h4>
            <p style="color: var(--text-primary); font-weight: 600;">${recommendation}</p>
          </div>
        `;
      });
    });
  }
});
