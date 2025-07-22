<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Mentions légales</title>
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
    <li class="nav-item"><a class="nav-link" href="contact.php"><i class="bi bi-envelope-fill me-2"></i>Contact</a></li>
  </ul>
</nav>
  <main id="main-content" class="container py-4">
    <h1>Mentions légales</h1>
    <p><strong>Dernière mise à jour :</strong> juillet 2025</p>

    <section>
      <h2>Éditeur du site</h2>
      <p>Le site <strong>EcoRide</strong> est édité dans le cadre d’un projet fictif d’examen. Il simule une plateforme de covoiturage écoresponsable avec authentification et gestion de trajets.</p>
      <p><strong>Nom de l’éditeur :</strong> José pour Studi<br>
      <strong>Email de contact :</strong> contact@ecoride.fr</p>
    </section>

    <section>
      <h2>Hébergement</h2>
      <p>Le site est hébergé par :<br>
      <strong>Nom de l’hébergeur :</strong> Platform.sh<br>
      <strong>Adresse :</strong> 22 Rue de Palestro, 75 002 Paris, France<br>
      <strong>Téléphone :</strong> +33 (0) 1 40 09 30 00</p>
    </section>

    <section>
      <h2>Propriété intellectuelle</h2>
      <p>Le site et ses contenus (textes, images, logos, code, etc.) sont protégés par le droit d’auteur. Toute reproduction, représentation ou diffusion sans autorisation est interdite.</p>
    </section>

    <section>
      <h2>Collecte des données personnelles</h2>
      <p>Le site propose une fonctionnalité d’inscription. À ce titre, des données personnelles peuvent être collectées (nom, adresse email, mot de passe).</p>
      <p>Les données sont stockées de manière sécurisée sur une base MySQL, et ne sont ni revendues ni transmises à des tiers.</p>
      <p>Conformément au RGPD, vous pouvez demander l'accès, la modification ou la suppression de vos données personnelles en écrivant à <a href="mailto:contact@ecoride.fr">contact@ecoride.fr</a>.</p>
    </section>

    <section>
      <h2>Cookies</h2>
      <p>Le site peut utiliser des cookies de session pour assurer son bon fonctionnement (ex : gestion de la connexion). Aucun cookie publicitaire n’est utilisé.</p>
    </section>

    <section>
      <h2>Responsabilité</h2>
      <p>Ce site est un projet fictif. Il ne propose aucun service réel de covoiturage. Les informations et données présentées sont simulées à des fins pédagogiques uniquement.</p>
    </section>

    <section>
      <h2>Contact</h2>
      <p>Pour toute question, contactez-nous à l’adresse suivante : <a href="mailto:contact@ecoride.fr">contact@ecoride.fr</a></p>
    </section>
  </main>
  <script>
  const sidebar = document.getElementById("sidebar");
  const sidebarToggle = document.getElementById("sidebarToggle");

  if (sidebar && sidebarToggle) {
    sidebarToggle.addEventListener("click", () => {
      sidebar.classList.toggle("collapsed");
    });
  }
</script>
</body>
</html>
