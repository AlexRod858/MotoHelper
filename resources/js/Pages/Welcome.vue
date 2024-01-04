<script setup>
import { Head, Link } from '@inertiajs/vue3';
import ApplicationLogo from '/resources/js/Components/ApplicationLogo.vue'

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <Head title="Welcome" />


    <div
        class="relative min-h-screen bg-dots-darker dark:bg-dots-lighter dark:bg-gray-900 selection:text-white bg-center bg-cover bg-no-repeat bg-[url('https://cdn.motor1.com/images/mgl/2o0Z4/s3/cover.jpg')] bg-gray-700 bg-blend-multiply h-screen">

        <div class="flex justify-between items-center bg-primary p-4">
            <!-- Logo -->
            <div class="flex items-center">
                <ApplicationLogo class="w-12 h-12" /> <!-- Ajusta el tamaño según tus necesidades -->
            </div>

            <!-- Navbar (Login y Register) -->
            <div v-if="canLogin" class="ml-auto text-end">
                <Link v-if="$page.props.auth.user" :href="route('dashboard')"
                    class="font-semibold text-cuarty hover:text-orange-300 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-1 focus:rounded-sm ">
                Dashboard
                </Link>

                <template v-else>
                    <Link :href="route('login')"
                        class="font-semibold text-cuarty hover:text-orange-300 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-1 focus:rounded-sm">
                    Entrar
                    </Link>

                    <Link v-if="canRegister" :href="route('register')"
                        class="ms-4 font-semibold text-cuarty hover:text-orange-300 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-1 focus:rounded-sm">
                    Registro
                    </Link>
                </template>
            </div>
        </div>

        <!-- Contenido adicional -->
        <section>
            <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
                <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-normal text-cuarty md:text-5xl lg:text-6xl">Conectando Pasiones, Reparando Historias</h1>
                <p class="mb-8 text-lg font-normal leading-normal text-terciary lg:text-xl sm:px-16 lg:px-48">Encuentra tu Moto, Descubre sus Secretos, y Rueda hacia Soluciones
                </p>
                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                    <a href="#"
                        class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-cuarty rounded-lg bg-primary hover:bg-secondary focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                        Comenzar
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                    <a href="#"
                        class="inline-flex justify-center items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-terciary rounded-lg border border-cuarty hover:bg-secondary hover:text-cuarty focus:ring-4 focus:ring-gray-400">
                        Entra
                    </a>
                </div>
        </div>
    </section>

</div></template>

