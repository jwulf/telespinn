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
    <?php if(\Telespinn\URL::getSegment()) : ?>
      <nav class="pinned locked" id="navigation">
    <?php else : ?>
      <nav id="navigation">
    <?php endif; ?>
      <div class="container">
        <div class="column">
          <div class="wrapper">
            <a class="home-link" href="/"></a>
            <a class="scroll-past-top">Om Telespinn</a>
            <a href="/inspirasjon">Inspirasjon</a>
            <a href="/butikk">Butikk</a>
          </div>
        </div>
        <div class="column">
          <div class="wrapper">
            <a href="/min-side">Min side</a>
          </div>
        </div>
      </div>
    </nav>