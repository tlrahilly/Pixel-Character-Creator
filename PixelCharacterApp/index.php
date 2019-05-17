<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="styles.css" media="screen" title="no title" charset="utf-8">
    <title>Pixel Character App</title>
  </head>
  <?php
    // Script that makes the program run!!!
    $body = 'images/bodyfinal.gif';
    $hair = 'images/blank.gif';
    $armor = 'images/blank.gif';
    $helmet = 'images/blank.gif';
    $sword = 'images/blank.gif';
    $shield = 'images/blank.gif';

    if (isset($_POST['body'])) {
      $body = $_POST['body'];
      switch ($body) {
        case 'body1':
          $body = 'images/bodyfinal.gif';
          break;

        default:
          $body = '#';
          break;
      }
    }

    if (isset($_POST['hair'])) {
      $hair = $_POST['hair'];
      switch ($hair) {
        case 'none':
          $hair = 'images/blank.gif';
          break;
        case 'longhair':
          $hair = 'images/longhairfinal.gif';
          break;
        case 'shorthair':
          $hair = 'images/shorthairfinal.gif';
          break;
        default:
          $hair = 'images/blank.gif';
          break;
      }
    }

    if (isset($_POST['armor'])) {
      $armor = $_POST['armor'];
      switch ($armor) {
        case 'none':
          $armor = 'images/blank.gif';
          break;
        case 'armor1':
          $armor = 'images/armor1final.gif';
          break;
        case 'armor2':
          $armor = 'images/armor2final.gif';
          break;
        default:
          $armor = 'images/blank.gif';
          break;
      }
    }

    if (isset($_POST['helmet'])) {
      $helmet = $_POST['helmet'];
      switch ($helmet) {
        case 'none':
          $helmet = 'images/blank.gif';
          break;
        case 'helmet1':
          $helmet = 'images/helmet1final.gif';
          break;
        case 'helmet2':
          $helmet = 'images/helmet2final.gif';
          break;
        default:
          $helmet = 'images/blank.gif';
          break;
      }
    }

    if (isset($_POST['sword'])) {
      $sword = $_POST['sword'];
      switch ($sword) {
        case 'none':
          $sword = 'images/blank.gif';
          break;
        case 'sword1':
          $sword = 'images/sword1final.gif';
          break;
        case 'sword2':
          $sword = 'images/sword2.gif';
          break;
        default:
          $sword = 'images/blank.gif';
          break;
      }
    }

    if (isset($_POST['shield'])) {
      $shield = $_POST['shield'];
      switch ($shield) {
        case 'none':
          $shield = 'images/blank.gif';
          break;
        case 'woodenshield':
          $shield = 'images/woodenshield.gif';
          break;
        case 'steelshield':
          $shield = 'images/steelshield.gif';
          break;
        default:
          $shield = 'images/blank.gif';
          break;
      }
    }
   ?>
  <body>
    <div class="container-fluid">
      <div class="nav"><!--holds navbar-->
        <nav class="navbar navbar-expand-lg">
          <a class="navbar-brand" href="index.html"><img src="images/logo.gif" alt="Pixel Character" /></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!--main page links goes here-->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="catalog.html">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link creator-link" href="events.html">Character Creator</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
<!--Main Section Starts Here-->
<main class="row">
  <aside class="col-lg-2">
    <form class="" action="index.php" method="post">
      <p>Body:</p>
      <select class="" name="body">
        <option value="body1">Human</option>
      </select>
      <p>Hair:</p>
      <select class="" name="hair">
        <option value="none">None</option>
        <option value="longhair">Longhair</option>
        <option value="shorthair">Short Hair</option>
      </select>
      <p>Armor:</p>
      <select class="" name="armor">
        <option value="none">None</option>
        <option value="armor1">Armor 1</option>
        <option value="armor2">Armor 2</option>
      </select>
      <p>Helmet:</p>
      <select class="" name="helmet">
        <option value="none">None</option>
        <option value="helmet1">Helmet 1</option>
        <option value="helmet2">Helmet 2</option>
      </select>
      <p>Weapon:</p>
      <select class="" name="sword">
        <option value="none">None</option>
        <option value="sword2">Sword-no guard</option>
        <option value="sword1">Sword-with guard</option>
      </select>
      <p>Shield:</p>
      <select class="" name="shield">
        <option value="none">None</option>
        <option value="woodenshield">Wood Shield</option>
        <option value="steelshield">Steel Shield</option>
      </select>
      <input type="submit" name="submit" value="Get Character">
    </form>
  </aside>
  <div class="col creator-area">
    <div class="row">
      <img src="<?php print "$body";?>" alt="Body" />
      <img src="<?php print "$hair";?>" alt="" />
      <img src="<?php print "$armor";?>" alt="" />
      <img src="<?php print "$helmet";?>" alt="" />
      <img src="<?php print "$sword";?>" alt="" />
      <img src="<?php print "$shield";?>" alt="" />
    </div>
  </div>
</main>
<footer class="row">
  <div>
    <nav>
      <ul class="row">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </div>
  <div>
    <p>&copy; 2019 Pixel Character</p>
  </div>
  <div>
    <p><a href="#" class="creator">Character Creator</a></p>
  </div>
</footer>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
