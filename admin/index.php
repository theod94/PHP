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
        <div class="container-fluid " style="display: block">
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
                <div class="col-md-4"><h1>Bienvenue dans mon espace</h1></div>
            </div>
        </div>
    </section>
</div>
</body>
</html>