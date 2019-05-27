
<?php include_once ("./header.php") ?>
<body>
    <a href= "./connexion.php">
    <button id="connection_button">
        Connexion
    </button>
    </a>
    <button id="change_spawn_button">
        Changer de Spawn !
    </button>
    <?php
            foreach ($image as $array_link) {
                echo '<img src="' . $array_link['image'] . '"><br>';
            }
        ?>
</body>
</html>