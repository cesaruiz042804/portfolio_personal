<link rel="stylesheet" href="{{ asset('partials/navbar.css') }}">

<div id="cursor">
    <div id="circle-fill"></div>
</div>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-label="Close menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item px-3"><a class="nav-link text-light" href="{{ route('home') }}" title="Home">Home</a>
                    </li>
                    <li class="nav-item px-3"><a class="nav-link text-light" href="{{ route('about') }}" title="About me">About
                            me</a></li>
                    <li class="nav-item px-3"><a class="nav-link text-light" href="{{ route('projects') }}" title="My proyects">My
                            projects</a>
                    </li>
                    <li class="nav-item px-3"><a class="nav-link text-light" href="{{ route('contact') }}"
                            title="Contact">Contact</a></li>
                    <li class="nav-item px-3">
                        <a class="nav-link text-light" href="https://github.com/cesaruiz042804" target="_blank" title="Github">
                            <i class="bi bi-github"></i>
                        </a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link text-light" href="https://www.linkedin.com/in/cesar-ruiz-004762263/" target="_blank"
                            title="Linkedin">
                            <i class="bi bi-linkedin"></i>
                        </a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link text-light" href="https://www.instagram.com/gabriel042804/" target="_blank"
                            title="Instagram">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    window.addEventListener('DOMContentLoaded', () => {
        const navbar = document.querySelector('.navbar');
        const aboutH2 = document.querySelector('#about h2');
        const aboutParagraphs = document.querySelectorAll('#about p');

        setTimeout(() => {
            if (navbar) {
                navbar.classList.add('animated');
            }

            if (aboutH2) {
                aboutH2.classList.add('visible');
            }

            if (aboutParagraphs) {
                aboutParagraphs.forEach(paragraph => {
                    paragraph.classList.add('visible');
                });
            }
        }, 50);
    });

    // Seleccionar el cursor
    const cursor = document.getElementById("cursor");

    // Obtener todos los botones y enlaces
    const interactiveElements = document.querySelectorAll("button, a");

    // Agregar un evento al mousemove para que el cursor siga el movimiento
    document.addEventListener("mousemove", (e) => {
        cursor.style.left = `${e.pageX}px`;
        cursor.style.top = `${e.pageY}px`;
    });

    // Detectar cuando el cursor entra en un botón o enlace
    interactiveElements.forEach((el) => {
        el.addEventListener("mouseenter", () => {
            cursor.classList.add("cursor-hover");
        });

        // Cuando el cursor sale de un botón o enlace
        el.addEventListener("mouseleave", () => {
            cursor.classList.remove("cursor-hover");
        });
    });
</script>
