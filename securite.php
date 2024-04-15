<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Entête et Diaporama avec Bootstrap</title>
  <!-- Liens vers Bootstrap et Font Awesome -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
  <style>
    
    body {
      overflow-x: hidden; /* Empêche le débordement horizontal */
    }

    .container {
      max-width: 100%; /* Définit une largeur maximale pour le contenu */
    }

    /* Ajoutez ces styles à votre balise <style> */

    /* Espacement et Marges */
    .container {
      padding: 20px;
    }

    .apropos {
      padding: 50px 0;
    }

    .image-section {
      margin-top: 50px;
    }

    .comment-form {
      margin-top: 50px;
      margin-bottom: 50px;
    }

    .footer {
      margin-top: 50px;
      padding: 30px 0;
    }

    /* Typographie */
    body {
      font-family: Arial, sans-serif;
    }

    h1, h2, h3, h4, h5, h6 {
      font-weight: bold;
    }

    /* Couleurs */
    .menu-section {
      background-color: #333;
    }

    .header {
      background-color: #333 ;
      color: #fff;
    }

    .menu-section .navbar-nav .nav-link {
      color: #fff;
    }

    .menu-section .navbar-nav .nav-link:hover {
      color: #007bff;
    }

    .footer {
      background-color: #333;
      color: #fff;
    }

    .footer a {
      color: #fff;
    }

    .footer a:hover {
      color: #007bff;
    }

    /* Images */
    .img-fluid {
      max-width: 100%;
      height: auto;
    }

    /* Contraste */
    .navbar-brand {
      color: #fff;
    }

    body {
      overflow-x: hidden; /* Empêche le débordement horizontal */
    }

    .container {
      max-width: 100%; /* Définit une largeur maximale pour le contenu */
    }

    /* Styles pour l'en-tête */
    .header {
      padding: 10px;
    }

    .header ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .header ul li {
      display: inline-block;
      margin-right: 20px;
    }

    /* Styles pour le menu */
    .menu-section {
      background-color:  rgb(180, 180, 180);
      padding: 10px;
    }

    .menu-section .navbar-brand {
      margin-right: auto;
    }

    .menu-section .navbar-nav {
      margin-left: auto;
    }

    .nav-item a:hover {
      color: #007bff;
    }

    .navbar-brand span {
      color: #000;
    }

    .navbar-brand {
      font-size: 30px;
      font-weight: 900;
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }
  </style>
  </head>
<body>

<?php include 'menu.php'; ?>

<style>
    body, html {
      height: 100%;
      margin: 0;
      padding: 0;
    }

    .bg-image {
      background-image: url('b.jpg');
      height: 70vh;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
    }

    .content {
      text-align: center;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
    }

    .content h1 {
      font-size: 3rem;
      font-weight: bold;
    }

    .content p {
      font-size: 1.5rem;
    }

    .fa-star {
      font-size: 3rem;
      margin-top: 20px;
    }
    .custom-text-color {
  color: white;
}
.texte-centre {
  text-align: center;
}

.text-container {
  padding: 10px;
  margin: 10px;
}


  </style>
</head>
<body>
  <div class="container-fluid px-0">
    <div class="row mx-0">
      <div class="col-12 bg-image">
        <div class="content">
        <h1 class="display-4 text-center custom-text-color">GARDINNAGE, SECURITE</h1>
        <p class="display-4 text-center custom-text-color">Protégez ce qui compte le plus avec EPGS - votre partenaire en gardiennage et sécurité de confiance. Découvrez comment nous assurons la tranquillité d'esprit de nos clients, jour après jour.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- le role -->
  <div class="container">
  <div class="row">
    <div class="col text-center">
      <h2>Rôles</h2>
      <p>Le rôle du gardiennage et de la sécurité aujourd'hui est crucial pour assurer la protection des biens et des personnes dans un environnement de plus en plus complexe. Ces services offrent une présence dissuasive contre les intrusions, le vol, les agressions et d'autres menaces potentielles. En plus de prévenir les incidents, le gardiennage et la sécurité assurent également la surveillance des équipements, des bâtiments et des espaces, ainsi que la mise en place de mesures préventives et d'interventions rapides en cas d'urgence. En résumé, le gardiennage et la sécurité contribuent à instaurer un sentiment de sécurité et de tranquillité d'esprit pour les individus et les organisations.</p>   
     </div>
  </div>
</div>


<div class="container">
    <div class="row">
      <div class="col">
        <div class="text-container">
          <h2>Gardinnage</h2>
          <p>Notre entreprise offre une gamme complète de services de gardiennage dans tous les domaines, qu'il s'agisse de la protection physique de vos biens, de la surveillance électronique de vos installations, ou encore de la sécurité rapprochée de vos personnalités</p>
        </div>
      </div>
      <div class="col">
        <div class="text-container">
          <h2>Securité</h2>
          <p>Nous offrons une gamme complète de services de sécurité, couvrant tous les aspects de la protection, que ce soit la sécurité physique, électronique, informatique, résidentielle, événementielle, des biens, personnelle ou des transports</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
<?php include 'footer.php'; ?>
<!-- Les scripts Bootstrap et Font Awesome -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
.sticky {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 1000; /* Assurez-vous que le menu reste au-dessus de tout autre contenu */
  background-color: #333; /* Couleur de fond du menu lorsque fixé */
  box-shadow:0 2px 4px rgba(0,0,0,0.1); /* Ajoutez une ombre pour améliorer la visibilité */
  transition: all 0.3s ease; /* Une transition douce pour une meilleure expérience utilisateur */
}

/* Vous pouvez également ajouter d'autres styles comme la taille du texte, la couleur, etc. */
</style>

<script>
window.addEventListener('scroll', function() {
    const menu = document.getElementById('menu'); // Sélectionnez votre menu par son ID
    menu.classList.toggle("sticky", window.scrollY > 0);
});
</script>

</body>
</html>