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
                    <img src="/api/placeholder/300/300" alt="Tanguy Carpentier">
                </div>
                <h1>Tanguy Carpentier</h1>
                <h2>Étudiant en Informatique</h2>
                <p class="tagline">Passionné par l'innovation technologique, je développe des solutions créatives et efficaces.</p>
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
                            <h3>Licence en Informatique</h3>
                            <p>Université Tech Paris, 2021-2024</p>
                            <p class="details">Mention Bien | Projets innovants en développement web</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-content">
                            <h3>DUT Informatique</h3>
                            <p>IUT Lyon, 2019-2021</p>
                            <p class="details">Major de promotion | Spécialisation développement mobile</p>
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
                                <p>Entreprise Tech Innovate, Paris</p>
                                <p>Développement d'applications web responsive avec React</p>
                            </div>
                            <div class="experience-card">
                                <h4>Assistant R&D</h4>
                                <p>Laboratoire Universitaire, Paris</p>
                                <p>Contribution à des projets de recherche en intelligence artificielle</p>
                            </div>
                        </div>
                    </div>
                    <div class="experience-category">
                        <h3>Expériences Hors Informatique</h3>
                        <div class="experience-grid">
                            <div class="experience-card">
                                <h4>Animateur Socioculturel</h4>
                                <p>Centre Communal, Lyon</p>
                                <p>Coordination d'activités pour jeunes et gestion de projets</p>
                            </div>
                            <div class="experience-card">
                                <h4>Vendeur</h4>
                                <p>Boutique de Sport, Paris</p>
                                <p>Conseil client et gestion des ventes</p>
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