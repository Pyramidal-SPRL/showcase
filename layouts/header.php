<?php include './locale/core.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Pyramidal, une société à taille humaine pionnière dans le développement web et les services IT, propose des solutions sur mesure depuis plus de 15 ans.">
  <meta name="keywords" content="Pyramidal, SPRL, développement, web, services, IT, solutions sur mesure, expertise, technique, créativité">
  <meta name="author" content="elemis">
  <title><?= $locale['global']['site_title'] ?> | <?= $locale['global']['site_description'] ?></title>
  <link rel="shortcut icon" href="./assets/img/pyramidal/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="./assets/css/plugins.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/colors/green.css">
  <link rel="stylesheet" href="./assets/css/custom.css">
  <link rel="preload" href="./assets/css/fonts/urbanist.css" as="style" onload="this.rel='stylesheet'">
</head>

<body>
  <div class="content-wrapper">
    <header class="wrapper bg-soft-primary">
      <nav class="navbar navbar-expand-lg center-logo transparent position-absolute navbar-dark">
        <div class="container justify-content-between align-items-center">
          <div class="d-flex flex-row w-100 justify-content-between align-items-center d-lg-none">
            <div class="navbar-brand">
              <a href="/">
                <h3 class="logo-dark text-dark fs-30 mb-0">Pyramidal</h3>
                <h3 class="logo-light text-white fs-30 mb-0">Pyramidal</h3>
              </a>
            </div>
            <div class="navbar-other ms-auto">
              <ul class="navbar-nav flex-row align-items-center">
                <li class="nav-item d-lg-none">
                  <button class="hamburger offcanvas-nav-btn"><span></span></button>
                </li>
              </ul>
            </div>
          </div>
          <div class="navbar-collapse-wrapper d-flex flex-row align-items-center w-100">
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
              <div class="offcanvas-header mx-lg-auto order-0 order-lg-1 d-lg-flex px-lg-15">
                <a href="/" class="transition-none d-none d-lg-flex">
                  <h3 class="logo-dark text-dark fs-30 mb-0">Pyramidal</h3>
                  <h3 class="logo-light text-white fs-30 mb-0">Pyramidal</h3>
                </a>
                <button type="button" class="btn-close btn-close-white d-lg-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="w-100 order-3 order-lg-2 d-lg-flex offcanvas-body">
                <ul class="navbar-nav ms-auto align-items-center">
                  <li class="nav-item">
                    <a class="nav-link" href="/"><?= $locale['global']['homepage'] ?></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/contact"><?= $locale['global']['contact_us'] ?></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://ez-link.be/">EZDiablink</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-uppercase" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?= $_SESSION['lang'] ?></a>
                    <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                      <li class="nav-item"><a class="dropdown-item <?= ($_SESSION['lang'] === "fr") ? "text-green fw-bold": "" ?>" href="?lang=fr"><img src="https://flagcdn.com/16x12/fr.png" class="pe-1" alt="french flag"> <?= $locale['global']['french'] ?></a></li>
                      <li class="nav-item"><a class="dropdown-item <?= ($_SESSION['lang'] === "en") ? "text-green fw-bold": "" ?>" href="?lang=en"><img src="https://flagcdn.com/16x12/us.png" class="pe-1" alt="usa flag"> <?= $locale['global']['english'] ?></a></li>
                      <li class="nav-item"><a class="dropdown-item <?= ($_SESSION['lang'] === "nl") ? "text-green fw-bold": "" ?>" href="?lang=nl"><img src="https://flagcdn.com/16x12/nl.png" class="pe-1" alt="dutch flag"> <?= $locale['global']['dutch'] ?></a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="btn btn-sm btn-outline-white rounded-pill" href="https://my.pyramidal.be"><?= $locale['global']['login'] ?></a>
                  </li>
                </ul>
              </div>
              <div class="offcanvas-body d-lg-none order-4 mt-auto">
                <div class="offcanvas-footer">
                  <div>
                    <a href="mailto:info@pyramidal.be" class="link-inverse">info@pyramidal.be</a>
                    <br/> +32 (0) 496 26 65 69<br/>
                    <nav class="nav social social-white mt-4">
                      <a href="https://facebook.com" target="_blank"><i class="uil uil-facebook-f"></i></a>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>