<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="hero-section">
    <?php if ($latestVelo): ?>
        <div class="hero-image" style="background-image: url('images/<?php echo $latestVelo['images']; ?>');">
            <div class="hero-overlay">
                <div class="hero-content">
                    <h2>
                        <?php echo $latestVelo['nom_vélo']; ?>
                    </h2>
                    <p>
                        <?php echo $latestVelo['description']; ?>
                    </p>
                    <p>Prix :
                        <?php echo $latestVelo['prix']; ?> €
                    </p>
                    <a href="?page=produit&velo=<?php echo $latestVelo['id']; ?>">Plus d'infos</a>
                </div>
            </div>
        </div>
    <?php else: ?>
        <p>Aucun vélo disponible pour le moment.</p>
    <?php endif; ?>
</div>
</body>
</html>
