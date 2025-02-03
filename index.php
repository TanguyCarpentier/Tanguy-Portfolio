<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">Mon Portfolio</div>
            <ul class="nav-links">
                <li><a href="#about">À propos</a></li>
                <li><a href="#education">Parcours</a></li>
                <li><a href="#projects">Projets</a></li>
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
                    <img src="/api/placeholder/300/300" alt="Profile Picture">
                </div>
                <h1>Jean Dupont</h1>
                <h2>Développeur Web & Étudiant en Informatique</h2>
                <p>Passionné par l'innovation technologique, je développe des solutions créatives et efficaces.</p>
                <div class="social-links">
                    <a href="#" class="social-icon"><i class="fab fa-github"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
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
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-content">
                            <h3>DUT Informatique</h3>
                            <p>IUT Lyon, 2019-2021</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="projects" class="section">
            <div class="section-content">
                <h2>Mes Projets</h2>
                <div class="projects-grid">
                    <div class="project-card">
                        <img src="/api/placeholder/400/300" alt="Projet 1">
                        <h3>Application Mobile</h3>
                        <p>Application de suivi de fitness développée en React Native</p>
                    </div>
                    <div class="project-card">
                        <img src="/api/placeholder/400/300" alt="Projet 2">
                        <h3>Site Web E-commerce</h3>
                        <p>Plateforme de vente en ligne avec système de paiement sécurisé</p>
                    </div>
                    <div class="project-card">
                        <img src="/api/placeholder/400/300" alt="Projet 3">
                        <h3>Dashboard Analytics</h3>
                        <p>Tableau de bord avec visualisation de données en temps réel</p>
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
        <p>© 2024 Jean Dupont. Tous droits réservés.</p>
    </footer>
</body>
</html>