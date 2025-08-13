
      <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });

        // Add hover animation to cards
        document.querySelectorAll('.card-hover').forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.classList.add('animate__pulse');
            });
            card.addEventListener('mouseleave', () => {
                card.classList.remove('animate__pulse');
            });
        });
    </script>
     <script>
        // Typewriter Effect
        class TypeWriter {
            constructor(txtElement, words, wait = 3000) {
                this.txtElement = txtElement;
                this.words = words;
                this.txt = '';
                this.wordIndex = 0;
                this.wait = parseInt(wait, 10);
                this.type();
                this.isDeleting = false;
            }

            type() {
                const current = this.wordIndex % this.words.length;
                const fullTxt = this.words[current];

                if (this.isDeleting) {
                    this.txt = fullTxt.substring(0, this.txt.length - 1);
                } else {
                    this.txt = fullTxt.substring(0, this.txt.length + 1);
                }

                this.txtElement.innerHTML = `<span class="txt">${this.txt}</span>`;

                let typeSpeed = 100;

                if (this.isDeleting) {
                    typeSpeed /= 2;
                }

                if (!this.isDeleting && this.txt === fullTxt) {
                    typeSpeed = this.wait;
                    this.isDeleting = true;
                } else if (this.isDeleting && this.txt === '') {
                    this.isDeleting = false;
                    this.wordIndex++;
                    typeSpeed = 500;
                }

                setTimeout(() => this.type(), typeSpeed);
            }
        }

        document.addEventListener('DOMContentLoaded', init);

        function init() {
            const txtElement = document.querySelector('.typewriter');
            const words = JSON.parse(txtElement.getAttribute('data-text'));
            const wait = txtElement.getAttribute('data-wait') || 3000;
            new TypeWriter(txtElement, words, wait);
        }
    </script>

        <script>
        // Initialize AOS animation library
        AOS.init({
            once: true // Animations will only happen once
        });

        // Optional: Add scroll reveal effect
        document.addEventListener('DOMContentLoaded', function() {
            const hero = document.querySelector('.hero-section');
            window.addEventListener('scroll', function() {
                const scrollPosition = window.scrollY;
                hero.style.backgroundPositionY = scrollPosition * 0.5 + 'px';
            });
        });
    </script>

<!-- Counting Animation Script -->
    <script>
        // Counter animation for stats
        const counters = document.querySelectorAll('.counter');
        const speed = 200;

        function animateCounters() {
            counters.forEach(counter => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const increment = target / speed;

                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(animateCounters, 1);
                } else {
                    counter.innerText = target + '+';
                }
            });
        }

        // Start counting when section is in view
        const statsSection = document.querySelector('.stats-card');
        const observer = new IntersectionObserver((entries) => {
            if (entries[0].isIntersecting) {
                animateCounters();
            }
        });

        if (statsSection) {
            observer.observe(statsSection);
        }

        // Add hover class to cards
        document.querySelectorAll('.card-hover').forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.classList.add('animate__pulse');
            });
            card.addEventListener('mouseleave', () => {
                card.classList.remove('animate__pulse');
            });
        });
    </script>

     <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <!-- Initialize AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


