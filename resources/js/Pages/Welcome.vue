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
        class="relative min-h-screen bg-dots-darker bg-center bg-orange-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white ">

        <div class="sm:flex sm:justify-between sm:items-center bg-yellow-950 p-4">
            <!-- Logo -->
            <div class="flex items-center mb-4 sm:mb-0">
                <ApplicationLogo class="w-12 h-12" /> <!-- Ajusta el tamaño según tus necesidades -->
            </div>

            <!-- Navbar (Login y Register) -->
            <div v-if="canLogin" class="sm:ml-auto text-end">
                <Link v-if="$page.props.auth.user" :href="route('dashboard')"
                    class="font-semibold text-orange-100 hover:text-orange-300 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-1 focus:rounded-sm ">
                Dashboard
                </Link>

                <template v-else>
                    <Link :href="route('login')"
                        class="font-semibold text-orange-100 hover:text-orange-300 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-1 focus:rounded-sm">
                    Log in
                    </Link>

                    <Link v-if="canRegister" :href="route('register')"
                        class="ms-4 font-semibold text-orange-100 hover:text-orange-300 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-1 focus:rounded-sm">
                    Register
                    </Link>
                </template>
            </div>
        </div>

        <!-- Contenido adicional -->
        <div class="flex text-center p-4">
            <!-- --------------- -->
            <div class="w-full max-w-xs">
                <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Moto
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="username" type="text" placeholder="Kawasaki">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                            Modelo
                        </label>
                        <input
                            class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                            id="password" type="text" placeholder="Ninja">
                    </div>
                    <div class="flex items-center justify-center">
                            <button
                                class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                                type="button">
                                Sign Up
                            </button>
                    </div>
                </form>
            </div>
            <!-- ---------------- -->
            <div class="w-1/2 p-4">
                <h1>Hola Mundo</h1>
            </div>
        </div>

    </div>
</template>

