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
                <h1 class="text-2xl font-extrabold leading-none tracking-tight text-gray-200">
                    Education
                </h1>

                <ul class="list-disc text-white pt-4 space-y-2 font-medium border-gray-200">
                    <li class="ms-5">
                        <p class="italic">June 2015 - September 2020</p>
                        <h1 class="text-4xl font-extrabold leading-none tracking-tight text-red-600">Bachelor of
                            Science: Information Technology</h1>
                        <span class="text-gray-500 transition duration-75 rounded-lg group">University of Nueca Caceres
                            - J,
                            Hernandez Ave, Naga, Camarines Sur</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="mt-4">
            <div class="border-t">
                <h1 class="text-2xl mt-5 font-extrabold leading-none tracking-tight text-gray-200">
                    Experience
                </h1>

                <div>
                    <ul class="list-disc text-white ms-5 pt-4 space-y-2 font-medium border-gray-200">
                        <li class="mb-5">
                            <h1 class="italic">July 2022 - March 2024</h1>
                            <h1 class="text-4xl font-extrabold leading-none tracking-tight text-red-600">
                                Contract - Full Stack Developer / <span class="text-gray-200">Foxhole QA, Austin, Texas,
                                    United States</span>
                            </h1>
                            <ul class="list-disc text-red-600 pt-4 space-y-2 font-medium border-gray-200">
                                <li class="ms-5">
                                    <span class="text-gray-500 transition duration-75 rounded-lg group">Created and
                                        managed the Foxhole QA website with an admin dashboard for updates on blogs,
                                        featured works, and testimonials.</span>
                                </li>
                                <li class="ms-5">
                                    <span class="text-gray-500 transition duration-75 rounded-lg group">Provided ongoing
                                        maintenance and support for website functionality</span>
                                </li>
                                <li class="ms-5">
                                    <span class="text-gray-500 transition duration-75 rounded-lg group">Specialized in
                                        Mobile Development and Data Analytics tasks, Ensuring diverse client needs were
                                        met effectively</span>
                                </li>
                            </ul>
                        </li>
                        <li class="mb-5">
                            <h1 class="italic">April 2021 - June 2022</h1>
                            <h1 class="text-4xl font-extrabold leading-none tracking-tight text-red-600">Part Time /
                                Mobile Developer / Web Developer <span class="text-gray-200">Freelance</span></h1>
                            <ul class="list-disc text-red-600 pt-4 space-y-2 font-medium border-gray-200">
                                <li class="ms-5">
                                    <h1 class="text-gray-200">April 2021 - June 2022</h1>
                                    <span class="text-gray-500 transition duration-75 rounded-lg group">Creating
                                        Multiplayer for Educational Purposes - Mobile Game.</span>
                                </li>
                                <li class="ms-5">
                                    <h1 class="text-gray-200">April 2021 - July 2021</h1>
                                    <span class="text-gray-500 transition duration-75 rounded-lg group">Create Web
                                        Application for Laundry Shop and Mobile Application.</span>
                                </li>
                            </ul>
                        </li>
                        <li class="mb-5">
                            <h1 class="italic">April 2018 - July 2018</h1>
                            <h1 class="text-4xl font-extrabold leading-none tracking-tight text-red-600">On the Job
                                Training / <span class="text-gray-200">Tokyo System Solutions, Unit 205, Citrine
                                    Building, Magsaysay Ave, Naga
                                    City</span></h1>
                            <ul class="list-disc text-red-600 pt-4 space-y-2 font-medium border-gray-200">
                                <li class="ms-5">
                                    <span class="text-gray-500 transition duration-75 rounded-lg group">Create a Human
                                        Resource and Web Application that can be used for other companies.</span>
                                </li>
                                <li class="ms-5">
                                    <span class="text-gray-500 transition duration-75 rounded-lg group">Learning an
                                        Angular Framework for the Web Application.</span>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <ul class="connected-list space-y-6">
            <li class="relative pl-6">
                <span class="inline-block">Item 1</span>
                <ul class="pl-4">
                    <li class="relative pl-6">Subitem 1.1</li>
                    <li class="relative pl-6">Subitem 1.2</li>
                </ul>
            </li>
            <li class="relative pl-6">
                <span class="inline-block">Item 2</span>
                <ul class="pl-4">
                    <li class="relative pl-6">Subitem 2.1</li>
                    <li class="relative pl-6">Subitem 2.2</li>
                </ul>
            </li>
            <li class="relative pl-6">
                <span class="inline-block">Item 3</span>
                <ul class="pl-4">
                    <li class="relative pl-6">Subitem 3.1</li>
                    <li class="relative pl-6">Subitem 3.2</li>
                </ul>
            </li>
        </ul>

    </div>
</template>