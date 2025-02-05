document.addEventListener('DOMContentLoaded', () => {
    // Initialisation AOS
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100
    });

    // Gestion du loader
    window.addEventListener('load', () => {
        const loader = document.querySelector('.loader-wrapper');
        loader.style.opacity = '0';
        setTimeout(() => {
            loader.style.display = 'none';
        }, 500);
    });


    // Effet hover sur les liens
    document.querySelectorAll('a').forEach(link => {
        link.addEventListener('mouseenter', () => {
            cursor.style.transform = 'scale(1.5)';
            cursorFollower.style.transform = 'scale(1.5)';
        });
        
        link.addEventListener('mouseleave', () => {
            cursor.style.transform = 'scale(1)';
            cursorFollower.style.transform = 'scale(1)';
        });
    });

    // Navigation mobile
    const burgerMenu = document.querySelector('.burger-menu');
    const navLinks = document.querySelector('.nav-links');

    burgerMenu.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        burgerMenu.classList.toggle('active');
    });

    // Blue interaction highlights
    document.querySelectorAll('.hover-effect').forEach(el => {
        el.addEventListener('mouseenter', () => {
            el.style.boxShadow = '0 0 15px rgba(21, 158, 223, 0.4)';
        });
        el.addEventListener('mouseleave', () => {
            el.style.boxShadow = 'none';
        });
    });

    // Advanced parallax with blue depth
    window.addEventListener('scroll', () => {
        const scrollPosition = window.pageYOffset;
        document.querySelectorAll('.parallax-background').forEach(bg => {
            bg.style.transform = `translateY(${scrollPosition * 0.3}px)`;
            bg.style.filter = `brightness(${1 - scrollPosition * 0.001}) hue-rotate(${scrollPosition * 0.1}deg)`;
        });
    });

    // Scroll spy pour la navigation
    const sections = document.querySelectorAll('section');
    const navItems = document.querySelectorAll('.nav-link');

    window.addEventListener('scroll', () => {
        let current = '';
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            
            if (scrollY >= (sectionTop - sectionHeight / 3)) {
                current = section.getAttribute('id');
            }
        });

        navItems.forEach(item => {
            item.classList.remove('active');
            if (item.getAttribute('href').slice(1) === current) {
                item.classList.add('active');
            }
        });

        // Effet de parallaxe pour les arrière-plans
        document.querySelectorAll('.parallax-background').forEach(background => {
            const distance = window.scrollY;
            background.style.transform = `translateY(${distance * 0.1}px)`;
        });
    });

    // Smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
});
