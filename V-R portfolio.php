<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Portfolio - Victor-Raphaël Kelddy</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
         .banner {
    text-align: center;
    padding: 60px 20px 40px;
    background: linear-gradient(90deg, #2c3e50, #3498db);
    color: #fff;
    border-bottom: 3px solid #ffdd57;
}

.banner h1 {
    font-size: 3em;
    margin-bottom: 10px;
    font-weight: bold;
}

.banner p {
    font-size: 1.2em;
    color: #ffd700;
}

    
        .profile-pic {
    text-align: center;
    margin-bottom: 30px;
}

.profile-pic img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    border: 4px solid #ffdd57;
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    transition: transform 0.3s ease;
}

.profile-pic img:hover {
    transform: scale(1.05);
}

    
        .portfolio-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.project-card {
    background-color: #ffffff15;
    padding: 20px;
    border-radius: 15px;
    transition: transform 0.3s, box-shadow 0.3s;
    border: 1px solid #ffffff22;
}

.project-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 24px rgba(0,0,0,0.3);
}

.project-card h3 {
    color: #ffd700;
    margin-bottom: 10px;
}

.project-card p {
    font-size: 1em;
    margin-bottom: 10px;
}

.project-card a {
    color: #ffdd57;
    font-weight: bold;
    text-decoration: none;
}

.project-card a:hover {
    text-decoration: underline;
}

        body {
            margin: 0;
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(135deg, #2c3e50, #3498db);
            color: #fff;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .card {
            background-color: #ffffff10;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.2);
            backdrop-filter: blur(10px);
        }

        h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        h2 {
            color: #ffd700;
            margin-top: 30px;
        }

        p, li {
            font-size: 1.1em;
            line-height: 1.6;
        }

        ul {
            padding-left: 20px;
        }

        a {
            color: #ffdd57;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .button {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 24px;
            background-color: #ffdd57;
            color: #2c3e50;
            font-weight: bold;
            border-radius: 30px;
            transition: 0.3s ease;
            text-decoration: none;
        }

        .button:hover {
            background-color: #e6c84d;
        }

        @media (max-width: 600px) {
            h1 {
                font-size: 2em;
            }
        }
    </style>
</head>
<body>
    <header class="banner">
    <h1>Victor-Raphaël Kelddy</h1>
    <p>Étudiant en MMI à l’Université des Antilles</p>
</header>

    <div class="container">
        <div class="card">
            <h1>Victor-Raphaël Kelddy</h1>
            <p><strong>Âge :</strong> 19 ans</p>
            <p><strong>Date de naissance :</strong> 18 mars 2006</p>
            <p><strong>Études :</strong> 1ère année MMI - Université des Antilles, Saint-Claude</p>
            <p><strong>Email :</strong> <a href="mailto:victorraphaelkelddy@gmail.com">victorraphaelkelddy@gmail.com</a></p>
            
            <div class="profile-pic">
    <img src="WhatsApp Image 2024-12-31 at 20.32.14 (1).jpeg" alt=""WhatsApp Image 2024-12-31 at 20.32.14 (1)">
</div>

            
            <a class="button" href="cv-victor-kelddy.pdf" download>Télécharger mon CV</a>

            <h2>À propos de moi</h2>
            <p>Étudiant dans le domaine du multimédia, j’aime explorer la création des jeux vidéos et le graphisme. Je suis en constante évolution pour développer mes compétences en terme de communication humaine et construire un avenir.</p>

            <h2>Compétences</h2>
            <ul>
                <li>Adobe express/Carva</li>
                <li></li>
                <li></li>
                <li></li>
            </ul>

            <h2>Projets</h2>
            <p>Voici quelques projets que j’ai réalisés ou auxquels j’ai participé :</p>
            <ul>
                <h2>Mes projets</h2>
<div class="portfolio-grid">
    <div class="project-card">
        <h3>SAE 2.</h3>
        <p></p>
        <a href="#" target="_blank">Voir le projet</a>
    </div>

    <div class="project-card">
        <h3>SAE 2</h3>
        <p></p>
        <a href="#" target="_blank">Voir les visuels</a>
    </div>

    <div class="project-card">
        <h3>SAE 2</h3>
        <p></p>
        <a href="#" target="_blank">Regarder la vidéo</a>
    </div>
</div>

                <li></li>
                <li></li>
                <li></li>
            </ul>

            <h2>Contact</h2>
            <p>N’hésitez pas à me contacter pour toute collaboration ou opportunité via mon <a href="mailto:victorraphaelkelddy@gmail.com">email</a>.</p>
        </div>
    </div>
</body>
</html>
