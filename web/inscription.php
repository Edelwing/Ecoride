<?php
include 'database/db_connect.php';

$message = "";
$toastClass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['signupName'];
    $email = $_POST['signupEmail'];
    $password = $_POST['signupPassword'];

    // Check if email already exists
    $checkEmailStmt = $conn->prepare("SELECT email FROM utilisateur WHERE email = ?");
    $checkEmailStmt->bind_param("s", $email);
    $checkEmailStmt->execute();
    $checkEmailStmt->store_result();

    if ($checkEmailStmt->num_rows > 0) {
        $message = "Email ID already exists";
        $toastClass = "#007bff"; // Primary color
    } else {
        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO utilisateur (nom, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $password);

        if ($stmt->execute()) {
            $message = "Account created successfully";
            $toastClass = "#28a745"; // Success color
        } else {
            $message = "Error: " . $stmt->error;
            $toastClass = "#dc3545"; // Danger color
        }

        $stmt->close();
    }

    $checkEmailStmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>EcoRide - Inscription</title>
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

  <main id="main-content">
    <section id="signup" class="page" aria-label="Inscription utilisateur">
      <h1 class="mb-4 text-success">Créer un compte</h1>
      <form method="post" class="card p-4 shadow-sm" novalidate>
        <div class="mb-3">
          <label for="signupName" class="form-label">Nom complet</label>
          <input type="text" name="signupName" id="signupName" class="form-control" required />
        </div>
        <div class="mb-3">
          <label for="signupEmail" class="form-label">Adresse e-mail</label>
          <input type="email" name="signupEmail" id="signupEmail" class="form-control" required />
        </div>
        <div class="mb-3">
          <label for="signupPassword" class="form-label">Mot de passe</label>
          <input type="password" name="signupPassword" id="signupPassword" class="form-control" required minlength="8" />
          <div class="form-text">Le mot de passe doit contenir au moins 8 caractères.</div>
        </div>
        <div class="mb-3">
          <label for="signupConfirm" class="form-label">Confirmer le mot de passe</label>
          <input type="password" id="signupConfirm" class="form-control" required minlength="8" />
        </div>
        <button type="submit" class="btn btn-success w-100">Créer mon compte</button>
      </form>
    </section>
  </main>

  <footer>
    <p>Contact : <a href="mailto:contact@ecoride.fr">contact@ecoride.fr</a> | <a href="mentions_legales.php">Mentions légales</a></p>
  </footer>
</body>
</html>
