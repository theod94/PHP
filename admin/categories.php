<?php
$donnee = file_get_contents('../data/categories.json');
$categories = json_decode($donnee, true);
if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    //Supprimer la bonne categorie
    foreach ($categories as $key => $item) {
        $cat_id = $item['id'];
        if ($_GET['id'] == $cat_id) {
            //On supprimer
        }
    }
    unset($categories[$key]);
    file_put_contents('../data/categories.json',json_encode($categories, JSON_PRETTY_PRINT));
    header('location: categories.php');
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Chat Panel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet"
          id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="img/ico" href='img/favicon-icon.png'>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
            integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-hover-dropdown/2.2.1/bootstrap-hover-dropdown.min.js"></script>
    <script src="https://use.fontawesome.com/10a964325b.js"></script>
    <link href="index.css" rel="stylesheet">
    <script src="index.js"></script>
</head>

<body>
<div class="main-container">
    <nav class="navbar navbar-fixed-top admin-navbar">
        <div class="container-fluid" style="display: block">
            <div class="navbar-header" style="display: inline-block;">
                <button id="menu_icon"><i class="fa fa-bars" aria-hidden="true"></i></button>
                <a href="index.html" class="admin-chat-logo">
            </div>
        </div>
    </nav>

    <?php
    require_once 'elements/menu.php';
    ?>
    <section id="content_body">
        <div class="container">
            <div class="row">
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <?php

                    foreach ($categories as $item) {
                        $cat = $item['nom'];
                        echo '<tr>';
                        echo '<td>' . $item['id'] . '</td>';
                        echo '<td>' . $cat . '</td>';
                        echo '<td><a href="categories_details.php?id=' . $item['id'] . '">Voir';
                        echo '/<a href="categories.php?id=' . $item['id'] . '&action=delete">Supprimer';
                        echo '/<a href="categories.php?id=' . $item['id'] . '&action=update">modifier';
                        echo '<tr>';
                    }
                    ?>
                </table>
                <a href="add_categories.php"><button>Ajouter</button></a>
            </div>
        </div>
    </section>
</div>
</body>
</html>