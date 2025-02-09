<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio Web</title>
    <meta name="description" content="Explore my web portfolio and discover innovative projects that showcase my experience in web development.">
    <meta name="keywords" content="web development, web application development, Laravel, Vue.js, Bootstrap, HTML, CSS, hosting, cPanel, Hostinger, GitHub, web design, front-end development, back-end development, full-stack development, web solutions, web portfolio, website development, e-commerce development, web systems development, UX/UI design, web consulting, web maintenance, responsive design, SEO, web accessibility, La Chorrera, Ciudad de Panama">
    <link rel="shortcut icon" href="{{ asset('images/diseno.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset_css/home.css') }}">
</head>

<body>
    @include('partials.navbar')

    <main>
        <div class="container d-flex flex-column justify-content-center content-height">
            <div class="row">
                <section id="about" class="col-md-7 align-items-center">
                    <h2>César Ruíz</h2>
                    <p>Junior Programmer</p>
                    <p><strong>Developer</strong> with the ability to adapt to any challenge. My proficiency in
                        <strong>Laravel</strong>,
                        <strong>Vue.Js</strong> and <strong>.NET</strong>
                        allows me
                        to create comprehensive solutions, from <strong>back-end</strong> architecture to user
                        interface."
                    </p>
                    <a href="{{ route('projects') }}" class="btn btn-outline-dark border-2">Projects</a>
                </section>


                <section id="projects" class="col-md-5 d-flex flex-column align-items-center justify-content-center">
                    <!--
                            <img src="{{ asset('images/cesar_gris.png') }}" alt="" class="img-fluid">
                            <div id="shadow"></div>
                            <video src="{{ asset('images/computer.mp4') }}" loop autoplay muted></video>
                        -->
                    <div class="spinner">
                        <div class="message"></div>
                        <div class="message"></div>
                        <div class="message"></div>
                        <div class="message"></div>
                        <div class="message"></div>
                        <div class="message"></div>
                    </div>
                    <p>&lt;code&gt;</p>
                </section>
                <div class="row">
                    <section class="col-md-7 align-items-center">
                        <p class="line">
                            <span>●</span>
                            <span>●</span>
                            <span>●</span>
                        </p>
                    </section>
                </div>
            </div>
        </div>

    </main>

    @include('partials.footer')

    <script>
        /*
        const video = document.querySelector('video');
        video.playbackRate = 2.5; // Puedes ajustar este valor
        */

        const balls = document.querySelectorAll('.line span');
        balls.forEach((ball, index) => {
            ball.style.animationDelay = `${index * 0.5}s`; // Retardo para cada bolita
        });
    </script>

</body>

</html>
