<?php
session_start();

$panier = $_SESSION['panier'];
try {
    $data_base = new PDO('mysql:host=localhost;dbname=restaurant_les_delices;', 'root', '');
} catch (Exception $err) {
    die('Erreur' . $err);
}

$identifiant_commande = hash('sha256', uniqid(rand(), true));

if (isset($_POST['fullname'])){
    if (isset($_POST['phone'])){
        if (isset($_POST["adress"])){
            $request = $data_base->prepare("insert into commande(id_cde,adr_liv,Num_phone,date_heure_cmde,statu,nom) values (:id, :adress, :phone, now(), :statu, :name)");
            $request->execute(array('id' => $identifiant_commande,
                'adress' => nl2br($_POST["adress"]),
                'phone' =>  nl2br($_POST['phone']),
                'statu' => 0,
                'name' => nl2br($_POST['fullname'])
                ));

            foreach ($panier as $plat_id => $quantite) {
                $query = $data_base->prepare("INSERT INTO plat_commande (id_cde, id_plat, qte) VALUES (:commande_id, :plat_id, :quantite)");
                $query->execute(array('commande_id' => $identifiant_commande, 'plat_id' => $plat_id, 'quantite' => $quantite));
            }

            // Effacer le panier après avoir passé la commande
            unset($_SESSION['panier']);

            header('Location:../front-home.php');
            exit();

        }else{
            echo "Veuillez mettre une adresse";
        }
    }else{
        echo "Insérez un numero de telephone valide";
    }
}else{
    echo "Le nom d'utilisateur n'existe pas";
}
