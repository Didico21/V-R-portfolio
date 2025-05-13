<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon Portfolio - Style Sonic the Hedgehog</title>
    <style>
        /* Fond de la page */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #0099FF;
            color: white;
        }

        /* Effet de ciel dynamique */
        .background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://www.transparenttextures.com/patterns/squares.png'), linear-gradient(135deg, #00BFFF, #0088CC);
            background-size: 100%, cover;
            animation: moveBackground 10s linear infinite;
        }

        @keyframes moveBackground {
            0% { background-position: 0 0; }
            100% { background-position: -5000px 0; }
        }

        /* Header */
        header {
            background: #FFD700;
            padding: 50px 0;
            text-align: center;
            color: #003366;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        header h1 {
            font-size: 3em;
            margin: 0;
        }

        header p {
            font-size: 1.5em;
            color: #FF4500;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        /* Navigation */
        nav {
            background: #003366;
            padding: 10px 0;
            text-align: center;
        }

        nav a {
            color: #FFD700;
            font-size: 1.2em;
            margin: 0 20px;
            text-decoration: none;
            text-transform: uppercase;
        }

        nav a:hover {
            color: #FF4500;
        }

        /* Section générale */
        section {
            padding: 60px 10%;
            text-align: center;
        }

        section h2 {
            font-size: 2.5em;
            margin-bottom: 30px;
            color: #FFD700;
        }

        /* Style des projets */
        .project {
            background: #003366;
            padding: 20px;
            margin: 20px 0;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(255, 165, 0, 0.7);
            transition: transform 0.3s ease;
        }

        .project:hover {
            transform: scale(1.05);
        }

        .project h3 {
            color: #FF4500;
        }

        .project p {
            color: #FFD700;
            font-size: 1.2em;
        }

        /* Contact */
        .contact ul {
            list-style: none;
            padding: 0;
        }

        .contact li {
            font-size: 1.2em;
            color: #FFD700;
            margin: 10px 0;
        }

        .contact a {
            color: #FF4500;
            text-decoration: none;
        }

        .contact a:hover {
            text-decoration: underline;
        }

        /* Footer */
        footer {
            background: #003366;
            color: #FFD700;
            text-align: center;
            padding: 20px;
            font-size: 1.2em;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>

    <!-- Fond dynamique -->
    <div class="background"></div>

    <!-- En-tête -->
    <header>
        <h1>Mon Portfolio Sonic</h1>
        <p>Vitesse, énergie et créativité dans chaque projet</p>
    </header>

    <!-- Navigation -->
    <nav>
        <a href="#about">À propos</a>
        <a href="#projects">Projets</a>
        <a href="#contact">Contact</a>
    </nav>

    <!-- Section À propos -->
    <section id="about">
        <h2>À propos de moi</h2>
        <p>Je suis un développeur web rapide comme Sonic, toujours à la recherche de nouveaux défis à relever. Mon domaine d'expertise inclut HTML, CSS, JavaScript et des frameworks modernes comme React et Node.js. J'aime coder avec énergie et passion, pour créer des expériences dynamiques et interactives.</p>
    </section>

    <!-- Section Projets -->
    <section id="projects">
        <h2>Mes Projets</h2>

        <div class="project">
            <h3>Projet 1 - Course contre la montre</h3>
            <p>Un jeu dynamique avec une interface utilisateur inspirée de Sonic, où les utilisateurs peuvent tester leurs réflexes en courant à travers un parcours virtuel.</p>
        </div>

        <div class="project">
            <h3>Projet 2 - Applications rapides</h3>
            <p>Développement d'une application web rapide pour la gestion de tâches, permettant de gérer les projets comme un véritable héros du code.</p>
        </div>

        <div class="project">
            <h3>Projet 3 - Site interactif</h3>
            <p>Un site web interactif avec des animations inspirées de l'univers de Sonic, créant une expérience immersive pour les utilisateurs.</p>
        </div>
    </section>

    <!-- Section Contact -->
    <section id="contact" class="contact">
        <h2>Contact</h2>
        <p>Besoin d'un projet aussi rapide que Sonic ? N'hésitez pas à me contacter :</p>
        <ul>
            <li>Email : <a href="mailto:monemail@example.com">monemail@example.com</a></li>
            <li>LinkedIn : <a href="https://www.linkedin.com/in/monprofil" target="_blank">Mon profil LinkedIn</a></li>
        </ul>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Mon Portfolio Sonic. Tous droits réservés.</p>
    </footer>

</body>
</html>
