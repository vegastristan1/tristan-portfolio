<script setup>
import { ref } from 'vue';
import SideBarNavigation from '@/Components/SideBarNavigation.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';


const showingNavigationDropdown = ref(false);
</script>

<template>
    <!-- sm:ml-64 lg:ps-10-->
    <div class="p-4 lg:ml-72 lg:ps-7">
        <nav class="border-gray-200 bg-slate-800 rounded-lg mb-2">
            <div class="flex flex-wrap items-center justify-between p-4">
                <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">
                        < />
                    </span>
                </a>

                <button @click="showingNavigationDropdown = !showingNavigationDropdown"
                    data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg 
                    md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200
                     dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default"
                    aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{
                            hidden: showingNavigationDropdown,
                            'inline-flex': !showingNavigationDropdown,
                        }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{
                            hidden: !showingNavigationDropdown,
                            'inline-flex': showingNavigationDropdown,
                        }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <div :class="{ block: showingNavigationDropdown, hidden: !showingNavigationDropdown }"
                    class="w-full md:block md:w-auto text-center" id="navbar-default">
                    <ul
                        class="text-xl font-bold flex flex-col items-center p-4 md:p-0 mt-4 border-0 rounded-lg  md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 sm:border-0 md:border-0 lg:border-0 bg-slate-800 border-gray-700">
                        <li>
                            <Link :href="route('about')" :class="{
                                'block py-2 px-3  rounded md:bg-transparent md:p-0 text-red-600': route().current('about'),
                                'block py-2 px-3 text-white rounded hover:bg-transparent md:border-0 hover:text-red-600 md:p-0': !route().current('about')
                            }" aria-current="page">About</Link>
                        </li>
                        <li>
                            <Link :href="route('resume')" :class="{
                                'block py-2 px-3 rounded md:bg-transparent md:p-0 text-red-600': route().current('resume'),
                                'block py-2 px-3 text-white rounded hover:bg-transparent md:border-0 hover:text-red-600 md:p-0': !route().current('resume')
                            }" aria-current="page">Resume</Link>
                        </li>
                        <!-- <li>
                            <Link href="/Portfolio"
                                class="block py-2 px-3 rounded hover:bg-transparent md:border-0 hover:text-red-600 md:p-0 text-white hover:bg-gray-700">
                            Portfolio</Link>
                        </li> -->
                        <!-- <li>
                            <Link href="/Blog"
                                class="block py-2 px-3 rounded hover:bg-transparent md:border-0 hover:text-red-600 md:p-0 text-white hover:bg-gray-700">
                            Blog</Link>
                        </li> -->
                        <!-- <li>
                            <a href="#"
                                class="block py-2 px-3 rounded hover:bg-transparent md:border-0 hover:text-red-600 md:p-0 text-white hover:bg-gray-700">Contact</a>
                        </li> -->
                        <li>
                            <a :href="route('download.cv')"
                                class="block py-2 px-3 rounded border border-1 border-red-600 bg-red-600 hover:border-white hover:bg-white hover:text-red-600 md:py-2 text-white">Download</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">

            <!-- Sidebar navigation -->
            <aside id="separator-sidebar" class="sm:relative lg:fixed top-0 left-0 bottom-0 z-40 sm:w-auto sm:h-auto md:w-auto md:h-auto lg:w-72 lg:h-auto transition-transform sm:translate-x-0 
                lg:m-4">
                <SideBarNavigation />
            </aside>

            <slot />
        </main>
    </div>
</template>