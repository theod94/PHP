<?php
session_start();
if (!isset($_SESSION['email'])) {
header('Location: connexion.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Blog Home - Start Bootstrap Template</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/blog-home.css" rel="stylesheet">
</head>
<body>
<main class="container-fluid m-0 p-0 ">
    <div class="row mx-auto">

        <div class="col-10 w-75 mx-auto">
            <form method="POST">
                <input class="form-control" name="add" type="text" placeholder="Nom de la catégorie">
                <button type="submit" class="btn btn-secondary">Ajout Catégorie</button>
            </form>
            <?php
            $catJson = file_get_contents('../data/categories.json');
            $techno = json_decode($catJson, true);
            if(isset($_POST['add'])){
                foreach($techno as $key => $value){
                    $id = $value['id']+1;
                }
                $newElement = [['id'=>$id,
                    'nom'=> $_POST['add']]];
                $newTab = array_merge($techno, $newElement);
                file_put_contents('../data/categories.json', json_encode($newTab));
                header('Location: categories.php');
            }
            ?>
        </div>
    </div>
</main>
</body>
</html>