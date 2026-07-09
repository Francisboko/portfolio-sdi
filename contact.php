<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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
        <a href="apropos.php" class="actif">À propos</a>
        <a href="services.php">Services</a>
        <a href="contact.php">Contact</a>
        <a href="portfolio.php">Portfolio</a>
        <a href="galerie.php">Galerie-Photo</a>
    </div>
</nav>

<div style="background: linear-gradient(135deg, #1a252f 0%, #2980b9 55%, #3498db 100%);">

<div class="hero" style="background: transparent;">
    <h1>Me <span>Contacter</span></h1>
    <p>Envoyez-moi un message !</p>
</div>

<div class="section" style="background: transparent;">
    <h2 style="color: #ffffff;">Formulaire de contact</h2>
    <div class="ligne-bleu" style="background-color: #ffffff;"></div>

    <div class="form-contact">

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nom     = htmlspecialchars($_POST['nom']);
            $email   = htmlspecialchars($_POST['email']);
            $sujet   = htmlspecialchars($_POST['sujet']);
            $message = htmlspecialchars($_POST['message']);

            if (!empty($nom) && !empty($email) 
                && !empty($message)) {
                echo "<div class='succes'>
                    ✅ Merci <strong>$nom</strong> !
                    Votre message a été envoyé avec succès !
                </div>";
            }
        }
        ?>

        <form method="POST">
            <div class="form-group">
                <label> Nom complet</label>
                <input type="text" name="nom"
                       placeholder="Votre nom" required>
            </div>
            <div class="form-group">
                <label> Email</label>
                <input type="email" name="email"
                       placeholder="votre@email.com" required>
            </div>
            <div class="form-group">
                <label> Sujet</label>
                <input type="text" name="sujet"
                       placeholder="Sujet du message">
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea name="message"
                    placeholder="Écrivez votre message..." 
                    required></textarea>
            </div>
            <button type="submit" class="btn-envoyer">
                 Envoyer le message
            </button>
        </form>
    </div>

    <br>
<div class="cards">
    <a href="mailto:sdiservicesmada@gmail.com" class="card" style="background-color: #3498db; text-decoration: none; display: block;">
        <div class="icone">📧</div>
        <h3>Email</h3>
        <p>
            <span style="
                  background-color: #3498db;
                  color: white;
                  padding: 8px 16px;
                  border-radius: 20px;
                  font-size: 14px;
               ">
                sdiservicesmada@gmail.com
            </span>
        </p>
    </a>

    <!-- WHATSAPP -->
    <a href="https://wa.me/261341372657" target="_blank" class="card" style="background-color: #3498db; text-decoration: none; display: block;">
        <div class="icone"></div>
        <h3>WhatsApp</h3>
        <p>
            <span style="
                  background-color: #25D366;
                  color: white;
                  padding: 8px 16px;
                  border-radius: 20px;
                  font-size: 14px;
               ">
                M'écrire sur WhatsApp
            </span>
        </p>
    </a>
<!-- FACEBOOK -->
 <a href="https://www.facebook.com/profile.php?id=61591050893761" target="_blank" class="card" style="background-color: #3498db; text-decoration: none; display: block;">
    <div class="icone"></div>
    <h3>Facebook</h3>
    <p>
        <span style="
              background-color: #1877F2;
              color: white;
              padding: 8px 16px;
              border-radius: 20px;
              font-size: 14px;
           ">
            Ma page Facebook
        </span>
    </p>
    </a>
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
