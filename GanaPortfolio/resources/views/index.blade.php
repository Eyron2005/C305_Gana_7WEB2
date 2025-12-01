<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>

    <!-- TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class'
        }
    </script>

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Space+Mono&family=Poppins:wght@300;600&display=swap" rel="stylesheet">

    <style>
        /* Floating animation */
        .float {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-30px); }
            100% { transform: translateY(0px); }
        }

        /* Typewriter */
        .typewriter-text {
            display: inline-block;
            overflow: hidden;
            border-right: .15em solid rgba(255, 255, 255, 0.75);
            white-space: nowrap;
            animation: typing 4s steps(30) 1s forwards, blink .75s step-end infinite;
        }
        @keyframes typing { from { width: 0; } to { width: 100%; } }
        @keyframes blink { 50% { border-color: transparent; } }

        /* Skill bars */
        .skill-bar { width: 0; animation: fill 2s forwards ease-in-out; }
        @keyframes fill { to { width: var(--width); } }

        /* Particles */
        .particles { position: absolute; inset: 0; overflow: hidden; }
        .particle {
            position: absolute; border-radius: 50%;
            background: rgba(255,255,255,.2);
            animation: particle 8s linear infinite;
        }
        @keyframes particle {
            0% { transform: translateY(100vh); opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% { transform: translateY(-100vh); opacity: 0; }
        }

        /* Animated underline nav */
        .nav-item a {
            position: relative;
            color: #e5e7eb;
            transition: .3s;
        }
        .dark .nav-item a { color: #1f2937; }
        .nav-item a::after {
            content: "";
            position: absolute;
            left: 0; bottom: -4px;
            height: 3px; width: 0%;
            background: linear-gradient(90deg,#6366f1,#a855f7);
            transition: .3s;
            border-radius: 4px;
        }
        .nav-item a:hover::after { width: 100%; }

        /* Mobile links */
        .mobile-link {
            font-size: 1.1rem;
            color: #e5e7eb;
            transition: .3s;
        }
        .dark .mobile-link { color: #1f2937; }
        .mobile-link:hover {
            padding-left: 10px;
            color: #818cf8;
        }

        /* Navbar scroll effect */
        #navbar.scrolled {
            background: rgba(31,41,55,0.85);
            box-shadow: 0 4px 20px rgba(0,0,0,.35);
        }
        .dark #navbar.scrolled {
            background: rgba(243,244,246,0.85);
        }
    </style>
</head>

<body class="bg-gray-900 dark:bg-white text-gray-300 dark:text-gray-900 font-poppins transition-all duration-500">

<!-- DARK MODE BUTTON -->
<button id="theme-toggle" 
    class="fixed top-4 right-4 z-[999] p-3 bg-gray-800 dark:bg-gray-200 
    rounded-full shadow-xl hover:scale-110 transition">
    <i class="fas fa-moon text-yellow-400"></i>
</button>

<!-- ███████ NEW NAVBAR ███████ -->

<nav id="navbar" class="fixed top-0 left-0 w-full z-50 
    bg-gray-800/40 dark:bg-gray-100/40 backdrop-blur-xl
    border-b border-white/10 dark:border-gray-900/10 
    transition-all duration-500">

    <div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">

        <!-- LOGO -->
        <h1 class="text-3xl font-bold tracking-wide 
            text-indigo-400 dark:text-indigo-600">
            MyPortfolio
        </h1>

        <!-- DESKTOP MENU -->
        <ul class="hidden md:flex gap-10 text-lg font-medium">
            <li class="nav-item"><a href="#about">About</a></li>
            <li class="nav-item"><a href="#skills">Skills</a></li>
            <li class="nav-item"><a href="#projects">Projects</a></li>
            <li class="nav-item"><a href="#experience">Experience</a></li>
            <li class="nav-item"><a href="#contact">Contact</a></li>
        </ul>

        <!-- HAMBURGER -->
        <button id="menu-btn" class="md:hidden text-3xl text-white dark:text-gray-900">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>

    <!-- MOBILE MENU -->
    <div id="mobile-menu" class="hidden flex-col md:hidden 
         bg-gray-800/70 dark:bg-gray-200/70 backdrop-blur-xl 
         px-6 py-4 space-y-4 border-t border-white/10 dark:border-gray-900/10">

        <a href="#about" class="mobile-link">About</a>
        <a href="#skills" class="mobile-link">Skills</a>
        <a href="#projects" class="mobile-link">Projects</a>
        <a href="#experience" class="mobile-link">Experience</a>
        <a href="#contact" class="mobile-link">Contact</a>
    </div>
</nav>

<!-- HERO SECTION -->
<section class="relative text-center py-36 bg-gradient-to-br from-indigo-600 to-purple-700 dark:from-indigo-300 dark:to-purple-300 overflow-hidden">

    <!-- Particles -->
    <div class="particles">
        <div class="particle w-6 h-6" style="left: 10%; animation-delay: 0s"></div>
        <div class="particle w-8 h-8" style="left: 30%; animation-delay: 2s"></div>
        <div class="particle w-10 h-10" style="left: 60%; animation-delay: 4s"></div>
        <div class="particle w-5 h-5" style="left: 80%; animation-delay: 6s"></div>
    </div>

    <!-- Shapes -->
    <div class="absolute top-20 left-20 w-32 h-32 bg-indigo-800 dark:bg-indigo-300 opacity-50 rounded-full float"></div>
    <div class="absolute bottom-10 right-0 w-40 h-40 bg-purple-800 dark:bg-purple-300 opacity-50 rounded-full float"></div>

    <div class="relative z-10" data-aos="zoom-in">
        <h2 class="text-6xl font-bold text-white dark:text-gray-900 mb-6">Hi, I’m <span class="text-indigo-300 dark:text-indigo-600">Eyron</span></h2>

        <p class="text-xl text-gray-200 dark:text-gray-700 mb-6">Full-stack Developer • Designer • Problem Solver</p>

        <div class="text-2xl font-space-mono">
            <span class="typewriter-text">Building cool things with code.</span>
        </div>

        <div class="mt-8 flex justify-center gap-4">
            <a href="#projects" class="px-8 py-4 bg-indigo-600 dark:bg-indigo-500 text-white rounded-full shadow-lg hover:scale-105 transition">
                View My Work
            </a>
            <a href="#contact" class="px-8 py-4 border-2 border-indigo-400 text-indigo-200 dark:text-indigo-700 rounded-full hover:bg-indigo-400 hover:text-white transition">
                Get In Touch
            </a>
        </div>
    </div>
</section>

<!-- ABOUT -->
<section id="about" class="bg-gray-800 dark:bg-gray-200 py-24 px-6 transition">
    <div class="max-w-4xl mx-auto" data-aos="fade-right">
        <h3 class="text-4xl font-bold text-center mb-8 text-white dark:text-gray-900">About Me</h3>

        <div class="flex flex-col md:flex-row items-center gap-8">
            <img src="https://via.placeholder.com/300" class="rounded-full w-48 h-48 shadow-lg">
            <p class="text-lg text-gray-400 dark:text-gray-800 leading-relaxed">
                Write a short bio about yourself…
            </p>
        </div>
    </div>
</section>

<!-- SKILLS -->
<section id="skills" class="py-24 px-6 bg-gray-900 dark:bg-gray-100 transition">
    <div class="max-w-6xl mx-auto">
        <h3 class="text-4xl font-bold mb-16 text-center text-white dark:text-gray-900">Skills</h3>

        <div class="grid md:grid-cols-2 gap-10">

            <!-- Frontend -->
            <div data-aos="fade-up">
                <h4 class="text-2xl font-semibold mb-4 text-indigo-400 dark:text-indigo-600">Frontend</h4>

                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between mb-1"><span>HTML/CSS</span><span>95%</span></div>
                        <div class="w-full bg-gray-700 dark:bg-gray-300 rounded-full h-2">
                            <div class="bg-indigo-500 h-2 rounded-full skill-bar" style="--width:95%"></div>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between mb-1"><span>JavaScript</span><span>90%</span></div>
                        <div class="w-full bg-gray-700 dark:bg-gray-300 rounded-full h-2">
                            <div class="bg-indigo-500 h-2 rounded-full skill-bar" style="--width:90%; animation-delay:.5s"></div>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between mb-1"><span>React</span><span>85%</span></div>
                        <div class="w-full bg-gray-700 dark:bg-gray-300 rounded-full h-2">
                            <div class="bg-indigo-500 h-2 rounded-full skill-bar" style="--width:85%; animation-delay:1s"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Backend -->
            <div data-aos="fade-up" data-aos-delay="150">
                <h4 class="text-2xl font-semibold mb-4 text-purple-400 dark:text-purple-600">Backend</h4>

                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between mb-1"><span>Node.js</span><span>88%</span></div>
                        <div class="w-full bg-gray-700 dark:bg-gray-300 rounded-full h-2">
                            <div class="bg-purple-500 h-2 rounded-full skill-bar" style="--width:88%"></div>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between mb-1"><span>Python</span><span>80%</span></div>
                        <div class="w-full bg-gray-700 dark:bg-gray-300 rounded-full h-2">
                            <div class="bg-purple-500 h-2 rounded-full skill-bar" style="--width:80%; animation-delay:.5s"></div>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between mb-1"><span>Databases</span><span>75%</span></div>
                        <div class="w-full bg-gray-700 dark:bg-gray-300 rounded-full h-2">
                            <div class="bg-purple-500 h-2 rounded-full skill-bar" style="--width:75%; animation-delay:1s"></div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- PROJECTS -->
<section id="projects" class="max-w-6xl mx-auto py-24 px-6">
    <h3 class="text-4xl font-bold mb-16 text-center text-white dark:text-gray-900">Projects</h3>

    <div class="grid md:grid-cols-3 gap-10">

        <div class="project-card bg-gray-800 dark:bg-gray-200 p-8 rounded-xl shadow-xl hover:shadow-indigo-500/40 transition transform hover:-translate-y-2">
            <i class="fas fa-code text-4xl text-indigo-400 dark:text-indigo-600 mb-4"></i>
            <h4 class="text-2xl font-semibold text-white dark:text-gray-900 mb-2">Project One</h4>
            <p class="text-gray-400 dark:text-gray-700 mb-4">Short description…</p>
            <a href="#" class="text-indigo-400 dark:text-indigo-700 font-semibold hover:underline">View Details →</a>
        </div>

        <div class="project-card bg-gray-800 dark:bg-gray-200 p-8 rounded-xl shadow-xl hover:shadow-purple-500/40 transition transform hover:-translate-y-2">
            <i class="fas fa-mobile-alt text-4xl text-purple-400 dark:text-purple-600 mb-4"></i>
            <h4 class="text-2xl font-semibold text-white dark:text-gray-900 mb-2">Project Two</h4>
            <p class="text-gray-400 dark:text-gray-700 mb-4">Another description…</p>
            <a href="#" class="text-indigo-400 dark:text-indigo-700 font-semibold hover:underline">View Details →</a>
        </div>

        <div class="project-card bg-gray-800 dark:bg-gray-200 p-8 rounded-xl shadow-xl hover:shadow-pink-500/40 transition transform hover:-translate-y-2">
            <i class="fas fa-brain text-4xl text-pink-400 dark:text-pink-600 mb-4"></i>
            <h4 class="text-2xl font-semibold text-white dark:text-gray-900 mb-2">Project Three</h4>
            <p class="text-gray-400 dark:text-gray-700 mb-4">Another description…</p>
            <a href="#" class="text-indigo-400 dark:text-indigo-700 font-semibold hover:underline">View Details →</a>
        </div>

    </div>
</section>

<!-- EXPERIENCE -->
<section id="experience" class="bg-gray-800 dark:bg-gray-200 py-24 px-6">
    <div class="max-w-4xl mx-auto">
        <h3 class="text-4xl font-bold mb-16 text-center text-white dark:text-gray-900">Experience</h3>

        <div class="space-y-8">

            <div class="flex items-start gap-4" data-aos="fade-left">
                <div class="w-4 h-4 bg-indigo-400 dark:bg-indigo-600 rounded-full mt-2"></div>
                <div>
                    <h4 class="text-xl font-semibold text-white dark:text-gray-900">Senior Developer at Company A</h4>
                    <p class="text-gray-400 dark:text-gray-700">2020 - Present</p>
                    <p class="text-gray-400 dark:text-gray-700 mt-2">Led development…</p>
                </div>
            </div>

            <div class="flex items-start gap-4" data-aos="fade-left" data-aos-delay="150">
                <div class="w-4 h-4 bg-purple-400 dark:bg-purple-600 rounded-full mt-2"></div>
                <div>
                    <h4 class="text-xl font-semibold text-white dark:text-gray-900">Junior Developer at Company B</h4>
                    <p class="text-gray-400 dark:text-gray-700">2018 - 2020</p>
                    <p class="text-gray-400 dark:text-gray-700 mt-2">Built responsive UI…</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CONTACT -->
<section id="contact" class="py-24 px-6">
    <div class="max-w-xl mx-auto text-center">

        <h3 class="text-4xl font-bold mb-8 text-white dark:text-gray-900">Contact Me</h3>
        <p class="text-gray-400 dark:text-gray-700 mb-8">Have a project? Let's talk!</p>

        <div class="flex justify-center gap-4 mb-8">
            <a class="text-2xl text-indigo-400 dark:text-indigo-700 hover:opacity-70"><i class="fab fa-github"></i></a>
            <a class="text-2xl text-indigo-400 dark:text-indigo-700 hover:opacity-70"><i class="fab fa-linkedin"></i></a>
            <a class="text-2xl text-indigo-400 dark:text-indigo-700 hover:opacity-70"><i class="fab fa-twitter"></i></a>
        </div>

        <a href="mailto:you@example.com" 
           class="px-8 py-4 bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400 
                  text-white rounded-full shadow-lg hover:scale-105 transition">
            Send Email
        </a>

    </div>
</section>

<!-- FOOTER -->
<footer class="text-center p-6 bg-gray-800 dark:bg-gray-300 text-gray-400 dark:text-gray-700">
    © <span id="year"></span> Your Name — All rights reserved.
</footer>

<!-- AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- JS -->
<script>
AOS.init();

/* YEAR */
document.getElementById("year").textContent = new Date().getFullYear();

/* DARK MODE */
const themeToggle = document.getElementById("theme-toggle");
const icon = themeToggle.querySelector("i");

if (localStorage.getItem("theme") === "dark") {
    document.documentElement.classList.add("dark");
    icon.classList.replace("fa-moon", "fa-sun");
}

themeToggle.addEventListener("click", () => {
    document.documentElement.classList.toggle("dark");

    const isDark = document.documentElement.classList.contains("dark");

    if (isDark) {
        icon.classList.replace("fa-moon", "fa-sun");
        localStorage.setItem("theme", "dark");
    } else {
        icon.classList.replace("fa-sun", "fa-moon");
        localStorage.setItem("theme", "light");
    }
});

/* MOBILE MENU */
const menuBtn = document.getElementById("menu-btn");
const mobileMenu = document.getElementById("mobile-menu");

menuBtn.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden");
});

/* NAVBAR SCROLL EFFECT */
const navbar = document.getElementById("navbar");

window.addEventListener("scroll", () => {
    if (window.scrollY > 20) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
});
</script>

</body>
</html>
