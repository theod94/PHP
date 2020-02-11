<?php
session_start();
require_once 'includes/defines.php';

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
$form = isset($_GET['page']) ? $_GET['page'] : '';
if ($form == 'contact') {
    require_once 'element/form.php';
} else {
    require_once 'element/corps.php';
}
require_once 'element/footer.php';
?>
</body>
</html>