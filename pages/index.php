<?php include 'head.php'; ?>
<body>
<?php include 'header.php'; ?>
    
    <!-- Sections -->
    <section id="about" class="section">
        <h2>À propos</h2>
        <p>Bienvenue sur mon portfolio ! Je suis étudiant en informatique passionné par le développement et la technologie.</p>
    </section>
    <section id="education" class="section">
        <h2>Parcours scolaire</h2>
        <p>Ajoute ici ton parcours académique sous forme de timeline.</p>
    </section>
    <section id="experience" class="section">
        <h2>Expériences</h2>
        <p>Liste tes stages, projets et expériences professionnelles.</p>
    </section>
    <section id="hobbies" class="section">
        <h2>Hobbies</h2>
        <p>Parle de tes passions, jeux vidéo, sport, ou tout autre centre d'intérêt.</p>
    </section>
    <section id="contact" class="section">
        <h2>Contact</h2>
        <form action="contact.php" method="POST">
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Message :</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">Envoyer</button>
        </form>
    </section>
</body>
</html>
