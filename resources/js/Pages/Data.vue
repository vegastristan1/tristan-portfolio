<script setup>
    import { Head } from '@inertiajs/vue3';
    defineProps({
        user: String
    })
    // this will handle the @param of the web.php component array that will define at $props

    import Demo from '@/Layouts/DemoLayout.vue';

    defineOptions({layout: Demo});
</script>

<template>
     <Head title="Data" />

    <div>
        <h1 class="bg-blue-600">Sample Data</h1>
        <p>This data sample will show how to send the data user here in data.vue page</p>
        <h4>Data: {{ user }}</h4>
    </div>
</template>