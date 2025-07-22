<?php
include 'database/db_connect.php';

$message = "";
$toastClass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['loginEmail'];
    $password = $_POST['loginPassword'];

    // Prepare and execute
    $stmt = $conn->prepare("SELECT password FROM utilisateur WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($db_password);
        $stmt->fetch();

        if ($password === $db_password) {
            $message = "Login successful";
            $toastClass = "bg-success";
            // Start the session and redirect to the dashboard or home page
            session_start();
            $_SESSION['email'] = $email;
            header("Location: dashboard.php");
            exit();
        } else {
            $message = "Incorrect password";
            $toastClass = "bg-danger";
        }
    } else {
        $message = "Email not found";
        $toastClass = "bg-warning";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>EcoRide - Connexion</title>
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
      <li class="nav-item"><a class="nav-link active" href="connexion.php"><i class="bi bi-person-circle me-2"></i>Connexion</a></li>
      <li class="nav-item"><a class="nav-link" href="contact.php"><i class="bi bi-envelope-fill me-2"></i>Contact</a></li>
    </ul>
  </nav>

  <main id="main-content">
    <section id="login" class="page" aria-label="Connexion utilisateur">
      <h1 class="mb-4 text-success">Connexion</h1>
      <form method="post" class="card p-4 shadow-sm" novalidate>
        <div class="mb-3">
          <label for="loginEmail" class="form-label">Adresse e-mail</label>
          <input type="email" name="loginEmail" id="loginEmail" class="form-control" required />
        </div>
        <div class="mb-3">
          <label for="loginPassword" class="form-label">Mot de passe</label>
          <input type="password" name="loginPassword" id="loginPassword" class="form-control" required minlength="8" />
        </div>
        <button type="submit" class="btn btn-success w-100">Se connecter</button>
        <p class="mt-3 text-center">Pas encore de compte ? <a href="inscription.php">Créer un compte</a>.</p>
      </form>
    </section>
  </main>

  <footer>
    <p>Contact : <a href="mailto:contact@ecoride.fr">contact@ecoride.fr</a> | <a href="mentions_legales.php">Mentions légales</a></p>
  </footer>
</body>
</html>
