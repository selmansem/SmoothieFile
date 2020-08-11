<?php
session_start();
include 'functions.inc.php';

if (isset($_SESSION['lang']) && !empty(trim($_SESSION['lang']))) {
    require_once 'languages/' . $_SESSION['lang'] . '.php';
} else {
    $_SESSION['lang'] = "en";
    require_once 'languages/en.php';
}

?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang'] ?>" dir="auto">
<head>
    <meta charset="UTF-8">
    <title>SmoothieFile</title>
    <link rel="shortcut icon" href="media/logo-bg-w.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/master.css">

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2c3d4b4223.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="./">
            <img src="media/logo.png" width="30" height="30" class="d-inline-block align-top" alt="SF" loading="lazy">
            SmoothieFile
        </a>
    </nav>
    
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><?php echo $lang['welcome'] ?></h1>
            <p class="lead"><?php echo $lang['description'] ?></p>
        </div>
    </div>

    <!-- Footer div -->
    <div class="footer-div text-light p-3 mx-auto text-center">
        <div class="container">
            <?php
            switch ($_SESSION['lang']) {
                case 'es':
                    $flag = "es";
                    break;
                case 'en':
                    $flag = "en";
                    break;
            }
            ?>
            <label for="langselector"><img src="media/flags/<?php echo $flag ?>.png" height="25" class="border border-secondary" alt="Flag"></label>
            <select id="langselector" class="custom-select custom-select-sm lang-selector ml-1" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                <?php
                switch ($_SESSION['lang']) {
                    case 'es':
                        echo '<option value="index.php?lang=es" value="es.png" selected>' . $lang['langSel_es'] . '</option>
                <option value="index.php?lang=en" value="en.png">' . $lang['langSel_en'] . '</option>';
                        break;

                    case 'en':
                        echo '<option value="index.php?lang=en" value="en.png" selected>' . $lang['langSel_en'] . '</option>
                <option value="index.php?lang=es" value="es.png">' . $lang['langSel_es'] . '</option>';
                        break;

                    default:
                        echo '<option value="index.php?lang=en" value="en.png" selected>' . $lang['langSel_en'] . '</option>
                <option value="index.php?lang=es" value="es.png">' . $lang['langSel_es'] . '</option>';
                        break;
                }
                ?>
            </select>
        </div>
        <span>Made with<i class="fas fa-heart text-danger mx-2"></i>in Spain. Powered by <a href="https://github.com/selmansem">Selman</a>.</span>
    </div>
</body>
</html>