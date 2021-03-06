<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Suka Perpus">
    <meta name="author" content="">

    <title>SukaPerpus Home</title>
    <link href="<?php echo base_url();?>assets/client/css/home.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/client/css/index.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/client/css/profile.css" rel="stylesheet">

</head>
  <body>
    <!-- NAVBAR -->
    <nav class="nav-wrap">
      <a href="<?= site_url('Client_C/home') ?>" class="nav-left fadeIn first">
        <img src="<?php echo base_url();?>/assets/client/images/Logo (1).png" width="80" />
        <p class="nav-brand-text">SukaPerpus</p>
      </a>

      <div class="nav-center nav-responsive fadeIn second">
      <a href="<?= site_url('Client_C/home') ?>" class="nav-menu nav-margin">Beranda</a>
        <a href="<?= site_url('Client_C/about') ?>" class="nav-menu nav-margin">Tentang</a>
        <a href="<?= site_url('Client_C/books') ?>" class="nav-menu nav-margin">Buku</a>
        <a href="<?= site_url('Auth_C/login') ?>" class="nav-menu nav-margin">Masuk</a>
      </div>

      
    </nav>
    <!-- NAVBAR -->


    <br />
    <br />
    <div class="wrapper-center fadeInDown">
      <div id="formContent">
        <!-- Tabs Titles -->
        <h2 class="active">My</h2>

        <img
          src="https://images.unsplash.com/photo-1635672540255-32be6349d02d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=761&q=80"
          class="pro-img"
        />

        <div class="pro-wrap">
          <h2>Aldodevv</h2>
          <h2>********</h2>
          <br />
          <br />
          <br />

          <button class="button" type="submit" class="fadeIn fourth">
            CHANGE ?
          </button>
        </div>

        <!-- Remind Passowrd -->
        <div id="formFooter">
          <a class="underlineHover" href="Promo.php">GET PREMIUM</a>
        </div>
      </div>
    </div>

    <br />
    <br />

    <br />
    <br />
  
    <!-- FOOTER -->
    <div class="footer">
        <div class="w100 flex-between footer-container">
          <a href="home.html" class="footer-left">
            <img src="<?php echo base_url();?>/assets/client/images/Logo (1).png" width="90" height="65" />
            <p class="nav-brand-text">SukaPerpus</p>
          </a>


          <div class="flex footer-icons">
            <a href="https://twitter.com" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-twitter" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z" />
              </svg>
            </a>
            <a href="https://facebook.com " target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
              </svg>
            </a>
            <a href="https://instagram.com" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <rect x="4" y="4" width="16" height="16" rx="4" />
                <circle cx="12" cy="12" r="3" />
                <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
              </svg>
            </a>
          </div>
        </div>
      <div class="footer-bot">?? 2020 SukaPerpus. All rights reserved.</div>
    </div>
    <!-- FOOTER -->

    <!-- BOTTOM MENU -->
    <div class="nav-nonresponsive flex-between">
      <a href="<?= site_url('Client_C/home') ?>" class="nav-nonresponsive-con fadeIn first">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-smart-home" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
          <path d="M19 8.71l-5.333 -4.148a2.666 2.666 0 0 0 -3.274 0l-5.334 4.148a2.665 2.665 0 0 0 -1.029 2.105v7.2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-7.2c0 -.823 -.38 -1.6 -1.03 -2.105" />
          <path d="M16 15c-2.21 1.333 -5.792 1.333 -8 0" />
        </svg>
        <p>Home</p>
      </a>
      <a href="<?= site_url('Client_C/about') ?>" class="nav-nonresponsive-con fadeIn second">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-info-circle" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
          <circle cx="12" cy="12" r="9" />
          <line x1="12" y1="8" x2="12.01" y2="8" />
          <polyline points="11 12 12 12 12 16 13 16" />
        </svg>
        <p>About</p>
      </a>
      <a href="<?= site_url('Client_C/books') ?>" class="nav-nonresponsive-con fadeIn third">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-book" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
          <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
          <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
          <line x1="3" y1="6" x2="3" y2="19" />
          <line x1="12" y1="6" x2="12" y2="19" />
          <line x1="21" y1="6" x2="21" y2="19" />
        </svg>
        <p>Books</p>
      </a>
    </div>
    <!-- BOTTOM MENU -->
  </body>
</html>


