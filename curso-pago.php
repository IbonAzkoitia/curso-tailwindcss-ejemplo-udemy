<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cursos en línea: aprende de todo y a tu propio ritmo | Udemy</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200;300;400;500;600;700;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <!-- Alpine Plugins -->
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>

    <!-- Alpine JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link rel="stylesheet" href="assets/css/style-production.css" />
</head>
<body>

<?php require 'components/header.php'; ?>
<?php require 'components/curso-pago/cabecera.php'; ?>

<div class="max-w-6xl mx-auto">
    <div class="py-8 max-w-2xl">
        <?php require 'components/curso-pago/aprenderas.php'; ?>
        <?php require 'components/curso-pago/contenido-curso.php'; ?>
        <?php require 'components/curso-pago/requisitos-descripcion.php'; ?>
        <?php require 'components/curso-pago/otros-cursos.php'; ?>
    </div>
</div>

<div class="h-[900px]"></div>

<?php require 'components/curso-gratuito/footer-udemy-business.php'; ?>
<?php require 'components/footer.php'; ?>
</body>
</html>
