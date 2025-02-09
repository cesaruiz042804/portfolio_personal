<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset_css/example.css') }}">
</head>

<body>
    @include('partials.navbar')

    <main>
        <div class="container d-flex flex-column justify-content-center min-vh-100">
            <div class="row">
                <section id="about" class="col-md-7 align-items-center pt-4 mt-5">
                    <div class="spinne">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </section>


                <section id="projects" class="col-md-5 d-flex flex-column align-items-center justify-content-center">
                    <div class="spinner">
                        <div class="message">Innovate</div>
                        <div class="message">Create</div>
                        <div class="message">Inspire</div>
                        <div class="message">Portfolio</div>
                        <div class="message">Explore</div>
                        <div class="message">Connect</div>
                      </div>
                </section>
                <div class="row">
                    <section class="col-md-7 align-items-center">

                    </section>
                </div>
            </div>
        </div>
    </main>

    @include('partials.footer')

    <script>
        const video = document.querySelector('video');
        video.playbackRate = 2.5; // Puedes ajustar este valor

        const balls = document.querySelectorAll('.line span');

        balls.forEach((ball, index) => {
            ball.style.animationDelay = `${index * 0.5}s`; // Retardo para cada bolita
        });
    </script>

</body>

</html>
