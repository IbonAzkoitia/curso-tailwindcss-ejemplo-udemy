<?php
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

<div class="mt-8">
    <h3 class="mb-4 text-2xl font-bold font-text">
        Contenido del curso
    </h3>

    <div class="mb-2 flex items-center justify-between text-sm">
        <div>
            11 secciones • 50 clases • 14 h 39 m de duración total
        </div>
        <button class="text-udemy hover:text-udemy-dark hover:cursor-pointer font-semibold">
            Ampliar todas las secciones
        </button>
    </div>

    <div x-data="{section: 1, sections: false}">
        <div class="border border-gray-300 divide-y divide-gray-300">

            <div class="py-4 px-6 flex justify-between bg-gray-50 gap-3" @click="section = 1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor"
                     class="mt-1 w-3 h-3 transition duration-500"
                     :class=" section === 1 ? '' : 'rotate-180'"
                >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                </svg>

                <div class="flex-grow flex justify-between">
                    <span class=" text-base font-semibold">01- Introducción</span>
                    <span class="flex-none">2 clases · 9 min</span>
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
                     :class=" section === 2 ? '' : 'rotate-180'"
                >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                </svg>

                <div class="flex-grow flex justify-between">
                    <span class="flex-grow text-base font-semibold">02- Instalación del Entorno.</span>
                    <span class="">4 clases · 57 min</span>
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

            <div class="py-4 px-6 flex bg-gray-50 gap-3" @click="section = 3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor"
                     class="mt-1 w-3 h-3 transition duration-500"
                     :class=" section === 3 ? '' : 'rotate-180'"
                >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                </svg>

                <div class="flex-grow flex justify-between">
                    <span class="flex-grow text-base font-semibold">03- Laboratorio Práctico 1.</span>
                    <span class="">8 clases · 2 h 53 min</span>
                </div>
            </div>
            <div x-show="section === 3" class="py-5 space-y-3">
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

            <div x-show="sections">
                <div class="py-4 px-6 flex bg-gray-50 gap-3" @click="section = 4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor"
                         class="mt-1 w-3 h-3 transition duration-500"
                         :class=" section === 4 ? '' : 'rotate-180'"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                    </svg>

                    <div class="flex-grow flex justify-between">
                        <span class="flex-grow text-base font-semibold">04- Laboratorio Práctico 2.</span>
                        <span class="">20 clases · 6 h 53 min</span>
                    </div>
                </div>
                <div x-show="section === 4" class="py-5 space-y-3">
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

        <button class="mt-4 w-full text-center text-sm hover:bg-gray-200 border border-primary py-2 font-semibold"
                @click="sections = true"
                :class=" sections === true ? 'hidden' : '' "
        >
            1 secciones más
        </button>
    </div>

</div>