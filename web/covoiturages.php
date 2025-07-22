<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>EcoRide - Covoiturages</title>
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

  <main id="main-content">
    <section aria-label="Liste des covoiturages" class="page" id="rides">
      <h1 class="mb-4 text-success">Covoiturages disponibles</h1>
      
      <section aria-label="Recherche d'itinéraire" class="card p-4 mb-4 shadow-sm">
        <h2 class="mb-3">Recherche d'un covoiturage</h2>
        <form class="row g-3" id="searchForm">
          <div class="col-md-4">
            <label for="startCity" class="form-label">Ville de départ</label>
            <input type="text" id="startCity" name="startCity" class="form-control" required />
          </div>
          <div class="col-md-4">
            <label for="endCity" class="form-label">Ville d’arrivée</label>
            <input type="text" id="endCity" name="endCity" class="form-control" required />
          </div>
          <div class="col-md-4">
            <label for="travelDate" class="form-label">Date de départ</label>
            <input type="date" id="travelDate" name="travelDate" class="form-control" required />
          </div>
          <div class="col-12 d-flex justify-content-end">
            <button type="submit" class="btn btn-success">Rechercher</button>
          </div>
        </form>
      </section>

      <section aria-label="Filtres de recherche" class="card p-4 mb-4 shadow-sm">
        <h2 class="mb-3">Filtres</h2>
        <form class="row g-3" id="filterForm">
          <div class="col-md-3 col-sm-6">
            <label class="form-label" for="filterEco">Voyage écologique (voiture électrique)</label>
            <select class="form-select" id="filterEco" name="filterEco">
              <option value="">Tous</option>
              <option value="true">Oui</option>
              <option value="false">Non</option>
            </select>
          </div>
          <div class="col-md-3 col-sm-6">
            <label class="form-label" for="filterPriceMax">Prix maximum (crédits)</label>
            <input class="form-control" id="filterPriceMax" name="filterPriceMax" placeholder="Ex: 20" type="number" min="0" />
          </div>
          <div class="col-md-3 col-sm-6">
            <label class="form-label" for="filterDurationMax">Durée max (heures)</label>
            <input class="form-control" id="filterDurationMax" name="filterDurationMax" placeholder="Ex: 3" type="number" min="0" />
          </div>
          <div class="col-md-3 col-sm-6">
            <label class="form-label" for="filterMinRating">Note minimale</label>
            <select class="form-select" id="filterMinRating" name="filterMinRating">
              <option value="">Toutes</option>
              <option value="1">1 ⭐</option>
              <option value="2">2 ⭐</option>
              <option value="3">3 ⭐</option>
              <option value="4">4 ⭐</option>
              <option value="5">5 ⭐</option>
            </select>
          </div>
          <div class="col-12 d-flex justify-content-end">
            <button class="btn btn-success" type="submit">Appliquer les filtres</button>
          </div>
        </form>
      </section>

      <section aria-live="polite" aria-relevant="additions" aria-atomic="true" id="ridesList">
        <p class="text-muted">Effectuez une recherche pour afficher des covoiturages.</p>
      </section>
    </section>
  </main>

  <script>
const allRides = [
  {
    id: 100,
    driver: "Jean",
    photo: "img_profils/samuel-raita-RiDxDgHg7pw-unsplash.jpg",
    rating: 4.4,
    seatsLeft: 1,
    price: 20,
    startCity: "Lyon",
    endCity: "Paris",
    dateDeparture: "2025-07-22T09:00",
    dateArrival: "2025-07-22T14:00",
    ecological: true,
    durationHours: 5
  },
  {
    id: 101,
    driver: "Lucie",
    photo: "img_profils/christopher-campbell-rDEOVtE7vOs-unsplash.jpg",
    rating: 4.0,
    seatsLeft: 4,
    price: 15,
    startCity: "Marseille",
    endCity: "Toulouse",
    dateDeparture: "2025-07-23T11:00",
    dateArrival: "2025-07-23T15:00",
    ecological: true,
    durationHours: 4
  },
  {
    id: 102,
    driver: "Angélique",
    photo: "img_profils/icons8-team-FcLyt7lW5wg-unsplash.jpg",
    rating: 4.0,
    seatsLeft: 1,
    price: 18,
    startCity: "Lille",
    endCity: "Paris",
    dateDeparture: "2025-07-24T07:00",
    dateArrival: "2025-07-24T10:00",
    ecological: false,
    durationHours: 3
  },
  {
    id: 103,
    driver: "Ilona",
    photo: "img_profils/gabriel-silverio-K_b41GaWC5Y-unsplash.jpg",
    rating: 3.7,
    seatsLeft: 3,
    price: 10,
    startCity: "Bordeaux",
    endCity: "Montauban",
    dateDeparture: "2025-07-25T09:00",
    dateArrival: "2025-07-25T12:00",
    ecological: true,
    durationHours: 3
  },
  {
    id: 104,
    driver: "Thierry",
    photo: "img_profils/mitchell-luo-ymo_yC_N_2o-unsplash.jpg",
    rating: 4.7,
    seatsLeft: 1,
    price: 20,
    startCity: "Limoges",
    endCity: "Nantes",
    dateDeparture: "2025-07-25T09:00",
    dateArrival: "2025-07-25T13:00",
    ecological: false,
    durationHours: 4
  },
  {
    id: 105,
    driver: "Patrick",
    photo: "img_profils/charlie-green-3JmfENcL24M-unsplash.jpg",
    rating: 4.2,
    seatsLeft: 3,
    price: 18,
    startCity: "Marseille",
    endCity: "Paris",
    dateDeparture: "2025-07-27T07:00",
    dateArrival: "2025-07-27T15:00",
    ecological: true,
    durationHours: 8
  },
  {
    id: 106,
    driver: "Marie",
    photo: "img_profils/caique-nascimento-KJE--xk4AWE-unsplash.jpg",
    rating: 3.5,
    seatsLeft: 4,
    price: 20,
    startCity: "Bayonne",
    endCity: "Narbonne",
    dateDeparture: "2025-07-28T07:00",
    dateArrival: "2025-07-28T11:00",
    ecological: false,
    durationHours: 4
  }
];
    document.getElementById("searchForm").addEventListener("submit", function(e) {
      e.preventDefault();
      const start = e.target.startCity.value.trim().toLowerCase();
      const end = e.target.endCity.value.trim().toLowerCase();
      const date = e.target.travelDate.value;

      if (!start || !end || !date) {
        alert("Merci de remplir tous les champs.");
        return;
      }

      let results = allRides.filter(ride =>
        ride.startCity.toLowerCase() === start &&
        ride.endCity.toLowerCase() === end &&
        ride.dateDeparture.startsWith(date) &&
        ride.seatsLeft > 0
      );

      if (results.length === 0) {
        const futureRides = allRides
          .filter(r =>
            r.startCity.toLowerCase() === start &&
            r.endCity.toLowerCase() === end &&
            r.seatsLeft > 0
          )
          .sort((a, b) => new Date(a.dateDeparture) - new Date(b.dateDeparture));

        if (futureRides.length > 0) {
          const closest = futureRides[0];
          alert("Aucun covoiturage trouvé à cette date. Le plus proche disponible est le " +
            new Date(closest.dateDeparture).toLocaleDateString("fr-FR") + ".");
          results = [closest];
        }
      }

      displayRides(results);
    });


    const sidebar = document.getElementById("sidebar");
    const sidebarToggle = document.getElementById("sidebarToggle");
    sidebarToggle.addEventListener("click", () => {
      sidebar.classList.toggle("collapsed");
    });

    let currentRides = [];

    function displayRides(rides) {
      currentRides = rides;
      const container = document.getElementById("ridesList");
      container.innerHTML = "";

      if (rides.length === 0) {
        container.innerHTML = '<p class="text-warning">Aucun covoiturage ne correspond à votre recherche.</p>';
        return;
      }

      rides.forEach((ride) => {
        const departureTime = new Date(ride.dateDeparture);
        const arrivalTime = new Date(ride.dateArrival);
        const formattedDate = departureTime.toLocaleDateString("fr-FR");
        const depHour = departureTime.toLocaleTimeString("fr-FR", { hour: "2-digit", minute: "2-digit" });
        const arrHour = arrivalTime.toLocaleTimeString("fr-FR", { hour: "2-digit", minute: "2-digit" });

        const card = document.createElement("article");
        card.classList.add("card", "mb-3", "p-3");
        card.setAttribute("tabindex", "0");
        card.innerHTML = `
          <div class="d-flex align-items-center">
            <img src="${ride.photo}" alt="Photo du conducteur ${ride.driver}" class="rounded-circle me-3" width="64" height="64" />
            <div>
              <h3 class="h5 mb-0">${ride.driver} <small class="text-muted">(${ride.rating.toFixed(1)} ⭐)</small></h3>
              <p class="mb-1">
                <strong>Places restantes :</strong> ${ride.seatsLeft}<br />
                <strong>Prix :</strong> ${ride.price} crédits<br />
                <strong>Date :</strong> ${formattedDate}<br />
                <strong>Départ :</strong> ${depHour} - <strong>Arrivée :</strong> ${arrHour}<br />
                <strong>Voyage écologique :</strong> ${ride.ecological ? "✅ Oui" : "❌ Non"}
              </p>
            </div>
          </div>
          <button class="btn btn-success mt-2 details-btn" data-id="${ride.id}" aria-label="Détails du covoiturage de ${ride.driver}" onclick="location.href='codrive_details.php'">Détail</button>
        `;
        container.appendChild(card);
      })};


    document.getElementById("filterForm").addEventListener("submit", (e) => {
      e.preventDefault();
      const ecoVal = e.target.filterEco.value;
      const priceMax = parseFloat(e.target.filterPriceMax.value);
      const durationMax = parseFloat(e.target.filterDurationMax.value);
      const minRating = parseFloat(e.target.filterMinRating.value);

      const filtered = currentRides.filter((ride) => {
        if (ecoVal === "true" && !ride.ecological) return false;
        if (ecoVal === "false" && ride.ecological) return false;
        if (!isNaN(priceMax) && ride.price > priceMax) return false;
        if (!isNaN(durationMax) && ride.durationHours > durationMax) return false;
        if (!isNaN(minRating) && ride.rating < minRating) return false;
        return true;
      });

      displayRides(filtered);
    });
  </script>

  <footer>
    <p>Contact : <a href="mailto:contact@ecoride.fr">contact@ecoride.fr</a> | <a href="mentions_legales.php">Mentions légales</a></p>
  </footer>
</body>
</html>
