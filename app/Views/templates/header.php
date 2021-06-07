<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title></title>

  </head>
  <body>
    <?php
      helper('utility');
     ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
      <a class="navbar-brand" href="<?= base_url() ?>/"><?= config('Params')->AppName ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php if (session()->get('isLoggedIn')): ?>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item <?= (getUriSegments() == 'profile' ? 'active' : null) ?>">
            <a class="nav-link" href="<?= base_url() ?>/profile">Profile</a>
          </li>
        </ul>
        <ul class="navbar-nav my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>/logout">Logout</a>
          </li>
        </ul>
      <?php else: ?>
        <ul class="navbar-nav mr-auto">
          <!-- LEFT -->
        </ul>
        <ul class="navbar-nav my-2 my-lg-0">
          <li class="nav-item <?= (getUriSegments() == 'login' ? 'active' : null) ?>">
            <a class="nav-link" href="<?= base_url() ?>/login">Login</a>
          </li>
          <li class="nav-item <?= (getUriSegments() == 'register' ? 'active' : null) ?>">
            <a class="nav-link" href="<?= base_url() ?>/register">Register</a>
          </li>
        </ul>
        <?php endif; ?>
      </div>
      </div>
    </nav>
