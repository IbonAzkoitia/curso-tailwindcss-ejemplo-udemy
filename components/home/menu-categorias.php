<div
    x-data="{
        menuCategoriasDesarrollo: false,
        menuCategoriasNegocios: false,
        menuCategoriasFinanzas: false
    }"
>
    <div class="flex items-center justify-center gap-8 border-t border-gray-300 shadow-lg text-sm">
        <div class="py-4 relative hover:text-udemy hover:cursor-pointer"
             @click="menuCategoriasDesarrollo = ! menuCategoriasDesarrollo"
             @click.away="menuCategoriasDesarrollo = false"
             :class=" menuCategoriasDesarrollo === true ? 'menu-category-active' : ''"
        >
            Desarrollo
        </div>

        <div class="py-4 relative hover:text-udemy hover:cursor-pointer"
             @click="menuCategoriasNegocios = ! menuCategoriasNegocios"
             @click.away="menuCategoriasNegocios = false"
             :class=" menuCategoriasNegocios === true ? 'menu-category-active' : ''"
        >
            Negocios
        </div>

        <div class="py-4 relative hover:text-udemy hover:cursor-pointer"
             @click="menuCategoriasFinanzas = ! menuCategoriasFinanzas"
             @click.away="menuCategoriasFinanzas = false"
             :class=" menuCategoriasFinanzas === true ? 'menu-category-active' : ''"
        >
            Finanzas y contabilidad
        </div>
    </div>

    <div x-show="menuCategoriasDesarrollo" class="p-3 flex items-center justify-center gap-8 bg-primary text-white text-sm">
        <div class="hover:text-[#a1a5d2] hover:cursor-pointer">
            Desarrollo web
        </div>
        <div class="hover:text-[#a1a5d2] hover:cursor-pointer">
            Desarrollo móvil
        </div>
        <div class="hover:text-[#a1a5d2] hover:cursor-pointer">
            Lenguajes de programación
        </div>
    </div>

    <div x-show="menuCategoriasNegocios" class="p-3 flex items-center justify-center gap-8 bg-primary text-white text-sm">
        <div class="hover:text-[#a1a5d2] hover:cursor-pointer">
            Emprendimiento
        </div>
        <div class="hover:text-[#a1a5d2] hover:cursor-pointer">
            Comunicación
        </div>
        <div class="hover:text-[#a1a5d2] hover:cursor-pointer">
            Gestión empresarial
        </div>
    </div>

    <div x-show="menuCategoriasFinanzas" class="p-3 flex items-center justify-center gap-8 bg-primary text-white text-sm">
        <div class="hover:text-[#a1a5d2] hover:cursor-pointer">
            Contabilidad y tesorería
        </div>
        <div class="hover:text-[#a1a5d2] hover:cursor-pointer">
            Criptomonedas y Blockchain
        </div>
        <div class="hover:text-[#a1a5d2] hover:cursor-pointer">
            Finanzas
        </div>
    </div>
</div>