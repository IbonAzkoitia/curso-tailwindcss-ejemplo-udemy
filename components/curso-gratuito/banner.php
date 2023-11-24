<div x-data="{modal: false}">
    <div class="container">
        <div class="p-6 bg-[#2d2f31] text-white flex justify-between items-center">
            <div>
                <h2 class="mb-2 text-2xl">
                    Las principales empresas confían en Udemy
                </h2>
                <p class="text-gray-200">
                    Da acceso a tu equipo a los 25.000+ mejores cursos de Udemy
                </p>
            </div>

            <div>
                <a href="#" class="bg-white hover:bg-gray-200 px-3 py-4 font-semibold text-primary">
                    Prueba Udemy Business
                </a>
            </div>
        </div>

        <div class="my-12 text-center">
            <button @click="modal = ! modal" class="text-udemy-dark font-semibold text-sm">
                Notificar uso indebido
            </button>
        </div>
    </div>

    <!-- Modal Login -->
    <div x-show="modal"
        class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-gray-800 bg-opacity-90 transition-opacity"></div>

        <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <div class="relative transform overflow-hidden bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-md sm:p-6"
                     @click.outside="modal = false">
                    <div class="mb-4 flex justify-between items-center">
                        <div class="font-semibold">
                            Inicia sesión en tu cuenta de Udemy
                        </div>
                        <svg @click="modal = false" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 hover:cursor-pointer">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>

                    </div>

                    <div class="mb-2 text-center">
                        <img src="https://img-b.udemycdn.com/user/50x50/131604324_2b8b.jpg" alt="" class="w-16 h-auto mb-2 rounded-full border border-gray-300 mx-auto">
                        <div class="text-sm text-gray-600">
                            Hola de nuevo, Ibon
                        </div>
                    </div>

                    <form action="#" class="mb-4 w-full block">
                        <input type="password" placeholder="Contraseña" class="mb-3 w-full border border-primary p-4 placeholder:text-primary placeholder:font-semibold placeholder:text-sm">

                        <button type="submit" class="py-3 w-full bg-udemy-light text-white font-semibold text-center">
                            Iniciar sesión
                        </button>
                    </form>

                    <div class="text-center">
                        o <a href="#" class="text-udemy hover:text-udemy-dark underline font-semibold">He olvidado la contraseña</a>
                    </div>

                    <hr class="my-4">

                    <div class="text-center">
                        <div>
                            <a href="#" class="text-udemy hover:text-udemy-dark underline font-semibold">
                                Iniciar sesión en una cuenta diferente
                            </a>
                        </div>
                        <div>
                            ¿No tienes una cuenta?
                            <a href="#" class="text-udemy hover:text-udemy-dark underline font-semibold">
                                Regístrate
                            </a>
                        </div>
                        <div>
                            <a href="#" class="text-udemy hover:text-udemy-dark underline font-semibold">
                                Inicia sesión con tu organización
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Modal Login -->

</div>