<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="bg-cuarty">
            <div class="grid grid-cols-4 container mx-auto">
                <!-- Columna del menú vertical más delgada -->
                <section class="flex items-center justify-center bg-primary">

                    <form class=" p-4 ">
                        <div class="space-y-12">


                            <div class="border-b border-gray-900/10 pb-12">
                                <h1 class="text-3xl font-semibold leading-7 text-white">Buscador</h1>
                                <div class="">
                                    <!-- ---------------------------------- -->

                                    <div class="mt-5">
                                        <label for="country"
                                            class="block text-sm font-medium leading-6 text-cuarty">Marca</label>
                                        <div class="">
                                            <select id="marca" name="marca"
                                                class=" w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600">
                                                <option>Aprilia</option>
                                                <option>Honda</option>
                                                <option>Suzuki</option>
                                                <option>Yamaha</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- ----------------------------------------- -->
                                    <div class="mt-5">
                                        <label for="country"
                                            class=" text-sm font-medium leading-6 text-cuarty">Modelo</label>
                                        <div class="mt-2 w-full">
                                            <select id="modelo" name="country"
                                                class=" w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600">
                                                <option>cbr 650</option>
                                                <option>V-Strom 650</option>
                                                <option>Crf 300</option>
                                                <option>Agility 125</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- ----------------------------------------- -->

                                </div>
                                <div class="mt-6">
                                    <button type="submit"
                                        class="w-full rounded-md bg-secondary px-3 py-2 text-sm font-semibold text-cuarty shadow-sm hover:bg-cuarty hover:text-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Buscar</button>
                                </div>
                            </div>
                            <!-- ----------------------- -->
                            <!-- ----------------------- -->
                            <div class="border-b border-gray-900/10 pb-8">

                                <h2 class="mb-2 text-lg font-semibold text-terciary dark:text-white">Camina un paso por
                                    delante:
                                </h2>
                                <ul class="max-w-md space-y-1 text-cuarty list-inside dark:text-gray-400">
                                    <li class="flex items-center">
                                        <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        Los problemas más comúnes
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        Respaldado por la comunidad
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        Actualizaciones frecuentes
                                    </li>
                                </ul>

                            </div>

                            <!-- ----------------------- -->
                            <!-- ----------------------- -->
                            <div class="border-b border-gray-900/10 pb-12">
                                <h2 class="text-base font-semibold leading-7 text-terciary">Notificaciones</h2>
                                <p class="mt-1 text-sm leading-6 text-cuarty">Te haremos saber cada vez que la base de
                                    datos
                                    se
                                    actualice.</p>

                                <div class="mt-4 space-y-10">
                                    <fieldset>
                                        <div class="mt-6 space-y-6">
                                            <div class="relative flex gap-x-3">
                                                <div class="flex h-6 items-center">
                                                    <input id="offers" name="offers" type="checkbox"
                                                        class="h-4 w-4 rounded border-gray-300 text-terciary focus:ring-indigo-600">
                                                </div>
                                                <div class="text-sm leading-6">
                                                    <label for="offers" class="font-medium text-terciary">Email</label>
                                                    <p class="text-cuarty">Entérate cada vez que una nueva solución
                                                        aparezca.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <button type="submit"
                                class="rounded-md bg-secondary px-3 py-2 text-sm font-semibold text-cuarty shadow-sm hover:bg-cuarty hover:text-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Guardar</button>
                        </div>
                    </form>

                </section>
                <!-- ---------------------------------- -->
                <!-- Columna más ancha -->
                <section class="col-span-3 bg-terciary pt-8">
                    <div class="grid grid-cols-4 gap-4 justify-center">
                        <a href="">
                            <img src="https://cdn.iconscout.com/icon/free/png-256/free-harley-2-282286.png" alt="Imagen 1"
                                class="w-48 h-auto mx-auto">
                        </a>
                        <a href="">
                            <img src="https://cdn.iconscout.com/icon/free/png-256/free-ducati-282176.png" alt="Imagen 2"
                                class="w-48 h-auto mx-auto pt-6">
                        </a>
                        <a href="">
                            <img src="https://www.sauto.cz/static/img/logos/motorky/aprilia.png" alt="Imagen 3"
                                class="w-48 h-auto mx-auto">
                        </a>
                        <a href="">
                            <img src="https://logospng.org/download/triumph-motor-company/triumph-256.png" alt="Imagen 1"
                                class="w-48 h-auto mx-auto">
                        </a>
                        <a href="">
                            <img src="https://cdn.iconscout.com/icon/free/png-256/free-bmw-5-202750.png" alt="Imagen 2"
                                class="w-48 h-auto mx-auto">
                        </a>
                        <a href="">
                            <img src="https://cdn.iconscout.com/icon/free/png-256/free-yamaha-282153.png?f=webp"
                                alt="Imagen 3" class="w-48 h-auto mx-auto">
                        </a>
                        <a href="">
                            <img src="https://i.pinimg.com/originals/96/9e/15/969e15b1428e5584482e0129096bb6f2.png"
                                alt="Imagen 1" class="w-48 h-auto mx-auto">
                        </a>
                        <a href="">
                            <img src="https://cdn.iconscout.com/icon/free/png-256/free-suzuki-1-282411.png?f=webp"
                                alt="Imagen 2" class="w-48 h-auto mx-auto">
                        </a>
                        <a href="">
                            <img src="https://i.pinimg.com/originals/49/b1/30/49b13031bfb1770e4b88586eb8e4cb89.png"
                                alt="Imagen 3" class="w-48 h-auto mx-auto">
                        </a>
                        <a href="">
                            <img src="https://images.crunchbase.com/image/upload/c_lpad,h_256,w_256,f_auto,q_auto:eco,dpr_1/gpkccfvcnbfq4k1um7wx"
                                alt="Imagen 3" class="w-48 h-auto mx-auto">
                        </a>
                        <a href="">
                            <img src="https://www.sauto.cz/static/img/logos/ctyrkolky/kymco.png" alt="Imagen 3"
                                class="w-48 h-auto mx-auto">
                        </a>
                        <a href="">
                            <img src="https://styles.redditmedia.com/t5_2gmuuj/styles/communityIcon_ip30ftzo3wj41.png"
                                alt="Imagen 3" class="w-48 h-auto mx-auto">
                        </a>
                    </div>
                </section>
            </div>
        </div>
</AuthenticatedLayout></template>
