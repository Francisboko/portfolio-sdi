<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carte Google Maps</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        * { margin:0; padding:0; box-sizing:border-box; }

        body {
            font-family: Arial, sans-serif;
            background-color: #000000;
        }

        .maps-wrap {
            padding: 30px;
        }

        h2 {
            text-align: center;
            color: #ffffff;
            margin-bottom: 10px;
        }

        .ligne {
            width: 60px;
            height: 4px;
            background: #27ae60;
            margin: 0 auto 30px auto;
            border-radius: 2px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
        }

        /* CARTE */
        .carte-box {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.4);
            margin-bottom: 25px;
        }

        .carte-box iframe {
            width: 100%;
            height: 400px;
            border: none;
        }

        /* INFO ADRESSE */
        .adresse-cards {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
        }

        .adresse-card {
            background: #111111;
            border-radius: 12px;
            padding: 20px;
            text-align: center;
            flex: 1;
            min-width: 200px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.4);
            border-top: 4px solid #27ae60;
        }

        .adresse-card .icone {
            font-size: 35px;
            margin-bottom: 10px;
        }

        .adresse-card h3 {
            color: #ffffff;
            margin-bottom: 8px;
            font-size: 15px;
        }

        .adresse-card p {
            color: #bdc3c7;
            font-size: 14px;
            line-height: 1.6;
        }

        /* BOUTON ITINÉRAIRE */
        .btn-itineraire {
            display: block;
            width: 250px;
            margin: 25px auto 0 auto;
            background-color: #27ae60;
            color: white;
            padding: 14px;
            border-radius: 30px;
            text-decoration: none;
            text-align: center;
            font-size: 16px;
            font-weight: bold;
        }

        .btn-itineraire:hover {
            background-color: #219a52;
        }

        /* BOUTON RETOUR */
        .btn-retour {
            display: inline-block;
            margin-bottom: 20px;
            background-color: #ff9800;
            color: white;
            padding: 10px 22px;
            border-radius: 25px;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
        }

        .btn-retour:hover {
            background-color: #e67e00;
        }
    </style>
</head>
<body>
<nav>
    <a class="logo" href="index.php">
        <img src="logo-sdi2.png" alt="Logo SDI" style="height: 45px; vertical-align: middle;">
    </a>
    <div class="titre-simple">
        <span>SDI Votre Partenaire Numérique à Madagascar</span>
    </div>
    <button class="menu-toggle" onclick="event.stopPropagation(); document.querySelector('.nav-links').classList.toggle('active')">☰</button>
    <div class="nav-links">
        <a href="index.php">Accueil</a>
        <a href="apropos.php">À propos</a>
        <a href="services.php">Services</a>
        <a href="contact.php" class="actif">Contact</a>
        <a href="portfolio.php">Portfolio</a>
        <a href="galerie.php">Galerie-Photo</a>
    </div>
</nav>

<div class="maps-wrap">

<a class="btn-retour" href="contact.php">← Retour</a>

<h2>📍 Notre Localisation</h2>
<div class="ligne"></div>

<div class="container">

    <!-- CARTE GOOGLE MAPS -->
    <div class="carte-box">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3786.6!2d47.5079!3d-18.9101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21f07b5c64d01da7%3A0x83a8543daa96e88a!2sAntananarivo%2C%20Madagascar!5e0!3m2!1sfr!2smg!4v1620000000000"
            allowfullscreen=""
            loading="lazy">
        </iframe>
    </div>

    <!-- INFOS ADRESSE -->
    <div class="adresse-cards">
        <div class="adresse-card">
            <div class="icone">📍</div>
            <h3>Adresse</h3>
            <p>Antananarivo<br>Madagascar</p>
        </div>
        <div class="adresse-card">
            <div class="icone">🕐</div>
            <h3>Horaires</h3>
            <p>Lun - Ven : 8h - 17h<br>
               Sam : 8h - 12h</p>
        </div>
        <div class="adresse-card">
            <div class="icone">📞</div>
            <h3>Téléphone</h3>
            <p>+261 34 13 726 57</p>
        </div>
        <div class="adresse-card">
            <div class="icone">📧</div>
            <h3>Email</h3>
            <p>sdiservicesmada@gmail.com</p>
        </div>
    </div>

    <!-- BOUTON ITINÉRAIRE -->
    <a class="btn-itineraire"
       href="https://maps.google.com/?q=Antananarivo,Madagascar"
       target="_blank">
       🗺️ Voir l'itinéraire
    </a>

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
