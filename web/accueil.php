<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>EcoRide - Accueil</title>
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
      <li class="nav-item"><a class="nav-link active" href="accueil.php"><i class="bi bi-house-door-fill me-2"></i>Accueil</a></li>
      <li class="nav-item"><a class="nav-link" href="covoiturages.php"><i class="bi bi-car-front-fill me-2"></i>Covoiturages</a></li>
      <li class="nav-item"><a class="nav-link" href="connexion.php"><i class="bi bi-person-circle me-2"></i>Connexion</a></li>
      <li class="nav-item"><a class="nav-link" href="contact.php"><i class="bi bi-envelope-fill me-2"></i>Contact</a></li>
    </ul>
  </nav>

  <main id="main-content">
    <section aria-label="Page d'accueil" class="page" id="home">
      <div class="d-flex align-items-center mb-4">      
        <img src="Logo/Logo_EcoRide.png" alt="Logo EcoRide" style="height: 40px;" class="me-3">
        <h1 class="mb-0 text-success">Bienvenue sur EcoRide</h1>
      </div>
      <div id="ecoCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#ecoCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#ecoCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#ecoCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner rounded-3 shadow-sm">
          <div class="carousel-item active">
            <img src="img carrousel/jordan-jameison-dQCBiZHElI0-unsplash.jpg" class="d-block w-100" alt="Voiture dans la nature">
            <div class="carousel-caption d-none d-md-block bg-success bg-opacity-50 rounded-3 p-2">
              <h5>Favoriser la mobilité durable</h5>
              <p>Le covoiturage écologique pour un avenir plus vert.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img carrousel/gaspar-zaldo-YN4NJSKGBOQ-unsplash.jpg" class="d-block w-100" alt="Forêt et route">
            <div class="carousel-caption d-none d-md-block bg-success bg-opacity-50 rounded-3 p-2">
              <h5>Réduire l'empreinte carbone</h5>
              <p>Un choix responsable pour vos trajets quotidiens.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img carrousel/alex-jumper-JgEtmgOjoew-unsplash.jpg" class="d-block w-100" alt="Voiture électrique">
            <div class="carousel-caption d-none d-md-block bg-success bg-opacity-50 rounded-3 p-2">
              <h5>Partagez vos trajets facilement</h5>
              <p>Moins de voitures, plus de convivialité.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#ecoCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Précédent</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#ecoCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Suivant</span>
        </button>
      </div>
      <p>Recherchez un itinéraire pour trouver des covoiturages éco-responsables.</p>
      <form id="searchForm" class="row g-3">
        <div class="col-md-4">
          <label for="startCity" class="form-label">Ville de départ</label>
          <input type="text" class="form-control" id="startCity" required>
        </div>
        <div class="col-md-4">
          <label for="endCity" class="form-label">Ville d'arrivée</label>
          <input type="text" class="form-control" id="endCity" required>
        </div>
        <div class="col-md-3">
          <label for="travelDate" class="form-label">Date de départ</label>
          <input type="date" class="form-control" id="travelDate" required>
        </div>
        <div class="col-md-1 d-flex align-items-end">
          <button type="submit" class="btn btn-success w-100">Go</button>
        </div>
      </form>
    </section>
  </main>

  <script>
    const sidebar = document.getElementById("sidebar");
    const sidebarToggle = document.getElementById("sidebarToggle");
    sidebarToggle.addEventListener("click", () => {
      sidebar.classList.toggle("collapsed");
    });

    document.getElementById("searchForm").addEventListener("submit", (e) => {
      e.preventDefault();
      const start = e.target.startCity.value.trim();
      const end = e.target.endCity.value.trim();
      const date = e.target.travelDate.value;

      if (!start || !end || !date) {
        alert("Merci de remplir tous les champs.");
        return;
      }

      window.location.href = "covoiturages.php";
    });
  </script>

  <footer>
    <p>Contact : <a href="mailto:contact@ecoride.fr">contact@ecoride.fr</a> | <a href="mentions_legales.php">Mentions légales</a></p>
  </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
