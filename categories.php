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
<?php
require_once 'element/nav.php';
$data = file_get_contents('data/articles.json');
$article = json_decode($data, true);
foreach ($article as $a){
    if ($_GET['id']==$a['categorieid']){
        $titre = $a['titre'];
        echo '<h1> '. $titre . '</h1>';
        echo '<p>' . $a['desc'] . '</p>';
        echo '<a href="article.php?id='.$a['id'].'">Lire la suite</a>';
    }
}
require_once 'element/footer.php';
?>

</body>
</html>