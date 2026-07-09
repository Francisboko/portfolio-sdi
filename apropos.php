<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À Propos</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="apropos2">
<nav>
    <a class="logo" href="index.php">
        <img src="logo-sdi2.png" alt="Logo SDI" style="height: 45px; vertical-align: middle;">
    </a>
    <div class="titre-simple">
        <span></h2>SDI Votre Partenaire Numérique à Madagascar</h2></span>
    </div>
    <button class="menu-toggle" onclick="event.stopPropagation(); document.querySelector('.nav-links').classList.toggle('active')">☰</button>
    <div class="nav-links">
        <a href="index.php">Accueil</a>
        <a href="apropos.php" class="actif">À propos</a>
        <a href="services.php">Services</a>
        <a href="contact.php">Contact</a>
        <a href="portfolio.php">Portfolio</a>
        <a href="galerie.php">Galerie-Photo</a>
    </div>
</nav>

<div class="hero">
    <h1>À <span>Propos de moi</span></h1>
    <p>Découvrez mon parcours et ma passion</p>
</div>
<div class="section">
       <h2 style="color: orange;"> QUI SUIS-JE </h2>
    <div class="ligne-bleu" style="background-color: white;"></div>
    <div class="card" style="width:100%; text-align:left;">
<img src="Francis_B.jpg" alt="Francis" class="card-img">
</div><br>
    <div class="card card-presentation">
    <p>Je m'appelle <span class="nom-accent">BOKOARIVELO Francis</span>, développeur web et infographiste passionné en informatique. J'apprends chaque jour de nouvelles technologies comme HTML, CSS, PHP, MySQL, Java, Python et JavaScript.</p>
    <p>Mon objectif est de créer des sites web, applications web, applications mobile et outil graphisme utiles et performantes pour aider les gens dans leur vie quotidienne.</p>
</div>
    <br><br>
     <h2 style="color: orange;">Informations</h2>
    <div class="ligne-bleu" style="background-color: white;"></div>

    <div class="cards">
        <div class="card">
            <div class="icone"></div>
            <h3>Formation</h3>
            <p style="color: orange;">Master en informatique parcour genie logiciel et base des données</p>
        <img src="master.jpg" alt="Login Logout" class="card-img">
    </div>    
<div class="cards">
        <div class="card" style="background-color: #3a3a45;">
            <div class="icone"></div>
            <h3 style="color: orange;">MA PASSION</h3>
            <p><span style="color: orange;">Intelligence Artificielle</span><span style="color: white;">(Claude AI, Gemini, ChatGPT, Capcut, Grok, KlingAI, Canva Pro...)</span></p>
        <img src="claude.jpg" alt="Login Logout" class="card-img">
    </div>    
        <div class="card" style="background-image: url('fond4.jpg'); background-size: cover; background-position: center;">
            <div class="icone" style="font-size: 2.5em; filter: drop-shadow(0 0 6px black);">💻</div>
            <h2 style="color: #ffffff; text-shadow: 2px 2px 8px black, 0 0 10px black; font-weight: 900;">SPECIALITE</h2>
            <p style="color: #ffffff; text-shadow: 1px 1px 6px black, 0 0 6px black; font-weight: 600;">Développement Web/ Graphisme</p>
        </div>
<div class="section">
    <h2 style="color: orange;">CLIC ICI</h2>
    <div class="ligne-bleu" style="background-color: white;"></div>
    <a href="maps.php">
        <div class="card" style="background-image: url('fond3.jpg'); background-size: cover; background-position: center;">
            <h1 style="color: #ffffff; text-shadow: 2px 2px 8px black, 0 0 10px black; font-weight: 900;">LOCALISATION</h1>
            <p style="color: #ffffff; text-shadow: 1px 1px 6px black, 0 0 6px black; font-weight: 600;">Antananarivo-Madagascar</p>
        </div>
    </a>
</div>
</div>
</div>
</div>

<!-- FOOTER -->
<footer>
    <div class="footer-container">
        <div class="footer-col">
            <img src="logo-sdi2.png" alt="Logo SDI" style="height: 50px;">
            <h3>SDI</h3>
        </div>
        <div class="footer-col">
            <h4>À propos</h4>
            <p>
                Le spécialiste des services de développement web et d'infographie à Madagascar. 
                Notre engagement : la réussite de vos projets grâce à des solutions sur-mesure.
            </p>
        </div>
        <div class="footer-col">
            <h4>Suivez-nous</h4>
    <div class="footer-socials">
    <a href="https://wa.me/261341372657" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
    <a href="https://www.facebook.com/profile.php?id=61591050893761" target="_blank"><i class="fa-brands fa-facebook"></i></a>
    <a href="https://instagram.com/sdi.madagascar" target="_blank"><i class="fa-brands fa-instagram"></i></a>
    <a href="https://www.linkedin.com/in/francis-bokoarivelo-b239b0171" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
    </div>
    </div>
    </div>
    <p class="footer-copy">© 2026 <span>BOKOARIVELO Francis</span> — Tous droits réservés</p>
</footer>
<script>
document.addEventListener('click', function(event) {
    const navLinks = document.querySelector('.nav-links');
    if (navLinks.classList.contains('active')) {
        navLinks.classList.remove('active');
    }
});
document.querySelector('.nav-links').addEventListener('click', function(event) {
    event.stopPropagation();
});
</script>
</body>
</html>