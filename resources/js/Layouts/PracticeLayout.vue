<script setup>
</script>

<template>
    <div>
        <header class="bg-indigo-500 text-white">
            <nav class="flex items-center justify-between p-4 max-w-screen-lg mx-auto">
                <!-- <h1>{{ $page.props.auth.user.name }}</h1> -->
                <h1>Practice Area</h1>
                <div class="space-x-6">
                    <!-- <Link href="/">Home</Link> -->
                    <Link :href="route('practice')">Practice</Link>
                    <Link :href="route('data')">Data</Link>
                    <Link :href="route('alternative')">Data Alternative</Link>
                    <Link href="/json">Json Sample Data</Link>
                </div>
            </nav>
        </header>

        <main class="p-4">
            <slot />
        </main>
    </div>
</template>