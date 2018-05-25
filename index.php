<?php

if (isset($_GET['ln'])) {
    if (htmlspecialchars($_GET['ln']) !== null) {
        $language = htmlspecialchars($_GET['ln']);

        if ($language == "en") {
            include_once 'en/index.php';
        } else {
            if ($language == "no") {
                include_once 'no/index.php';
            } else {
                if ($language == "ru") {
                    include_once 'ru/index.php';
                }
            }
        }
    }
} else {
    include_once 'en/index.php';
}