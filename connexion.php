<?php
session_start();
//var_dump($_POST);
$data = file_get_contents('data/users.json');
//var_dump($data);
$users = json_decode($data, true);
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
foreach ($users as $user) {
//    echo $user['email'];
    if ($email == $user['email'] && password_verify($password, $user['mdp'])) {
        $_SESSION['email'] = $user['email'];
        $_SESSION['droit'] = $user['droit'];


        header('Location: index.php');
    }
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

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog-home.css" rel="stylesheet">

</head>

<body>

<?php
require_once 'element/nav.php';

require_once 'element/form.php';

require_once 'element/footer.php';
?>

</body>
</html>