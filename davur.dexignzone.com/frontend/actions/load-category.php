<?php

// Assurez-vous de configurer votre connexion à la base de données ici
$data_base = new PDO('mysql:host=localhost;dbname=restaurant_les_delices;', 'root', '');

// Récupérer la catégorie à charger
$category = $_GET['category'];

// Charger les plats de la catégorie
$request = $data_base->prepare("SELECT * FROM plat WHERE id_categ = (SELECT id_categ FROM categorie WHERE nom_Categorie = :category)");
$request->execute(['category' => $category]);

// Afficher les plats
while ($data = $request->fetch()) {
    echo '<div class="col-xl-3 col-xxl-4 col-lg-6 col-md-12 col-sm-6">';
    echo '<div class="card item-card">';
    echo '<div class="card-body p-0">';
    echo '<img class="img-fluid" alt="' . $data['nom_plat'] . '" src="images/' . $data['image'] . '">';
    echo '<div class="info">';
    echo '<h5 class="name">' . '<a href="./actions/view_dish.php?identifier=' . $data['id_plat'] . ' " >' . $data['nom_plat'] . '</a>' . '</h5>';
    echo '<p class="card-text">' . $data['description'] . '</p>';
    echo '<h6 class="mb-0 price"><img src="images/veg.png" alt="' . $data['nom_plat'] . ' price">' . $data['prix_plat'] . 'FCFA</h6>';
    echo '</div></div></div></div>';
}

$request->closeCursor();

