<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About me</title>
    <link rel="shortcut icon" href="{{ asset('images/diseno.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset_css/about.css') }}">
</head>

<body>
    @include('partials.navbar')

    <main>
        <div class="container d-flex flex-column justify-content-center min-vh-100 content">
            <div class="row">
                <section class="col-md-7 d-flex flex-column">
                    <h2 class="">About me</h2>
                    <p>Developer with experience in <strong>Laravel</strong>, <strong>Vue.js</strong>, and
                        <strong>.NET</strong>.
                        Web Development (<strong>Laravel - PHP</strong>): I have a solid command of the <strong>PHP
                            Laravel framework</strong>, which I use to build modern and efficient web applications. I
                        have experience in designing robust architectures, developing and integrating databases.
                        <strong>Front-end</strong> Development (<strong>Vue.js - JavaScript</strong>): On the client
                        side, I have knowledge of <strong>Vue.js</strong>, a progressive <strong>JavaScript
                            framework</strong> that allows me to create interactive and reactive user interfaces.
                        <strong>.NET (C#)</strong>: I also have experience in developing with <strong>.NET</strong> and
                        <strong>C#</strong>, which allows me to tackle projects that require the Microsoft ecosystem.
                        Web Hosting Administration: I am familiar with administering web servers using control panels
                        like <strong>cPanel</strong> and <strong>Hostinger</strong>. This includes domain configuration,
                        database management, and the implementation of security measures.
                        Design and Layout (<strong>Bootstrap</strong>): I use the <strong>Bootstrap CSS
                            framework</strong> to create responsive and visually appealing web designs. This ensures
                        that my projects look and function optimally on any device.
                    </p>
                </section>

                <section id="skills" class="col-md-5 d-flex flex-column">
                    <h2 class="">Skills</h2>
                    <ul class="box-container d-flex flex-wrap gap-4 list-unstyled">
                        <li class="skill rounded text-center d-flex align-items-center justify-content-center">
                            Html</li>
                        <li class="skill rounded text-center d-flex align-items-center justify-content-center">
                            Css</li>
                        <li class="skill rounded text-center d-flex align-items-center justify-content-center">
                            Bootstrap</li>
                        <li class="skill rounded text-center d-flex align-items-center justify-content-center">
                            Laravel</li>
                        <li class="skill rounded text-center d-flex align-items-center justify-content-center">
                            PHP</li>
                        <li class="skill rounded text-center d-flex align-items-center justify-content-center">
                            JavaScript</li>
                        <li class="skill rounded text-center d-flex align-items-center justify-content-center">
                            Vue.js</li>
                        <li class="skill rounded text-center d-flex align-items-center justify-content-center">
                            Github</li>
                        <li class="skill rounded text-center d-flex align-items-center justify-content-center">
                            Mysql</li>
                    </ul>
                </section>
            </div>
        </div>
    </main>

    @include('partials.footer')

</body>

</html>
