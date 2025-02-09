<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projects</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset_css/projects.css') }}">
</head>

<body>

    @include('partials.navbar')

    <main class="container d-flex flex-column min-vh-100">
        <h1 class="pt-3 mt-4">Projects</h1>
        <p>This portfolio is a collection of projects that showcase my evolution as a developer. Each one has allowed me to learn and grow, exploring new technologies and approaches to create innovative and high-quality web solutions.</p>
        <div class="list-group">
            <a href="https://myhostingspace.net/" target="_blank" class="list-group-item list-group-item-action py-3">Projects Patitas al Rescate</a>
            <a href="https://ecology-survey.myhostingspace.net/listado" class="list-group-item list-group-item-action py-3" target="_blank">Projects Encuesta de ecología</a>
            <a href="https://shirini-e.myhostingspace.net/index" class="list-group-item list-group-item-action py-3" target="_blank">Projects Shirini-E</a>
            <a href="https://love.myhostingspace.net/" class="list-group-item list-group-item-action py-3" target="_blank">Projects Love</a>
        </div>
    </main>

    @include('partials.footer')

</body>

</html>
