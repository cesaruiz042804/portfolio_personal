<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="shortcut icon" href="{{ asset('images/diseno.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset_css/contact.css') }}">
    @vite(['resources/js/app.js'])<!-- Esto carga el script compilado -->
</head>

<body>

    @include('partials.navbar')

    <main>
        <div class="container d-flex flex-column min-vh-100">
            <form method="POST" action="{{ route('data_contact') }}" class="needs-validation" novalidate
                onsubmit="showLoading()">
                @csrf
                <div class="my-4">
                    <h1>Contact</h1>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="d-flex flex-wrap gap-3 list-unstyled">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>

                <div class="row">
                    <div class="col-md-6 my-2">
                        <div class="form-control d-flex flex-column justify-content-center align-items-center py-3">
                            <label for="name">Email</label>
                            <a class="text-decoration-none"
                                href="https://mail.google.com/mail/?view=cm&fs=1&to=cesaruiz042804@gmail.com"
                                target="_blank"><strong>cesaruiz042804@gmail.com</strong></a>
                        </div>
                    </div>
                    <div class="col-md-6 my-2">
                        <div class="form-control d-flex flex-column justify-content-center align-items-center py-3">
                            <label for="lastname">Phone</label>
                            <a class="text-decoration-none"
                                href="https://wa.me/50760180332?text={{ urlencode('Hola, ví tu portafolio web.') }}}"
                                target="_blank">
                                <strong>+507 6018-0332</strong>
                            </a>
                        </div>
                    </div>
                </div>

                <div id="app">

                </div>

                <div class="mb-3"> <label for="message" class="form-label">Message:</label>
                    <textarea class="form-control" id="message" rows="3" placeholder="Write your message..." name="message"></textarea>
                </div>

                <button type="submit" class="btn btn-dark border-2">Save information</button>
            </form>
        </div>
    </main>

    <!-- Modal de Carga -->
    <div class="modal fade" id="loadingModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center p-4 border-0 shadow-lg">
                <div class="modal-body">
                    <div class="spinner-grow text-primary" role="status" style="width: 3rem; height: 3rem;">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <p class="mt-3 fw-bold text-secondary">Please, one moment...</p>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')

    <script>
        // Función para mostrar el modal de carga
        document.addEventListener('DOMContentLoaded', () => {
            const telefonoInput = document.getElementById('telephone');

            if (telefonoInput) { // Verifica si el elemento existe (¡siempre es buena práctica!)
                telefonoInput.addEventListener('change', (event) => {
                    const telefono = event.target.value;
                    console.log("Teléfono (change):", telefono);
                    // Aquí puedes hacer lo que necesites con el valor del teléfono
                });
            } else {
                console.error("No se encontró el elemento con id 'telephone'");
            }
        });


        function showLoading() {

            var loadingModal = new bootstrap.Modal(document.getElementById('loadingModal'));
            loadingModal.show();
        }
    </script>


</body>

</html>

<!-- Bootstrap JS y dependencias
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
-->

<!--
<div class="row">
    <div class="col-md-6 my-2"> <label for="name" class="form-label">Name:</label>
        <input type="text" class="form-control" id="name" placeholder="Name">
    </div>
    <div class="col-md-6 my-2"> <label for="lastname" class="form-label">Lastname:</label>
        <input type="text" class="form-control" id="lastname" placeholder="Lastname">
    </div>
</div>

<div class="row">
    <div class="col-md-6 my-2"> <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="name@example.com">
    </div>
    <div class="col-md-6 my-2"> <label for="phone" class="form-label">Phone:</label>
        <div id="app">
            <phone-input v-model="phone"></phone-input>
        </div>
    </div>
</div>
-->
