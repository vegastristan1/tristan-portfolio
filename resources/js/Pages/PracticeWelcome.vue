<script setup>
</script>

<template>

    <Head title="Practice" />
    <!-- <Head :title="' | $page.component'"></Head> --> <!-- Here's the example of page.component -->

    <h1 class="font-semibold text-xl bg-red-600">Sample</h1>
    <h2>This was the Practice Component</h2>

    <h1>{{ $page.component }}</h1> <!-- this can also use to get the file name and as the title page  -->

    <h1>{{ $page.props.practice_user }}</h1>

    <Link class="mt-[600px] block" href="/practice" preserve-scroll>Refresh</Link>
    <!-- the preserve-scroll helps the user to pause view position if submitting form that push back to the top of the page -->
</template>