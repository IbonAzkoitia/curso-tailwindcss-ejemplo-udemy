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

<div class="my-12 container" x-data="{ activeTab: 0 }">
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
        <div x-show="activeTab === 2" class="max-w-xl">
            <h3 class="mb-6 text-2xl font-bold font-text">
                Comentarios de los estudiantes
            </h3>

            <div class="flex items-center gap-4">
                <div class="pr-4 text-[#b4690e] text-center">
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

                <div class="flex-grow">
                    <div class="h-2 bg-gray-300">
                        <div class="h-2 bg-gray-500 w-[56%]"></div>
                    </div>
                    <div class="mt-5 h-2 bg-gray-300">
                        <div class="h-2 bg-gray-500 w-[24%]"></div>
                    </div>
                    <div class="mt-5 h-2 bg-gray-300">
                        <div class="h-2 bg-gray-500 w-[8%]"></div>
                    </div>
                    <div class="mt-5 h-2 bg-gray-300">
                        <div class="h-2 bg-gray-500 w-[1%]"></div>
                    </div>
                    <div class="mt-5 h-2 bg-gray-300">
                        <div class="h-2 bg-gray-500 w-[1%]"></div>
                    </div>
                </div>

                <div>
                    <div class="h-2 flex items-center gap-1">
                        <div class="flex items-center gap-1">
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
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                        </div>
                        <div>
                            <a href="#" class="text-sm text-udemy underline">56 %</a>
                        </div>
                    </div>
                    <div class="mt-5 h-2 flex items-center gap-1">
                        <div class="flex items-center gap-1">
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
                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                        </svg>
                    </div>
                        <div>
                            <a href="#" class="text-sm text-udemy underline">34 %</a>
                        </div>
                    </div>
                    <div class="mt-5 h-2 flex items-center gap-1">
                        <div class="flex items-center gap-1">
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
                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-[#b4690e] w-5 h-auto fill-[#b4690e]"
                             viewBox="0 0 16 16">
                            <path
                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                        </svg>
                    </div>
                        <div>
                            <a href="#" class="text-sm text-udemy underline">8 %</a>
                        </div>
                    </div>
                    <div class="mt-5 h-2 flex items-center gap-1">
                        <div class="flex items-center gap-1">
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
                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-[#b4690e] w-5 h-auto fill-[#b4690e]"
                             viewBox="0 0 16 16">
                            <path
                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-[#b4690e] w-5 h-auto fill-[#b4690e]"
                             viewBox="0 0 16 16">
                            <path
                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                        </svg>
                    </div>
                        <div>
                            <a href="#" class="text-sm text-udemy underline">1 %</a>
                        </div>
                    </div>
                    <div class="mt-5 h-2 flex items-center gap-1">
                        <div class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-[#b4690e] w-5 h-auto fill-[#b4690e]"
                             viewBox="0 0 16 16">
                            <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-[#b4690e] w-5 h-auto fill-[#b4690e]"
                             viewBox="0 0 16 16">
                            <path
                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-[#b4690e] w-5 h-auto fill-[#b4690e]"
                             viewBox="0 0 16 16">
                            <path
                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-[#b4690e] w-5 h-auto fill-[#b4690e]"
                             viewBox="0 0 16 16">
                            <path
                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-[#b4690e] w-5 h-auto fill-[#b4690e]"
                             viewBox="0 0 16 16">
                            <path
                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                        </svg>
                    </div>
                        <div>
                            <a href="#" class="text-sm text-udemy underline">1 %</a>
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="mt-12 mb-6 text-2xl font-bold font-text">
                Reseñas
            </h3>

            <div class="mb-6 flex items-end gap-3 w-full">
                <div class="flex-grow border border-primary flex justify-between">
                    <input type="text" placeholder="Buscar reseñas" class="p-3 placeholder:text-gray-500">
                    <div class="bg-primary hover:bg-primary-light hover:cursor-pointer p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </div>
                </div>

                <div class="flex flex-col">
                    <label for="reviews" class="mb-2 font-semibold text-sm">Filtrar valoraciones</label>
                    <select name="reviews" id="reviews" class="p-3 py-[0.850rem] border border-primary hover:bg-gray-200 hover:cursor-pointer">
                        <option value="">Todas las valoraciones</option>
                        <option value="5">Cinco estrellas</option>
                        <option value="4">Cuatro estrellas</option>
                        <option value="3">Tres estrellas</option>
                        <option value="2">Dos estrellas</option>
                        <option value="1">Una estrella</option>
                    </select>
                </div>
            </div>

            <div class="flex items-start gap-6">
                <div>
                    <div class="inline-flex items-center justify-center w-12 h-12 bg-primary text-white rounded-full text-lg font-medium">
                        VL
                    </div>
                </div>
                <div class="">
                    <div>
                        <div class="mb-1 font-semibold">
                            Victor Manuel L.
                        </div>

                        <div class="mb-2 flex items-center gap-2">
                            <div class="flex justify-center items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-[#b4690e] w-4 h-auto fill-[#b4690e]"
                                     viewBox="0 0 16 16">
                                    <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-[#b4690e] w-4 h-auto fill-[#b4690e]"
                                     viewBox="0 0 16 16">
                                    <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-[#b4690e] w-4 h-auto fill-[#b4690e]"
                                     viewBox="0 0 16 16">
                                    <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-[#b4690e] w-4 h-auto fill-[#b4690e]"
                                     viewBox="0 0 16 16">
                                    <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" class="text-[#b4690e] w-4 h-auto fill-[#b4690e]"
                                     viewBox="0 0 16 16">
                                    <path
                                            d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z" />
                                </svg>
                            </div>
                            <div class="text-gray-600 text-sm">
                                hace una semana
                            </div>
                        </div>

                        <div x-data="{ expanded: false, gradient: true }">
                            <div x-show="expanded" x-collapse.min.40px class="relative space-y-2">
                                <p class="text-sm">
                                    Ha estado muy bien como introducción al lenguaje Python. A ver qué deparan los siguientes cursos.
                                </p>

                                <p class="text-xs">
                                    ¿Te ha resultado útil esta reseña?
                                </p>

                                <div class="flex items-center gap-2">
                                    <button class="border border-primary rounded-full hover:bg-gray-200 p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                                        </svg>

                                    </button>
                                    <button class="border border-primary rounded-full hover:bg-gray-200 p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 15h2.25m8.024-9.75c.011.05.028.1.052.148.591 1.2.924 2.55.924 3.977a8.96 8.96 0 01-.999 4.125m.023-8.25c-.076-.365.183-.75.575-.75h.908c.889 0 1.713.518 1.972 1.368.339 1.11.521 2.287.521 3.507 0 1.553-.295 3.036-.831 4.398C20.613 14.547 19.833 15 19 15h-1.053c-.472 0-.745-.556-.5-.96a8.95 8.95 0 00.303-.54m.023-8.25H16.48a4.5 4.5 0 01-1.423-.23l-3.114-1.04a4.5 4.5 0 00-1.423-.23H6.504c-.618 0-1.217.247-1.605.729A11.95 11.95 0 002.25 12c0 .434.023.863.068 1.285C2.427 14.306 3.346 15 4.372 15h3.126c.618 0 .991.724.725 1.282A7.471 7.471 0 007.5 19.5a2.25 2.25 0 002.25 2.25.75.75 0 00.75-.75v-.633c0-.573.11-1.14.322-1.672.304-.76.93-1.33 1.653-1.715a9.04 9.04 0 002.86-2.4c.498-.634 1.226-1.08 2.032-1.08h.384" />
                                        </svg>

                                    </button>
                                    <button class="underline text-sm">
                                        Denunciar
                                    </button>
                                </div>

                                <div x-show="gradient" class="absolute top-0 w-full h-full bg-gradient-to-t from-white to-60%"></div>
                            </div>

                            <button @click="expanded = ! expanded; gradient = ! gradient"
                                    class="mt-4 text-udemy hover:text-udemy-dark font-semibold hover:cursor-pointer text-sm flex items-center gap-2"
                                    :class="expanded === true ? 'hidden' : ''"
                            >
                                Ver más
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor"
                                     class="w-3 h-3"
                                     :class="expanded === true ? 'rotate-180' : ''"
                                >
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                </svg>

                            </button>
                        </div>

                    </div>

                    <div class="border-l-4 border-gray-300 mt-6 pl-4">
                        <div class="mb-4 flex gap-3 items-center">
                            <img class="rounded-full border border-gray-200 w-12 h-auto" src="https://img-c.udemycdn.com/user/50x50/29704198_3497_4.jpg" alt="">
                            <div>
                                <p class="font-semibold">
                                    Marco Mendoza +100.000 Estudiantes
                                </p>
                                <p class="text-sm text-gray-600">
                                    Respuesta del instructor • hace una semana
                                </p>
                            </div>
                        </div>

                        <div x-data="{ expanded: false, gradient: true }">
                            <div x-show="expanded" x-collapse.min.20px class="relative">
                                <div class="text-sm">
                                    Hola Víctor, gracias por la reseña.
                                </div>

                                <div x-show="gradient" class="absolute top-0 w-full h-full bg-gradient-to-t from-white to-60%"></div>
                            </div>

                            <button @click="expanded = ! expanded; gradient = ! gradient"
                                    class="mt-4 text-udemy hover:text-udemy-dark font-semibold hover:cursor-pointer text-sm flex items-center gap-2"
                                    :class="expanded === true ? 'hidden' : ''"
                            >
                                Ver más
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor"
                                     class="w-3 h-3"
                                     :class=" expanded === true ? 'rotate-180' : ''"
                                >
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Reseñas -->

        <!-- Instructores -->
        <div x-show="activeTab === 3" class="max-w-xl">
            <h3 class="mb-4 text-2xl font-bold font-text">
                Instructor
            </h3>

            <a href="#" class="text-xl text-udemy underline hover:text-udemy-dark font-semibold">
                Marco Mendoza +100.000 Estudiantes
            </a>
            <p class="text-gray-500">
                Ingeniero en Sistemas, Téc en Informatica y Autodidacta
            </p>

            <div class="mt-2 mb-4 flex items-center gap-4">
                <img src="https://img-c.udemycdn.com/user/200_H/29704198_3497_4.jpg" alt=""
                     class="w-28 h-auto rounded-full border border-gray-300"
                >

                <div class="text-sm space-y-2">
                    <div class="flex items-center gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                        </svg>
                        <p>
                            Calificación del instructor: 4,6
                        </p>
                    </div>
                    <div class="flex items-center gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                            <path fill-rule="evenodd" d="M5.166 2.621v.858c-1.035.148-2.059.33-3.071.543a.75.75 0 00-.584.859 6.753 6.753 0 006.138 5.6 6.73 6.73 0 002.743 1.346A6.707 6.707 0 019.279 15H8.54c-1.036 0-1.875.84-1.875 1.875V19.5h-.75a2.25 2.25 0 00-2.25 2.25c0 .414.336.75.75.75h15a.75.75 0 00.75-.75 2.25 2.25 0 00-2.25-2.25h-.75v-2.625c0-1.036-.84-1.875-1.875-1.875h-.739a6.706 6.706 0 01-1.112-3.173 6.73 6.73 0 002.743-1.347 6.753 6.753 0 006.139-5.6.75.75 0 00-.585-.858 47.077 47.077 0 00-3.07-.543V2.62a.75.75 0 00-.658-.744 49.22 49.22 0 00-6.093-.377c-2.063 0-4.096.128-6.093.377a.75.75 0 00-.657.744zm0 2.629c0 1.196.312 2.32.857 3.294A5.266 5.266 0 013.16 5.337a45.6 45.6 0 012.006-.343v.256zm13.5 0v-.256c.674.1 1.343.214 2.006.343a5.265 5.265 0 01-2.863 3.207 6.72 6.72 0 00.857-3.294z" clip-rule="evenodd" />
                        </svg>

                        <p>
                            6.303 reseñas
                        </p>
                    </div>
                    <div class="flex items-center gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                            <path d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z" />
                        </svg>

                        <p>
                            101.572 estudiantes
                        </p>
                    </div>
                    <div class="flex items-center gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                            <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm14.024-.983a1.125 1.125 0 010 1.966l-5.603 3.113A1.125 1.125 0 019 15.113V8.887c0-.857.921-1.4 1.671-.983l5.603 3.113z" clip-rule="evenodd" />
                        </svg>

                        <p>
                            12 cursos
                        </p>
                    </div>
                </div>
            </div>

            <div x-data="{ expanded: false, gradient: true }">
                <div x-show="expanded" x-collapse.min.150px class="relative space-y-4 text-sm text-gray-600">
                    <p>
                        Saludos, mi nombre es <strong>Marco Mendoza</strong>, soy ingeniero en sistemas, técnico en informática y autodidacta, a lo largo de mi vida he tenido la oportunidad de trabajar en diferentes campos como la administración de sistemas, diseño y programación web, desarrollo de aplicaciones móviles y también como maestro. hoy en día con el conocimiento que gané por mis años de trabajo, más muchas horas de estudio autodidacta, he llegado a desempeñarme en el área de seguridad informática realizando auditorías de seguridad en diferentes empresas e instituciones de gobierno.
                    </p>

                    <p>
                        También soy el creador de una pequeña comunidad en <strong>YouTube</strong> llamada <strong>Hacking y Más</strong> donde imparto algunos cursos de seguridad y hacking ético.
                    </p>

                    <div x-show="gradient" class="absolute top-0 w-full h-full bg-gradient-to-t from-white to-60%"></div>
                </div>

                <button @click="expanded = ! expanded; gradient = ! gradient"
                        class="mt-4 text-udemy hover:text-udemy-dark font-semibold hover:cursor-pointer text-sm flex items-center gap-2"
                >
                    Ver más
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor"
                         class="w-3 h-3"
                         :class="expanded === true ? 'rotate-180' : ''"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>

                </button>
            </div>
        </div>
        <!-- end Instructores -->
    </div>
</div>