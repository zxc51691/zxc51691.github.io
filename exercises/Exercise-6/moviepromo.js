(() => {
    const CONFIG = {
      NAVBAR_SELECTOR: '#moviepromo-nav',
      MENU_LINKS_SELECTOR: '#moviepromo-nav-menu a[href^="#"]',
      CAROUSEL_SELECTOR: '#moviepromo-carousel',
      CAST_CARDS_SELECTOR: '.cast-card',
      REVIEW_CARDS_SELECTOR: '.review-card',
      ANIMATION_THRESHOLD: 0.1,
      CAROUSEL_INTERVAL: 5000,
      TRANSITION_DURATION: '0.5s'
    };
  
    const createObserver = (callback, threshold = CONFIG.ANIMATION_THRESHOLD) => (
      new IntersectionObserver(callback, { threshold })
    );
  
    const setInitialStyles = (element, styles) => {
      Object.assign(element.style, styles);
    };
  
    const handleElementAnimation = (entries, getAnimationStyles) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const styles = getAnimationStyles();
          setInitialStyles(entry.target, styles);
        }
      });
    };
  
    const initSmoothScroll = () => {
      const navbar = document.querySelector(CONFIG.NAVBAR_SELECTOR);
      
      document.querySelectorAll(CONFIG.MENU_LINKS_SELECTOR).forEach(anchor => {
        anchor.addEventListener('click', (e) => {
          e.preventDefault();
          const targetId = anchor.getAttribute('href');
          const targetElement = document.querySelector(targetId);
  
          if (targetElement) {
            const navbarHeight = navbar.offsetHeight;
            const targetPosition = targetElement.offsetTop - navbarHeight;
  
            window.scrollTo({
              top: targetPosition,
              behavior: 'smooth'
            });
          }
        });
      });
    };
  
    const initCarousel = () => {
      const carouselElement = document.querySelector(CONFIG.CAROUSEL_SELECTOR);
      if (carouselElement) {
        return new bootstrap.Carousel(carouselElement, {
          interval: CONFIG.CAROUSEL_INTERVAL,
          keyboard: true
        });
      }
    };
  
    const initAnimations = () => {
      const castCards = document.querySelectorAll(CONFIG.CAST_CARDS_SELECTOR);
      if (castCards.length) {
        const castObserver = createObserver(entries => 
          handleElementAnimation(entries, () => ({
            opacity: '1',
            transform: 'translateY(0)',
            transition: `all ${CONFIG.TRANSITION_DURATION} ease-in-out`
          }))
        );
  
        castCards.forEach(card => {
          setInitialStyles(card, {
            opacity: '0',
            transform: 'translateY(20px)'
          });
          castObserver.observe(card);
        });
      }
  
      const reviewCards = document.querySelectorAll(CONFIG.REVIEW_CARDS_SELECTOR);
      if (reviewCards.length) {
        const reviewObserver = createObserver(entries =>
          handleElementAnimation(entries, () => ({
            opacity: '1',
            transform: 'translateX(0)',
            transition: `all ${CONFIG.TRANSITION_DURATION} ease-in-out`
          }))
        );
  
        reviewCards.forEach(review => {
          setInitialStyles(review, {
            opacity: '0',
            transform: 'translateX(-20px)'
          });
          reviewObserver.observe(review);
        });
      }
    };
  
    const init = () => {
      initSmoothScroll();
      initCarousel();
      initAnimations();
    };
  
    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', init);
    } else {
      init();
    }
  })();