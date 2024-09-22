<template>
    <div>
        <header class="bg-indigo-500 text-white">
            <nav class="flex items-center justify-between p-4 max-w-screen-lg mx-auto">
                <div class="space-x-6">
                    <a href="/practice">Practice</a>
                    <a href="/practice/data">Data</a>
                    <a href="/practice/data/alternative">Data Alternative</a>
                    <a href="/json">Json Sample Data</a>
                </div>
            </nav>
        </header>

        <main class="p-4">
            <slot />
        </main>
    </div>
</template>