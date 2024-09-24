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
                    About Me
                </h1>
                <hr class="w-48 h-1 my-4 border-0 rounded bg-gray-700">
            </div>

            <div class="my-6">
                <h1 class="text-5xl font-bold text-gray-200">
                    Hi! My name is
                </h1>
                <h1 class="text-7xl font-extrabold text-gray-300">
                    Tristan Vegas. <br>
                    I develop <span class="text-red-600 font-extrabold">{{ currentWord }}</span>.
                </h1>
            </div>


            <p class="text-xl text-gray-300 mb-3">
                I'm a graduate of BS in Information Technology, with hands-on experience in web development,
                technical support, and infrastructure management. Most of my work has been centered around creating
                dynamic websites for clients, with a focus on building and maintaining solutions that are both
                functional and user-centered.
            </p>
            <p class="text-xl text-gray-300">
                One of my key projects involved setting up a CMS that allowed clients to manage their websites
                independently, reducing their reliance on external support. I’m passionate about developing seamless
                web solutions, and I thrive in collaborative environments where I can both learn from others and
                share my expertise.
            </p>
        </div>
        <div class="mt-4">
            <div class="mb-5">
                <h1 class="text-2xl font-extrabold leading-none tracking-tight text-gray-200">
                    What I'm Doing
                </h1>
                <hr class="w-48 h-1 my-4 border-0 rounded bg-gray-700">
            </div>

            <div class="grid grid-cols-3 gap-4 mb-4">
                <a href="#"
                    class="flex flex-col items-center bg-slate-700 border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-700 ">
                    <img class="object-cover w-28 rounded-t-lg h-28 p-4 invert" src="storage/icons/user-interface.png"
                        alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-300 ">Web Design
                        </h5>
                        <p class="mb-3 font-normal text-gray-400">
                            Designing intuitive and modern websites using Figma and Adobe XD, ensuring that the user
                            experience (UX) and user interface (UI) align with client goals.</p>
                        <span class="text-gray-300">Tools: Figma, Adobe XD, Tailwind CSS</span>
                    </div>
                </a>

                <a href="#"
                    class="flex flex-col items-center bg-slate-700 border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-700 ">
                    <img class="object-cover w-28 rounded-t-lg h-28 p-4 invert" src="storage/icons/coding.png" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-300">Web
                            Development</h5>
                        <p class="mb-3 font-normal text-gray-400 dark:text-gray-400">
                            Building scalable and dynamic websites using Laravel, Vue.js, and Node.js, focusing on
                            performance optimization and efficient server-side logic.</p>
                        <span class="text-gray-300">Technologies: Laravel, Vue.js, Node.js</span>
                    </div>
                </a>

                <a href="#"
                    class="flex flex-col items-center bg-slate-700 border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-700 ">
                    <img class="object-cover w-28 rounded-t-lg h-28 p-4 invert"
                        src="storage/icons/mobile-application.png" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-300">Mobile
                            Development</h5>
                        <p class="mb-3 font-normal text-gray-400 dark:text-gray-400">
                            Creating responsive mobile-first applications that adapt seamlessly across devices using
                            modern web technologies.</p>
                        <span class="text-gray-300">Technologies: React Native, Progressive Web Apps</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</template>