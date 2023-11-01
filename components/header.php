<header class="py-3 px-6 flex items-center flex-wrap gap-6 text-sm">
    <img src="/assets/images/logo-udemy.svg" alt="Logo de Udemy" class="h-8">

    <div x-data="{
            menuCategorias: false,
            menuCategoriasDesarrollo: false,
            menuCategoriasNegocios: false,
            menuCategoriasFinanzas: false,
            menuCategoriasDesarrolloDesarrolloWeb: false,
            menuCategoriasDesarrolloCiencias: false
        }">
        <div class="hover:text-udemy hover:cursor-pointer" @click="menuCategorias = ! menuCategorias">Categorias</div>


        <div x-show="menuCategorias" class="absolute mt-8 grid grid-cols-3 min-h-[300px]">
            <div x-show="menuCategorias" class="w-[240px] border border-gray-300">
                <ul>
                    <li @click="menuCategoriasDesarrollo = ! menuCategoriasDesarrollo" @click.away="menuCategoriasDesarrollo = false"
                        class="p-4 flex items-center justify-between hover:cursor-pointer hover:text-udemy"
                    >
                        Desarrollo
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-3 h-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </li>
                    <li @click="menuCategoriasNegocios = ! menuCategoriasNegocios" @click.away="menuCategoriasNegocios = false"
                        class="px-4 py-1 flex items-center justify-between hover:cursor-pointer hover:text-udemy"
                    >
                        Negocios
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-3 h-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </li>
                    <li @click="menuCategoriasFinanzas = ! menuCategoriasFinanzas" @click.away="menuCategoriasFinanzas = false"
                        class="p-4 flex items-center justify-between hover:cursor-pointer hover:text-udemy"
                    >
                        Finanzas y Contabilidad
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-3 h-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </li>

                    <li class="px-4 py-1 flex items-center justify-between hover:cursor-pointer hover:text-udemy">
                        Informática y software
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-3 h-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </li>

                    <li class="p-4 flex items-center justify-between hover:cursor-pointer hover:text-udemy">
                        Productividad en la oficina
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-3 h-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </li>

                    <li class="px-4 py-1 flex items-center justify-between hover:cursor-pointer hover:text-udemy">
                        Desarrollo personal
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-3 h-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </li>

                    <li class="p-4 flex items-center justify-between hover:cursor-pointer hover:text-udemy">
                        Diseño
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-3 h-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </li>

                    <li class="px-4 py-1 flex items-center justify-between hover:cursor-pointer hover:text-udemy">
                        Marketing
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-3 h-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </li>

                    <li class="p-4 flex items-center justify-between hover:cursor-pointer hover:text-udemy">
                        Estilo de vida
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-3 h-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </li>

                    <li class="px-4 py-1 flex items-center justify-between hover:cursor-pointer hover:text-udemy">
                        Fotografía y vídeo
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-3 h-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </li>

                    <li class="p-4 flex items-center justify-between hover:cursor-pointer hover:text-udemy">
                        Salud y Fitness
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-3 h-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </li>

                    <li class="px-4 py-1 flex items-center justify-between hover:cursor-pointer hover:text-udemy">
                        Música
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-3 h-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </li>

                    <li class="p-4 flex items-center justify-between hover:cursor-pointer hover:text-udemy">
                        Enseñazas y disciplinas académicas
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-3 h-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </li>
                </ul>
            </div>

            <div x-show="menuCategoriasDesarrollo" class="border border-l-0 border-gray-300">
                <ul>
                    <li @mouseover="menuCategoriasDesarrolloDesarrolloWeb = true"
                        @mouseout="menuCategoriasDesarrolloDesarrolloWeb = false"
                        class="p-4 hover:cursor-pointer hover:text-udemy"
                    >Desarrollo web</li>
                    <li @mouseover="menuCategoriasDesarrolloCiencias = true"
                        @mouseout="menuCategoriasDesarrolloCiencias = false"
                        class="px-4 py-1 hover:cursor-pointer hover:text-udemy"
                    >Ciencias de la información</li>
                    <li class="p-4 hover:cursor-pointer hover:text-udemy">Desarrollo móvil</li>
                </ul>
            </div>

            <div x-show="menuCategoriasNegocios" class="border border-l-0 border-gray-300">
                <ul>
                    <li class="p-4 hover:cursor-pointer hover:text-udemy">Comunicación</li>
                    <li class="px-4 py-1 hover:cursor-pointer hover:text-udemy">Emprendimiento</li>
                    <li class="p-4 hover:cursor-pointer hover:text-udemy">Gestión Empresarial</li>
                </ul>
            </div>

            <div x-show="menuCategoriasFinanzas" class="p-4">
                <ul class="space-y-4">
                    <li>Contabilidad</li>
                    <li>Cumplimiento</li>
                    <li>Criptomonedas</li>
                </ul>
            </div>

            <div x-show="menuCategoriasDesarrolloDesarrolloWeb" class="p-4 border border-l-0 border-gray-300">
                <ul class="space-y-4">
                    <li class="font-medium">Temas populares</li>
                    <li>JavaScript</li>
                    <li>React JS</li>
                    <li>Angular</li>
                </ul>
            </div>

            <div x-show="menuCategoriasDesarrolloCiencias" class="p-4 border border-l-0 border-gray-300">
                <ul class="space-y-4">
                    <li class="font-medium">Temas populares</li>
                    <li>Python</li>
                    <li>Aprendizaje automático</li>
                    <li>Aprendizaje profundo</li>
                </ul>
            </div>
        </div>

    </div>

    <div class="grow p-3 flex items-center gap-4 border border-primary rounded-full bg-gray-50 text-gray-500">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
        </svg>

        <div>
            Buscar cualquier cosa
        </div>
    </div>

    <div x-data="{ menuUdemyBusiness: false }" class="relative" @click.away="menuUdemyBusiness = false">
        <div @mouseover="menuUdemyBusiness = true" @click="menuUdemyBusiness = ! menuUdemyBusiness" class="hover:text-udemy hover:cursor-pointer">Udemy Business</div>

        <div x-show="menuUdemyBusiness" class="absolute mt-8 right-0 w-[300px] border border-gray-300 p-4 text-center">
            <div class="text-xl font-semibold">Dale a tu equipo acceso a más de 24.000 de los mejores cursos de Udemy en cualquier momento y lugar.</div>

            <a href="#" class="block mt-4 p-4 bg-primary hover:bg-primary-light text-white text-lg">Prueba Udemy Business</a>
        </div>
    </div>

    <div>
        <a href="#" class="hover:text-udemy">Instructor</a>
    </div>

    <div x-data="{ menuMiAprendizaje: false }" class="relative" @click.away="menuMiAprendizaje = false">
        <div @mouseover="menuMiAprendizaje = true" @click="menuMiAprendizaje = ! menuMiAprendizaje" class="hover:text-udemy hover:cursor-pointer">
            Mi aprendizaje
        </div>

        <div x-show="menuMiAprendizaje" class="absolute mt-8 right-0 w-[300px] border border-gray-300 divide-y divide-gray-300">

            <div>
                <a href="#" class="flex gap-3 p-4">
                    <img src="/assets/images/header/aprendizaje/curso1.jpg" alt="" class="h-16 w-16 object-cover">
                    <div>
                        <p class="font-semibold leading-tight">
                            Basics of Fibonacci: Price Action Trading Tool
                        </p>

                        <div class="mt-2 h-2 bg-gray-300">
                            <div class="h-2 bg-udemy w-[10%]"></div>
                        </div>
                    </div>
                </a>
            </div>

            <div>
                <a href="#" class="flex gap-3 p-4">
                    <img src="/assets/images/header/aprendizaje/curso2.jpg" alt="" class="h-16 w-16 object-cover">
                    <div>
                        <p class="font-semibold leading-tight">
                            Day Trading & Swing Trading: Technical Analysis Basics 2023
                        </p>

                        <div class="mt-2 h-2 bg-gray-300">
                            <div class="h-2 bg-udemy"></div>
                        </div>
                    </div>
                </a>
            </div>

            <div>
                <a href="#" class="flex gap-3 p-4">
                    <img src="/assets/images/header/aprendizaje/curso3.jpg" alt="" class="h-16 w-16 object-cover">
                    <div>
                        <p class="font-semibold leading-tight">
                            The Essential Guide to Airtable
                        </p>

                        <div class="mt-2 h-2 bg-gray-300">
                            <div class="h-2 bg-udemy w-[5%]"></div>
                        </div>
                    </div>
                </a>
            </div>

            <div>
                <a href="#" class="flex gap-3 p-4">
                    <img src="/assets/images/header/aprendizaje/curso4.jpg" alt="" class="h-16 w-16 object-cover">
                    <div>
                        <p class="font-semibold leading-tight">
                            The Complete Ruby on Rails Developer Course
                        </p>

                        <div class="mt-2 h-2 bg-gray-300">
                            <div class="h-2 bg-udemy w-1/4"></div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="p-4 text-center">
                <a href="#" class="block p-4 bg-primary hover:bg-primary-light text-white text-lg">
                    Ir a Mi Aprendizaje
                </a>
            </div>
        </div>
    </div>

    <div x-data="{ menuWishlist: false }" class="relative" @click.away="menuWishlist = false">
        <svg @mouseover="menuWishlist = true" @click="menuWishlist = ! menuWishlist"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 hover:text-udemy hover:cursor-pointer">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
        </svg>

        <div x-show="menuWishlist" class="absolute mt-8 right-0 w-[300px] border border-gray-300 divide-y divide-gray-300">

            <div>
                <a href="#" class="flex gap-3 p-4 pb-2">
                    <img src="/assets/images/header/deseo/deseo1.jpg" alt="" class="h-16 w-16 object-cover">
                    <div>
                        <p class="font-semibold leading-tight line-clamp-2">
                            CRM + Embudos de venta + Estrategia y Métodos + B2B SaaS
                        </p>
                        <p class="my-1 text-xs text-gray-500">Bernardo Mohnblatt</p>
                        <div>
                            <span class="font-semibold mr-2">11,99 €</span>
                            <span class="text-gray-500 line-through">29,99 €</span>
                        </div>
                    </div>
                </a>

                <div class="p-4 pt-0 text-center">
                    <a href="#" class="block p-2 border border-primary font-semibold hover:bg-gray-100">
                        Añadir a la cesta
                    </a>
                </div>
            </div>

            <div>
                <a href="#" class="flex gap-3 p-4 pb-2">
                    <img src="/assets/images/header/deseo/deseo2.jpg" alt="" class="h-16 w-16 object-cover">
                    <div>
                        <p class="font-semibold leading-tight line-clamp-2">
                            Programa de Lanzamiento de tu Startup
                        </p>
                        <p class="my-1 text-xs text-gray-500">
                            Nestor Guerra, Guillermo Guerra
                        </p>
                        <span class="font-semibold">219,99 €</span>
                    </div>
                </a>

                <div class="p-4 pt-0 text-center">
                    <a href="#" class="block p-2 border border-primary font-semibold hover:bg-gray-100">
                        Añadir a la cesta
                    </a>
                </div>
            </div>

            <div class="p-4 text-center">
                <a href="#" class="block p-4 bg-primary hover:bg-primary-light text-white text-base">
                    Ir a la lista de deseos
                </a>
            </div>
        </div>
    </div>

    <div x-data="{ menuCart: false }" class="relative" @click.away="menuCart = false">
        <div class="relative">
            <svg @mouseover="menuCart = true" @click="menuCart = ! menuCart"
                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                 class="w-6 h-6 hover:text-udemy hover:cursor-pointer"
            >
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
            </svg>

            <div class="absolute inline-flex items-center justify-center w-6 h-6 bg-udemy-light text-white rounded-full text-xs font-medium -right-3 -top-3">
                2
            </div>
        </div>

        <div x-show="menuCart" class="absolute mt-8 right-0 w-[300px] border border-gray-300 divide-y divide-gray-300">

            <div>
                <a href="#" class="flex gap-3 p-4 pb-2">
                    <img src="/assets/images/header/carrito/carrito1.jpg" alt="" class="h-16 w-16 object-cover">
                    <div>
                        <p class="font-semibold leading-tight line-clamp-2">
                            React - The Complete Guide 2023 (incl. React Router & Redux)
                        </p>
                        <p class="my-1 text-xs text-gray-500 line-clamp-1">
                            Academind by Maximilian Schwarzmüller, Maximilian Schwarzmüller
                        </p>
                        <div>
                            <span class="font-semibold mr-2">11,99 €</span>
                            <span class="text-gray-500 line-through">84,99 €</span>
                        </div>
                    </div>
                </a>
            </div>

            <div>
                <a href="#" class="flex gap-3 p-4 pb-2">
                    <img src="/assets/images/header/carrito/carrito2.jpg" alt="" class="h-16 w-16 object-cover">
                    <div>
                        <p class="font-semibold leading-tight line-clamp-2">
                            Lean Manufacturing 14 Principios básicos
                        </p>
                        <p class="my-1 text-xs text-gray-500">
                            Ángel Vicente Rodríguez Núñez
                        </p>
                        <div>
                            <span class="font-semibold mr-2">11,99 €</span>
                            <span class="text-gray-500 line-through">79,99 €</span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="p-4 ">
                <span class="font-semibold text-lg">Total: 23,98 €</span>
                <span class="text-base text-gray-500 line-through">164,98 €</span>
                <a href="#" class="block mt-2 p-4 bg-primary hover:bg-primary-light text-white text-base text-center">
                    Ir a la cesta
                </a>
            </div>
        </div>
    </div>

    <div x-data="{ menuNotificaciones: false }" class="relative" @click.away="menuNotificaciones = false">
        <svg @mouseover="menuNotificaciones = true" @click="menuNotificaciones = ! menuNotificaciones"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 hover:text-udemy hover:cursor-pointer">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
        </svg>

        <div
                x-show="menuNotificaciones"
                x-data="{ menuNotificacionesTabs: 1 }"
                class="absolute mt-8 right-0 w-[360px] border border-gray-300"
        >
            <div class="p-4 flex justify-between items-center">
                <div class="text-lg font-semibold">Notificaciones</div>
                <div class="text-udemy hover:text-udemy-dark font-semibold hover:cursor-pointer">Configuración</div>
            </div>

            <div class="grid grid-cols-2 text-center">
                <div class="p-2 font-medium hover:cursor-pointer"
                    @click="menuNotificacionesTabs = 1"
                     :class=" menuNotificacionesTabs === 1 ? 'border-b-2 border-primary' : 'text-gray-600 hover:text-primary border-b border-gray-300'"
                >
                    Instructor
                </div>

                <div class="p-2 font-medium hover:cursor-pointer"
                     @click="menuNotificacionesTabs = 2"
                     :class=" menuNotificacionesTabs === 2 ? 'border-b-2 border-primary' : 'text-gray-600 hover:text-primary border-b border-gray-300'"
                >
                    Estudiantes
                </div>
            </div>

            <div x-show="menuNotificacionesTabs === 1" class="divide-y divide-gray-300">
                <div>
                    <a href="#" class="flex gap-3 p-4">
                        <img src="/assets/images/header/notificaciones/logo-notificacion.jpg" alt=""
                             class="h-16 w-16 border border-gray-300 rounded-full"
                        >
                        <div>
                            <p class="font-semibold leading-tight line-clamp-2">
                                Ya se han eliminado las clases que solicitaste que se eliminaran.
                            </p>
                            <p class="my-1 text-gray-500">
                                Hace 1 día
                            </p>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#" class="flex gap-3 p-4">
                        <img src="/assets/images/header/notificaciones/logo-notificacion.jpg" alt=""
                             class="h-16 w-16 border border-gray-300 rounded-full"
                        >
                        <div>
                            <p class="font-semibold leading-tight line-clamp-2">
                                Se han creado subtítulos automáticos para tu curso, Instala WordPress en tu ordenador con Local
                            </p>
                            <p class="my-1 text-gray-500">
                                Hace 6 días
                            </p>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#" class="flex gap-3 p-4">
                        <img src="/assets/images/header/notificaciones/logo-notificacion.jpg" alt=""
                             class="h-16 w-16 border border-gray-300 rounded-full"
                        >
                        <div>
                            <p class="font-semibold leading-tight line-clamp-2">
                                Se han creado subtítulos automáticos para tu curso, Aprende las bases de AlpineJS con ejemplos
                            </p>
                            <p class="my-1 text-gray-500">
                                Hace 9 días
                            </p>
                        </div>
                    </a>
                </div>

                <div class="flex items-center justify-between p-4">
                    <div class="text-udemy font-semibold opacity-50 text-base text-center hover:cursor-not-allowed">
                        Marcar todo como leído
                    </div>

                    <a href="#" class="py-3 px-6 border border-primary text-base font-semibold hover:bg-gray-200">
                        Ver todo
                    </a>
                </div>
            </div>

            <div x-show="menuNotificacionesTabs === 2" class="p-4 text-base text-center text-gray-500">
                Sin notificaciones.
            </div>
        </div>
    </div>

    <div x-data="{ menuUsuario: false }" class="relative" @click.away="menuUsuario = false">
        <img @mouseover="menuUsuario = true" @click="menuUsuario = ! menuUsuario"
            src="/assets/images/ibon-azkoitia.jpg" alt="Usuario" class="h-8 rounded-full border border-gray-300"
        >

        <div x-show="menuUsuario" class="absolute mt-8 right-0 w-[260px] border border-gray-300 divide-y divide-gray-300">

            <div class="p-4 flex items-center gap-2">
                <img src="/assets/images/ibon-azkoitia.jpg" alt="Usuario" class="h-16 rounded-full border border-gray-300">

                <div>
                    <div class="text-base font-semibold">Ibon Azkoitia</div>
                    <div class="text-xs text-gray-500">email@email.com</div>
                </div>
            </div>

            <div class="py-2">
                <a href="#" class="block py-2 px-4 hover:text-udemy">
                    Mi aprendizaje
                </a>

                <a href="#" class="py-2 px-4 hover:text-udemy flex items-center justify-between">
                    <div>Mi cesta</div>
                    <div class="inline-flex items-center justify-center w-6 h-6 bg-udemy-light text-white rounded-full text-xs font-medium">
                        2
                    </div>
                </a>
                <a href="#" class="block py-2 px-4 hover:text-udemy">
                    Lista de deseos
                </a>
                <a href="#" class="block py-2 px-4 hover:text-udemy">
                    Panel del instructor
                </a>
            </div>

            <div class="py-2">
                <a href="#" class="block py-2 px-4 hover:text-udemy">
                    Notificaciones
                </a>

                <a href="#" class="block py-2 px-4 hover:text-udemy">
                    Mensajes
                </a>
            </div>

            <div class="py-2">
                <a href="#" class="block py-2 px-4 hover:text-udemy">
                    Configuración de cuenta
                </a>

                <a href="#" class="block py-2 px-4 hover:text-udemy">
                    Métodos de pago
                </a>

                <a href="#" class="block py-2 px-4 hover:text-udemy">
                    Suscripciones
                </a>

                <a href="#" class="block py-2 px-4 hover:text-udemy">
                    Créditos de Udemy
                </a>

                <a href="#" class="block py-2 px-4 hover:text-udemy">
                    Historial de compras
                </a>

            </div>

            <a href="#" class="p-4 flex items-center justify-between group">
                <div class="group-hover:text-udemy">Idioma</div>
                <div class="flex items-center gap-1">
                    Español
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                    </svg>

                </div>
            </a>

            <div class="py-2">
                <a href="#" class="block py-2 px-4 hover:text-udemy">
                    Perfil público
                </a>
                <a href="#" class="block py-2 px-4 hover:text-udemy">
                    Editar perfil
                </a>
            </div>

            <div class="py-2">
                <a href="#" class="block py-2 px-4 hover:text-udemy">
                    Ayuda
                </a>
                <a href="#" class="block py-2 px-4 hover:text-udemy">
                    Cerrar sesión
                </a>
            </div>

            <a href="#" class="p-4 flex justify-between group">
                <div>
                    <div class="text-lg font-semibold group-hover:text-udemy">Udemy Business</div>
                    <div class="text-gray-500">Lleva el aprendizaje a tu empresa</div>
                </div>

                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                    </svg>
                </div>
            </a>
        </div>
    </div>
</header>