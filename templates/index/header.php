<!doctype html>
<html lang="no">
  <head>
    <title><?= $data['pageTitle']; ?> | Telespinn</title>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link href="<?= \Telespinn\URL::toBase(); ?>/assets/stylesheets/css/style.css" rel="stylesheet">
    <link href="<?= \Telespinn\URL::toBase(); ?>/assets/images/logo-green.png" rel="icon">
  </head>
  <body>
    <?php if(!isset($data['hideHeader'])) : ?>
      <header id="header">
        <div class="container">
          <div class="grid-row" id="top">
            <div class="grid-column grid-span-2">
              <a href="<?= \Telespinn\URL::toBase(); ?>" id="header-logo">
                <img alt="Telespinn" src="<?= \Telespinn\URL::toBase(); ?>/assets/images/logo-white.svg">
              </a>
            </div>
            <div class="grid-align-right grid-column grid-span-10" id="header-menu">
              <a class="header-scroll">Om Telespinn</a>
              <a href="/inspirasjon">Inspirasjon</a>
              <a href="/nettbutikk">Nettbutikk</a>
            </div>
          </div>
          <div class="grid-row">
            <div class="grid-column grid-span-12" id="header-text">
              <div class="wrapper">
                <h1>Norsk naturgarn <br>fra hjertet av Telemark</h1>
                <p>
                  Telespinn er et spinneri på gården Midt-Svartdal som har spesialisert seg på naturlig produksjon av garn fra mohairgeita.
                </p>
                <p>
                  <a class="header-scroll">Les mer om Telespinn og Midt-Svartdal</a>
                  <a href="/nettbutikk">Gå til nettbutikken</a>
                </p>
              </div>
            </div>
          </div>
          <div class="grid-row">
            <div class="grid-column grid-span-12">
              <a class="header-scroll" id="header-scroll"></a>
            </div>
          </div>
        </div>
      </header>
    <?php endif; ?>
    <div id="container">
      <?php if(isset($data['hideHeader'])) : ?>
        <nav class="pinned" id="navigation">
      <?php else : ?>
        <nav id="navigation">
      <?php endif; ?>
        <div class="container">
          <div class="grid-row">
            <div class="grid-column grid-span-6">
              <a class="home" href="/"></a>
              <a class="header-scroll">Om Telespinn</a>
              <a href="/inspirasjon">Inspirasjon</a>
              <a href="/nettbutikk">Nettbutikk</a>
            </div>
            <div class="grid-align-right grid-column grid-span-6">
              <div class="wrapper">
                <a href="/min-side">Min side</a>
              </div>
            </div>
          </div>
        </div>
      </nav>