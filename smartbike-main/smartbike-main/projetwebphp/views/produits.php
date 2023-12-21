<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="content">

<div class="commande-btn-prod">
    <a href="?page=commander" class="commande-btn">Commander</a>
</div>
<div class="velo-cards">
    <?php foreach ($allVelos as $velo): ?>
        <div class="velo-card">
            <img src="images/<?php echo $velo['images']; ?>" alt="<?php echo $velo['nom_vélo']; ?>">
            <h3>
                <?php echo $velo['nom_vélo']; ?>
            </h3>
            <p>Prix :
                <?php echo $velo['prix']; ?> €
            </p>
            <a href="?page=produit&velo=<?php echo $velo['id']; ?>">Plus d'infos</a>
        </div>
    <?php endforeach; ?>
</div>
</div>
</body>
</html>
