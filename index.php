<?php $page = 'accueil'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À Propos</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
<!-- NAVBAR -->
<nav>
    <a class="logo" href="index.php">
        <img src="logo-sdi2.png" alt="Logo SDI" style="height: 45px; vertical-align: middle;">
    </a>
    <div class="marquee-container">
        <span class="marquee-text">Bienvenue dans le page de SDI — Services Développement Web & Infographie. SDI votre partenaire numerique à Madadagascar</span>
    </div>
    <button class="menu-toggle" onclick="event.stopPropagation(); document.querySelector('.nav-links').classList.toggle('active')">☰</button>
    <div class="nav-links">
        <a href="index.php" class="actif">Accueil</a>
        <a href="apropos.php">À propos</a>
        <a href="services.php">Services</a>
        <a href="contact.php">Contact</a>
        <a href="portfolio.php">Portfolio</a>
        <a href="galerie.php">Galerie-Photo</a>
    </div>
</nav>
<!-- HERO -->
<div class="hero">
    <!-- Texte du haut -->
    <p style="font-size: 20px; color: #f3b92e; margin-bottom: 15px;">
        Bonjour, je suis
    </p>
    <!-- PHOTO AU MILIEU -->
    <div style="margin: 15px auto;">
        <img src="photo.jpg" 
             alt="BOKOARIVELO Francis"
             style="
                width: 150px;
                height: 150px;
                border-radius: 50%;
                border: 4px solid #f3b92e;
                box-shadow: 0 0 20px rgba(52,152,219,0.5);
                object-fit: cover;
             ">
    </div>
    <!-- Nom -->
    <h1><span>BOKOARIVELO Francis</span></h1>
    <!-- Titre -->
    <p style="font-size: 18px; color: #fdfdfc; margin: 15px 0 30px 0;">
        ingenieur informatique,Développeur full stack | fondateur S.D.I 
    </p>
    <a class="btn-hero" href="contact.php">Me contacter</a>
</div>
<!-- COMPETENCES -->
<div class="section">
    <h2>Mes Compétences</h2>
    <div class="ligne-orange"></div>
    <div class="competence">
        <label>HTML / CSS</label>
        <div class="barre">
            <div class="barre-remplie" style="width: 90%"></div>
        </div>
    </div>
    <div class="competence">
        <label>PHP/MySql</label>
        <div class="barre">
            <div class="barre-remplie" style="width: 75%"></div>
        </div>
    </div>
    <div class="competence">
        <label>Python</label>
        <div class="barre">
            <div class="barre-remplie" style="width: 50%"></div>
        </div>
    </div>
    <div class="competence">
        <label>Java</label>
        <div class="barre">
            <div class="barre-remplie" style="width: 70%"></div>
        </div>
    </div>

    <div class="competence">
        <label>JavaScript</label>
        <div class="barre">
            <div class="barre-remplie" style="width: 60%"></div>
        </div>
    </div>
</div>
<!-- SLIDER PHOTOS -->
<div class="slider-container">
    <div class="slider-wrapper" id="sliderWrapper">
        <img src="fr6.jpg" class="slide-img" alt="Slide 1">
        <img src="domaine.jpg" class="slide-img" alt="Slide 2">
        <img src="Github.jpg" class="slide-img" alt="Slide 3">
        <img src="https.jpg" class="slide-img" alt="Slide 4">
        <img src="projet-login.jpg" class="slide-img" alt="Slide 5">
    </div>
    <button class="slider-btn prev" onclick="changeSlide(-1)">&#10094;</button>
    <button class="slider-btn next" onclick="changeSlide(1)">&#10095;</button>
    <div class="slider-dots" id="sliderDots"></div>
</div>
<!-- PROJETS -->
<div class="section" style="background-color:#f8f9fa; 
     max-width:100%; padding: 60px 30px;">
<div style="max-width:900px; margin:0 auto;">
    <h2>Mes Projets</h2>
    <div class="ligne-orange"></div>
    <div class="cards">
    <div class="card">
        <div class="icone"></div>
<h3>Agence Digitale</h3>
<p>
    🎯 <strong>Offre spéciale du mois</strong><br><br>
    Obtenez un site internet professionnel à partir de <strong>140 €</strong>, 
    avec une maintenance mensuelle à seulement <strong>28 €/mois</strong>
</p>
<p>
    ✅ <strong>Devis gratuit, sans engagement</strong>
</p>
<p style="text-align: left; margin-top: 15px;">
    Votre projet, entre de bonnes mains :
</p>
<ul style="text-align: left; list-style: none; padding-left: 0; margin-top: 10px;">
    <li>✔️ Sites internet modernes et rapides</li>
    <li>✔️ Applications web sur mesure</li>
    <li>✔️ Hébergement sécurisé</li>
    <li>✔️ Nom de domaine inclus</li>
</ul>
        <img src="projet-gestion.jpg" alt="Gestion de projet" class="card-img">
    </div>
<div class="card card-split">
    <div class="card-text">
        <h3>Nos tarifs création de sites web</h3>
        <p>
             <strong>Site Vitrine</strong> — Basique (3-5 pages) 140€, 
            Standard (5-10 pages) 280€, Premium (10+ pages) 465€
        </p>
        <p>
             <strong>Site E-commerce</strong> — Starter 370€, 
            Business 650€, Pro (illimité) 1115€
        </p>
        <p>
             <strong>Portfolio</strong> — Simple 93€, Avancé 232€
        </p>
        <p>
             <strong>Application Web</strong> — Simple 465€, Complexe 1395€
        </p>
        <a href="contact.php" class="btn-commander">Commandez maintenant</a>
    </div>
    <div class="card-image">
        <img src="projet-upload.jpg" alt="Tarifs SDI">
    </div>
</div>
    <div class="card">
        <div class="icone"></div>
        <h1 class="titre-degrade">HEBERGEMENT SITE WEB RAPIDE</h1>
        <p> POURQUOI CHOISIR S.D.I ?
  <ul style="text-align: left; list-style: none; padding-left: 0; margin-top: 10px;">
    <li>✔️ Hébergement haute performance</li>
    <li>✔️ Hébergement fiable & sécurisé</li>
    <li>✔️ Hébergement WordPress optimisé</li>
    <li>✔️ Prix imbattable dès 2€/mois</li>
    <li>✔️ Domaine gratuit la 1ère année !</li>
</ul>      
</p>
        <img src="hebergement.jpg" alt="Login Logout" class="card-img">
    </div>
      <div class="card" style="background-color: #3a3a45;">
        <div class="icone"></div>
        <h1 class="titre-degrade">INFOGRAPHIE</h1>
        <p><center><span style="color: white;"> Formateur montage video, audio et image</span>
        </center></p>
  <ul>
    <li style="color: yellow;"> Adobe Photoshop</li>
    <li style="color: yellow;"> Canva Pro</li>
    <li style="color: yellow;"> Adobe Premier</li>
    <li style="color: yellow;"> Capcut</li>
</ul>
        <img src="formation.jpg" alt="Login Logout" class="card-img">
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
    const menuToggle = document.querySelector('.menu-toggle');
    
    if (navLinks.classList.contains('active')) {
        navLinks.classList.remove('active');
    }
});
document.querySelector('.nav-links').addEventListener('click', function(event) {
    event.stopPropagation();
});
</script>
<script>
let currentSlide = 0;
const slides = document.querySelectorAll('.slide-img');
const totalSlides = slides.length;
const sliderWrapper = document.getElementById('sliderWrapper');
const dotsContainer = document.getElementById('sliderDots');

// Créer les points de navigation
for (let i = 0; i < totalSlides; i++) {
    const dot = document.createElement('span');
    dot.classList.add('dot');
    if (i === 0) dot.classList.add('active');
    dot.onclick = () => goToSlide(i);
    dotsContainer.appendChild(dot);
}

function updateSlider() {
    sliderWrapper.style.transform = `translateX(-${currentSlide * 100}%)`;
    document.querySelectorAll('.dot').forEach((dot, index) => {
        dot.classList.toggle('active', index === currentSlide);
    });
}

function changeSlide(direction) {
    currentSlide = (currentSlide + direction + totalSlides) % totalSlides;
    updateSlider();
}

function goToSlide(index) {
    currentSlide = index;
    updateSlider();
}

// Défilement automatique toutes les 4 secondes
setInterval(() => {
    changeSlide(1);
}, 4000);
</script>
</body>
</html>
