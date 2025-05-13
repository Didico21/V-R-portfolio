<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Portfolio Cyber</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap" rel="stylesheet">
</head>
<body>

<!-- Loader -->
<div class="loader-wrapper">
    <div class="loader">CYBER LOADING...</div>
</div>

<!-- Contenu principal -->
<div class="content hidden">

    <!-- Logo SVG animé -->
    <header class="header">
        <div class="logo-container">
            <svg viewBox="0 0 800 120" xmlns="http://www.w3.org/2000/svg" class="cyber-logo">
                <defs>
                    <filter id="glitch-effect">
                        <feOffset in="SourceGraphic" dx="-2" dy="0" result="left"/>
                        <feOffset in="SourceGraphic" dx="2" dy="0" result="right"/>
                        <feMerge>
                            <feMergeNode in="left"/>
                            <feMergeNode in="right"/>
                            <feMergeNode in="SourceGraphic"/>
                        </feMerge>
                    </filter>
                </defs>
                <g font-family="Orbitron, sans-serif" font-size="60" font-weight="bold" fill="#00ffff"
                   filter="url(#glitch-effect)">
                    <text x="50" y="80">
                        <tspan class="letter glitch-pink" dx="10">P</tspan>
                        <tspan class="letter glitch-pink" dx="10">O</tspan>
                        <tspan class="letter glitch-pink" dx="10">R</tspan>
                        <tspan class="letter glitch-pink" dx="10">T</tspan>
                        <tspan class="letter glitch-pink" dx="10">F</tspan>
                        <tspan class="letter glitch-pink" dx="10">O</tspan>
                        <tspan class="letter glitch-pink" dx="10">L</tspan>
                        <tspan class="letter glitch-pink" dx="10">I</tspan>
                        <tspan class="letter glitch-pink" dx="10">O</tspan>
                        
                    </text>
                </g>
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

    <section id="about">
        <h2>À propos</h2>
        <p>Je suis un .</p>
        <p>
        
        
        
        
        
        
        
        
        
        
        
        
        
    </section>

    <section id="projects">
        <h2>Projets</h2>
        <p>Voici quelques-unes de mes réalisations...</p>
        
    </section>

    <section id="contact">
        <h2>Contact</h2>
        <p>Email : victorraphaelkelddy@gmail.com</p>
    </section>
</div>

<script>
    window.addEventListener("load", () => {
        document.querySelector(".loader-wrapper").style.display = "none";
        document.querySelector(".content").classList.remove("hidden");
    });
</script>
</body>
</html>
