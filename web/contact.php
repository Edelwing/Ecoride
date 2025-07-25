<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>EcoRide - Contact</title>
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
      <li class="nav-item"><a class="nav-link" href="covoiturages.php"><i class="bi bi-car-front-fill me-2"></i>Covoiturages</a></li>
      <li class="nav-item"><a class="nav-link" href="connexion.php"><i class="bi bi-person-circle me-2"></i>Connexion</a></li>
      <li class="nav-item"><a class="nav-link active" href="contact.php"><i class="bi bi-envelope-fill me-2"></i>Contact</a></li>
    </ul>
  </nav>

  <main id="main-content">
    <section id="contact" class="page" aria-label="Contact">
      <h1 class="mb-4 text-success">Contactez-nous</h1>
      <address>
        <strong>Email :</strong> <a href="mailto:contact@ecoride.fr">contact@ecoride.fr</a><br />
        <strong>Téléphone :</strong> 01 23 45 67 89<br />
        <strong>Adresse :</strong> 123 Rue de l'Écologie, 75000 Paris
      </address>
      <form class="card p-4 shadow-sm" novalidate>
        <div class="mb-3">
          <label for="contactName" class="form-label">Nom complet</label>
          <input type="text" id="contactName" class="form-control" required />
        </div>
        <div class="mb-3">
          <label for="contactEmail" class="form-label">Adresse e-mail</label>
          <input type="email" id="contactEmail" class="form-control" required />
        </div>
        <div class="mb-3">
          <label for="contactMessage" class="form-label">Message</label>
          <textarea id="contactMessage" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-success w-100">Envoyer</button>
      </form>
    </section>
  </main>

  <footer>
    <p>Contact : <a href="mailto:contact@ecoride.fr">contact@ecoride.fr</a> | <a href="mentions_legales.php">Mentions légales</a></p>
  </footer>
</body>
</html>
