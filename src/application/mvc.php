<?php
    $pageURI = $_SERVER["REQUEST_URI"];
    $pageURI = substr($pageURI, strpos($pageURI, "index.php") + 10);

    $controller = new Controller();

    if (!$pageURI) {
        $controller->parsePageURI("home");
    } else {
        $controller->parsePageURI($pageURI);
    }
?>