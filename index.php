<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanguy Carpentier</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">Tanguy Carpentier</div>
            <ul class="nav-links">
                <li><a href="#about">À propos</a></li>
                <li><a href="#education">Parcours</a></li>
                <li><a href="#experiences">Expériences</a></li>
                <li><a href="#skills">Compétences</a></li>
                <li><a href="#contact">Contact</a></li>
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
            <div class="section-content">
                <div class="profile-image">
                    <img src="moi.jpg" alt="Tanguy Carpentier">
                </div>
                <h1>Tanguy Carpentier</h1>
                <h2>Étudiant en Informatique</h2>
                <p class="tagline">Transformer des idées en lignes de code et des projets en réalité</p>
                <div class="social-links">
                    <a href="https://www.linkedin.com/in/tanguy-carpentier-7587222a4/" class="social-icon"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </section>

        <section id="education" class="section">
            <div class="section-content">
                <h2>Parcours Académique</h2>
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-content">
                            <h3>BUT Informatique</h3>
                            <p>BUT Amiens, 2023-2026</p>
                            <p class="details">Spécialisation Base de données</p>
                        </div>
                    </div>
                    <div class="timeline-item">
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
                <h2>Mes Expériences</h2>
                <div class="experiences-container">
                    <div class="experience-category">
                        <h3>Expériences en Informatique</h3>
                        <div class="experience-grid">
                            <div class="experience-card">
                                <h4>Développeur Web Stagiaire</h4>
                                <p>Reboot-Services, Toutencourt</p>
                                <p>Janvier 2025 à Mars 2025</p>
                                <p>Refonte de leur site web avec un mini-cms pour modifier le contenu actualité et le désactiver si besoin</p>
                                <p>Et Veille Technologique</p>
                                <p>bouton en savoir plus </p>
                            </div>
                            <div class="experience-card">
                                <h4>Création Site Web</h4>
                                <p>Pour l'association La Grange à Soie</p>
                                <p>Décembre 2024</p>
                                <p>voir le site grangesoie.fr</p>
                            </div>
                        </div>
                    </div>
                    <div class="experience-category">
                        <h3>Expériences Hors Informatique</h3>
                        <div class="experience-grid">
                            <div class="experience-card">
                                <h4>Employé Logistique</h4>
                                <p>Leroy Merlin, Amiens</p>
                                <p>Août 2024 à aujourd'hui</p>
                                <p>Préparation de commande, délivrance de commande au client</p>
                            </div>
                            <div class="experience-card">
                                <h4>Vendeur</h4>
                                <p>Brico Dépôt, Dury</p>
                                <p>Novembre 2022 à Août 2024</p>
                                <p>Conseil client, Mise en rayon, Gestion du Service après vente</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="skills" class="section">
            <div class="section-content">
                <h2>Compétences</h2>
                <div class="skills-container">
                    <div class="skill-category">
                        <h3>Programmation</h3>
                        <ul>
                            <li>Python</li>
                            <li>JavaScript</li>
                            <li>PHP</li>
                            <li>Java</li>
                        </ul>
                    </div>
                    <div class="skill-category">
                        <h3>Web</h3>
                        <ul>
                            <li>HTML5</li>
                            <li>CSS3</li>
                            <li>React</li>
                            <li>Node.js</li>
                        </ul>
                    </div>
                    <div class="skill-category">
                        <h3>Outils</h3>
                        <ul>
                            <li>Git</li>
                            <li>Docker</li>
                            <li>VSCode</li>
                            <li>MySQL</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="section">
            <div class="section-content">
                <h2>Contactez-moi</h2>
                <form id="contact-form" action="contact.php" method="POST">
                    <div class="form-group">
                        <label for="name">Nom complet</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    <button type="submit">Envoyer</button>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <p>© 2025 Tanguy Carpentier. Tous droits réservés.</p>
        <div class="footer-links">
            <a href="#">Mentions légales</a>
        </div>
    </footer>
</body>
<script src="script.js"></script>
</html>