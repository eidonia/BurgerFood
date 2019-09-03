<?php
    require 'back.php';
    $id = $_GET['id'];

    if(!empty($_POST)){
        $id = $_POST['id'];
        $db = Database::connect();
        $statement = $db->prepare("DELETE FROM items WHERE id = ?");
        $statement->execute(array($id));
        Database::disconnect();
        header("Location: index.php");
    }
?>



<!DOCTYPE html>

<html>
    <head>
        <title>Burger Food</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Holtwood+One+SC&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <script src="../JS/script.js"></script>
    </head>
    
    <body>
        <h1 class="text-logo"> <span class="glyphicon glyphicon-cutlery"></span> Burger Food <span class="glyphicon glyphicon-cutlery"></span></h1>
        <div class="container admin">
            <div class="row">
                <h1><strong>Supprimer un Item</strong></h1>
                <br>
                <form class="form" role="form" action="delete.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id;?>"/>
                    <p class="alert alert-warning"> Voulew-vous vraiment le supprimer?</p>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-warning">Oui</button>
                        <a class="btn btn-default" href="index.php">Non</a>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>