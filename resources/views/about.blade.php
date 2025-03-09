<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About me</title>
    <meta name="description"
        content="Explore my web portfolio and discover innovative projects that showcase my experience in web development.">
    <meta name="keywords"
        content="web development, web application development, Laravel, Vue.js, Bootstrap, HTML, CSS, hosting, cPanel, Hostinger, GitHub, web design, front-end development, back-end development, full-stack development, web solutions, web portfolio, website development, e-commerce development, web systems development, UX/UI design, web consulting, web maintenance, responsive design, SEO, web accessibility, La Chorrera, Ciudad de Panama">
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
                    <p>Experienced web developer specializing in the development of robust and scalable web
                        applications. My expertise spans a diverse technological spectrum, including:
                        <strong>Backend</strong>: Proficient in <strong>Laravel (PHP)</strong> for building web
                        applications and secure APIs, implementing authentication with <strong>JWT</strong> and
                        <strong>Laravel Sanctum</strong>. Introductory knowledge in <strong>.NET (C#)</strong>
                        application development, including <strong>ASP.NET MVC</strong> with <strong>Entity
                            Framework</strong> and <strong>Windows Forms</strong> desktop applications.
                        <strong>Frontend</strong>: Development of dynamic and reactive user interfaces using
                        <strong>Vue.js</strong> and <strong>React</strong>. <strong>Design and Layout</strong>: Creation
                        of responsive and visually appealing web designs utilizing <strong>Bootstrap</strong> and
                        <strong>Tailwind CSS</strong>. <strong>Server Administration</strong>: Efficient management of
                        web servers using <strong>cPanel</strong> and <strong>Hostinger</strong>, covering domain
                        configuration, database administration, and security measure implementation. <strong>Tools and
                            Methodologies</strong>: Utilization of modern development tools such as
                        <strong>Insomnia</strong> for API testing, <strong>GitHub Copilot</strong> for code
                        optimization, and <strong>GitHub</strong> for version control, collaboration, and automated web
                        application deployment.
                    </p>
                </section>

                <section id="skills" class="col-md-5 d-flex flex-column">
                    <h2 class="">Skills</h2>
                    <ul class="box-container d-flex flex-wrap gap-4 list-unstyled">
                        <li class="skill rounded text-center d-flex align-items-center justify-content-center">
                            Laravel</li>
                        <li class="skill rounded text-center d-flex align-items-center justify-content-center">
                            PHP</li>
                        <li class="skill rounded text-center d-flex align-items-center justify-content-center">
                            React</li>
                        <li class="skill rounded text-center d-flex align-items-center justify-content-center">
                            Vue.js</li>
                        <li class="skill rounded text-center d-flex align-items-center justify-content-center">
                            Tailwind</li>
                        <li class="skill rounded text-center d-flex align-items-center justify-content-center">
                            Bootstrap</li>
                        <li class="skill rounded text-center d-flex align-items-center justify-content-center">
                            JavaScript</li>
                        <li class="skill rounded text-center d-flex align-items-center justify-content-center">
                            Github</li>
                        <li class="skill rounded text-center d-flex align-items-center justify-content-center">
                            Mysql</li>
                        <li class="skill rounded text-center d-flex align-items-center justify-content-center">
                            .NET</li>
                        <li class="skill rounded text-center d-flex align-items-center justify-content-center">
                            C#</li>
                        <li class="skill rounded text-center d-flex align-items-center justify-content-center">
                            API</li>
                    </ul>
                </section>
            </div>
        </div>
    </main>

    @include('partials.footer')

</body>

</html>
