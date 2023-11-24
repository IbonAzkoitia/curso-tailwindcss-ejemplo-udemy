<?php
$cursos = [
    [
        "enlace" => "https://www.udemy.com/course/hacking-pentesting-ctf-practica/",
        "imagen" => "https://img-c.udemycdn.com/course/50x50/4076518_e1af.jpg",
        "titulo" => "Hacking Ético Ofensivo. 100% Practico en Red Team. +42hs",
        "valoracion" => "4,4",
        "estudiantes" => "30.379",
        "precio_original" => "84,99",
        "precio_oferta" => "9,99",
        "mas_vendido" => true,
        "horas" => "42,5",
        "actualizado" => "2/2023",
    ],
    [
        "enlace" => "https://www.udemy.com/course/hacking-pentesting-ctf-practica/",
        "imagen" => "https://img-c.udemycdn.com/course/50x50/3835738_11f3_2.jpg",
        "titulo" => "Curso Completo de Hacking Ético - Aprende Todo - 2023",
        "valoracion" => "4,1",
        "estudiantes" => "3468",
        "precio_original" => "79,99",
        "precio_oferta" => "9,99",
        "mas_vendido" => false,
        "horas" => "27,5",
        "actualizado" => "10/2023",
    ],
    [
        "enlace" => "https://www.udemy.com/course/hacking-pentesting-ctf-practica/",
        "imagen" => "https://img-c.udemycdn.com/course/50x50/3795922_29ab_6.jpg",
        "titulo" => "Hacking Ético & Penetration Testing sobre Redes Sociales",
        "valoracion" => "4,1",
        "estudiantes" => "2799",
        "precio_original" => "84,99",
        "precio_oferta" => "9,99",
        "mas_vendido" => false,
        "horas" => "23",
        "actualizado" => "2/2023",
    ],
];
?>
<div>
    <h2 class="text-2xl font-bold">
        Los estudiantes también compraron
    </h2>

    <div x-data="{cursos: false}">
        <div class="space-y-4 divide-y divide-gray-300">
            <?php foreach ( $cursos as $index => $curso ) : ?>
                <?php if ( $index === 2 ) : ?>
                <div x-show="cursos" class="space-y-4 divide-y divide-gray-300">
                <?php endif; ?>

                <a href="<?php echo $curso["enlace"]; ?>" class="block pt-4">
                    <div class="flex gap-4 text-sm">
                        <img src="<?php echo $curso["imagen"]; ?>" alt="" class="w-16 h-16">
                        <div class="w-full">
                            <div class="mb-2 flex flex-wrap items-start justify-between gap-6">
                                <div class="font-semibold max-w-[300px] text-base">
                                    <?php echo $curso["titulo"]; ?>
                                </div>
                                <div class="flex items-center gap-1 text-[#4d3107] font-semibold">
                                    <?php echo $curso["valoracion"]; ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-[#b4690e]">
                                        <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                        <path d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z" />
                                    </svg>

                                    <?php echo $curso["estudiantes"]; ?>
                                </div>
                                <div class="text-right">
                                    <div class="font-semibold"><?php echo $curso["precio_oferta"]; ?> €</div>
                                    <div class="text-gray-500 line-through"><?php echo $curso["precio_original"]; ?> €</div>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 p-2 rounded-full border border-primary hover:bg-gray-200">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex items-center gap-2">
                                <?php if ( $curso["mas_vendido"] === true ) : ?>
                                <div class="py-1 px-2 bg-accent text-[#3d3d0a] font-bold text-xs">
                                    Lo más vendido
                                </div>
                                <?php endif; ?>
                                <div class="font-semibold text-green-800">
                                    <?php echo $curso["horas"]; ?> horas en total ·
                                </div>
                                <div>
                                    Actualizado <?php echo $curso["actualizado"]; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <?php if ( $index === count($cursos) -1 ) : ?>
                </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>

        <button class="mt-4 w-full text-center text-sm hover:bg-gray-200 border border-primary py-2 font-semibold"
                @click="cursos = true"
                :class="cursos === true ? 'hidden' : '' "
        >
            Ver más
        </button>
    </div>
</div>


