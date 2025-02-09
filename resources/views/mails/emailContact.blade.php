<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <title>Junior Programmer</title>
</head>

<body style="font-family: 'Arial', sans-serif; background-color: #f4f4f4; margin: 0; padding: 0; color: #4b4b4e;">
    <div
        style="background-color: #ffffff; max-width: 100%; margin: 20px auto; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden;">
        <div style="background-color: #5881b8; padding: 20px; color: white; text-align: center;">
            <h2 style="margin: 0;">Consulta enviada</h2>
        </div>
        <div style="padding: 20px; line-height: 1.5;">
            <div style="justify-content: center; align-content: center; text-align: center;">
                <p style="margin: 0; padding: 10px 0; font-size: 100px;">
                    <img src="{{ $message->embed(public_path('images/img_check.png')) }}" alt="Check Icon"
                        width="100" height="100" style="display: block; margin: 0 auto;">
                </p>
                <p class="font-size: 18px">¡Hola {{ $name }} {{ $lastname }}!</p>
                <p>¡Gracias por ponerte en contacto conmigo! Recibí tu mensaje y me pondré en contacto contigo lo antes posible. Mientras tanto, puedes echar un vistazo a mi sitio web:</p>

            </div>
            <div style="justify-content: center; align-content: center; text-align: center;">
                <a href="{{ route('home') }}"
                    style="display: inline-block; background-color: #5881b8; color: white; padding: 12px 20px; text-decoration: none; border-radius: 5px; font-size: 16px; margin-top: 20px; transition: background-color 0.3s ease;">
                    ¡Visita mi portfolio!
                </a>
                <hr
                    style="height: 2px; background: linear-gradient(to right, #f7f5ff, #434372); width: 80%; margin: 20px auto;">
                <p style="font-size: 16px; margin: 10px 0;">Si no solicitaste este correo, puedes ignorarlo.</p>
            </div>
        </div>
    </div>
    <footer
        style="background-color: #5881b8; text-align: center; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.945); width: 100%; color: #f7f5ff; height: 50px;">
        <div class="container-foot">
            <span class="margin: 10px 0 0px 0x;">&copy; 2025 César Ruíz. ¡Desarrollando el futuro!</span>
        </div>
    </footer>

</body>

</html>
