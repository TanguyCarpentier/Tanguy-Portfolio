<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanguy Carpentier</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
</head>
<body>
    <!-- Curseur personnalisé -->
    <div class="cursor"></div>
    <div class="cursor-follower"></div>

    <!-- Loader -->
    <div class="loader-wrapper">
        <div class="loader">
            <span class="loader-text">TC</span>
        </div>
    </div>

    <header>
        <nav class="navbar">
            <div class="logo" data-aos="fade-right">Tanguy Carpentier</div>
            <ul class="nav-links">
                <li><a href="#about" class="nav-link">À propos</a></li>
                <li><a href="#education" class="nav-link">Parcours</a></li>
                <li><a href="#experiences" class="nav-link">Expériences</a></li>
                <li><a href="#skills" class="nav-link">Compétences</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
            <div class="burger-menu">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </nav>
    </header>

    <main>
        <section id="about" class="section">
        <div class="parallax-background" style="background-image: url('about-bg.jpg');"></div>
            <div class="section-content" data-aos="fade-up">
                <div class="profile-image">
                    <img src="moi.jpg" alt="Tanguy Carpentier" class="hover-effect">
                </div>
                <h1 class="glitch" data-text="Tanguy Carpentier">Tanguy Carpentier</h1>
                <h2 class="typing">Étudiant en Informatique</h2>
                <p class="tagline" data-aos="fade-up" data-aos-delay="200">
                    Transformer des idées en lignes de code et des projets en réalité
                </p>
                <div class="social-links" data-aos="fade-up" data-aos-delay="400">
                    <a href="https://www.linkedin.com/in/tanguy-carpentier-7587222a4/" class="social-icon hover-effect">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </section>

        <section id="education" class="section">
        <div class="parallax-background" style="background-image: url('education-bg.jpg');"></div>
            <div class="section-content">
                <h2 data-aos="fade-down">Parcours Académique</h2>
                <div class="timeline">
                    <div class="timeline-item" data-aos="fade-right">
                        <div class="timeline-content">
                            <h3>BUT Informatique</h3>
                            <p>BUT Amiens, 2023-2026</p>
                            <p class="details">Spécialisation Base de données</p>
                        </div>
                    </div>
                    <div class="timeline-item" data-aos="fade-right" data-aos-delay="200">
                        <div class="timeline-content">
                            <h3>Baccalauréat Général option euro histoire</h3>
                            <p>Lycée Madeleine Michelis, 2022</p>
                            <p class="details">Mention Bien</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="experiences" class="section">
            <div class="section-content">
                <h2 data-aos="fade-down">Mes Expériences</h2>
                <div class="experiences-container">
                    <div class="experience-category" data-aos="fade-right">
                        <h3>Expériences en Informatique</h3>
                        <div class="experience-grid">
                            <div class="experience-card hover-effect">
                                <h4>Développeur Web Stagiaire</h4>
                                <p>Reboot-Services, Toutencourt</p>
                                <p>Janvier 2025 - Mars 2025</p>
                                <p>Refonte de leur site web avec un mini-cms pour modifier le contenu actualité et le désactiver si besoin</p>
                                <p>Et Veille Technologique</p>
                                <button class="learn-more-btn"><a href="https://reboot-services.fr/" target="_blank">En Savoir Plus</a></button>
                            </div>
                            <div class="experience-card hover-effect">
                                <h4>Création Site Web</h4>
                                <p>Pour l'association La Grange à Soie</p>
                                <p>Décembre 2024</p>
                                <p>Voir le site <a href="http://grangesoie.fr" target="_blank">grangesoie.fr</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="experience-category" data-aos="fade-left">
                        <h3>Expériences Hors Informatique</h3>
                        <div class="experience-grid">
                            <div class="experience-card hover-effect">
                                <h4>Employé Logistique</h4>
                                <p>Leroy Merlin, Amiens</p>
                                <p>Août 2024 - Aujourd'hui</p>
                                <p>Préparation de commande, délivrance de commande au client</p>
                            </div>
                            <div class="experience-card hover-effect">
                                <h4>Vendeur</h4>
                                <p>Brico Dépôt, Dury</p>
                                <p>Novembre 2022 - Août 2024</p>
                                <p>Conseil client, Mise en rayon, Gestion du Service après vente</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="skills" class="section">
            <div class="section-content">
                <h2 data-aos="fade-down">Compétences</h2>
                <div class="skills-container">
                    <div class="skill-category" data-aos="fade-up" data-aos-delay="100">
                        <h3>Gestion de base de données</h3>
                        <ul>
                            <li class="hover-effect">SQL</li>
                            <li class="hover-effect">PL/SQL</li>
                            <li class="hover-effect">ORACLE</li>
                        </ul>
                    </div>
                    <div class="skill-category" data-aos="fade-up" data-aos-delay="200">
                        <h3>Web</h3>
                        <ul>
                            <li class="hover-effect">HTML5</li>
                            <li class="hover-effect">CSS3</li>
                            <li class="hover-effect">PHP</li>
                        </ul>
                    </div>
                    <div class="skill-category" data-aos="fade-up" data-aos-delay="300">
                        <h3>Gestion du numérique</h3>
                        <ul>
                            <li class="hover-effect">Excel</li>
                            <li class="hover-effect">Word</li>
                            <li class="hover-effect">Vegas Pro</li>
                            <li class="hover-effect">Canva</li>
                        </ul>
                    </div>
                    <div class="skill-category" data-aos="fade-up" data-aos-delay="400">
                        <h3>Système d'exploitation</h3>
                        <ul>
                            <li class="hover-effect">Windows</li>
                            <li class="hover-effect">Unix</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="cv" class="section">
            <div class="section-content" data-aos="fade-up">
                <h2>Mon CV</h2>
                <div class="cv-download hover-effect">
                    <a href="cv.pdf" target="_blank" class="download-btn">
                        <i class="fas fa-download"></i>
                        Télécharger mon CV
                    </a>
                </div>
            </div>
        </section>

        <section id="contact" class="section">
            <div class="section-content">
                <h2 data-aos="fade-down">Contactez-moi</h2>
                <form id="contact-form" action="contact.php" method="POST" data-aos="fade-up">
                    <div class="form-group">
                        <label for="name">Nom complet</label>
                        <input type="text" id="name" name="name" required class="hover-effect">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required class="hover-effect">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" required class="hover-effect"></textarea>
                    </div>
                    <button type="submit" class="hover-effect">Envoyer</button>
                </form>
            </div>
        </section>
    </main>

    <footer data-aos="fade-up">
        <p>© 2025 Tanguy Carpentier. Tous droits réservés.</p>
        <div class="footer-links">
            <a href="#" class="hover-effect">Mentions légales</a>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="script.js"></script>
</body>
</html>