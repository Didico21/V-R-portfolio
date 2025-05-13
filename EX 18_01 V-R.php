import zipfile

# Contenu HTML
html_content = """<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Portfolio Graphique</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap" rel="stylesheet">
</head>
<body>
<div class="loader-wrapper"><div class="loader">CHARGEMENT...</div></div>
<div class="content hidden">
<header class="header">
    <div class="logo-container">
        <svg viewBox="0 0 800 120" xmlns="http://www.w3.org/2000/svg" class="logo-svg">
            <defs>
                <filter id="green-glow">
                    <feDropShadow dx="0" dy="0" stdDeviation="3" flood-color="#00ff55"/>
                </filter>
            </defs>
            <text x="50" y="80" font-family="Orbitron" font-size="60" fill="#00ff55" filter="url(#green-glow)">
                GRAPHIX
            </text>
        </svg>
    </div>
    <nav>
        <ul>
            <li><a href="#about">À propos</a></li>
            <li><a href="#projects">Projets</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
</header>
<section id="about"><h2>À propos</h2><p>Spécialiste en design graphique et motion design, je transforme les idées en visuels puissants.</p></section>
<section id="projects"><h2>Projets</h2><p>Découvrez mes créations graphiques et identités visuelles.</p></section>
<section id="contact"><h2>Contact</h2><p>Email : contact@graphixdesign.com</p></section>
</div>
<script>
    window.addEventListener("load", () => {
        document.querySelector(".loader-wrapper").style.display = "none";
        document.querySelector(".content").classList.remove("hidden");
    });
</script>
</body>
</html>
"""

# Contenu CSS
css_content = """body {
    margin: 0;
    font-family: 'Orbitron', sans-serif;
    background-color: #000;
    color: #00ff55;
    overflow-x: hidden;
}
.loader-wrapper {
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: black;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 9999;
}
.loader {
    color: #00ff55;
    font-size: 2rem;
    animation: blink 1.2s infinite;
}
@keyframes blink {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.3; }
}
.hidden { display: none; }
.logo-svg {
    width: 100%;
    max-width: 600px;
    display: block;
    margin: 30px auto;
    animation: pulse 2s infinite;
}
@keyframes pulse {
    0% { transform: scale(1); opacity: 1; }
    50% { transform: scale(1.05); opacity: 0.9; }
    100% { transform: scale(1); opacity: 1; }
}
.header {
    text-align: center;
    padding: 20px;
}
nav ul {
    list-style: none;
    display: flex;
    justify-content: center;
    gap: 30px;
    padding: 0;
}
nav a {
    text-decoration: none;
    color: #00ff55;
    font-size: 1.2rem;
    transition: color 0.3s;
}
nav a:hover {
    color: #ffffff;
}
section {
    padding: 60px 20px;
    max-width: 900px;
    margin: auto;
}
h2 {
    color: #ffffff;
}
"""

# Création du ZIP
with zipfile.ZipFile("portfolio_graphique_vert.zip", "w") as zf:
    zf.writestr("index.html", html_content)
    zf.writestr("style.css", css_content)
