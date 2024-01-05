<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>

        <div class="grid grid-cols-4">
            <!-- Columna del menú vertical más delgada -->
            <section class="flex items-center justify-center bg-blue-200">

                <form class=" p-4 ">
                    <div class="space-y-12">


                        <div class="border-b border-gray-900/10 pb-12">
                            <h1 class="text-3xl font-semibold leading-7 text-gray-900">Buscador</h1>
                            <div class="">
                                <!-- ---------------------------------- -->

                                <div class="mt-5">
                                    <label for="country"
                                        class="block text-sm font-medium leading-6 text-gray-900">Marca</label>
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
                                    <label for="country" class=" text-sm font-medium leading-6 text-gray-900">Modelo</label>
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
                                    class="w-full rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Buscar</button>
                            </div>
                        </div>
                        <!-- ----------------------- -->
                        <!-- ----------------------- -->
                        <div class="border-b border-gray-900/10 pb-8">

                            <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Camina un paso por delante:</h2>
                            <ul class="max-w-md space-y-1 text-gray-500 list-inside dark:text-gray-400">
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
                                    <svg class="w-3.5 h-3.5 me-2 text-gray-500 dark:text-gray-400 flex-shrink-0"
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
                            <h2 class="text-base font-semibold leading-7 text-gray-900">Notificaciones</h2>
                            <p class="mt-1 text-sm leading-6 text-gray-600">Te hremos saber cada vez que la base de datos se
                                actualice.</p>

                            <div class="mt-4 space-y-10">
                                <fieldset>
                                    <div class="mt-6 space-y-6">
                                        <div class="relative flex gap-x-3">
                                            <div class="flex h-6 items-center">
                                                <input id="offers" name="offers" type="checkbox"
                                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                            <div class="text-sm leading-6">
                                                <label for="offers" class="font-medium text-gray-900">Email</label>
                                                <p class="text-gray-500">Entérate cada vez que una nueva solución a un
                                                    problema aparezca.</p>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <button type="submit"
                            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Guardar</button>
                    </div>
                </form>

        </section>

        <!-- Columna más ancha -->
        <section class="col-span-3 bg-green-500"></section>
    </div>
</AuthenticatedLayout></template>
