<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerie Photos</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        * { margin:0; padding:0; box-sizing:border-box; }

        body {
            font-family: Arial, sans-serif;
            background-color: #000000;
        }
        .galerie-wrap {
            padding: 30px;
        }
        h2 {
            text-align: center;
            color: #ffffff;
            margin-bottom: 10px;
            font-size: 28px;
        }
        .ligne {
            width: 60px;
            height: 4px;
            background-color: #27ae60;
            margin: 0 auto 30px auto;
            border-radius: 2px;
        }
        /* FILTRE BOUTONS */
        .filtres {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            margin-bottom: 30px;
        }
        .filtre-btn {
            padding: 8px 20px;
            border: 2px solid #27ae60;
            border-radius: 25px;
            background: #111111;
            color: #27ae60;
            cursor: pointer;
            font-size: 14px;
            transition: all 0.3s;
        }
        .filtre-btn:hover,
        .filtre-btn.actif {
            background-color: #27ae60;
            color: white;
        }
        /* GRILLE */
        .galerie {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 15px;
            max-width: 960px;
            margin: 0 auto;
        }
        .galerie-item {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.4);
            cursor: pointer;
            aspect-ratio: 1;
        }
        .galerie-item .img-box {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 60px;
            transition: transform 0.3s;
        }
        .galerie-item:hover .img-box {
            transform: scale(1.1);
        }
        .galerie-item .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0,0,0,0.7));
            color: white;
            padding: 15px 10px 10px;
            transform: translateY(100%);
            transition: transform 0.3s;
        }
        .galerie-item:hover .overlay {
            transform: translateY(0);
        }
        .overlay h3 {
            font-size: 14px;
            margin-bottom: 3px;
        }
        .overlay p {
            font-size: 12px;
            color: #a9dfbf;
        }
        /* LIGHTBOX */
        .lightbox {
            display: none;
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(0,0,0,0.9);
            z-index: 1000;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .lightbox.actif {
            display: flex;
        }
        .lightbox-content {
            font-size: 120px;
            margin-bottom: 20px;
        }
        .lightbox h3 {
            color: white;
            font-size: 20px;
            margin-bottom: 10px;
        }
        .lightbox p {
            color: #a9dfbf;
            font-size: 14px;
        }
        .lightbox-close {
            position: absolute;
            top: 20px;
            right: 25px;
            color: white;
            font-size: 35px;
            cursor: pointer;
            background: none;
            border: none;
        }
        .img-box img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
        .lightbox-content img {
            max-width: 90vw;
            max-height: 70vh;
            border-radius: 10px;
        }
        /* HIDDEN */
        .hidden { display: none; }
    </style>
</head>
<body>
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
        <a href="portfolio.php">Portfolio</a>
        <a href="galerie.php" class="actif">Galerie</a>
        <a href="contact.php">Contact</a>
    </div>
</nav>

<div class="galerie-wrap">
<h2>Galerie Photos</h2>
<div class="ligne"></div>
<!-- FILTRES -->
<div class="filtres">
    <button class="filtre-btn actif" 
            onclick="filtrer('tous', this)">
            TOUS
    </button>
    <button class="filtre-btn" 
            onclick="filtrer('nature', this)">
            Pub 1
    </button>
    <button class="filtre-btn" 
            onclick="filtrer('ville', this)">
            Pub 2
    </button>
    <button class="filtre-btn" 
            onclick="filtrer('animal', this)">
            Pub 3
    </button>
    <button class="filtre-btn" 
            onclick="filtrer('tech', this)">
            Pub 4
    </button>
</div>
<!-- GRILLE -->
<div class="galerie" id="galerie">

    <div class="galerie-item" 
         data-categorie="nature"
         style="background:linear-gradient(135deg,#27ae60,#1a2e1a)"
         onclick="ouvrirLightbox('projet-login.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="projet-login.jpg" alt="Forêt tropicale"></div>
        <div class="overlay">
            <h3>Publication</h3>
            <p>infographie</p>
        </div>
    </div>
    <div class="galerie-item"
         data-categorie="ville"
         style="background:linear-gradient(135deg,#3498db,#1a252f)"
         onclick="ouvrirLightbox('partenaire.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="partenaire.jpg" alt="Antananarivo"></div>
        <div class="overlay">
            <h3>Publication 2</h3>
            <p>infographie</p>
        </div>
    </div>
    <div class="galerie-item"
         data-categorie="animal"
         style="background:linear-gradient(135deg,#e67e22,#8e44ad)"
         onclick="ouvrirLightbox('site_pro.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="site_pro.jpg" alt="Caméléon"></div>
        <div class="overlay">
            <h3>Publication 3</h3>
            <p>infographie</p>
        </div>
    </div>
    <div class="galerie-item"
         data-categorie="tech"
         style="background:linear-gradient(135deg,#2c3e50,#3498db)"
         onclick="ouvrirLightbox('pub1.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="pub1.jpg" alt="Code PHP"></div>
        <div class="overlay">
            <h3>Publication 4</h3>
            <p>infographie</p>
        </div>
    </div>
    <div class="galerie-item"
         data-categorie="nature"
         style="background:linear-gradient(135deg,#27ae60,#f39c12)"
         onclick="ouvrirLightbox('rinah.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="rinah.jpg" alt="Fleur sauvage"></div>
        <div class="overlay">
            <h3>Publication 5</h3>
            <p>infographie</p>
        </div>
    </div>
    <div class="galerie-item"
         data-categorie="animal"
         style="background:linear-gradient(135deg,#8e44ad,#2c3e50)"
         onclick="ouvrirLightbox('pub2.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="pub2.jpg" alt="Lémurien"></div>
        <div class="overlay">
            <h3>Publication 6</h3>
            <p>infographie</p>
        </div>
    </div>
    <div class="galerie-item"
         data-categorie="ville"
         style="background:linear-gradient(135deg,#e74c3c,#c0392b)"
         onclick="ouvrirLightbox('web2.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="web2.jpg" alt="Plage Ifaty"></div>
        <div class="overlay">
            <h3>Publication 7</h3>
            <p>infographie</p>
        </div>
    </div>
    <div class="galerie-item"
         data-categorie="tech"
         style="background:linear-gradient(135deg,#1a252f,#27ae60)"
         onclick="ouvrirLightbox('balle.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="balle.jpg" alt="Application Mobile"></div>
        <div class="overlay">
            <h3>Publication 8</h3>
            <p>infographie</p>
        </div>
    </div>
    <div class="galerie-item"
         data-categorie="nature"
         style="background:linear-gradient(135deg,#16a085,#27ae60)"
         onclick="ouvrirLightbox('personnage.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="personnage.jpg" alt="Mer de Tuléar"></div>
        <div class="overlay">
            <h3>Publication 9</h3>
            <p>infographie</p>
        </div>
    </div>
    <div class="galerie-item"
         data-categorie="tech"
         style="background:linear-gradient(135deg,#16a085,#27ae60)"
         onclick="ouvrirLightbox('transparent.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="transparent.jpg" alt="Mer de Tuléar"></div>
        <div class="overlay">
            <h3>Publication 10</h3>
            <p>infographie</p>
        </div>
    </div>
        <div class="galerie-item"
         data-categorie="tech"
         style="background:linear-gradient(135deg,#16a085,#27ae60)"
         onclick="ouvrirLightbox('tricouleur.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="tricouleur.jpg" alt="Mer de Tuléar"></div>
        <div class="overlay">
            <h3>Publication 11</h3>
            <p>infographie</p>
        </div>
    </div>
        <div class="galerie-item"
         data-categorie="tech"
         style="background:linear-gradient(135deg,#16a085,#27ae60)"
         onclick="ouvrirLightbox('week-end.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="week-end.jpg" alt="Mer de Tuléar"></div>
        <div class="overlay">
            <h3>Publication 12</h3>
            <p>infographie</p>
        </div>
    </div>
        <div class="galerie-item"
         data-categorie="tech"
         style="background:linear-gradient(135deg,#16a085,#27ae60)"
         onclick="ouvrirLightbox('bureau.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="bureau.jpg" alt="Mer de Tuléar"></div>
        <div class="overlay">
            <h3>Publication 13</h3>
            <p>infographie</p>
        </div>
    </div>
        <div class="galerie-item"
         data-categorie="tech"
         style="background:linear-gradient(135deg,#16a085,#27ae60)"
         onclick="ouvrirLightbox('DG.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="DG.jpg" alt="Mer de Tuléar"></div>
        <div class="overlay">
            <h3>Publication 14</h3>
            <p>infographie</p>
        </div>
    </div>
        <div class="galerie-item"
         data-categorie="tech"
         style="background:linear-gradient(135deg,#16a085,#27ae60)"
         onclick="ouvrirLightbox('KFG.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="KFG.jpg" alt="Mer de Tuléar"></div>
        <div class="overlay">
            <h3>Publication 15</h3>
            <p>infographie</p>
        </div>
    </div>
        <div class="galerie-item"
         data-categorie="tech"
         style="background:linear-gradient(135deg,#16a085,#27ae60)"
         onclick="ouvrirLightbox('spectacle.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="spectacle.jpg" alt="Mer de Tuléar"></div>
        <div class="overlay">
            <h3>Publication 16</h3>
            <p>infographie</p>
        </div>
    </div>
            <div class="galerie-item"
         data-categorie="tech"
         style="background:linear-gradient(135deg,#16a085,#27ae60)"
         onclick="ouvrirLightbox('claudeIA.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="claudeIA.jpg" alt="Mer de Tuléar"></div>
        <div class="overlay">
            <h3>Publication 17</h3>
            <p>infographie</p>
        </div>
    </div>
        <div class="galerie-item"
         data-categorie="tech"
         style="background:linear-gradient(135deg,#16a085,#27ae60)"
         onclick="ouvrirLightbox('hanao.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="hanao.jpg" alt="Mer de Tuléar"></div>
        <div class="overlay">
            <h3>Publication 18</h3>
            <p>infographie</p>
        </div>
    </div>
        <div class="galerie-item"
         data-categorie="tech"
         style="background:linear-gradient(135deg,#16a085,#27ae60)"
         onclick="ouvrirLightbox('anniversaire.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="anniversaire.jpg" alt="Mer de Tuléar"></div>
        <div class="overlay">
            <h3>Publication 19</h3>
            <p>infographie</p>
        </div>
    </div>
        <div class="galerie-item"
         data-categorie="tech"
         style="background:linear-gradient(135deg,#16a085,#27ae60)"
         onclick="ouvrirLightbox('sport.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="sport.jpg" alt="Mer de Tuléar"></div>
        <div class="overlay">
            <h3>Publication 20</h3>
            <p>infographie</p>
        </div>
    </div>
</div>
</div>
<!-- LIGHTBOX -->
<div class="lightbox" id="lightbox" 
     onclick="fermerLightbox()">
    <button class="lightbox-close">✕</button>
    <div class="lightbox-content" id="lb-emoji"></div>
    <h3 id="lb-titre"></h3>
    <p id="lb-desc"></p>
    <p style="color:#7f8c8d; margin-top:10px; font-size:12px;">
        Appuyer pour fermer
    </p>
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
// Filtrer par catégorie
function filtrer(categorie, btn) {
    // Changer bouton actif
    document.querySelectorAll('.filtre-btn')
            .forEach(b => b.classList.remove('actif'));
    btn.classList.add('actif');

    // Filtrer les items
    document.querySelectorAll('.galerie-item')
            .forEach(item => {
        if (categorie === 'tous' || 
            item.dataset.categorie === categorie) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
}
// Ouvrir lightbox
function ouvrirLightbox(image, titre, desc) {
    document.getElementById('lb-emoji').innerHTML = '<img src="' + image + '" alt="' + titre + '">';
    document.getElementById('lb-titre').textContent = titre;
    document.getElementById('lb-desc').textContent = desc;
    document.getElementById('lightbox')
            .classList.add('actif');
}
// Fermer lightbox
function fermerLightbox() {
    document.getElementById('lightbox')
            .classList.remove('actif');
}

// Fermer le menu au clic extérieur (comme les autres pages)
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
