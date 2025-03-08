<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projects</title>
    <meta name="description"
        content="Explore my web portfolio and discover innovative projects that showcase my experience in web development.">
    <meta name="keywords"
        content="web development, web application development, Laravel, Vue.js, Bootstrap, HTML, CSS, hosting, cPanel, Hostinger, GitHub, web design, front-end development, back-end development, full-stack development, web solutions, web portfolio, website development, e-commerce development, web systems development, UX/UI design, web consulting, web maintenance, responsive design, SEO, web accessibility, La Chorrera, Ciudad de Panama">
    <link rel="shortcut icon" href="{{ asset('images/diseno.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>

    @include('partials.navbar')

    <main class="container d-flex flex-column min-vh-100">
        <h1 class="pt-3 mt-4">Projects</h1>
        <p>This portfolio is a collection of projects that showcase my evolution as a developer. Each one has allowed me
            to learn and grow, exploring new technologies and approaches to create innovative. Everything I have learned
            has been self-taught, as I am passionate about discovering new things and have a strong ability to learn
            quickly.</p>
        <div class="list-group">
            <div class="list-group-item list-group-item-action py-3">
                <h2 class="fs-4">Panamá Opina</h2>
                <p class="fs-6">API Laravel | React.js | Tailwind | JWT | Laravel Sanctum.</p>
                <a href="https://panamaopina.myhostingspace.net/" target="_blank" class="text-decoration-none">Panamá
                    Opina – Public
                    Opinion Platform</a>
                <p>Estimated Duration: 2 weeks (currently in progress).</p>
            </div>
            <div class="list-group-item list-group-item-action py-3">
                <h2 class="fs-4">Patitas al Rescate</h2>
                <p class="fs-6">Laravel | Vue.js (for form integration) | Bootstrap (for Admin Panel) | Javascript |
                    HTML | CSS | JCalendar.
                </p>
                <a href="https://myhostingspace.net/" target="_blank" class="text-decoration-none">
                    Patitas al Rescate – Veterinary Appointment & E-Commerce System
                </a>
                <br>
                <a href="https://myhostingspace.net/admin/login-session" target="_blank" class="text-decoration-none">
                    Patitas al Rescate – Admin Panel for Animal Rescue Management
                </a>
                <p>Estimated Duration: 5-6 weeks.</p>
            </div>
            <div class="list-group-item list-group-item-action py-3">
                <h2 class="fs-4">Portfolio web</h2>
                <p class="fs-6">Laravel | Vue.js (for form integration) | Bootstrap.</p>
                <a href="https://portfolio-cesar-ruiz.myhostingspace.net/" target="_blank"
                    class="text-decoration-none">Portfolio
                    Web – Web Development Portfolio</a>
                <p>Estimated Duration: 2-3 days.</p>
            </div>
            <div class="list-group-item list-group-item-action py-3">
                <h2 class="fs-4">Shirini-E</h2>
                <p class="fs-6">Laravel | Javascript | HTML | CSS.</p>
                <a href="https://shirini-e.myhostingspace.net/index" target="_blank"
                class="text-decoration-none">Shirini-E – E-commerce for Artisan Ice Cream</a>
                <p>Estimated Duration: 4 weeks.</p>
            </div>
            <div class="list-group-item list-group-item-action py-3">
                <h2 class="fs-4">Ecology Survey</h2>
                <p class="fs-6">Laravel | Javascript | Bootstrap.</p>
                <a href="https://ecology-survey.myhostingspace.net" target="_blank" class="text-decoration-none">Ecology
                    Survey – Environmental Survey</a>
                <p>Estimated Duration: 1-2 hours.</p>
                <br>
                <a href="https://ecology-survey.myhostingspace.net/listado" target="_blank"
                    class="text-decoration-none">Ecology Survey Listing – Ecological Data Analysis and Reports</a>
            </div>
            <div class="list-group-item list-group-item-action py-3">
                <h2 class="fs-4">Love</h2>
                <p class="fs-6">Laravel | HTML | CSS.</p>
                <a href="https://love.myhostingspace.net/" target="_blank" class="text-decoration-none">Love –
                    Connection and Expression Platform</a>
                <p>Estimated Duration: 2-3 hours.</p>
            </div>
        </div>
    </main>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
