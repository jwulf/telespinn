<!doctype html>
<html lang="no">
  <head>
    <title><?= $data['pageTitle']; ?> | Telespinn</title>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link href="/assets/stylesheets/css/style.css" rel="stylesheet">
    <link href="/assets/images/logo-green.png" rel="icon">
  </head>
  <body>
    <header id="header">
      <?php if(\Telespinn\Telespinn::isIndex()) : ?>
        <nav id="navigation">
      <?php else : ?>
        <nav class="locked-to-top pinned-to-top" id="navigation">
      <?php endif; ?>
        <div class="container">
          <div class="grid-row">
            <div class="grid-column grid-span-8">
              <div class="wrapper">
                <a class="home-link" href="/"></a>
                <a href="/butikk">Butikk</a>                
                <a href="/inspirasjon">Inspirasjon</a>
                <a href="/kundeservice">Kundeservice</a>
                <a href="/kontakt">Kontakt oss</a>
              </div>
            </div>
            <div class="grid-column grid-span-4">
              <div class="wrapper">
                <a href="/handlekurv">Handlekurv</a>
                <a href="/min-side">Min side</a>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>