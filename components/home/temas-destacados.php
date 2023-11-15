<?php
$desarrollo = [
    [
        'titulo' => 'Python',
        'estudiantes' => '36.354.994'
    ],
    [
        'titulo' => 'Web Development',
        'estudiantes' => '11.415.615'
    ],
    [
        'titulo' => 'Machine Learning',
        'estudiantes' => '7.070.015'
    ]
];

$business = [
    [
        'titulo' => 'Financial Analysis',
        'estudiantes' => '1,195,282'
    ],
    [
        'titulo' => 'SQL',
        'estudiantes' => '5,977,561'
    ],
    [
        'titulo' => 'PMP',
        'estudiantes' => '1,733,398'
    ]
];

$it = [
    [
        'titulo' => 'Amazon AWS',
        'estudiantes' => '6,123,456'
    ],
    [
        'titulo' => 'Ethical Hacking',
        'estudiantes' => '10,931,066'
    ],
    [
        'titulo' => 'Cyber Security',
        'estudiantes' => '3,998,037'
    ]
];

$diseno = [
    [
        'titulo' => 'Photoshop',
        'estudiantes' => '10,909,736'
    ],
    [
        'titulo' => 'Graphic Design',
        'estudiantes' => '3,381,052'
    ],
    [
        'titulo' => 'Drawing',
        'estudiantes' => '2,410,849'
    ]
];
?>

<div class="bg-gray-50 py-16">
    <div class="container">
        <h2 class="text-2xl font-bold">Temas destacados por categoría</h2>

        <div class="my-8 grid grid-cols-4 gap-4">
            <div class="space-y-5">
                <h3 class="text-xl font-bold">
                    Desarrollo
                </h3>

                <?php foreach ( $desarrollo as $categoria ) : ?>
                <div>
                    <a href="#" class="text-udemy hover:text-udemy-dark underline font-medium">
                        <?php echo $categoria["titulo"]; ?>
                    </a>
                    <div class="mt-1 text-sm text-gray-500">
                        <?php echo $categoria["estudiantes"]; ?> estudiantes
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="space-y-5">
                <h3 class="text-xl font-bold">
                    Business
                </h3>

                <?php foreach ( $business as $categoria ) : ?>
                    <div>
                        <a href="#" class="text-udemy hover:text-udemy-dark underline font-medium">
                            <?php echo $categoria["titulo"]; ?>
                        </a>
                        <div class="mt-1 text-sm text-gray-500">
                            <?php echo $categoria["estudiantes"]; ?> estudiantes
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="space-y-5">
                <h3 class="text-xl font-bold">
                    IT and Software
                </h3>

                <?php foreach ( $it as $categoria ) : ?>
                    <div>
                        <a href="#" class="text-udemy hover:text-udemy-dark underline font-medium">
                            <?php echo $categoria["titulo"]; ?>
                        </a>
                        <div class="mt-1 text-sm text-gray-500">
                            <?php echo $categoria["estudiantes"]; ?> estudiantes
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="space-y-5">
                <h3 class="text-xl font-bold">
                    Design
                </h3>

                <?php foreach ( $diseno as $categoria ) : ?>
                    <div>
                        <a href="#" class="text-udemy hover:text-udemy-dark underline font-medium">
                            <?php echo $categoria["titulo"]; ?>
                        </a>
                        <div class="mt-1 text-sm text-gray-500">
                            <?php echo $categoria["estudiantes"]; ?> estudiantes
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <a href="#" class="p-3 border border-primary font-semibold text-sm hover:bg-gray-200">
            Descubrir más temas
        </a>
    </div>
</div>