<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div>
        <header class="bg-indigo-500 text-white">
            <nav class="flex items-center justify-between p-4 max-w-screen-lg mx-auto">
                <div class="space-x-6">
                    <Link href="/">Home</Link>
                    <Link href="/practice">Practice</Link>
                    <Link href="/practice/data">Data</Link>
                    <Link href="/practice/data/alternative">Data Alternative</Link>
                    <Link href="/json">Json Sample Data</Link>
                </div>
            </nav>
        </header>

        <main class="p-4">
            <slot />
        </main>
    </div>
</template>