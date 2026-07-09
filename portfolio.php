<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - WebTech Madagascar</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            background-color: #000000;
            background-image:
                url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='90' height='90'%3E%3Ctext x='5' y='20' font-family='monospace' font-size='16' fill='rgba(0,255,180,0.28)'%3E01%3C/text%3E%3Ctext x='48' y='45' font-family='monospace' font-size='16' fill='rgba(0,255,180,0.22)'%3E10%3C/text%3E%3Ctext x='15' y='75' font-family='monospace' font-size='16' fill='rgba(0,255,180,0.25)'%3E11%3C/text%3E%3Ctext x='60' y='85' font-family='monospace' font-size='16' fill='rgba(0,255,180,0.18)'%3E00%3C/text%3E%3C/svg%3E"),
                linear-gradient(rgba(0, 200, 255, 0.14) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 200, 255, 0.14) 1px, transparent 1px);
            background-size: 90px 90px, 30px 30px, 30px 30px;
            background-repeat: repeat;
        }
        nav, footer {
            background: rgba(0, 0, 0, 0.55) !important;
            backdrop-filter: blur(2px);
        }
        .section h2,
        .section > p,
        .portfolio-info h3,
        .portfolio-info p {
            color: #ffffff !important;
        }
        .portfolio-item {
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(0, 255, 180, 0.25);
            border-radius: 10px;
            padding: 15px;
        }
        .tag {
            display: inline-block;
            background: rgba(0, 200, 255, 0.2);
            color: #ffffff !important;
            border: 1px solid rgba(0, 200, 255, 0.4);
            border-radius: 12px;
            padding: 3px 10px;
            margin: 3px 4px 0 0;
            font-size: 12px;
        }
    </style>
</head>
<body class="contact">
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
        <a href="apropos.php">À propos</a>
        <a href="services.php">Services</a>
        <a href="portfolio.php" class="actif">Portfolio</a>
        <a href="contact.php">Contact</a>
        <a href="galerie.php">Galerie-Photo</a>
    </div>
</nav>
<div class="hero">
    <h1>Notre <span>Portfolio</span></h1>
    <p>Découvrez nos réalisations</p>
</div>
<div class="section">
    <h2>Nos Projets</h2>
    <div class="ligne-verte"></div>
    <div class="portfolio-grid">
        <div class="portfolio-item">
            <div class="portfolio-img"></div>
            <div class="portfolio-info">
                <center><h3>Clinique Soamasoandro</h3>
                <p>Site vitrine pour une clinique médicale à Tana.</p>
                <span class="tag">HTML</span>
                <span class="tag">CSS</span>
                <span class="tag">PHP</span></center>
            </div>
        </div>
        <div class="portfolio-item">
            <div class="portfolio-img"></div>
            <div class="portfolio-info">
                <center><h3>Boutique Mozika</h3>
                <p>E-commerce de vêtements et accessoires.</p>
                <span class="tag">PHP</span>
                <span class="tag">MySQL</span>
                <span class="tag">CSS</span></center>
            </div>
        </div>
        <div class="portfolio-item">
            <div class="portfolio-img"></div>
            <div class="portfolio-info">
                <center><h3>Hôtel Vakoka</h3>
                <p>Site de réservation pour un hôtel à Fianarantsoa.</p>
                <span class="tag">PHP</span>
                <span class="tag">MySQL</span>
                <span class="tag">JS</span></center>
            </div>
        </div>
        <div class="portfolio-item">
            <div class="portfolio-img"></div>
            <div class="portfolio-info">
                <center><h3>École Fanantenana</h3>
                <p>Système de gestion scolaire complet.</p>
                <span class="tag">PHP</span>
                <span class="tag">MySQL</span>
                <span class="tag">CSS</span></center>
            </div>
        </div>
        <div class="portfolio-item">
            <div class="portfolio-img">️</div>
            <div class="portfolio-info">
                <center><h3>Restaurant Sakafo</h3>
                <p>Site vitrine avec menu en ligne.</p>
                <span class="tag">HTML</span>
                <span class="tag">CSS</span>
                <span class="tag">JS</span></center>
            </div>
        </div>
        <div class="portfolio-item">
            <div class="portfolio-img"></div>
            <div class="portfolio-info">
                <center><h3>Cabinet Lalam-Barotra</h3>
                <p>Site professionnel pour cabinet d'avocats.</p>
                <span class="tag">PHP</span>
                <span class="tag">CSS</span>
                <span class="tag">MySQL</span></center>
            </div>
        </div>
        <br>
                <div class="card" style="background-image: url('badge.jpg'); background-size: cover; background-position: center; min-height: 320px;">
                </div>
    </div>
</div>
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
