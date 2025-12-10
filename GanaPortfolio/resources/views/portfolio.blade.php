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
            <a href="#contact" class="navbar-link" data-nav-toggler>Contact</a>
          </li>

          @guest
          <li>
            <a href="{{ route('login.form') }}" class="navbar-link">
              Logout
            </a>
          </li>
          @endguest

          @auth
          <li>
            <a href="{{ route('logout') }}"
               class="navbar-link"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              Logout
            </a>
          </li>
          @endauth
        </ul>

        @auth
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
        @endauth

        <div class="wrapper">
          <a href="mailto:info@email.com" class="contact-link">eronfredgana266@gmail.com</a>
          <a href="tel:001234567890" class="contact-link">09123456789</a>
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
            <img src="{{ asset('images/image.png') }}" width="560" height="540" alt="Eyron on the beach"
              class="w-100" data-reveal="top">
          </figure>

          <div class="hero-content">

            <h1 class="h1 hero-title" data-reveal="top" data-reveal-delay="0.5s">
              I'm Eron Fred P. Gaña.
            </h1>

            <p class="section-text" data-reveal="top" data-reveal-delay="0.75s">
              Hi there! You can call me Eyron. I’m a Philippines-based freelance UI designer and developer, and I’m
              genuinely passionate about what I create.
            </p>

            <div class="btn-wrapper" data-reveal="top" data-reveal-delay="1s">
              <a href="#projects" class="btn btn-primary">See My Works</a>

              <a href="#contact" class="btn btn-secondary">Contact Me</a>
            </div>

          </div>

        </div>
      </section>

      <!-- ABOUT SECTION -->
      <section class="section about" aria-label="about" id="about">
        <div class="container">

          <div class="wrapper">

            <div data-reveal="left">
              <h2 class="h2 section-title">What I Do?</h2>

              <p class="section-text">
                I craft intuitive, visually engaging user interfaces and build clean, functional digital experiences.
                From concept to final development, I focus on creating designs that feel smooth, modern, and
                user-friendly.
              </p>
            </div>

            <ul class="progress-list" data-reveal="right">

              <li class="progress-item">
                <div class="label-wrapper">
                  <p>UI Design</p>
                  <span class="span">100 %</span>
                </div>
                <div class="progress">
                  <div class="progress-fill" style="width: 100%; background-color: #c7b1dd"></div>
                </div>
              </li>

              <li class="progress-item">
                <div class="label-wrapper">
                  <p>Web Design</p>
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
                  <img src="{{ asset('images/icon-1.svg') }}" width="52" height="52" loading="lazy"
                    alt="UI design icon">
                </div>
                <h3 class="h4 card-title">UI Design</h3>
                <p class="card-text">
                  I design intuitive, modern interfaces that enhance user experience and bring digital products to
                  life. My focus is on clarity, usability, and visual impact.
                </p>
              </div>
            </li>

            <li data-reveal="bottom" data-reveal-delay="0.25s">
              <div class="about-card">
                <div class="card-icon">
                  <img src="{{ asset('images/icon-2.svg') }}" width="52" height="52" loading="lazy"
                    alt="web design icon">
                </div>
                <h3 class="h4 card-title">Web Design</h3>
                <p class="card-text">
                  I create responsive, visually appealing website layouts that communicate clearly and feel great to
                  use. Every design balances aesthetics with strong user experience.
                </p>
              </div>
            </li>

            <li data-reveal="bottom" data-reveal-delay="0.5s">
              <div class="about-card">
                <div class="card-icon">
                  <img src="{{ asset('images/icon-3.svg') }}" width="52" height="52" loading="lazy"
                    alt="development icon">
                </div>
                <h3 class="h4 card-title">Development</h3>
                <p class="card-text">
                  I build clean, functional, and efficient front-end solutions. My development approach transforms
                  designs into smooth, reliable digital experiences.
                </p>
              </div>
            </li>

            <li data-reveal="bottom" data-reveal-delay="0.75s">
              <div class="about-card">
                <div class="card-icon">
                  <img src="{{ asset('images/icon-4.svg') }}" width="52" height="52" loading="lazy" alt="SEO icon">
                </div>
                <h3 class="h4 card-title">SEO</h3>
                <p class="card-text">
                  I optimize interfaces and site structure to be search-friendly while keeping performance and user
                  experience at the center.
                </p>
              </div>
            </li>

          </ul>

        </div>
      </section>

      <!-- PROJECT SECTION -->
      <section class="section project" aria-labelledby="project-label" id="projects">
        <div class="container">

          <div class="title-wrapper" data-reveal="top">

            <div>
              <h2 class="h2 section-title" id="project-label">Latest Projects</h2>

              <p class="section-text">
                Check out some of my latest projects with creative ideas.
              </p>
            </div>

            <a href="#projects" class="btn btn-secondary">See All Projects</a>

          </div>

          <ul class="grid-list">

            <li>
              <div class="project-card project-card-1" style="background-color: #f8f5fb">

                <div class="card-content" data-reveal="left">

                  <p class="card-tag" style="color: #a07cc5">Web Design</p>

                  <h3 class="h3 card-title">Ho-Se</h3>

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
                  <img src="{{ asset('images/project-1.png') }}" width="650" height="370" loading="lazy"
                    alt="Web Design" class="w-100">
                </figure>

              </div>
            </li>

              <li>
              <div class="project-card project-card-1" style="background-color: #f8f5fb">

                <div class="card-content" data-reveal="left">

                  <p class="card-tag" style="color: #a07cc5">Web Design</p>

                  <h3 class="h3 card-title">Flowa</h3>

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
                  <img src="{{ asset('images/project-1.png') }}" width="650" height="370" loading="lazy"
                    alt="Web Design" class="w-100">
                </figure>

              </div>
            </li>

        
        </div>
      </section>

      <!-- CONTACT -->
      <section class="section contact" aria-label="contact" id="contact">
        <div class="container">

          <div class="contact-card">

            <div class="contact-content" data-reveal="left">

              <div class="card-icon">
                <img src="{{ asset('images/icon-5.svg') }}" width="44" height="44" loading="lazy"
                  alt="envelop icon">
              </div>

              <h2 class="h2 section-title">If you like what you see, let's work together.</h2>

              <p class="section-text">
                I bring rapid solutions to make the life of my clients easier. Have any questions? Reach out to me
                from this contact form and I will get back to you shortly.
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

  <!-- FOOTER -->
  <footer class="footer">
    <div class="container">

      <p class="copyright">
        © Eron. All rights reserved.
      </p>

      <ul class="social-list">

        <li><a href="#" class="social-link"><ion-icon name="logo-twitter"></ion-icon></a></li>
        <li><a href="#" class="social-link"><ion-icon name="logo-facebook"></ion-icon></a></li>
        <li><a href="#" class="social-link"><ion-icon name="logo-dribbble"></ion-icon></a></li>
        <li><a href="#" class="social-link"><ion-icon name="logo-instagram"></ion-icon></a></li>
        <li><a href="#" class="social-link"><ion-icon name="logo-youtube"></ion-icon></a></li>

      </ul>

    </div>
  </footer>

  <!-- JS -->
  <script src="{{ asset('js/script.js') }}"></script>

  <!-- ICONS -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
