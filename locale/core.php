<?php

// Démarrer la session si elle n'est pas déjà démarrée
if(session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Si la langue n'est pas définie, on la définit (par défaut sauf si renseignée dans l'URL)
if(!isset($_SESSION['lang'])) {
    setLanguage(isset($_GET['lang']) ? $_GET['lang'] : null);
}

// Si la langue est définie dans l'URL, on la définit
if(isset($_GET['lang'])) {
    setLanguage($_GET['lang']);
}

// Si la langue est définie dans la session, on la charge
if(isset($_SESSION['lang'])) {
    $locale = loadLanguage($_SESSION['lang']);
}

/* 
 * Définit la langue de l'utilisateur dans la session
 * @param string $lang La langue à définir
 */

function setLanguage($lang = null) {
    if($lang == 'fr') {
        $_SESSION['lang'] = 'fr';
    } else if($lang == 'en') {
        $_SESSION['lang'] = 'en';
    } else if($lang == 'nl') {
        $_SESSION['lang'] = 'nl';
    } else {
        $_SESSION['lang'] = 'fr';
    }
}

/* 
 * Charge le fichier de langue
 * @param string $lang La langue à charger
 * @return array $data Le tableau contenant les données de la langue
 */

function loadLanguage($lang) {
    if (file_exists('locale/' . $lang . '.json')) {
        $json = file_get_contents('locale/' . $lang . '.json');
        $data = json_decode($json, true);
        return $data;
    } else {
        $json = file_get_contents('/locale/en.json');
        $data = json_decode($json, true);
        return $data;
    }
}