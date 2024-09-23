<script setup>
import { onMounted, ref, watch } from 'vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PaginationLinks from '@/Components/PaginationLinks.vue';
import { router } from '@inertiajs/vue3';
import { throttle } from 'lodash'; //every type
import { debounce } from 'lodash'; //after type

const props = defineProps({
    users: Object,
    searchTerm: String,
    canDelete: Object
})

const search = ref(props.searchTerm);

watch(search, debounce(
    (q) => router.get("/dashboard", { search: q }, { preserveState: true }), 500)
);

const getDate = (date) =>
    new Date(date).toLocaleDateString('en-us', {
        year: "numeric",
        month: "long",
        day: "numeric",
    })

// Hide the flash message after 3 seconds
onMounted(() => {
    setTimeout(() => {
        const flashMessage = document.getElementById('flashMessage');
        if (flashMessage) {
            flashMessage.style.display = 'none';
        }
    }, 3000); // 3000ms = 3 seconds
});
</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <div v-if="$page.props.flash.message" id="flashMessage">
            <p class="p-4 bg-green-200">{{ $page.props.flash.message }}</p>
        </div>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">You're logged in!</div>
                </div>
            </div>
        </div>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-x-auto">
                    <div class="flex justify-end mb-4">
                        <div class="w-1/4">
                            <input type="search" placeholder="Search" v-model="search" />
                        </div>
                    </div>

                    <table class="min-w-full bg-white border border-gray-200">
                        <thead>
                            <tr class="bg-gray-200 text-left">
                                <th class="px-6 py-3 text-gray-700">Avatar</th>
                                <th class="px-6 py-3 text-gray-700">Name</th>
                                <th class="px-6 py-3 text-gray-700">Email</th>
                                <th class="px-6 py-3 text-gray-700">Registration Date</th>
                                <th class="px-6 py-3 text-gray-700" v-if="canDelete.delete_user">Delete</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="border-b" v-for="user in users.data" :key="user.id">
                                <td class="px-6 py-4">
                                    <img :src="user.avatar ? ('storage/' + user.avatar) : 'storage/avatars/majinbuu1.jpg'"
                                        alt="" class="w-10 h-10 rounded-full">
                                </td>
                                <td class="px-6 py-4">{{ user.name }}</td>
                                <td class="px-6 py-4">{{ user.email }}</td>
                                <td class="px-6 py-4">{{ getDate(user.created_at) }}</td>
                                <td class="px-6 py-4" v-if="canDelete.delete_user">
                                    <button class="bg-red-500 w-6 h-6 rounded-full"></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination Links -->
                <div class="mt-4">
                    <!-- Pagination elements go here -->
                    <PaginationLinks :paginator="users" />
                </div>
            </div>
        </div>

    </AuthenticatedLayout>
</template>
