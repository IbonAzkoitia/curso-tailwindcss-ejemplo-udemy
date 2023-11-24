<?php
$aprenderas = [
    "Aprenderán Cómo Evaluar Vulnerabilidades en Android.",
    "Podrán Ejecutar Ataques Avanzados Con Metasploit y Mas Herramientas.",
    "Serán Completamente Competentes en el Area de Pentesting De Dispositivos Móviles.",
    "Serán Capaces de Extraer Fotos, Videos, Bases de Datos, Audios y Muchos Mas Archivos.",
    "Podrán Prevenir Ataques Avanzados a Android.",
    "Serán Capaces de Hackear las Versiones de Android, 10, 11, 12 y 13.",
    "Ejecutarán Geolocalización Por GPS.",
    "Podrán Extraer Notificaciones de Aplicaciones ya Instaladas.",
    "Serán Capaces de Extraer Contactos y Registros de Llamadas.",
    "Tendrán la Perspectiva de Un Ataque Real Para su Prevención.",
    "Podrán Ejecutar Herramientas Avanzadas Para Pentesting.",
    "Serán Capaces de Configurar un Entorno Seguro de Trabajo.",
    "Tendrán Acceso a Todo Tipo de Información de Forma remota y Local.",
    "Serán Capaces de Ejecutar Ataques Locales Y Mundiales Para Su Evaluación.",
    "Podrán Mitigar Ataques.",
    "Tendrán la Capacidad de Identificar Amenazas Potenciales.",
    "Serán Capaces de Proveer Seguridad a Empresas.",
    "Y Mucho Más."
]
?>

<div class="border border-gray-300 p-6">
    <h2 class="mb-4 text-2xl font-bold">
        Lo que aprenderás
    </h2>

    <div x-data="{ expanded: false, gradient: true }">
        <div class="relative text-sm" x-show="expanded" x-collapse.min.150px >
            <div class="grid grid-cols-2 gap-4">
                <?php foreach ( $aprenderas as $elemento ) : ?>
                    <div class="flex gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="flex-none w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        <span><?php echo $elemento; ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
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