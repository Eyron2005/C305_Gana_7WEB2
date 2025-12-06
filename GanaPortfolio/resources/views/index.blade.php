<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>Julia - I'm User Interface Designer & Developer.</title>
  <meta name="title" content="Julia - I'm User Interface Designer & Developer.">
  <meta name="description" content="This is a personal portfolio html template made by codewithsadee">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700&display=swap" rel="stylesheet">

  <!-- 
    - inline main.css
  -->
  <style>
    /*-----------------------------------*\
      #main.css
    \*-----------------------------------*/

    /**
     * copyright 2022 codewithsadee
     */

    /*-----------------------------------*\
      #CUSTOM PROPERTY
    \*-----------------------------------*/

    :root {

      /**
       * colors
       */

      --white: hsla(0, 0%, 100%, 1);
      --white_a8: hsla(0, 0%, 100%, 0.08);
      --white_a12: hsla(0, 0%, 100%, 0.12);
      --cultured: hsla(220, 20%, 97%, 1);
      --snow: hsla(345, 57%, 97%, 1);
      --manatee: hsla(219, 10%, 62%, 1);
      --black-coral: hsla(220, 12%, 43%, 1);
      --cadet-blue-crayola_a20: hsla(222, 23%, 71%, 0.2);
      --cinnamon-satin: hsla(344, 53%, 62%, 1);
      --raisin-black: hsla(216, 14%, 14%, 1);
      --raisin-black_a6: hsla(216, 14%, 14%, 0.06);
      --gunmetal: hsla(214, 15%, 21%, 1);
      --charcoal: hsla(219, 22%, 26%, 1);

      /**
       * typography
       */

      --ff-manrope: 'Manrope', sans-serif;

      --fs-1: calc(2.7rem + 1.38vw);
      --fs-2: calc(2.6rem + .66vw);
      --fs-3: calc(2.6rem + .24vw);
      --fs-4: 1.9rem;
      --fs-5: 1.8rem;
      --fs-6: 1.7rem;
      --fs-7: 1.5rem;
      --fs-8: 1.4rem;

      --fw-700: 700;

      /**
       * spacing
       */

      --section-padding: 90px;

      /**
       * box shadow
       */

      --shadow-1: 0 0 20px hsla(216, 14%, 14%, 0.05);
      --shadow-2: 0 4px 28px hsla(216, 14%, 14%, 0.07);

      /**
       * border radius
       */

      --radius-circle: 50%;
      --radius-pill: 100px;
      --radius-8: 8px;
      --radius-6: 6px;

      /**
       * transition
       */

      --transition-1: 0.25s ease;
      --transition-2: 0.5s ease;
      --transition-3: 0.3s ease-in-out;

    }

    /*-----------------------------------*\
      #RESET
    \*-----------------------------------*/

    *,
    *::before,
    *::after {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    li {
      list-style: none;
    }

    a,
    img,
    span,
    button,
    ion-icon {
      display: block;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    img {
      height: auto;
    }

    input,
    button,
    textarea {
      background: none;
      border: none;
      font: inherit;
    }

    input,
    textarea {
      width: 100%;
    }

    button {
      cursor: pointer;
    }

    ion-icon {
      pointer-events: none;
    }

    html {
      font-family: var(--ff-manrope);
      font-size: 10px;
      scroll-behavior: smooth;
    }

    body {
      background-color: var(--white);
      color: var(--black-coral);
      font-size: 1.6rem;
      line-height: 1.7;
    }

    body.nav-active {
      overflow: hidden;
    }

    ::-webkit-scrollbar {
      width: 10px;
    }

    ::-webkit-scrollbar-track {
      background-color: hsl(0, 0%, 98%);
    }

    ::-webkit-scrollbar-thumb {
      background-color: hsl(0, 0%, 80%);
    }

    ::-webkit-scrollbar-thumb:hover {
      background-color: hsl(0, 0%, 70%);
    }

    /*-----------------------------------*\
      #REUSED STYLE
    \*-----------------------------------*/

    .container {
      padding-inline: 16px;
    }

    .social-list {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .social-link {
      font-size: 2rem;
      transition: var(--transition-1);
    }

    .social-link:is(:hover, :focus-visible) {
      transform: translateY(-3px);
    }

    .section {
      padding-block: var(--section-padding);
    }

    .w-100 {
      width: 100%;
    }

    .h1,
    .h2,
    .h3,
    .h4 {
      color: var(--charcoal);
      line-height: 1.3;
    }

    .h1 {
      font-size: var(--fs-1);
    }

    .h2 {
      font-size: var(--fs-2);
    }

    .h3 {
      font-size: var(--fs-3);
    }

    .h4 {
      font-size: var(--fs-4);
    }

    .btn {
      color: var(--cinnamon-satin);
      font-size: var(--fs-6);
      font-weight: var(--fw-700);
      border: 2px solid var(--cinnamon-satin);
      max-width: max-content;
      padding: 12px 28px;
      border-radius: var(--radius-pill);
      transition: var(--transition-1);
      will-change: transform;
    }

    .btn:is(:hover, :focus-visible) {
      transform: translateY(-4px);
    }

    .btn-primary,
    .btn-secondary:is(:hover, :focus-visible) {
      background-color: var(--cinnamon-satin);
      color: var(--white);
    }

    .section-text {
      font-size: var(--fs-5);
    }

    .section-title {
      margin-block-end: 16px;
    }

    .grid-list {
      display: grid;
      gap: 30px;
    }

    [data-reveal] {
      opacity: 0;
      transition: 0.75s ease;
    }

    [data-reveal="top"] {
      transform: translateY(-30px);
    }

    [data-reveal="bottom"] {
      transform: translateY(30px);
    }

    [data-reveal="left"] {
      transform: translateX(-30px);
    }

    [data-reveal="right"] {
      transform: translateX(30px);
    }

    [data-reveal].revealed {
      transform: translate(0);
      opacity: 1;
    }

    /*-----------------------------------*\
      #HEADER
    \*-----------------------------------*/

    .header {
      position: absolute;
      top: 0;
      left: 0;
      background-color: var(--white);
      width: 100%;
      padding-block: 20px;
      box-shadow: var(--shadow-1);
      z-index: 4;
    }

    .header.active {
      position: fixed;
      animation: slideIn 0.5s ease forwards;
    }

    @keyframes slideIn {
      0% {
        transform: translateY(-100%);
      }

      100% {
        transform: translateY(0);
      }
    }

    .header .container {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .nav-open-btn {
      font-size: 3.5rem;
      color: var(--gunmetal);
    }

    .navbar {
      position: fixed;
      top: 0;
      left: -300px;
      background-color: var(--raisin-black);
      color: var(--white);
      max-width: 300px;
      width: 100%;
      height: 100vh;
      padding: 30px;
      padding-block-end: 40px;
      display: flex;
      flex-direction: column;
      gap: 30px;
      z-index: 2;
      visibility: hidden;
      transition: var(--transition-3);
    }

    .navbar.active {
      visibility: visible;
      transform: translateX(300px);
    }

    .navbar-top {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .nav-close-btn {
      background-color: var(--white_a8);
      color: var(--white);
      font-size: 2rem;
      padding: 6px;
      border-radius: var(--radius-circle);
      transition: var(--transition-1);
    }

    .nav-close-btn ion-icon {
      --ionicon-stroke-width: 50px;
    }

    .nav-close-btn:is(:hover, :focus-visible) {
      background-color: var(--white_a12);
    }

    .navbar-list {
      margin-block-end: auto;
    }

    .navbar-link {
      font-weight: var(--fw-700);
      padding-block: 6px;
    }

    .contact-link {
      transition: var(--transition-1);
    }

    .contact-link:is(:hover, :focus-visible) {
      color: var(--cinnamon-satin);
    }

    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100vh;
      background-color: var(--raisin-black);
      pointer-events: none;
      opacity: 0;
      transition: var(--transition-1);
    }

    .overlay.active {
      pointer-events: all;
      opacity: 0.8;
    }

    /*-----------------------------------*\
      #HERO
    \*-----------------------------------*/

    .hero {
      padding-block-start: calc(var(--section-padding) + 50px);
      background-color: var(--cultured);
    }

    .hero .container {
      display: grid;
      gap: 50px;
    }

    .hero-banner {
      position: relative;
      max-width: max-content;
      margin-inline: auto;
    }

    .hero-banner .w-100 {
      mask-image: url("../images/Blob.svg");
      -webkit-mask-image: url("../images/Blog.svg");
      mask-repeat: no-repeat;
      -webkit-mask-repeat: no-repeat;
      mask-position: center;
      -webkit-mask-position: center;
      mask-size: auto;
      -webkit-mask-size: auto;
    }

    .hero .shape {
      position: absolute;
      bottom: 10%;
      right: 2%;
      filter: drop-shadow(var(--shadow-2));
    }

    .hero-content {
      text-align: center;
    }

    .hero .section-text {
      margin-block: 24px 36px;
    }

    .btn-wrapper {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      gap: 12px;
    }

    /*-----------------------------------*\
      #ABOUT
    \*-----------------------------------*/

    .about .wrapper {
      display: grid;
      gap: 50px;
      margin-block-end: 70px;
    }

    .progress-list .label-wrapper {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-block-end: 4px;
    }

    .progress-item:not(:last-child) {
      margin-block-end: 16px;
    }

    .progress {
      background-color: var(--raisin-black_a6);
      height: 6px;
      width: 100%;
      border-radius: var(--radius-pill);
      overflow: hidden;
    }

    .progress-fill {
      height: inherit;
    }

    .about-card {
      text-align: center;
    }

    .about-card .card-icon {
      max-width: max-content;
      margin-inline: auto;
    }

    .about-card .card-title {
      margin-block: 16px 10px;
    }

    /*-----------------------------------*\
      #PROJECTS
    \*-----------------------------------*/

    .project {
      border-block: 1px solid var(--cadet-blue-crayola_a20);
    }

    .project .title-wrapper {
      margin-block-end: 40px;
    }

    .project .btn {
      margin-block-start: 24px;
    }

    .project .grid-list {
      gap: 40px;
    }

    .project-card {
      --padding: 24px;

      display: flex;
      flex-direction: column;
      gap: var(--padding);
      border-radius: var(--radius-8);
      overflow: hidden;
    }

    .project-card-1,
    .project-card-2,
    :is(.project-card-3, .project-card-4) .card-content {
      padding: var(--padding);
    }

    .project-card-1 {
      padding-block-end: 0;
    }

    .project :is(.project-card-3, .project-card-4) {
      gap: 0;
    }

    .project-card .card-tag {
      font-size: var(--fs-8);
      font-weight: var(--fw-700);
      text-transform: uppercase;
    }

    .project-card .card-title {
      margin-block: 16px;
    }

    .project-card .card-text {
      margin-block-end: 20px;
    }

    .project-card .btn-text {
      display: flex;
      align-items: center;
      gap: 5px;
      font-weight: var(--fw-700);
      transition: var(--transition-1);
    }

    .project-card .btn-text:is(:hover, :focus-visible) {
      gap: 10px;
    }

    /*-----------------------------------*\
      #CONTACT
    \*-----------------------------------*/

    .contact {
      padding-block-end: 0;
    }

    .contact-card {
      background-color: var(--snow);
      padding: 32px;
      border-radius: var(--radius-8);
      display: grid;
      gap: 40px;
    }

    .contact .section-title {
      margin-block-start: 20px;
    }

    .input-field {
      background-color: var(--white);
      color: var(--black-coral);
      font-size: var(--fs-7);
      padding: 14px 18px;
      border-radius: var(--radius-6);
      outline: none;
      margin-block-end: 20px;
    }

    .input-field::placeholder {
      color: var(--manatee);
    }

    textarea.input-field {
      min-height: 120px;
      height: 120px;
      max-height: 240px;
      resize: vertical;
    }

    /*-----------------------------------*\
      #FOOTER
    \*-----------------------------------*/

    .footer {
      padding-block: 40px;
    }

    .copyright {
      margin-block-end: 12px;
    }

    .footer .social-link {
      color: var(--charcoal);
    }

    /*-----------------------------------*\
      #MEDIA QUERIES
    \*-----------------------------------*/

    /**
     * responsive for large than 575px screen
     */

    @media (min-width: 575px) {

      /**
       * REUSED STYLE
       */

      .container {
        max-width: 540px;
        width: 100%;
        margin-inline: auto;
      }

      /**
       * PROJECT
       */

      .project-card {
        --padding: 68px;
      }

      /**
       * CONTACT
       */

      .contact-card {
        padding: 68px;
      }

    }

    /**
     * responsive for large than 768px screen
     */

    @media (min-width: 768px) {

      /**
       * REUSED STYLE
       */

      .container {
        max-width: 720px;
      }

      .section-text {
        --fs-5: 2rem;
      }

      /**
       * ABOUT
       */

      .about .grid-list {
        grid-template-columns: 1fr 1fr;
      }

      /**
       * PROJECT
       */

      .project .title-wrapper {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 30px;
      }

      .project .btn {
        min-width: max-content;
      }

      /**
       * CONTACT
       */

      .contact .section-text {
        --fs-5: 1.8rem;
      }

      .input-wrapper {
        display: flex;
        align-items: center;
        gap: 20px;
      }

      /**
       * FOOTER
       */

      .footer .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      .copyright {
        margin-block-end: 0;
      }

    }

    /**
     * responsive for large than 992px screen
     */

    @media (min-width: 992px) {

      /**
       * CUSTOM PROPERTY
       */

      :root {

        /**
         * spacing
         */

        --section-padding: 120px;

      }

      /**
       * REUSED STYLE
       */

      .container {
        max-width: 960px;
      }

      /**
       * HEADER
       */

      .nav-open-btn,
      .navbar-top,
      .navbar .wrapper,
      .overlay {
        display: none;
      }

      .navbar,
      .navbar.active {
        all: unset;
        display: flex;
        flex-grow: 1;
      }

      .navbar-list {
        display: flex;
        gap: 36px;
        margin-inline: auto;
      }

      .navbar-link {
        color: var(--charcoal);
        transition: var(--transition-1);
      }

      .navbar-link:is(:hover, :focus-visible) {
        color: var(--cinnamon-satin);
      }

      .navbar .social-link {
        color: var(--charcoal);
        font-size: 1.8rem;
      }

      .header {
        top: 45px;
        max-width: 960px;
        left: 50%;
        transform: translateX(-50%);
        padding-inline: 16px;
        border-radius: var(--radius-8);
      }

      .header.active {
        top: 0;
        left: 0;
        max-width: unset;
        border-radius: 0;
      }

      /**
       * HERO
       */

      .hero {
        padding-block-start: calc(var(--section-padding) + 80px);
      }

      .hero .container {
        grid-template-columns: 0.8fr 1fr;
        align-items: center;
        gap: 100px;
      }

      .hero-content {
        text-align: left;
      }

      .hero .btn-wrapper {
        justify-content: flex-start;
      }

      /**
       * ABOUT
       */

      .about .wrapper {
        grid-template-columns: 1fr 1fr;
        align-items: center;
      }

      .about .grid-list {
        grid-template-columns: repeat(4, 1fr);
      }

      /**
       * PROJECT
       */

      .project .grid-list {
        grid-template-columns: 1fr 1fr;
        row-gap: 50px;
      }

      .project .grid-list>li:nth-child(-n+2) {
        grid-column: 1 / 3;
      }

      .project-card-1,
      .project-card-2 {
        flex-direction: row;
        align-items: flex-end;
      }

      :is(.project-card-1, .project-card-2) .card-content {
        width: 33.33%;
      }

      :is(.project-card-1, .project-card-2) .card-banner {
        width: 66.66%;
      }

      .project-card-1 .card-content {
        padding-block-end: var(--padding);
      }

      .project-card-2 .card-content {
        order: 1;
      }

      /**
       * CONTACT
       */

      .contact-card {
        grid-template-columns: 0.8fr 1fr;
        align-items: center;
        gap: 90px;
      }

    }

    /**
     * responsive for large than 1200px screen
     */

    @media (min-width: 1200px) {

      /**
       * REUSED STYLE
       */

      .container,
      .header {
        max-width: 1140px;
      }

      /**
       * ABOUT
       */

      .about .grid-list {
        gap: 50px;
      }

      /**
       * CONTACT
       */

      .contact-card {
        gap: 150px;
      }

    }

    /**
     * responsive for large than 1400px screen
     */

    @media (min-width: 1400px) {

      /**
       * REUSED STYLE
       */

      .container,
      .header {
        max-width: 1320px;
      }

      /**
       * HERO
       */

      .hero .container {
        grid-template-columns: 1fr 0.8fr;
      }

      .hero .section-text {
        --fs-5: 2.4rem;
      }

      /**
       * ABOUT
       */

      .about .wrapper {
        gap: 100px;
      }

      .about .grid-list {
        gap: 60px;
      }

    }
  </style>

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner.jpg">
  <link rel="preload" as="image" href="./assets/images/Blog.svg">

</head>

<body>

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="./assets/images/logo-dark.svg" width="64" height="24" alt="Julia home">
      </a>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">
          <a href="#" class="logo">
            <img src="./assets/images/logo-light.svg" width="64" height="24" alt="Julia home">
          </a>

          <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">

          <li>
            <a href="#" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="#" class="navbar-link">About</a>
          </li>

          <li>
            <a href="#" class="navbar-link">Projects</a>
          </li>

          <li>
            <a href="#" class="navbar-link">Blog</a>
          </li>

          <li>
            <a href="#" class="navbar-link">Contact</a>
          </li>

        </ul>

        <div class="wrapper">
          <a href="mailto:info@email.com" class="contact-link">info@email.com</a>

          <a href="tel:001234567890" class="contact-link">00 (123) 456 78 90</a>
        </div>

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-dribbble"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>

        </ul>

      </nav>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>

  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" aria-label="home">
        <div class="container">

          <figure class="hero-banner">
            <img src="./assets/images/hero-banner.jpg" width="560" height="540" alt="Julia" class="w-100"
              data-reveal="top">

            <img src="./assets/images/hero-shape.svg" width="203" height="91" alt="250+ Projects Done" class="shape"
              data-reveal="top" data-reveal-delay="0.25s">
          </figure>

          <div class="hero-content">

            <h1 class="h1 hero-title" data-reveal="top" data-reveal-delay="0.5s">
              I'm User Interface Designer & Developer.
            </h1>

            <p class="section-text" data-reveal="top" data-reveal-delay="0.75s">
              Hello! I'm Julia, a freelance user interface designer & developer based in London. I’m very passionate
              about the work that I do.
            </p>

            <div class="btn-wrapper" data-reveal="top" data-reveal-delay="1s">
              <a href="#" class="btn btn-primary">See My Works</a>

              <a href="#" class="btn btn-secondary">Contact Me</a>
            </div>

          </div>

        </div>
      </section>

      <!-- 
        - #ABOUT
      -->

      <section class="section about" aria-label="about">
        <div class="container">

          <div class="wrapper">

            <div data-reveal="left">
              <h2 class="h2 section-title">What I Do?</h2>

              <p class="section-text">
                Duis mollis est commodo luctus nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nullam quis
                risus eget urna mollis ornare vel. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus
                magna, vel scelerisque nisl.
              </p>
            </div>

            <ul class="progress-list" data-reveal="right">

              <li class="progress-item">

                <div class="label-wrapper">
                  <p>Web Design</p>

                  <span class="span">100 %</span>
                </div>

                <div class="progress">
                  <div class="progress-fill" style="width: 100%; background-color: #c7b1dd"></div>
                </div>

              </li>

              <li class="progress-item">

                <div class="label-wrapper">
                  <p>Mobile Design</p>

                  <span class="span">80 %</span>
                </div>

                <div class="progress">
                  <div class="progress-fill" style="width: 80%; background-color: #8caeec"></div>
                </div>

              </li>

              <li class="progress-item">

                <div class="label-wrapper">
                  <p>Development</p>

                  <span class="span">85 %</span>
                </div>

                <div class="progress">
                  <div class="progress-fill" style="width: 85%; background-color: #b0d4c1"></div>
                </div>

              </li>

              <li class="progress-item">

                <div class="label-wrapper">
                  <p>SEO</p>

                  <span class="span">90 %</span>
                </div>

                <div class="progress">
                  <div class="progress-fill" style="width: 90%; background-color: #e3a6b6"></div>
                </div>

              </li>

            </ul>

          </div>

          <ul class="grid-list">

            <li data-reveal="bottom">
              <div class="about-card">

                <div class="card-icon">
                  <img src="./assets/images/icon-1.svg" width="52" height="52" loading="lazy" alt="web design icon">
                </div>

                <h3 class="h4 card-title">Web Design</h3>

                <p class="card-text">
                  Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Cras
                  justo cum sociis natoque magnis.
                </p>

              </div>
            </li>

            <li data-reveal="bottom" data-reveal-delay="0.25s">
              <div class="about-card">

                <div class="card-icon">
                  <img src="./assets/images/icon-2.svg" width="52" height="52" loading="lazy" alt="mobile design icon">
                </div>

                <h3 class="h4 card-title">Mobile Design</h3>

                <p class="card-text">
                  Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Cras
                  justo cum sociis natoque magnis.
                </p>

              </div>
            </li>

            <li data-reveal="bottom" data-reveal-delay="0.5s">
              <div class="about-card">

                <div class="card-icon">
                  <img src="./assets/images/icon-3.svg" width="52" height="52" loading="lazy"
                    alt="web development icon">
                </div>

                <h3 class="h4 card-title">Development</h3>

                <p class="card-text">
                  Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Cras
                  justo cum sociis natoque magnis.
                </p>

              </div>
            </li>

            <li data-reveal="bottom" data-reveal-delay="0.75s">
              <div class="about-card">

                <div class="card-icon">
                  <img src="./assets/images/icon-4.svg" width="52" height="52" loading="lazy" alt="web seo icon">
                </div>

                <h3 class="h4 card-title">SEO</h3>

                <p class="card-text">
                  Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Cras
                  justo cum sociis natoque magnis.
                </p>

              </div>
            </li>

          </ul>

        </div>
      </section>

      <!-- 
        - #PROJECT
      -->

      <section class="section project" aria-labelledby="project-label">
        <div class="container">

          <div class="title-wrapper" data-reveal="top">

            <div>
              <h2 class="h2 section-title" id="project-label">Latest Projects</h2>

              <p class="section-text">
                Check out some of my latest projects with creative ideas.
              </p>
            </div>

            <a href="#" class="btn btn-secondary">See All Projects</a>

          </div>

          <ul class="grid-list">

            <li>
              <div class="project-card project-card-1" style="background-color: #f8f5fb">

                <div class="card-content" data-reveal="left">

                  <p class="card-tag" style="color: #a07cc5">Web Design</p>

                  <h3 class="h3 card-title">Snowlake Theme</h3>

                  <p class="card-text">
                    Maecenas faucibus mollis interdum sed posuere consectetur est at lobortis. Scelerisque id ligula
                    porta felis euismod semper. Fusce dapibus tellus cursus.
                  </p>

                  <a href="#" class="btn-text" style="color: #a07cc5">
                    <span class="span">See Project</span>

                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>

                </div>

                <figure class="card-banner" data-reveal="right">
                  <img src="./assets/images/project-1.png" width="650" height="370" loading="lazy" alt="Web Design"
                    class="w-100">
                </figure>

              </div>
            </li>

            <li>
              <div class="project-card project-card-2" style="background-color: #f1f5fd">

                <div class="card-content" data-reveal="right">

                  <p class=" card-tag" style="color: #3f78e0">Mobile Design</p>

                  <h3 class="h3 card-title">Budget App</h3>

                  <p class="card-text">
                    Maecenas faucibus mollis interdum sed posuere consectetur est at lobortis. Scelerisque id ligula
                    porta felis euismod semper. Fusce dapibus tellus cursus.
                  </p>

                  <a href="#" class="btn-text" style="color: #3f78e0">
                    <span class="span">See Project</span>

                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>

                </div>

                <figure class="card-banner" data-reveal="left">
                  <img src="./assets/images/project-2.png" width="600" height="367" loading="lazy" alt="Web Design"
                    class="w-100">
                </figure>

              </div>
            </li>

            <li>
              <div class="project-card project-card-3" style="background-color: #f5faf7">

                <div class="card-content" data-reveal="left">

                  <p class=" card-tag" style="color: #7cb798">Web Design</p>

                  <h3 class="h3 card-title">Missio Theme</h3>

                  <p class="card-text">
                    Maecenas faucibus mollis interdum sed posuere porta consectetur cursus porta lobortis. Scelerisque
                    id ligula felis.
                  </p>

                  <a href="#" class="btn-text" style="color: #7cb798">
                    <span class="span">See Project</span>

                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>

                </div>

                <figure class="card-banner" data-reveal="right">
                  <img src="./assets/images/project-3.png" width="600" height="367" loading="lazy" alt="Web Design"
                    class="w-100">
                </figure>

              </div>
            </li>

            <li>
              <div class="project-card project-card-4" style="background-color: #fcf4f6">

                <div class="card-content" data-reveal="left">

                  <p class=" card-tag" style="color: #d16b86">Mobile Design</p>

                  <h3 class="h3 card-title">Storage App</h3>

                  <p class="card-text">
                    Maecenas faucibus mollis interdum sed posuere consectetur est at lobortis. Scelerisque id ligula
                    porta felis euismod semper.
                  </p>

                  <a href="#" class="btn-text" style="color: #d16b86">
                    <span class="span">See Project</span>

                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>

                </div>

                <figure class="card-banner" data-reveal="right">
                  <img src="./assets/images/project-4.png" width="620" height="370" loading="lazy" alt="Mobile Design"
                    class="w-100">
                </figure>

              </div>
            </li>

          </ul>

        </div>
      </section>

      <!-- 
        - #CONTACT
      -->

      <section class="section contact" aria-label="contact">
        <div class="container">

          <div class="contact-card">

            <div class="contact-content" data-reveal="left">

              <div class="card-icon">
                <img src="./assets/images/icon-5.svg" width="44" height="44" loading="lazy" alt="envelop icon">
              </div>

              <h2 class="h2 section-title">If you like what you see, let's work together.</h2>

              <p class="section-text">
                I bring rapid solutions to make the life of my clients easier. Have any questions? Reach out to me from
                this contact form and I will get back to you shortly.
              </p>

            </div>

            <form action="" class="contact-form" data-reveal="right">

              <div class="input-wrapper">
                <input type="text" name="name" placeholder="Name *" required class="input-field">

                <input type="email" name="email_address" placeholder="Email *" required class="input-field">
              </div>

              <textarea name="message" placeholder="Message *" required class="input-field"></textarea>

              <button type="submit" class="btn btn-secondary">Send message</button>

            </form>

          </div>

        </div>
      </section>

    </article>
  </main>

  <!-- 
    - #FOOTER
  -->

  <footer class="footer">
    <div class="container">

      <p class="copyright">
        © 2022 codewithsadee. All rights reserved.
      </p>

      <ul class="social-list">

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-twitter"></ion-icon>
          </a>
        </li>

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-facebook"></ion-icon>
          </a>
        </li>

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-dribbble"></ion-icon>
          </a>
        </li>

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-instagram"></ion-icon>
          </a>
        </li>

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-youtube"></ion-icon>
          </a>
        </li>

      </ul>

    </div>
  </footer>

  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
