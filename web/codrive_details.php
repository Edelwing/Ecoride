<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>EcoRide - Détails Covoiturage</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet" />
  <link href="stylesheet/style.css" rel="stylesheet" />
</head>
<body>

<button id="sidebarToggle" aria-label="Basculer menu"><i class="bi bi-list"></i></button>
<nav id="sidebar" aria-label="Menu principal">
  <div class="text-center mb-4">
    <img src="Logo/Logo_EcoRide.png" alt="Logo EcoRide" style="max-width: 100px; height: auto;">
    <h2 class="mt-2 fs-4">EcoRide</h2>
  </div>
  <ul class="nav flex-column">
    <li class="nav-item"><a class="nav-link" href="accueil.php"><i class="bi bi-house-door-fill me-2"></i>Accueil</a></li>
    <li class="nav-item"><a class="nav-link active" href="covoiturages.php"><i class="bi bi-car-front-fill me-2"></i>Covoiturages</a></li>
    <li class="nav-item"><a class="nav-link" href="connexion.php"><i class="bi bi-person-circle me-2"></i>Connexion</a></li>
    <li class="nav-item"><a class="nav-link" href="contact.php"><i class="bi bi-envelope-fill me-2"></i>Contact</a></li>
    </ul>
</nav>
<main id="main-content" class="container py-4">
  <h1>Détails de la course</h1>
  <div id="driver">
    <div id="driver-info">
      <img id="driver-pic" src="img_profils/samuel-raita-RiDxDgHg7pw-unsplash.jpg" alt="driver-picture">
      <div id="driver-name">
        <h1>Pseudo : Jean</h1>
        <h2>Note : 4.4 <span style="font-size:135%;color:rgb(228, 196, 14);">★</span></h2>
        <h3>Places restantes : 3</h3>
      </div>
    </div>
    <div id="price">
    <h1>Prix</h1>
    <h2>Voyage écologique</h2>
    <a href="User.png"><button id="participate-button"> Participer au covoiturage </button></a>
    </div>
  </div>
  <hr class="solid">
  <div id="departure" class="travel">
    <h3>Départ</h3>
    <p id="departure-location"> <i class="bi bi-geo-alt"></i> Lieu : <span id="departure-location-text">Lyon</span></p>
    <p id="departure-date"> <i class="bi bi-calendar3"></i> Date : <span id="departure-date-text">22/07/2025</span></p>
    <p id="departure-time"> <i class="bi bi-clock"></i> Heure : <span id="departure-time-text">09h00</span></p>
  </div>
  <hr class="solid">
  <div id="arrival" class="travel">
      <h3>Arrivée</h3>
      <p id="arrival-location"><i class="bi bi-geo-alt"></i> Lieu : <span id="arrival-location-text">Paris</span></p>
      <p id="arrival-date"> <i class="bi bi-calendar3"></i> Date : <span id="arrival-date-text">22/07/2025</span></p>
      <p id="arrival-time"> <i class="bi bi-clock"></i> Heure : <span id="arrival-time-text">14h00</span></p>
  </div>
    <hr class="solid">
    <div id="vehicule-details">
      <h3>Détails du véhicule</h3>
      <p id="brand"><i class="bi bi-car-front"></i> Marque : <span id="brand-text">Renault</span></p>
      <p id="model"><i class="bi bi-wrench"></i> Modèle : <span id="model-text">Zoé</span></p>
      <p id="energy"><i class="bi bi-lightning"></i> Énergie : <span id="energy-text">Electrique</span></p>
    </div>
    <hr class="solid">
    <div id="preferences">
      <h3>Préférences</h3>
      <p id="preferences-text">Non-fumeur. Animaux acceptés.</p>
    </div>
    <hr class="solid">
    <h1>
      Avis
    </h1>
    <div class="card feedback">
      <div class="card-body">
        <div class="user-info">
          <img class="user-pic" src="img_profils/elizeu-dias-2EGNqazbAMk-unsplash.jpg" alt="user-picture">
          <h2 class="user-name">Pierre</h2><span style="font-size:175%;color:rgb(228, 196, 14);">★★★★★</span>
        </div>
        <p>
        Jean est un excellent conducteur, très agréable et sympathique. Le voyage s'est déroulé sans encombre, je recommande fortement.
        </p>
      </div>
    </div>
<footer>
  <p>Contact : <a href="mailto:contact@ecoride.fr">contact@ecoride.fr</a> | <a href="mentions_legales.php">Mentions légales</a></p>
</footer>
 </main>
<script>
  const sidebarToggle = document.getElementById("sidebarToggle");
  const sidebar = document.getElementById("sidebar");

  sidebarToggle.addEventListener("click", () => {
    sidebar.classList.toggle("collapsed");
  });
</script>
</body>
</html>