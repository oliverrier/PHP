<?php include_once "./header.php" ?>
    <body>
        <form action="" method="get">
            <div>
                <label>Nom spawn</label>
                <input type="text" id="spawn" name="spawn">
                <?php $spawn = $_GET['spawn']; 
                ?>
            </div>
            <div>
                <label>lien image :</label>
                <input type="text" id="link" name="link">
                <?php $link = $_GET['link']; 
                ?>
            </div>
            <button>
            Ajouter spawn
            </button>
            
            ?>
        </form>
    </body>
</html>
