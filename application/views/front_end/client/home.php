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
      <a href="<?= site_url('Databuku_C/home') ?>" class="nav-left fadeIn first">
        <img src="<?php echo base_url();?>/assets/client/images/Logo (1).png" width="80" />
        <p class="nav-brand-text">Aprodhite Library</p>
      </a>

      <div class="nav-center nav-responsive fadeIn second">
        <a href="<?= site_url('Client_C/home') ?>" class="nav-menu nav-margin">Home</a>
        <a href="<?= site_url('Client_C/about') ?>" class="nav-menu nav-margin">About</a>
        <a href="<?= site_url('Client_C/books') ?>" class="nav-menu nav-margin">Books</a>
        <a href="<?= site_url('Auth_C/login') ?>" class="nav-menu nav-margin">Login</a>

      </div>

      <div class="nav-right nav-responsive fadeIn third">
        <img
          class="nav-avatar"
          src="https://avatars.dicebear.com/api/human/2.svg"
        />
        <a href="<?= site_url('Databuku_C/profile') ?>" class="nav-menu">Profile</a>
      </div>
    </nav>
    <!-- NAVBAR -->

    <!-- HOME HEADER -->
    <div class="w100 flex-column-center up-header fadeInDown">
      <img src="<?php echo base_url();?>/assets/client/images/Poster.png" style="width: 100%" alt="" />
    </div>
    <!-- HOME HEADER -->

    <br />
    <br />
    <br />
    <!-- HOME SERVICE -->
    <div class="flex-column-center w100 fadeIn fourth">
      <h3 class="font-judul">Layanan Perpustakaan Aprodhite</h3>
      <br />
      <br />
      <br />
      <div class="home-service">
        <img
          src="<?php echo base_url();?>/assets/client/images/Icon 1.png"
          style="margin-bottom: 20px"
          alt=""
          width="120px"
          height="140px"
        />
        <img
          src="<?php echo base_url();?>/assets/client/images/Icon 2.png"
          style="margin-bottom: 20px"
          alt=""
          width="120px"
          height="140px"
        />
        <img
          src="<?php echo base_url();?>/assets/client/images/Icon 3.png"
          style="margin-bottom: 20px"
          alt=""
          width="120px"
          height="140px"
        />
        <img
          src="<?php echo base_url();?>/assets/client/images/Icon 4.png"
          style="margin-bottom: 20px"
          lt=""
          width="120px"
          height="140px"
        />
      </div>
    </div>
    <!-- HOME SERVICE -->

    <br />
    <br />

    <h3 class="font-judul" style="margin-left: 10%">Genre</h3>

    <div class="w100 home-genre">
    <!-- GENRE CARD -->

      <div class="genre-card flex-center-center" style="background-image: url('https://images.unsplash.com/photo-1494403687614-8ca3e13f154f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80');">
        <p class="genre-card-p ">Romance</p>
      </div>
    <!-- GENRE CARD -->

      <div class="genre-card flex-center-center" style="background-image: url('https://images.unsplash.com/photo-1485846234645-a62644f84728?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1759&q=80');">
        <p class="genre-card-p ">Action</p>
      </div>
    <!-- GENRE CARD -->

      <div class="genre-card flex-center-center" style="background-image: url('https://images.unsplash.com/photo-1519074069444-1ba4fff66d16?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80');">
        <p class="genre-card-p ">Adventure</p>
      </div>
    <!-- GENRE CARD -->

        <div class="genre-card flex-center-center" style="background-image: url('https://images.unsplash.com/photo-1518709268805-4e9042af9f23?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=768&q=80');">
          <p class="genre-card-p ">Mystery</p>
        </div>
    <!-- GENRE CARD -->
        <div class="genre-card flex-center-center" style="background-image: url('https://images.unsplash.com/photo-1516780236580-ef416334d5b4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=796&q=80');">
          <p class="genre-card-p ">Fantasy</p>
        </div>
    <!-- GENRE CARD -->
    </div>
  <br />
  <br />
  <br />
  <br />
  <br />

    <h3 class="font-judul" style="margin-left: 10%">Buku Favorit</h3>
    <div class="home-favorit-book flex w100">
      <!-- CARD -->
      <div class="card-fav">
        <img src="<?php echo base_url();?>/assets/client/images/Logo.png" width="120px" height="90px" alt="" />
        <div class="flex-column-center">
          <h3 class="font-judul" style="color: white !important">
            Sarjana Kertas
          </h3>
          <div class="flex card-fav-container" style="gap: 20px">
            <p class="card-fav-judul">Deskripsi :</p>
            <p style="color: white; text-align: justify" class="w100">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Distinctio laudantium, qui praesentium aut quas magnam sunt magni
              atque amet, dolorum deserunt consequatur cumque eveniet hic alias
              iure illo itaque necessitatibus.
            </p>
          </div>
          <button class="button fadeIn fourth w100">READ BOOK</button>
        </div>
      </div>
      <!-- CARD -->
      <div class="card-fav">
        <img src="<?php echo base_url();?>/assets/client/images/Logo.png" width="120px" height="90px" alt="" />
        <div class="flex-column-center">
          <h3 class="font-judul" style="color: white !important">
            Sarjana Kertas
          </h3>
          <div class="flex card-fav-container" style="gap: 20px">
            <p class="card-fav-judul">Deskripsi :</p>
            <p style="color: white; text-align: justify" class="w100">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Distinctio laudantium, qui praesentium aut quas magnam sunt magni
              atque amet, dolorum deserunt consequatur cumque eveniet hic alias
              iure illo itaque necessitatibus.
            </p>
          </div>
          <button class="button fadeIn fourth w100">READ BOOK</button>
        </div>
      </div>
      <!-- CARD -->

      <div class="card-fav">
        <img src="<?php echo base_url();?>/assets/client/images/Logo.png" width="120px" height="90px" alt="" />
        <div class="flex-column-center">
          <h3 class="font-judul" style="color: white !important">
            Sarjana Kertas
          </h3>
          <div class="flex card-fav-container" style="gap: 20px">
            <p class="card-fav-judul">Deskripsi :</p>
            <p style="color: white; text-align: justify" class="w100">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Distinctio laudantium, qui praesentium aut quas magnam sunt magni
              atque amet, dolorum deserunt consequatur cumque eveniet hic alias
              iure illo itaque necessitatibus.
            </p>
          </div>
          <button class="button fadeIn fourth w100">READ BOOK</button>
        </div>
      </div>
      <!-- CARD -->
    </div>
    <br />
    <br />
    <br />
  
    <!-- FOOTER -->
    <div class="footer">
        <div class="w100 flex-between footer-container">
          <a href="home.html" class="footer-left">
            <img src="<?php echo base_url();?>/assets/client/images/Logo (1).png" width="90" height="65" />
            <p class="nav-brand-text">Aprodhite Library</p>
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
      <div class="footer-bot">© 2020 Aprodhite. All rights reserved.</div>
    </div>
    <!-- FOOTER -->

    <!-- BOTTOM MENU -->
    <div class="nav-nonresponsive flex-between">
      <a href="<?= site_url('Databuku_C/home') ?>" class="nav-nonresponsive-con fadeIn first">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-smart-home" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
          <path d="M19 8.71l-5.333 -4.148a2.666 2.666 0 0 0 -3.274 0l-5.334 4.148a2.665 2.665 0 0 0 -1.029 2.105v7.2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-7.2c0 -.823 -.38 -1.6 -1.03 -2.105" />
          <path d="M16 15c-2.21 1.333 -5.792 1.333 -8 0" />
        </svg>
        <p>Home</p>
      </a>
      <a href="<?= site_url('Databuku_C/about') ?>" class="nav-nonresponsive-con fadeIn second">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-info-circle" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
          <circle cx="12" cy="12" r="9" />
          <line x1="12" y1="8" x2="12.01" y2="8" />
          <polyline points="11 12 12 12 12 16 13 16" />
        </svg>
        <p>About</p>
      </a>
      <a href="<?= site_url('Databuku_C/books') ?>" class="nav-nonresponsive-con fadeIn third">
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
      <a href="<?= site_url('Databuku_C/profile') ?>" class="nav-nonresponsive-con fadeIn fourth ">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
          <circle cx="12" cy="12" r="9" />
          <circle cx="12" cy="10" r="3" />
          <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
        </svg>
      <p>Profile</p>
      </a>
    </div>
    <!-- BOTTOM MENU -->
  </body>
</html>


