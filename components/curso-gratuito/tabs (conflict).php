<?php
$tabs = [
    "Lo que aprenderás",
    "Contenido del curso",
    "Reseñas",
    "Instructores"
];
$aprender = [
    "Instalación y Configuración del Entorno.",
    "Primer Programa.",
    "Variables, Constantes y Literales.",
    "Tipos de Datos.",
    "Operadores.",
    "Sentencia if."
];

$seccion1 = [
    [
        "titulo" => "02. Instalación y Configuración del Entorno.",
        "tiempo" => "14:45"
    ],
    [
        "titulo" => "03. Primer Programa.",
        "tiempo" => "12:35"
    ],
    [
        "titulo" => "04. Comentarios y Declaración.",
        "tiempo" => "12:11"
    ],
    [
        "titulo" => "05. Variables, Constantes y Literales.",
        "tiempo" => "22:15"
    ],
    [
        "titulo" => "06. Tipos de Datos.",
        "tiempo" => "19:43"
    ],
    [
        "titulo" => "07. Operadores.",
        "tiempo" => "22:17"
    ],
    [
        "titulo" => "08. Sentencia if.",
        "tiempo" => "16:03"
    ]
];
?>

<div class="my-12 container" x-data="{ activeTab: 2 }">
    <div class="flex items-center gap-4 border-b border-gray-300">
        <?php foreach ( $tabs as $index => $tab ) : ?>
        <div @click="activeTab = <?php echo $index; ?>"
             class="cursosGratuitosTabs"
             :class=" activeTab === <?php echo $index; ?> ? 'cursosGratuitosTabsActive' : ''"
        >
            <?php echo $tab ?>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="py-3">
        <!-- Aprender -->
        <div x-show="activeTab === 0" class="space-y-3">
            <?php foreach ( $aprender as $elemento ) : ?>
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                </svg>

                <div>
                    <?php echo $elemento; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <!-- end Aprender -->

        <!-- Contenido -->
        <div x-show="activeTab === 1" class="max-w-xl text-sm">
            <div>
                <h3 class="mb-4 text-2xl font-bold font-text">
                    Requisitos
                </h3>
                <ul class="list-disc pl-6">
                    <li>Como Este Curso es Completamente Desde Cero a Pro, el Estudiante no Nesecita Conocimientos Previos.</li>
                </ul>
            </div>

            <!-- Descripción -->
            <div class="my-12" x-data="{ expanded: false, gradient: true }">
                <div x-show="expanded" x-collapse.min.220px class="relative">
                    <div>
                        <h3 class="mb-4 text-2xl font-bold font-text">
                            Descripción
                        </h3>

                        <div class="space-y-4">
                            <p>
                                ¡Bienvenido al emocionante mundo de la programación con nuestro curso <span class="font-semibold">"Python de Cero a Pro"</span>! Prepárate para embarcarte en un viaje transformador hacia el dominio de uno de los lenguajes de programación más versátiles y demandados en el mundo actual.
                            </p>

                            <p>
                                Este curso le presenta a los estudiantes los conceptos básicos de la programación en un lenguaje de alto nivel. <span class="font-semibold">Python</span>, es un lenguaje orientado a objetos fácil de aprender y cada vez más popular, <span class="font-semibold">Python</span> se ha convertido en uno de los lenguajes de programación más populares del mundo, y usted será una de las pocas personas que quedará fuera si no agrega este conocimiento a su arsenal. Si está buscando aprender <span class="font-semibold">Python</span>, ahora es un excelente momento para hacerlo. <span class="font-semibold">Python</span> es un lenguaje de programación simple pero poderoso que puede permitirle comenzar a pensar como un programador desde el principio. Se están desarrollando más aplicaciones de las que creemos con <span class="font-semibold">Python</span> porque es fácil de aprender, leer y escribir. Ahora puede comenzar a aprender el idioma de manera rápida y efectiva con la ayuda de este curso. ¿Siempre has querido aprender uno de los lenguajes de programación más populares del mundo? Si es así, este es el curso perfecto para ti. Le enseñará cómo programar en <span class="font-semibold">Python</span> y lo ayudará a prepararse para los desafíos futuros.
                            </p>

                            <p>
                                Las Partes 2, 3 y 4 también son gratis las puedes encontrar en mi perfil de <span class="font-semibold">Udemy</span>.
                            </p>
                        </div>

                        <p class="my-8 font-semibold">
                            ¿Listo para el recorrido? Aquí hay un adelanto de lo que te espera:
                        </p>
                    </div>

                    <ul class="mb-12 space-y-2">
                        <li class="font-semibold uppercase">Temario de la parte 1:</li>

                        <li class="font-semibold">Modulo 01: <span class="font-normal">LEER, INFORMACIÓN IMPORTANTE Y LINKS DE LAS PARTES DEL CURSO.</span></li>

                        <li class="font-semibold">Módulo 02: <span class="font-normal">Primer Programa Da tus primeros pasos en Python escribiendo y ejecutando tu primer programa. ¡La emoción comienza aquí!</span></li>

                        <li class="font-semibold">Módulo 03: <span class="font-normal">Comentarios y Declaraciones Aprende a comunicarte eficazmente con Python utilizando comentarios y declaraciones.</span></li>

                        <li class="font-semibold">Módulo 04: <span class="font-normal">Variables, Constantes y Literales Domina el arte de manejar datos en Python y comprende cómo las variables y las constantes desempeñan un papel crucial en tu código.</span></li>

                        <li class="font-semibold">Módulo 05: <span class="font-normal">Tipos de Datos Explora una variedad de tipos de datos que Python ofrece y cómo utilizarlos para resolver problemas.</span></li>

                        <li class="font-semibold">Módulo 06: <span class="font-normal">Operadores Descubre cómo realizar operaciones matemáticas y lógicas con facilidad utilizando operadores en Python.</span></li>

                        <li class="font-semibold">Módulo 07: <span class="font-normal">Sentencia if Domina la toma de decisiones en tu código con la poderosa sentencia if.</span></li>

                        <li class="font-semibold">Modulo 10: <span class="font-normal">¿QUE SIGUE? LEER.</span></li>
                    </ul>

                    <div>
                        <h3 class="mb-4 text-2xl font-bold font-text">
                            ¿Para quién es este curso?
                        </h3>
                        <ul class="list-disc pl-6">
                            <li>Este Curso Está Dirigido a Todos los que Tengan Ganas de Aprender y Voluntad.</li>
                        </ul>
                    </div>

                    <div x-show="gradient" class="absolute top-0 w-full h-full bg-gradient-to-t from-white to-60%"></div>
                </div>
                <button @click="expanded = ! expanded; gradient = ! gradient"
                        class="mt-4 text-udemy hover:text-udemy-dark font-semibold hover:cursor-pointer">
                    Ver más
                </button>

            </div>
            <!-- end Descripción -->

            <div>
                <h3 class="mb-4 text-2xl font-bold font-text">
                    Contenido del curso
                </h3>

                <div class="mb-2 flex items-center justify-between">
                    <div>
                        2 secciones • 10 clases • 2 h 0 m de duración total
                    </div>
                    <button class="text-udemy hover:text-udemy-dark hover:cursor-pointer font-semibold">
                        Ampliar todas las secciones
                    </button>
                </div>

                <div class="border border-gray-300 divide-y divide-gray-300" x-data="{section: 1}">
                    <div class="py-4 px-6 flex justify-between bg-gray-50 gap-3" @click="section = 1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor"
                             class="mt-1 w-3 h-3 transition duration-500"
                             :class=" section === 1 ? 'rotate-180' : ''"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                        </svg>

                        <div class="flex justify-between">
                            <span class="text-base font-semibold">Curso de Python 3.11: Aprende Desde Cero a Pro 2023 Parte 1</span>
                            <span class="flex-none">9 clases · 2 h</span>
                        </div>
                    </div>

                    <div x-show="section === 1" class="py-5 space-y-3">
                        <div class="px-6 flex gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mt-1 w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>

                            <div class="flex-grow flex justify-between gap-12">
                                <span>01. INTRODUCCIÓN Y LINKS DE LAS PARTES 1, 2, 3 Y 4 DEL CURSO.</span>
                                <span class="flex-none text-gray-500">00:15</span>
                            </div>
                        </div>

                        <?php foreach ( $seccion1 as $clase ) : ?>
                        <div class="px-6 flex gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mt-1 w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                            </svg>


                                <div class="flex-grow flex justify-between gap-12">
                                    <span><?php echo $clase["titulo"]; ?></span>
                                    <span class="flex-none text-gray-500"><?php echo $clase["tiempo"]; ?></span>
                                </div>
                        </div>
                        <?php endforeach; ?>

                        <div class="px-6 flex gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="min-w-[16px] mt-1 w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>


                            <div class="flex-grow flex justify-between gap-12">
                                <div x-data="{masInfo: false }">
                                    <div class="flex items-center gap-2">
                                        <span>Tarea 1: Calificación de Estudiantes</span>
                                        <div class="bg-gray-50 p-2 rounded-full hover:cursor-pointer" @click="masInfo = ! masInfo">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor"
                                                 class="w-3 h-3"
                                                 :class=" masInfo === true ? 'rotate-180' : ''"
                                            >
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div x-show="masInfo">
                                        Eres un profesor y deseas crear un programa en Python para evaluar las calificaciones de los estudiantes. El programa debe solicitar al usuario que ingrese su calificación como un número decimal. Luego, debe mostrar un mensaje que refleje su rendimiento de acuerdo con ciertos criterios:
                                    </div>
                                </div>

                                <span class="flex-none text-gray-500">1 preguntas</span>
                            </div>
                        </div>

                        <div class="px-6 flex gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mt-1 w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                            </svg>

                            <div class="flex-grow flex justify-between gap-12">
                                <span>09. ¿QUE SIGUE? PARTES 1, 2, 3 Y 4 DEL CURSO.</span>
                                <span class="flex-none text-gray-500">00:08</span>
                            </div>
                        </div>
                    </div>

                    <div class="py-4 px-6 flex bg-gray-50 gap-3" @click="section = 2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor"
                             class="mt-1 w-3 h-3 transition duration-500"
                             :class=" section === 2 ? 'rotate-180' : ''"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                        </svg>

                        <div class="flex-grow flex justify-between">
                            <span class="flex-grow text-base font-semibold">Clase Extra.</span>
                            <span class="">1 clases · 1min</span>
                        </div>
                    </div>

                    <div x-show="section === 2" class="py-5 space-y-3">
                        <div class="px-6 flex gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mt-1 w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>

                            <div class="flex-grow flex justify-between gap-12">
                                <span>01 - Clase Extra.</span>
                                <span class="flex-none text-gray-500">00:17</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end Contenido -->

        <!-- Reseñas -->
        <div x-show="activeTab === 2">
            <h3 class="mb-4 text-2xl font-bold font-text">
                Comentarios de los estudiantes
            </h3>

            <div class="flex items-center gap-4">
                <div class="text-[#b4690e] text-center">
                    <p class="text-7xl font-bold">4.6</p>
                    <div class="mb-2 flex justify-center items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-[#b4690e] w-5 h-auto fill-[#b4690e]"
                             viewBox="0 0 16 16">
                            <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-[#b4690e] w-5 h-auto fill-[#b4690e]"
                             viewBox="0 0 16 16">
                            <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-[#b4690e] w-5 h-auto fill-[#b4690e]"
                             viewBox="0 0 16 16">
                            <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-[#b4690e] w-5 h-auto fill-[#b4690e]"
                             viewBox="0 0 16 16">
                            <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" class="text-[#b4690e] w-5 h-auto fill-[#b4690e]"
                             viewBox="0 0 16 16">
                            <path
                                    d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z" />
                        </svg>
                    </div>
                    <p class="text-sm font-semibold">Valoración del curso</p>
                </div>

                <div>
                    <div class="mt-2 h-2 bg-gray-300">
                        <div class="h-2 bg-gray-500 w-[56%]"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Reseñas -->

        <!-- Instructores -->
        <div x-show="activeTab === 3" >
            Instructores
        </div>
        <!-- end Instructores -->
    </div>
</div>