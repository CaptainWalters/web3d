<!DOCTYPE html>
<html>
<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Stylesheets -->
    <!-- CDN CSS's -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <!-- main -->
    <link rel="stylesheet" href="./css/main.css">
    <!--end of stylesheets -->
    <title>Monopoly museum</title>
</head>
<body>
    <!-- Navigation bar -->
    <nav id="navigation" class="navbar sticky-top navbar-expand-sm">
        <div class="container">
            <a class="logo navbar-brand" href="./">
                <i class="fas fa-dice fa-2x"></i>
                <h1>MONOPOLY</h1>
                <h2>Museum</h2>
            </a>
            <!-- Menu button for mobile -->
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse ">
                <span class="navbar-icon">
                    <i class="fas fa-bars fa-2x"></i>
                </span>
            </button>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a id="navHome" class="nav-link" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a id="navModels" class="nav-link" href="?modelview">Models</a>
                    </li>
                    <li class="nav-item">
                        <a id="navVariations" class="nav-link disabled" href="?variations">Variations</a>
                    </li>
                    <li class="nav-item dropright">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Web3d assessment
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="?statement">Statement of Originality</a>
                            <a class="dropdown-item" href="?assets/downloads/codebase.zip">Codebase Download</a>
                            <a class="dropdown-item" href="?assets/downloads/models.zip">Model Download</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- SPA content -->
    <?php

    error_reporting(E_ALL | E_STRICT);
    ini_set('display_errors', 1);

    require __DIR__ . '/application/view/load.php';
    require __DIR__ . '/application/model/model.php';
    require __DIR__ . '/application/controller/controller.php';
    require __DIR__ . '/application/mvc.php';
    ?>
    <!-- End of PHP hell -->

    <!-- Footer -->
    <footer>

    </footer>

    <!-- JavaScript -->
    <!-- JavaScript CDN -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <!-- Custom stuff -->
    <script type="text/javascript" src="./js/all.js"></script>
</body>
</html>