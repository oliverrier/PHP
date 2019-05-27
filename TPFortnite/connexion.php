<?php include_once ("./header.php") ?>
    <body>
        <form action="" method="get">
            <div>
                <label>Username :</label>
                <input type="text" id="username" name="user_name">
                <?php $username = $_GET['username']; 
                ?>
            </div>
            <div>
                <label>Password :</label>
                <input type="password" id="password" name="user_password">
                <?php $password = $_GET['password']; 
                ?>
            </div>
            <button>
            Se connecter !
            </button>
            <?php if ($username == 'admin' && $password == 'admin') {
                
            } else {
                # code...
            }
            
            ?>
        </form>
    </body>
</html>