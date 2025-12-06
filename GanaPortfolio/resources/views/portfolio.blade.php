<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>My Portfolio</title>
  <meta name="title" content="Eyron - I'm User Interface Designer & Developer.">
  <meta name="description" content="This is a personal portfolio html template made by codewithsadee">

  <link rel="shortcut icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700&display=swap" rel="stylesheet">

  <!-- your CSS -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <!-- preload images -->
  <link rel="preload" as="image" href="{{ asset('images/hero-banner.jpg') }}">
  <link rel="preload" as="image" href="{{ asset('images/Blog.svg') }}">
</head>

<body>

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <nav class="navbar" data-navbar>

        <div class="navbar-top">
          <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">

          <li>
            <a href="#home" class="navbar-link" data-nav-toggler>Home</a>
          </li>

          <li>
            <a href="#about" class="navbar-link" data-nav-toggler>About</a>
          </li>

          <li>
            <a href="#projects" class="navbar-link" data-nav-toggler>Projects</a>
          </li>

          <li>
            <a href="#blog" class="navbar-link" data-nav-toggler>Blog</a>
          </li>

          <li>
            <a href="#contact" class="navbar-link" data-nav-toggler>Contact</a>
          </li>

          {{-- Logout button --}}
          @auth
          <li>
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="navbar-link"
                      style="background:none;border:none;padding:0;cursor:pointer;">
                Logout
              </button>
            </form>
          </li>
          @endauth

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

      <section class="section hero" aria-label="home" id="home">
        <div class="container">

          <figure class="hero-banner">
            <img src="{{ asset('images/hero-banner.jpg') }}" width="560" height="540" alt="" class="w-100"
              data-reveal="top">

            <img src="{{ asset('images/hero-shape.svg') }}" width="203" height="91" alt="250+ Projects Done" class="shape"
              data-reveal="top" data-reveal-delay="0.25s">
          </figure>

          <div class="hero-content">

            <h1 class="h1 hero-title" data-reveal="top" data-reveal-delay="0.5s">
              I'm User Interface Designer & Developer.
            </h1>

            <p class="section-text" data-reveal="top" data-reveal-delay="0.75s">
              Hello! I'm Eyron, a freelance user interface designer & developer based in London. I’m very passionate
              about the work that I do.
            </p>

            <div class="btn-wrapper" data-reveal="top" data-reveal-delay="1s">
              <a href="#projects" class="btn btn-primary">See My Works</a>

              <a href="#contact" class="btn btn-secondary">Contact Me</a>
            </div>

          </div>

        </div>
      </section>

      <!-- 
        - #ABOUT
      -->

      <section class="section about" aria-label="about" id="about">
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

                <div class="label-wrapper ">
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
                  <img src="{{ asset('images/icon-1.svg') }}" width="52" height="52" loading="lazy" alt="web design icon">
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
                  <img src="{{ asset('images/icon-2.svg') }}" width="52" height="52" loading="lazy" alt="mobile design icon">
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
                  <img src="{{ asset('images/icon-3.svg') }}" width="52" height="52" loading="lazy"
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
                  <img src="{{ asset('images/icon-4.svg') }}" width="52" height="52" loading="lazy" alt="web seo icon">
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

      <!-- PROJECT, BLOG, CONTACT, FOOTER... (unchanged) -->
      {{-- Rest of your content stays the same --}}
    </article>
  </main>

  <footer class="footer">
    <div class="container">

      <p class="copyright">
        © Eron. All rights reserved.
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

  <script src="{{ asset('js/script.js') }}"></script>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
