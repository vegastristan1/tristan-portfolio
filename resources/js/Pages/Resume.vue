<script setup>
import { ref, onMounted } from 'vue';
import PortfolioLayout from '@/Layouts/PortfolioLayout.vue';

// Define the layout for this page
defineOptions({ layout: PortfolioLayout });

// Define the words you want to cycle through
const words = ['websites', 'webapps', 'mobile apps', 'UI/UX'];
const currentWord = ref(words[0]);

// Function to rotate the words every second
let wordIndex = 0;
onMounted(() => {
    setInterval(() => {
        wordIndex = (wordIndex + 1) % words.length;
        currentWord.value = words[wordIndex];
    }, 3000);
});
</script>

<template>

    <Head title="About" />
    <div class="p-4 border-2 border-gray-600 border-dashed rounded-lg bg-slate-800">
        <div class="pb-4">
            <div class="mb-5">
                <h1 class="text-2xl font-extrabold leading-none tracking-tight text-gray-200">
                    Resume
                </h1>
                <hr class="w-48 h-1 my-4 border-0 rounded bg-gray-700">
            </div>
        </div>
        <div class="mt-4">
            <div class="">
                <h1 class="text-2xl my-5 font-extrabold leading-none tracking-tight text-gray-200">
                    Education
                </h1>

                <ul class="relative ms-5 pt-4 font-medium border-s border-gray-200">
                    <li class="mb-10 ms-10">
                        <span
                            class="absolute flex items-center justify-center w-8 h-8 bg-red-200 rounded-full -start-4 ring-4 ring-white dark:ring-gray-900 dark:bg-green-900">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                <path fill="#ef4444" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2"
                                    d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9l0 28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5l0-24.6c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z" />
                            </svg>
                        </span>
                        <p class="text-white text-sm italic uppercase">June 2015 - September 2020</p>
                        <h1 class="text-4xl font-extrabold leading-none tracking-tight text-red-600">Bachelor of
                            Science: Information Technology</h1>
                        <span class="text-gray-500 transition duration-75 rounded-lg group">University of Nueca
                            Caceres
                            - J,
                            Hernandez Ave, Naga, Camarines Sur</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="mt-4">
            <div class="border-t">
                <h1 class="text-2xl my-5 font-extrabold leading-none tracking-tight text-gray-200">
                    Experience
                </h1>

                <div>
                    <ul class="relative ms-5 pt-4 font-medium border-s border-gray-200">
                        <li class="mb-10 ms-10">
                            <span
                                class="absolute flex items-center justify-center w-8 h-8 bg-red-200 rounded-full -start-4 ring-4 ring-white dark:ring-gray-900 dark:bg-green-900">
                                <!-- <svg class="w-3.5 h-3.5 text-red-500" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                </svg> -->
                                <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#ef4444"
                                        d="M184 48l144 0c4.4 0 8 3.6 8 8l0 40L176 96l0-40c0-4.4 3.6-8 8-8zm-56 8l0 40L64 96C28.7 96 0 124.7 0 160l0 96 192 0 128 0 192 0 0-96c0-35.3-28.7-64-64-64l-64 0 0-40c0-30.9-25.1-56-56-56L184 0c-30.9 0-56 25.1-56 56zM512 288l-192 0 0 32c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32-14.3-32-32l0-32L0 288 0 416c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-128z" />
                                </svg>
                            </span>
                            <p class="text-white text-sm italic uppercase">July 2022 - March 2024</p>
                            <h1 class="text-4xl font-extrabold leading-none tracking-tight text-red-600">
                                Contract - Full Stack Developer / <span class="text-gray-200">Foxhole QA</span>
                            </h1>
                            <span class="font-medium leading-tight text-gray-200 italic">Austin,
                                Texas,
                                United States</span>
                            <ul class="list-disc text-red-600 pt-4 space-y-2 font-medium border-gray-200">
                                <li class="ms-5">
                                    <span class="text-gray-500 transition duration-75 rounded-lg group">Created and
                                        managed the Foxhole QA website with an admin dashboard for updates on blogs,
                                        featured works, and testimonials.</span>
                                </li>
                                <li class="ms-5">
                                    <span class="text-gray-500 transition duration-75 rounded-lg group">Provided
                                        ongoing
                                        maintenance and support for website functionality</span>
                                </li>
                                <li class="ms-5">
                                    <span class="text-gray-500 transition duration-75 rounded-lg group">Specialized
                                        in
                                        Mobile Development and Data Analytics tasks, Ensuring diverse client needs
                                        were
                                        met effectively</span>
                                </li>
                            </ul>
                        </li>
                        <li class="mb-10 ms-10">
                            <span
                                class="absolute flex items-center justify-center w-8 h-8 bg-red-200 rounded-full -start-4 ring-4 ring-white dark:ring-gray-900 dark:bg-green-900">
                                <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#ef4444"
                                        d="M184 48l144 0c4.4 0 8 3.6 8 8l0 40L176 96l0-40c0-4.4 3.6-8 8-8zm-56 8l0 40L64 96C28.7 96 0 124.7 0 160l0 96 192 0 128 0 192 0 0-96c0-35.3-28.7-64-64-64l-64 0 0-40c0-30.9-25.1-56-56-56L184 0c-30.9 0-56 25.1-56 56zM512 288l-192 0 0 32c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32-14.3-32-32l0-32L0 288 0 416c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-128z" />
                                </svg>
                            </span>
                            <p class="text-sm text-white italic uppercase">April 2021 - June 2022</p>
                            <h1 class="text-4xl font-extrabold leading-none tracking-tight text-red-600">Part Time /
                                <span class="text-gray-200">Freelance</span>
                            </h1>
                            <ul class="list-disc text-red-600 pt-4 space-y-2 font-medium border-gray-200">
                                <li class="ms-5">
                                    <h1 class="text-sm italic uppercase text-gray-200">April 2021 - June 2022</h1>
                                    <h1 class="text-4xl font-extrabold leading-none tracking-tight text-red-600">
                                        Mobile Developer </h1>
                                    <span class="text-gray-500 transition duration-75 rounded-lg group">Creating
                                        Multiplayer for Educational Purposes - Mobile Game.</span>
                                </li>
                                <li class="ms-5">
                                    <h1 class="text-sm italic uppercase text-gray-200">April 2021 - July 2021</h1>
                                    <h1 class="text-4xl font-extrabold leading-none tracking-tight text-red-600">
                                        Web Developer </h1>
                                    <span class="text-gray-500 transition duration-75 rounded-lg group">Create Web
                                        Application for Laundry Shop and Mobile Application.</span>
                                </li>
                            </ul>
                        </li>
                        <li class="mb-10 ms-10">
                            <span
                                class="absolute flex items-center justify-center w-8 h-8 bg-red-200 rounded-full -start-4 ring-4 ring-white dark:ring-gray-900 dark:bg-green-900">
                                <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#ef4444"
                                        d="M184 48l144 0c4.4 0 8 3.6 8 8l0 40L176 96l0-40c0-4.4 3.6-8 8-8zm-56 8l0 40L64 96C28.7 96 0 124.7 0 160l0 96 192 0 128 0 192 0 0-96c0-35.3-28.7-64-64-64l-64 0 0-40c0-30.9-25.1-56-56-56L184 0c-30.9 0-56 25.1-56 56zM512 288l-192 0 0 32c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32-14.3-32-32l0-32L0 288 0 416c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-128z" />
                                </svg>
                            </span>
                            <p class="text-sm text-white italic uppercase">April 2018 - July 2018</p>
                            <h1 class="text-4xl font-extrabold leading-none tracking-tight text-red-600">On the Job
                                Training / <span class="text-gray-200">Tokyo System Solutions</span></h1>
                            <span class="font-medium leading-tight italic text-gray-200">Unit 205, Citrine
                                Building, Magsaysay Ave, Naga
                                City</span>
                            <ul class="list-disc text-red-600 pt-4 space-y-2 font-medium border-gray-200">
                                <li class="ms-5">
                                    <span class="text-gray-500 transition duration-75 rounded-lg group">Create a
                                        Human
                                        Resource and Web Application that can be used for other companies.</span>
                                </li>
                                <li class="ms-5">
                                    <span class="text-gray-500 transition duration-75 rounded-lg group">Learning an
                                        Angular Framework for the Web Application.</span>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <!-- <ul
                        class="relative ms-8 text-gray-500 border-s border-gray-200 dark:border-gray-700 dark:text-gray-400">
                        <li class="mb-10 ms-6">
                            <span
                                class="absolute flex items-center justify-center w-8 h-8 bg-red-200 rounded-full -start-4 ring-4 ring-white dark:ring-gray-900 dark:bg-green-900">
                                <svg class="w-3.5 h-3.5 text-red-500" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                </svg>
                            </span>
                            <h3 class="font-medium leading-tight">Personal Info</h3>
                            <p class="text-sm">Step details here</p>
                        </li>
                        <li class="mb-10 ms-6">
                            <span
                                class="absolute flex items-center justify-center w-8 h-8 bg-red-200 rounded-full -start-4 ring-4 ring-white dark:ring-gray-900 dark:bg-green-900">
                                <svg class="w-3.5 h-3.5 text-red-500" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                </svg>
                            </span>
                            <h3 class="font-medium leading-tight">Personal Info</h3>
                            <p class="text-sm">Step details here</p>
                        </li>

                    </ul> -->
                </div>
            </div>
        </div>
    </div>
</template>