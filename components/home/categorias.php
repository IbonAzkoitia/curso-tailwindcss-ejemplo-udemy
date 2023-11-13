<?php
$categorias = [
    "Diseño",
    "Desarrollo",
    "Marketing",
    "Informática y software",
    "Desarrollo personal",
    "Negocios",
    "Fotografía",
    "Música"
]
?>

<div class="container py-12">
    <h2 class="text-2xl font-bold">
        Categorías principales
    </h2>
    <div class="mt-4 flex flex-wrap gap-8">
        <?php foreach ( $categorias as $index => $categoria ) : ?>
        <a href="#">
            <div class="mb-2 overflow-hidden bg-[#f7f9fb]">
                <img class="hover:scale-[1.10]" src="/assets/images/categorias/categoria-<?php echo $index ?>.jpg" alt="">
            </div>
            <p class="font-semibold"><?php echo $categoria; ?></p>
        </a>
        <?php endforeach; ?>
    </div>
</div>