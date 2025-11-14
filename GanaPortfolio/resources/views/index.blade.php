<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>

    {{-- TailwindCSS --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- AOS (Animate on Scroll) --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- Font Awesome for Icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Space+Mono&family=Poppins:wght@300;600&display=swap" rel="stylesheet">

    <style>
        /* Floating animation for hero shapes */
        .float {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-30px); }
            100% { transform: translateY(0px); }
        }

        /* Animated background waves */
        .waves {
            animation: waves 10s linear infinite;
        }
        @keyframes waves {
            0% { transform: translateX(0); }
            100% { transform: translateX(-100%); }
        }

        /* Typewriter effect for text */
        .typewriter-text {
            display: inline-block;
            overflow: hidden;
            border-right: .15em solid rgba(255, 255, 255, 0.75);
            white-space: nowrap;
            margin: 0 auto;
            letter-spacing: .15em;
            animation: typing 4s steps(30) 1s forwards, blink-caret .75s step-end infinite;
        }

        @keyframes typing {
            0% { width: 0; }
            100% { width: 100%; }
        }

        @keyframes blink-caret {
            50% { border-color: transparent; }
        }

        /* Custom gradient backgrounds */
        .hero-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        /* Skill progress bars */
        .skill-bar {
            width: 0;
            animation: fill 2s ease-in-out forwards;
        }
        @keyframes fill {
            to { width: var(--width); }
        }

        /* Particle effect for background */
        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
        }
        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: particle-float 8s linear infinite;
        }
        @keyframes particle-float {
            0% { transform: translateY(100vh) rotate(0deg); opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% { transform: translateY(-100vh) rotate(360deg); opacity: 0; }
        }
    </style>
</head>

<body class="bg-gray-900 text-gray-300 font-poppins relative overflow-x-hidden">

    {{-- Dark Mode Toggle --}}
    <button id="theme-toggle" class="fixed top-4 right-4 z-50 p-3 bg-gray-800 rounded-full shadow-lg hover:bg-gray-700 transition">
        <i class="fas fa-moon text-yellow-400"></i>
    </button>

    {{-- NAVBAR --}}
    <nav 
        class="flex justify-between items-center p-6 bg-gray-800 shadow sticky top-0 z-40 backdrop-blur-lg bg-opacity-70"
        data-aos="fade-down"
        data-aos-duration="1000"
    >
        <h1 class="text-3xl font-bold text-indigo-400 tracking-wide">MyPortfolio</h1>
        <ul class="flex gap-8 text-lg">
            <li><a href="#about" class="hover:text-indigo-500 transition">About</a></li>
            <li><a href="#skills" class="hover:text-indigo-500 transition">Skills</a></li>
            <li><a href="#projects" class="hover:text-indigo-500 transition">Projects</a></li>
            <li><a href="#experience" class="hover:text-indigo-500 transition">Experience</a></li>
            <li><a href="#contact" class="hover:text-indigo-500 transition">Contact</a></li>
        </ul>
    </nav>

    {{-- HERO SECTION --}}
    <section class="relative text-center py-36 hero-bg overflow-hidden">
        <div class="particles">
            <div class="particle" style="left: 10%; animation-delay: 0s;"></div>
            <div class="particle" style="left: 20%; animation-delay: 1s;"></div>
            <div class="particle" style="left: 30%; animation-delay: 2s;"></div>
            <div class="particle" style="left: 40%; animation-delay: 3s;"></div>
            <div class="particle" style="left: 50%; animation-delay: 4s;"></div>
            <div class="particle" style="left: 60%; animation-delay: 5s;"></div>
            <div class="particle" style="left: 70%; animation-delay: 6s;"></div>
            <div class="particle" style="left: 80%; animation-delay: 7s;"></div>
            <div class="particle" style="left: 90%; animation-delay: 8s;"></div>
        </div>
        
        {{-- Floating decorative shapes --}}
        <div class="absolute top-20 left-20 w-32 h-32 bg-indigo-800 rounded-full opacity-50 float"></div>
        <div class="absolute bottom-10 right-0 w-40 h-40 bg-purple-800 rounded-full opacity-50 float"></div>
        <div class="absolute top-1/2 left-10 w-24 h-24 bg-pink-800 rounded-full opacity-30 float" style="animation-delay: 2s;"></div>

        <div class="relative z-10" data-aos="zoom-in" data-aos-duration="1200">
            <h2 class="text-6xl font-bold text-white mb-6">
                Hi, I’m <span class="text-indigo-400">Eyron</span>
            </h2>

            <p class="text-xl text-gray-200 mb-8">
                Full-stack Developer • Designer • Problem Solver
            </p>

            <div class="text-2xl font-space-mono">
                <span class="typewriter-text">Building cool things with code.</span>
            </div>

            <div class="mt-8 flex justify-center gap-4">
                <a 
                    href="#projects" 
                    class="px-8 py-4 bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-full shadow-lg hover:scale-105 transition-all"
                >
                    View My Work
                </a>
                <a 
                    href="#contact" 
                    class="px-8 py-4 border-2 border-indigo-400 text-indigo-400 rounded-full hover:bg-indigo-400 hover:text-white transition-all"
                >
                    Get In Touch
                </a>
            </div>
        </div>
    </section>

    {{-- ABOUT SECTION --}}
    <section id="about" class="bg-gray-800 py-24 px-6">
        <div class="max-w-4xl mx-auto" data-aos="fade-right" data-aos-duration="1200">
            <h3 class="text-4xl font-bold mb-8 text-center text-white">About Me</h3>
            <div class="flex flex-col md:flex-row items-center gap-8">
                <img src="https://via.placeholder.com/300" alt="Profile" class="rounded-full w-48 h-48 shadow-lg" data-aos="fade-left">
                <p class="text-lg text-gray-400 leading-relaxed">
                    Write a short bio about yourself—skills, passions, experience, and what 
                    makes you unique as a developer. Passionate about creating innovative solutions 
                    that blend technology and design to solve real-world problems.
                </p>
            </div>
        </div>
    </section>

    {{-- SKILLS SECTION --}}
    <section id="skills" class="py-24 px-6 bg-gray-900">
        <div class="max-w-6xl mx-auto">
            <h3 class="text-4xl font-bold mb-16 text-center text-white" data-aos="fade-up">Skills</h3>
            <div class="grid md:grid-cols-2 gap-10">
                <div data-aos="fade-up" data-aos-delay="100">
                    <h4 class="text-2xl font-semibold mb-4 text-indigo-400">Frontend</h4>
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between mb-1">
                                <span>HTML/CSS</span>
                                <span>95%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-2">
                                <div class="bg-indigo-500 h-2 rounded-full skill-bar" style="--width: 95%;"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span>JavaScript</span>
                                <span>90%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-2">
                                <div class="bg-indigo-500 h-2 rounded-full skill-bar" style="--width: 90%; animation-delay: 0.5s;"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span>React</span>
                                <span>85%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-2">
                                <div class="bg-indigo-500 h-2 rounded-full skill-bar" style="--width: 85%; animation-delay: 1s;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="200">
                    <h4 class="text-2xl font-semibold mb-4 text-purple-400">Backend</h4>
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between mb-1">
                                <span>Node.js</span>
                                <span>88%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-2">
                                <div class="bg-purple-500 h-2 rounded-full skill-bar" style="--width: 88%;"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span>Python</span>
                                <span>80%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-2">
                                <div class="bg-purple-500 h-2 rounded-full skill-bar" style="--width: 80%; animation-delay: 0.5s;"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span>Databases</span>
                                <span>75%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-2">
                                <div class="bg-purple-500 h-2 rounded-full skill-bar" style="--width: 75%; animation-delay: 1s;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- PROJECTS SECTION --}}
    <section id="projects" class="max-w-6xl mx-auto py-24 px-6">
        <h3 class="text-4xl font-bold mb-16 text-center text-white" data-aos="fade-up">Projects</h3>

        <div class="grid md:grid-cols-3 gap-10">

            {{-- Project card --}}
            <div 
                class="bg-gray-800 p-8 rounded-xl shadow-xl hover:shadow-2xl transition border border-gray-700 backdrop-blur-lg bg-opacity-80 transform hover:-translate-y-2"
                data-aos="fade-up"
                data-aos-delay="100"
            >
                <div class="mb-4">
                    <i class="fas fa-code text-4xl text-indigo-400"></i>
                </div>
                <h4 class="font-semibold text-2xl mb-3 text-white">Project One</h4>
                <p class="text-gray-400 mb-6">Short description of your project.</p>
                <a href="#" class="text-indigo-400 font-semibold hover:underline">View Details →</a>
            </div>

            <div 
                class="bg-gray-800 p-8 rounded-xl shadow-xl hover:shadow-2xl transition border border-gray-700 backdrop-blur-lg bg-opacity-80 transform hover:-translate-y-2"
                data-aos="fade-up"
                data-aos-delay="200"
            >
                <div class="mb-4">
                    <i class="fas fa-mobile-alt text-4xl text-purple-400"></i>
                </div>
                <h4 class="font-semibold text-2xl mb-3 text-white">Project Two</h4>
                <p class="text-gray-400 mb-6">Another short project description.</p>
                <a href="#" class="text-indigo-400 font-semibold hover:underline">View Details →</a>
            </div>

            <div 
                class="bg-gray-800 p-8 rounded-xl shadow-xl hover:shadow-2xl transition border border-gray-700 backdrop-blur-lg bg-opacity-80 transform hover:-translate-y-2"
                data-aos="fade-up"
                data-aos-delay="300"
            >
                <div class="mb-4">
                    <i class="fas fa-brain text-4xl text-pink-400"></i>
                </div>
                <h4 class="font-semibold text-2xl mb-3 text-white">Project Three</h4>
                <p class="text-gray-400 mb-6">Another short project description.</p>
                <a href="#" class="text-indigo-400 font-semibold hover:underline">View Details →</a>
            </div>

        </div>
    </section>

    {{-- EXPERIENCE SECTION --}}
    <section id="experience" class="bg-gray-800 py-24 px-6">
        <div class="max-w-4xl mx-auto">
            <h3 class="text-4xl font-bold mb-16 text-center text-white" data-aos="fade-up">Experience</h3>
            <div class="space-y-8">
                <div class="flex items-start gap-4" data-aos="fade-left" data-aos-delay="100">
                    <div class="w-4 h-4 bg-indigo-400 rounded-full mt-2"></div>
                    <div>
                        <h4 class="text-xl font-semibold text-white">Senior Developer at Company A</h4>
                        <p class="text-gray-400">2020 - Present</p>
                        <p class="text-gray-400 mt-2">Led development of scalable web applications using modern technologies.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4" data-aos="fade-left" data-aos-delay="200">
                    <div class="w-4 h-4 bg-purple-400 rounded-full mt-2"></div>
                    <div>
                        <h4 class="text-xl font-semibold text-white">Junior Developer at Company B</h4>
                        <p class="text-gray-400">2018 - 2020</p>
                        <p class="text-gray-400 mt-2">Built responsive front-end components and collaborated on backend APIs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CONTACT SECTION --}}
    <section id="contact" class="py-24 px-6">
        <div class="max-w-xl mx-auto text-center" data-aos="fade-up" data-aos-duration="1200">
            <h3 class="text-4xl font-bold mb-8 text-white">Contact Me</h3>
            <p class="text-gray-400 mb-8">Have a project in mind? Let’s work together!</p>

            <div class="flex justify-center gap-4 mb-8">
                <a href="#" class="text-2xl text-indigo-400 hover:text-indigo-300"><i class="fab fa-github"></i></a>
                <a href="#" class="text-2xl text-indigo-400 hover:text-indigo-300"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="text-2xl text-indigo-400 hover:text-indigo-300"><i class="fab fa-twitter"></i></a>
            </div>

            <a 
                href="mailto:you@example.com"
                class="px-8 py-4 bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-full shadow-lg hover:scale-105 transition-all"
            >
                Send Email
            </a>
        </div>
    </section>

    {{-- FOOTER --}}
    <footer 
        class="text-center p-6 bg-gray-800 shadow mt-12"
        data-aos="fade-up"
    >
        <p class="text-gray-400">
            © {{ date('Y') }} Your Name — All rights reserved.
        </p>
    </footer>

    {{-- AOS JS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();

        // Dark Mode Toggle
        const themeToggle = document.getElementById('theme-toggle');
        const body = document.body;
        themeToggle.addEventListener('click', () => {
            body.classList.toggle('bg-gray-900');
            body.classList.toggle('text-gray-300');
            body.classList.toggle('bg-white');
            body.classList.toggle('text-gray-900');
            // Toggle icon
            const icon = themeToggle.querySelector('i');
            icon.classList.toggle('fa-moon');
            icon.classList.toggle('fa-sun');
            icon.classList.toggle('text-yellow-400');
            icon.classList.toggle('text-gray-800');
        });
    </script>

</body>
</html>