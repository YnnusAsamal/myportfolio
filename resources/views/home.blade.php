@extends('layouts.app')

@section('content')
<style>
    .logo-slider {
        overflow: hidden;
        position: relative;
    }

    .logo-track {
        display: flex;
        width: max-content;
        animation: scroll 20s linear infinite;
    }

    .logo-item {
        min-width: 180px;
        text-align: center;
        padding: 20px;
    }

    .logo-item img {
        height: 70px;
        margin-bottom: 10px;
    }

    @keyframes scroll {
        from {
            transform: translateX(0);
        }
        to {
            transform: translateX(-50%);
        }
    }

    .hero-section {
    background:
        radial-gradient(circle at top right,
            rgba(37,99,235,0.25),
            transparent 35%),
        radial-gradient(circle at bottom left,
            rgba(59,130,246,0.15),
            transparent 40%),
        linear-gradient(
            135deg,
            #020617 0%,
            #0f172a 50%,
            #111827 100%
        );

    padding: 100px 0;
    }

    .min-vh-75 {
        min-height: 75vh;
    }

    .profile-image {
        width: 320px;
        height: 320px;
        object-fit: cover;
        border-radius: 50%;
        border: 8px solid rgba(255,255,255,0.2);
        box-shadow: 0 15px 40px rgba(0,0,0,0.3);
        transition: 0.4s;
    }

    .profile-image:hover {
        transform: scale(1.05);
    }

    .hero-section h1 {
        text-shadow: 2px 2px 10px rgba(0,0,0,0.3);
    }
</style>
<!-- Hero Section -->
<section class="hero-section text-white">
    <div class="container">
        <div class="row align-items-center min-vh-75">

            <div class="col-lg-7 text-center text-lg-start">
                <!-- <span class="badge bg-light text-dark mb-3 px-3 py-2">
                    👋 Welcome to My Portfolio
                </span> -->

                <h1 class="display-3 fw-bold mb-3">
                    Sunny C. Lamasa Jr.
                </h1>

                <h3 class="mb-4 text-warning">
                    Full Stack Web & Mobile Developer
                </h3>

                <p class="lead mb-4">
                    Experienced in Laravel, PHP, MySQL, JavaScript, Mobile Development,
                    Fleet Management Systems, GIS Applications, IoT Projects, and Cybersecurity Practitioner.
                </p>

                <div class="d-flex gap-3 justify-content-center justify-content-lg-start">
                    <a href="#projects" class="btn btn-warning btn-lg">
                        View Projects
                    </a>

                    <a href="#contact" class="btn btn-outline-light btn-lg">
                        Contact Me
                    </a>
                </div>
            </div>

            <div class="col-lg-5 text-center mt-5 mt-lg-0">
                <img src="{{ asset('image/Loki.png') }}" class="profile-image img-fluid" alt="Sunny Lamasa">
            </div>

        </div>
    </div>
</section>

<!-- About -->
<section id="about" class="py-5">
    <div class="container">

        <h2>About Me</h2>

        <p>
            I am a Web/Application Developer with experience in
            Laravel, Mobile Development, Logistics, and Supply
            Management. Passionate about building useful systems
            and learning new technologies.
        </p>

    </div>
</section>

<!-- Skills -->
<section id="skills" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Technologies I Use</h2>

        <div class="logo-slider">
            <div class="logo-track">

                <div class="logo-item">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg">
                    <span>Laravel</span>
                </div>

                <div class="logo-item">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg">
                    <span>PHP</span>
                </div>

                <div class="logo-item">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg">
                    <span>MySQL</span>
                </div>

                <div class="logo-item">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg">
                    <span>JavaScript</span>
                </div>

                <div class="logo-item">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg">
                    <span>HTML5</span>
                </div>

                <div class="logo-item">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg">
                    <span>CSS3</span>
                </div>

                <div class="logo-item">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg">
                    <span>Bootstrap</span>
                </div>

                <!-- Duplicate for smooth loop -->
                <div class="logo-item">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg">
                    <span>Laravel</span>
                </div>

                <div class="logo-item">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg">
                    <span>PHP</span>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Projects -->
<section id="projects" class="py-5">
    <div class="container">

        <h2>Projects</h2>

        <div class="row">

            <div class="col-md-4">
                <div class="card">

                    <div class="card-body">
                        <h5>Fleet Management System</h5>

                        <p>
                            Vehicle maintenance,
                            fuel monitoring,
                            booking management.
                        </p>

                        <!-- <a href="#" class="btn btn-primary">
                            View Project
                        </a> -->
                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="card">

                    <div class="card-body">
                        <h5>Laboratory Information System</h5>

                        <p>
                            Sample tracking,
                            inventory,
                            reports.
                        </p>

                        <!-- <a href="#" class="btn btn-primary">
                            View Project
                        </a> -->
                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="card">

                    <div class="card-body">
                        <h5>Clinic Management Information System</h5>

                        <p>
                            Patient tracking,
                            Inventory of Suppyl,
                            real-time reports.
                        </p>

                        <!-- <a href="#" class="btn btn-primary">
                            View Project
                        </a> -->
                    </div>

                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="card">

                    <div class="card-body">
                        <h5>IOT Projects/Fabrications</h5>

                        <p>
                            > Automated Filtration System
                            > KIOSK
                            > Realtime Humidity, Temperature and PH Tracker (Mobile Applcation)
                        </p>

                        <!-- <a href="#" class="btn btn-primary">
                            View Project
                        </a> -->
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>

<!-- Contact -->
<section id="contact" class="bg-dark text-white py-5">

    <div class="container">

        <h2>Contact</h2>

        <p>Email: ynnuslamasa@gmail.com</p>

        <p>GitHub:</p>

        <p></p>

    </div>

</section>

@endsection