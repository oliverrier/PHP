<?php include_once './header.php'?>


<?php

// Pokemon
 include_once './pokemon/pokemon.php';
 include_once './pokemon/carapuce.php';
 include_once './pokemon/bulbizarre.php';
 include_once './pokemon/salameche.php';

 // Usable

 include_once './usable/usable.php';

    // Balls
    include_once './usable/balls/ball.php';
    include_once './usable/balls/pokeball.php';
    include_once './usable/balls/superball.php';
    include_once './usable/balls/hyperball.php';
    include_once './usable/balls/masterball.php';

    // Potion
    include_once './usable/potions/potions.php';
    include_once './usable/potions/potion.php';
    include_once './usable/potions/superpotion.php';
    include_once './usable/potions/hyperpotion.php';
    include_once './usable/potions/potionmax.php';


 ?> 
<?php
    $cara = new Carapuce(5);
    $bulbi = new Bulbizarre(5);
    $pokeball = new Pokeball();
    $cara->level_up();

    do {
        $cara->attack($bulbi);
        $bulbi->attack($cara);
    } while ($bulbi->current_life > (1.5 * $cara->strength));
    do {
    $caught = $pokeball->use($bulbi);
    } while (!$caught);
    $cara->level_up();

?>

<?php include_once './footer.php'?>